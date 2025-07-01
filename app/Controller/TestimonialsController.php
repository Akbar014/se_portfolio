<?php

App::uses('AppController', 'Controller');

/**
 * Testimonials Controller
 *
 * @property Testimonial $Testimonial
 * @property PaginatorComponent $Paginator
 */
class TestimonialsController extends AppController {

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
        $this->Testimonial->recursive = 0;

        $conditions = array();
        if (!empty($this->request->data['Src']['nm'])) {
            $conditions[] = array("Testimonial.title LIKE '%" . $this->request->data['Src']['nm'] . "%'");
        }

        if (!empty($this->request->data['Src']['df'])) {
            $conditions[] = array("Testimonial.created >= " => $this->request->data['Src']['df']);
        }
        if (!empty($this->request->data['Src']['dt'])) {
            $conditions[] = array("Testimonial.created <= " =>  $this->request->data['Src']['dt']);
        }
        $this->Paginator->settings = array('conditions' => $conditions, 'order' => array('Testimonial.id' => 'DESC'));



        $this->set('testimonials', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Testimonial->exists($id)) {
            throw new NotFoundException(__('Invalid testimonial'));
        }
        $options = array('conditions' => array('Testimonial.' . $this->Testimonial->primaryKey => $id));
        $this->set('testimonial', $this->Testimonial->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Testimonial->create();
            if ($this->Testimonial->save($this->request->data)) {
                $this->Uploader->uploadImage($this->request->data['Testimonial']['image'], $this->Testimonial->getInsertID(), 'ts', 0, 150);
                $this->Flash->success(__('The testimonial has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The testimonial could not be saved. Please, try again.'));
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
        if (!$this->Testimonial->exists($id)) {
            throw new NotFoundException(__('Invalid testimonial'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Testimonial->save($this->request->data)) {
                $this->Uploader->uploadImage($this->request->data['Testimonial']['image'], $id, 'ts', 0, 150);
                $this->Flash->success(__('The testimonial has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The testimonial could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Testimonial.' . $this->Testimonial->primaryKey => $id));
            $this->request->data = $this->Testimonial->find('first', $options);
        }
        if (is_file($this->Uploader->uploadDir('ts', $id))) {
            $this->set('img', 'ts/' . $id . ".png");
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
        $this->Testimonial->id = $id;
        if (!$this->Testimonial->exists()) {
            throw new NotFoundException(__('Invalid testimonial'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Testimonial->delete()) {
            $this->Flash->success(__('The testimonial has been deleted.'));
        } else {
            $this->Flash->error(__('The testimonial could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
