<?php

App::uses('AppController', 'Controller');

/**
 * Clients Controller
 *
 * @property Client $Client
 * @property PaginatorComponent $Paginator
 */
class ClientsController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Uploader');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow(array('client_view'));
    }

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Client->recursive = 0;

        $conditions = array();
        if (!empty($this->request->data['Src']['nm'])) {
            $conditions[] = array("Client.name LIKE '%" . $this->request->data['Src']['nm'] . "%'");
        }

        if (!empty($this->request->data['Src']['df'])) {
            $conditions[] = array("Client.created >= " => $this->request->data['Src']['df']);
        }
        if (!empty($this->request->data['Src']['dt'])) {
            $conditions[] = array("Client.created <= " =>  $this->request->data['Src']['dt']);
        }
        $this->Paginator->settings = array('conditions' => $conditions, 'order' => array('Client.id' => 'DESC'));



        $this->set('clients', $this->Paginator->paginate());
    }

    public function client_view() {
        $this->layout = 'public';
        $this->Client->recursive = 0;
        $this->set('clients', $this->Paginator->paginate());
        
        $this->loadModel('Testimonial');
        $clientsays=$this->Testimonial->find('all',array('conditions'=>array('Testimonial.status'=>E_ERROR)));
        $this->set('clientsays', $clientsays);
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Client->exists($id)) {
            throw new NotFoundException(__('Invalid client'));
        }
        $options = array('conditions' => array('Client.' . $this->Client->primaryKey => $id));
        $this->set('client', $this->Client->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Client->create();
            if ($this->Client->save($this->request->data)) {
                $cid = $this->Client->getInsertID();
                $this->Uploader->uploadImage($this->request->data['Client']['image'], $cid, 'cl', 0, 1000);
                $this->Uploader->uploadImage($this->request->data['Client']['image'], $cid . 't', 'cl', 0, 150);
                $this->Flash->success(__('The client has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The client could not be saved. Please, try again.'));
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
        if (!$this->Client->exists($id)) {
            throw new NotFoundException(__('Invalid client'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Client->save($this->request->data)) {
                $this->Uploader->uploadImage($this->request->data['Client']['image'], $id, 'cl', 0, 1000);
                $this->Uploader->uploadImage($this->request->data['Client']['image'], $id . 't', 'cl', 0, 150);
                $this->Flash->success(__('The client has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The client could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Client.' . $this->Client->primaryKey => $id));
            $this->request->data = $this->Client->find('first', $options);
        }
        if (is_file($this->Uploader->uploadDir('cl', $id))) {
            $this->set('img', 'cl/' . $id . "t.png");
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
        $this->Client->id = $id;
        if (!$this->Client->exists()) {
            throw new NotFoundException(__('Invalid client'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Client->delete()) {
            unlink($this->Uploader->uploadDir('cl', $id));
            unlink($this->Uploader->uploadDir('cl', $id . 't'));
            $this->Flash->success(__('The client has been deleted.'));
        } else {
            $this->Flash->error(__('The client could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
