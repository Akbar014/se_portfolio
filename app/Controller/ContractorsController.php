<?php

App::uses('AppController', 'Controller');

/**
 * Contractors Controller
 *
 * @property Contractor $Contractor
 * @property PaginatorComponent $Paginator
 */
class ContractorsController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Uploader');

    public function beforeFilter() {
        $this->Auth->allow(array('contractor_view'));

        parent::beforeFilter();
    }

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Contractor->recursive = 0;

        $conditions = array();
        if (!empty($this->request->data['Src']['nm'])) {
            $conditions[] = array("Contractor.name LIKE '%" . $this->request->data['Src']['nm'] . "%'");
        }

        if (!empty($this->request->data['Src']['df'])) {
            $conditions[] = array("Contractor.created >= " => $this->request->data['Src']['df']);
        }
        if (!empty($this->request->data['Src']['dt'])) {
            $conditions[] = array("Contractor.created <= " => $this->request->data['Src']['dt']);
        }
        $this->Paginator->settings = array('conditions' => $conditions, 'order' => array('Contractor.id' => 'DESC'));



        $this->set('contractors', $this->Paginator->paginate());
    }

    public function contractor_view() {
        $this->layout = 'public';
        $this->Contractor->recursive = 0;
        $this->set('contractors', $this->Paginator->paginate());

        $this->loadModel('Testimonial');
        $contractorsays = $this->Testimonial->find('all', array('conditions' => array('Testimonial.status' => E_ERROR)));
        $this->set('contractorsays', $contractorsays);
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Contractor->exists($id)) {
            throw new NotFoundException(__('Invalid contractor'));
        }
        $options = array('conditions' => array('Contractor.' . $this->Contractor->primaryKey => $id));
        $this->set('contractor', $this->Contractor->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Contractor->create();
            if ($this->Contractor->save($this->request->data)) {
                $cid = $this->Contractor->getInsertID();
                $this->Uploader->uploadImage($this->request->data['Contractor']['image'], $cid, 'cn', 0, 500);
                $this->Flash->success(__('The contractor has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The contractor could not be saved. Please, try again.'));
            }
        }
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Contractor->exists($id)) {
            throw new NotFoundException(__('Invalid contractor'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Contractor->save($this->request->data)) {
                $this->Uploader->uploadImage($this->request->data['Contractor']['image'], $id, 'cn', 0, 500);
                $this->Flash->success(__('The contractor has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The contractor could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Contractor.' . $this->Contractor->primaryKey => $id));
            $this->request->data = $this->Contractor->find('first', $options);
        }
        if (is_file($this->Uploader->uploadDir('cn', $id))) {
            $this->set('img', 'cn/' . $id . "t.png");
        }
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Contractor->id = $id;
        if (!$this->Contractor->exists()) {
            throw new NotFoundException(__('Invalid contractor'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Contractor->delete()) {
            unlink($this->Uploader->uploadDir('cn', $id));
            $this->Flash->success(__('The contractor has been deleted.'));
        } else {
            $this->Flash->error(__('The contractor could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
