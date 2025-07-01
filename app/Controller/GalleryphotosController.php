<?php

App::uses('AppController', 'Controller');

/**
 * Galleryphotos Controller
 *
 * @property Galleryphoto $Galleryphoto
 * @property PaginatorComponent $Paginator
 */
class GalleryphotosController extends AppController {

    /**
     * Components
     *
     * @var array
     */
     public $components = array('Paginator', 'Uploader');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Galleryphoto->recursive = 0;
        $this->set('galleryphotos', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Galleryphoto->exists($id)) {
            throw new NotFoundException(__('Invalid galleryphoto'));
        }
        $options = array('conditions' => array('Galleryphoto.' . $this->Galleryphoto->primaryKey => $id));
        $this->set('galleryphoto', $this->Galleryphoto->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add($id = null) {
        if ($this->request->is('post')) {
            $this->Galleryphoto->create();
            $this->request->data['Galleryphoto']['gallery_id'] = $id;
            //pr($this->request->data,1);
            if ($this->Galleryphoto->save($this->request->data)) {
                $pid = $this->Galleryphoto->getInsertID();
                $this->Uploader->uploadImage($this->request->data['Galleryphoto']['image'], $pid, 'gp', 0, 1000);
                $this->Uploader->uploadImage($this->request->data['Galleryphoto']['image'], $pid . 't', 'gp', 0, 150);
                $this->Flash->success(__('The galleryphoto has been saved.'));
                return $this->redirect(array('action' => 'index',$id));
            } else {
                $this->Flash->error(__('The galleryphoto could not be saved. Please, try again.'));
            }
        }
        $galleries = $this->Galleryphoto->Gallery->find('list');
        $this->set(compact('galleries'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null,$gallery_id=null) {
        if (!$this->Galleryphoto->exists($id)) {
            throw new NotFoundException(__('Invalid galleryphoto'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $this->request->data['Galleryphoto']['gallery_id'] = $gallery_id;
            if ($this->Galleryphoto->save($this->request->data)) {
                $this->Uploader->uploadImage($this->request->data['Galleryphoto']['image'], $id, 'gp', 0, 1000);
                $this->Uploader->uploadImage($this->request->data['Galleryphoto']['image'], $id . 't', 'gp', 0, 150);
                $this->Flash->success(__('The galleryphoto has been saved.'));
                return $this->redirect(array('action' => 'index',$gallery_id));
            } else {
                $this->Flash->error(__('The galleryphoto could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Galleryphoto.' . $this->Galleryphoto->primaryKey => $id));
            $this->request->data = $this->Galleryphoto->find('first', $options);
        }
        $galleries = $this->Galleryphoto->Gallery->find('list');
        $this->set(compact('galleries'));
        
        if (is_file($this->Uploader->uploadDir('gp', $id))) {
            $this->set('img', 'gp/' . $id . "t.png");
        }
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null,$gallery_id=null) {
        $this->Galleryphoto->id = $id;
        if (!$this->Galleryphoto->exists()) {
            throw new NotFoundException(__('Invalid galleryphoto'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Galleryphoto->delete()) {
            unlink($this->Uploader->uploadDir('gp', $id));
            unlink($this->Uploader->uploadDir('gp', $id . 't'));
            $this->Flash->success(__('The galleryphoto has been deleted.'));
        } else {
            $this->Flash->error(__('The galleryphoto could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index',$gallery_id));
    }

}
