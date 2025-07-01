<?php

App::uses('AppController', 'Controller');

/**
 * Projects Controller
 *
 * @property Project $Project
 * @property PaginatorComponent $Paginator
 */
class ProjectsController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Uploader');

    public function beforeFilter() {
        parent::beforeFilter();

        $this->Auth->allow(array('project_view', 'project_details'));
    }

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Project->recursive = 0;

        $conditions = array();
        if (!empty($this->request->data['Src']['product_id'])) {
            $conditions[] = array("Product.product_id" => $this->request->data['Src']['product_id']);
        }
        if (!empty($this->request->data['Src']['df'])) {
            $conditions[] = array("Project.start_date >= " => $this->request->data['Src']['df']);
        }
        if (!empty($this->request->data['Src']['dt'])) {
            $conditions[] = array("Project.end_date <= " => $this->request->data['Src']['dt']);
        }
        $this->Paginator->settings = array('conditions' => $conditions, 'order' => array('Project.id' => 'DESC'));

        $this->set('projects', $this->Paginator->paginate());

        $products = $this->Project->Product->find('list');
        $this->set(compact('products'));
    }

    public function project_view() {
        $this->layout = 'public';
        
        $this->set('projects', $this->Project->find('all', array('conditions' => array('Project.status' => E_ERROR, 'Product.is_public' => E_ERROR))));
    }

    public function project_details($id = null) {
        $this->layout = 'public';
        if (!$this->Project->exists($id)) {
            throw new NotFoundException(__('Invalid Project'));
        }
        $options = array('conditions' => array('Project.' . $this->Project->primaryKey => $id));
        $this->set('project', $this->Project->find('first', $options));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Project->exists($id)) {
            throw new NotFoundException(__('Invalid project'));
        }
        $options = array('conditions' => array('Project.' . $this->Project->primaryKey => $id));
        $this->set('project', $this->Project->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Project->create();
            if ($this->Project->save($this->request->data)) {
                $pid = $this->Project->getInsertID();
                $this->Uploader->uploadImage($this->request->data['Project']['image'], $pid, 'pj', 0, 600);
                $this->Uploader->uploadImage($this->request->data['Project']['image'], $pid . 't', 'pj', 0, 390);
                $this->Flash->success(__('The project has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The project could not be saved. Please, try again.'));
            }
        }
        $products = $this->Project->Product->find('list');
        $clients = $this->Project->Client->find('list');
        $employees = $this->Project->Employee->find('list');
        $contractors = $this->Project->Contractor->find('list');
        $this->set(compact('products', 'clients', 'employees', 'contractors'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Project->exists($id)) {
            throw new NotFoundException(__('Invalid project'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Project->save($this->request->data)) {
                $this->Uploader->uploadImage($this->request->data['Project']['image'], $id, 'pj', 0, 600);
                $this->Uploader->uploadImage($this->request->data['Project']['image'], $id . 't', 'pj', 0, 390);
                $this->Flash->success(__('The project has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The project could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Project.' . $this->Project->primaryKey => $id));
            $this->request->data = $this->Project->find('first', $options);
        }
        if (is_file($this->Uploader->uploadDir('pj', $id))) {
            $this->set('img', 'pj/' . $id . ".png");
        }

        $products = $this->Project->Product->find('list');
        $clients = $this->Project->Client->find('list');
        $employees = $this->Project->Employee->find('list');
        $contractors = $this->Project->Contractor->find('list');
        $this->set(compact('products', 'clients', 'employees', 'contractors'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Project->id = $id;
        if (!$this->Project->exists()) {
            throw new NotFoundException(__('Invalid project'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Project->delete()) {
            $this->Flash->success(__('The project has been deleted.'));
        } else {
            $this->Flash->error(__('The project could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    /**
     * ajax_project_details
     *
     * @throws NotFoundException
     * @param string $username
     * @return void
     */
    public function ajax_project_details() {
        $this->layout = 'ajax';

        $this->Project->recursive = -1;
        $project = $this->Project->find('first', array('conditions' => array('Project.id' => $this->request->data('project_id')), 'recursive' => -1));

        $this->set('project', $project);
    }

}
