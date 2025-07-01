<?php

App::uses('AppController', 'Controller');

/**
 * Pages Controller
 *
 * @property Page $Page
 * @property PaginatorComponent $Paginator
 */
class PagesController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();

        $this->Auth->allow(array('home', 'aboutus'));
    }

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Page->recursive = 0;
        $this->set('pages', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Page->exists($id)) {
            throw new NotFoundException(__('Invalid page'));
        }
        $options = array('conditions' => array('Page.' . $this->Page->primaryKey => $id));
        $this->set('page', $this->Page->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Page->create();
            if ($this->Page->save($this->request->data)) {
                $this->Flash->success(__('The page has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The page could not be saved. Please, try again.'));
            }
        }
        $users = $this->Page->User->find('list');
        $this->set(compact('users'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Page->exists($id)) {
            throw new NotFoundException(__('Invalid page'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Page->save($this->request->data)) {
                $this->Flash->success(__('The page has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The page could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Page.' . $this->Page->primaryKey => $id));
            $this->request->data = $this->Page->find('first', $options);
        }
        $users = $this->Page->User->find('list');
        $this->set(compact('users'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Page->id = $id;
        if (!$this->Page->exists()) {
            throw new NotFoundException(__('Invalid page'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Page->delete()) {
            $this->Flash->success(__('The page has been deleted.'));
        } else {
            $this->Flash->error(__('The page could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function home() {
        $this->loadModel('Subscribe');
        if ($this->request->is('post')) {
            //pr($this->request->data,1);
            $this->Subscribe->create();
            if ($this->Subscribe->save($this->request->data)) {
                $this->Flash->success(__('The email has been saved.'));
                return $this->redirect(array('action' => 'home'));
            } else {
                $this->Flash->error(__('The notice could not be saved. Please, try again.'));
            }
        }

        $this->layout = 'public';

        $this->loadModel('Product');
        $this->loadModel('Client');
        $this->loadModel('Slider');
        $this->loadModel('Testimonial');
        $this->loadModel('Service');
        $this->loadModel('Blog');

        $products = $this->Product->find('all', array('conditions' => array('Product.status' => E_ERROR, 'Product.is_public' => E_ERROR)));
        $projects = $this->Product->Project->find('all', array('conditions' => array('Project.status' => E_ERROR, 'Product.is_public' => E_ERROR)));
        $clients = $this->Client->find('all', array('recursive' => -1, 'conditions' => array('Client.status' => E_ERROR)));
        $sliders = $this->Slider->find('all', array('recursive' => -1, 'conditions' => array('Slider.status' => E_ERROR)));
        $clientsays = $this->Testimonial->find('all', array('conditions' => array('Testimonial.status' => E_ERROR)));
        $services = $this->Service->find('all', array('conditions' => array('Service.status' => E_ERROR)));
        $blogs = $this->Blog->find('all', array('conditions' => array('Blog.status' => E_ERROR)));
        $this->set(compact('projects', 'clients', 'sliders', 'products', 'clientsays', 'services', 'blogs'));

    }

    public function aboutus() {
        $this->layout = 'public';
    }

    public function dashboard() {
        
    }

}
