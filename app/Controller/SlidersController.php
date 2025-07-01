<?php

App::uses('AppController', 'Controller');

/**
 * Sliders Controller
 *
 * @property Slider $Slider
 * @property PaginatorComponent $Paginator
 */
class SlidersController extends AppController {

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
        $this->Slider->recursive = 0;

        $conditions = array();
        if (!empty($this->request->data['Src']['nm'])) {
            $conditions[] = array("Slider.title LIKE '%" . $this->request->data['Src']['nm'] . "%'");
        }

        if (!empty($this->request->data['Src']['df'])) {
            $conditions[] = array("Slider.created >= " => $this->request->data['Src']['df']);
        }
        if (!empty($this->request->data['Src']['dt'])) {
            $conditions[] = array("Slider.created <= " =>  $this->request->data['Src']['dt']);
        }
        $this->Paginator->settings = array('conditions' => $conditions, 'order' => array('Slider.id' => 'DESC'));



        $this->set('sliders', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Slider->exists($id)) {
            throw new NotFoundException(__('Invalid slider'));
        }
        $options = array('conditions' => array('Slider.' . $this->Slider->primaryKey => $id));
        $this->set('slider', $this->Slider->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Slider->create();
            if ($this->Slider->save($this->request->data)) {
                $sid = $this->Slider->getInsertID();
                $this->Uploader->uploadImage($this->request->data['Slider']['image'], $sid, 'slider', 0, 1920);
                $this->Uploader->uploadImage($this->request->data['Slider']['image'], $sid . 't', 'slider', 0, 150);
                $this->Flash->success(__('The slider has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The slider could not be saved. Please, try again.'));
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
        if (!$this->Slider->exists($id)) {
            throw new NotFoundException(__('Invalid slider'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Slider->save($this->request->data)) {
                $this->Uploader->uploadImage($this->request->data['Slider']['image'], $id, 'slider', 0, 1920);
                $this->Uploader->uploadImage($this->request->data['Slider']['image'], $id . 't', 'slider', 0, 150);
                $this->Flash->success(__('The slider has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The slider could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Slider.' . $this->Slider->primaryKey => $id));
            $this->request->data = $this->Slider->find('first', $options);
        }

        if (is_file($this->Uploader->uploadDir('slider', $id))) {
            $this->set('img', 'slider/' . $id . "t.png");
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
        $this->Slider->id = $id;
        if (!$this->Slider->exists()) {
            throw new NotFoundException(__('Invalid slider'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Slider->delete()) {
            $this->Flash->success(__('The slider has been deleted.'));
        } else {
            $this->Flash->error(__('The slider could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
