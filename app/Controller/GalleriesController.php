<?php

App::uses('AppController', 'Controller');

/**
 * Galleries Controller
 *
 * @property Gallery $Gallery
 * @property PaginatorComponent $Paginator
 */
class GalleriesController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Uploader');

    public function beforeFilter() {
        parent::beforeFilter();

        $this->Auth->allow('gallery');
    }

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Gallery->recursive = 0;

        $conditions = array();
        if (!empty($this->request->data['Src']['nm'])) {
            $conditions[] = array("Gallery.title LIKE '%" . $this->request->data['Src']['nm'] . "%'");
        }

        if (!empty($this->request->data['Src']['df'])) {
            $conditions[] = array("Gallery.created >= " => $this->request->data['Src']['df']);
        }
        if (!empty($this->request->data['Src']['dt'])) {
            $conditions[] = array("Gallery.created <= " =>  $this->request->data['Src']['dt']);
        }
        $this->Paginator->settings = array('conditions' => $conditions, 'order' => array('Gallery.id' => 'DESC'));



        $this->set('galleries', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Gallery->exists($id)) {
            throw new NotFoundException(__('Invalid gallery'));
        }
        $options = array('conditions' => array('Gallery.' . $this->Gallery->primaryKey => $id));
        $this->set('gallery', $this->Gallery->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Gallery->create();
            if ($this->Gallery->save($this->request->data)) {
                $this->Uploader->uploadImage($this->request->data['Gallery']['image'], $this->Gallery->getInsertID(), 'g', 0, 150);
                $this->Flash->success(__('The gallery has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The gallery could not be saved. Please, try again.'));
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
        if (!$this->Gallery->exists($id)) {
            throw new NotFoundException(__('Invalid gallery'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Gallery->save($this->request->data)) {
                $this->Uploader->uploadImage($this->request->data['Gallery']['image'], $id, 'g', 0, 150);
                $this->Flash->success(__('The gallery has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The gallery could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Gallery.' . $this->Gallery->primaryKey => $id));
            $this->request->data = $this->Gallery->find('first', $options);
        }

        if (is_file($this->Uploader->uploadDir('g', $id))) {
            $this->set('img', 'g/' . $id . ".png");
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
        $this->Gallery->id = $id;
        if (!$this->Gallery->exists()) {
            throw new NotFoundException(__('Invalid gallery'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Gallery->delete()) {
            $this->Flash->success(__('The gallery has been deleted.'));
        } else {
            $this->Flash->error(__('The gallery could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
