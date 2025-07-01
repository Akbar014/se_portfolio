<?php

App::uses('AppController', 'Controller');

/**
 * Menus Controller
 *
 * @property Menu $Menu
 * @property PaginatorComponent $Paginator
 */
class MenusController extends AppController {

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
        $this->Menu->recursive = 0;

        $conditions = array();
        if (!empty($this->request->data['Src']['nm'])) {
            $conditions[] = array("Menu.name LIKE '%" . $this->request->data['Src']['nm'] . "%'");
        }

        if (!empty($this->request->data['Src']['df'])) {
            $conditions[] = array("Menu.created >= " => $this->request->data['Src']['df']);
        }
        if (!empty($this->request->data['Src']['dt'])) {
            $conditions[] = array("Menu.created <= " =>  $this->request->data['Src']['dt']);
        }
        $this->Paginator->settings = array('conditions' => $conditions, 'order' => array('Menu.id' => 'DESC'));




        $this->set('menus', $this->Paginator->paginate());
        $parents = $this->Menu->find('list');
        $this->set(compact('parents'));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Menu->exists($id)) {
            throw new NotFoundException(__('Invalid menu'));
        }
        $options = array('conditions' => array('Menu.' . $this->Menu->primaryKey => $id));
        $this->set('menu', $this->Menu->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Menu->create();
            if ($this->Menu->save($this->request->data)) {
                $this->Flash->success(__('The menu has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The menu could not be saved. Please, try again.'));
            }
        }
        $urls = $this->getmenues();
        $pages = $this->Menu->Page->find('list');
        $parents = $this->Menu->find('list');
        $this->set(compact('pages', 'parents', 'urls'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Menu->exists($id)) {
            throw new NotFoundException(__('Invalid menu'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $this->request->data['Menu']['user_id'] = $this->Auth->user('id');
           
            if ($this->request->data['Menu']['type'] == E_ERROR) {
                $this->request->data['Menu']['url'] = NULL;
                 
            } else {
                $this->request->data['Menu']['page_id'] = '0';
                $this->request->data['Menu']['slug'] = NULL;
                //pr($this->request->data,1);
            }

            if ($this->Menu->save($this->request->data)) {
                $this->Flash->success(__('The menu has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The menu could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Menu.' . $this->Menu->primaryKey => $id));
            $this->request->data = $this->Menu->find('first', $options);
        }
        $urls = $this->getmenues();
        $pages = $this->Menu->Page->find('list');
        $parents = $this->Menu->find('list');
        $this->set(compact('pages', 'parents', 'urls'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Menu->id = $id;
        if (!$this->Menu->exists()) {
            throw new NotFoundException(__('Invalid menu'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Menu->delete()) {
            $this->Flash->success(__('The menu has been deleted.'));
        } else {
            $this->Flash->error(__('The menu could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
