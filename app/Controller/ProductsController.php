<?php

App::uses('AppController', 'Controller');

/**
 * Products Controller
 *
 * @property Product $Product
 * @property PaginatorComponent $Paginator
 */
class ProductsController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Uploader');

    public function beforeFilter() {
        parent::beforeFilter();

        $this->Auth->allow(array('product_view', 'product_details'));
    }

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Product->recursive = 0;

        $conditions = array();
        if (!empty($this->request->data['Src']['nm'])) {
            $conditions[] = array("Product.name LIKE '%" . $this->request->data['Src']['nm'] . "%'");
        }

        if (!empty($this->request->data['Src']['df'])) {
            $conditions[] = array("Product.created >= " => $this->request->data['Src']['df']);
        }
        if (!empty($this->request->data['Src']['dt'])) {
            $conditions[] = array("Product.created <= " => $this->request->data['Src']['dt']);
        }
        $this->Paginator->settings = array('conditions' => $conditions, 'order' => array('Product.id' => 'DESC'));

        $this->set('products', $this->Paginator->paginate());
    }

    public function product_view() {
        $this->layout = 'public';
        
        $this->set('products', $this->Product->find('all', array('conditions' => array('Product.status' => E_ERROR, 'Product.is_public' => E_ERROR))));
    }

    public function product_details($id = null) {
        $this->layout = 'public';
        if (!$this->Product->exists($id)) {
            throw new NotFoundException(__('Invalid product'));
        }
        $options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
        $this->set('product', $this->Product->find('first', $options));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Product->exists($id)) {
            throw new NotFoundException(__('Invalid product'));
        }
        $options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
        $this->set('product', $this->Product->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Product->create();
            if ($this->Product->save($this->request->data)) {
                $pid = $this->Product->getInsertID();
                $this->Uploader->uploadImage($this->request->data['Product']['image'], $pid, 'pd', 0, 500);
                $this->Flash->success(__('The product has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The product could not be saved. Please, try again.'));
            }
        }
        $categories = $this->Product->Category->find('list');
        $this->set(compact('categories'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Product->exists($id)) {
            throw new NotFoundException(__('Invalid product'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Product->save($this->request->data)) {
                $this->Uploader->uploadImage($this->request->data['Product']['image'], $id, 'pd', 0, 500);
                $this->Flash->success(__('The product has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The product could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
            $this->request->data = $this->Product->find('first', $options);
        }
        if (is_file($this->Uploader->uploadDir('pd', $id))) {
            $this->set('img', 'pd/' . $id . ".png");
        }

        $categories = $this->Product->Category->find('list');
        $this->set(compact('categories'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Product->id = $id;
        if (!$this->Product->exists()) {
            throw new NotFoundException(__('Invalid product'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Product->delete()) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
