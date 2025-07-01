<?php

App::uses('AppController', 'Controller');

/**
 * Hostings Controller
 *
 * @property Hosting $Hosting
 * @property PaginatorComponent $Paginator
 */
class HostingsController extends AppController {

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
        $this->Hosting->recursive = 0;

        $conditions = array();
        if (!empty($this->request->data['Src']['nm'])) {
            $conditions[] = array("Hosting.company LIKE '%" . $this->request->data['Src']['nm'] . "%'");
        }

        if (!empty($this->request->data['Src']['df'])) {
            $conditions[] = array("Hosting.created >= " => $this->request->data['Src']['df']);
        }
        if (!empty($this->request->data['Src']['dt'])) {
            $conditions[] = array("Hosting.created <= " => $this->request->data['Src']['dt']);
        }
        $this->Paginator->settings = array('conditions' => $conditions, 'order' => array('Hosting.id' => 'DESC'));



        $this->set('hostings', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Hosting->exists($id)) {
            throw new NotFoundException(__('Invalid hosting'));
        }
        $options = array('conditions' => array('Hosting.' . $this->Hosting->primaryKey => $id));
        $this->set('hosting', $this->Hosting->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Hosting->create();
            if ($this->Hosting->save($this->request->data)) {
                $this->Flash->success(__('The hosting has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The hosting could not be saved. Please, try again.'));
            }
        }
        $projects = $this->Hosting->Project->find('list');
        $this->set(compact('projects'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Hosting->exists($id)) {
            throw new NotFoundException(__('Invalid hosting'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Hosting->save($this->request->data)) {
                $this->Flash->success(__('The hosting has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The hosting could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Hosting.' . $this->Hosting->primaryKey => $id));
            $this->request->data = $this->Hosting->find('first', $options);
        }
        $projects = $this->Hosting->Project->find('list');
        $this->set(compact('projects'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Hosting->id = $id;
        if (!$this->Hosting->exists()) {
            throw new NotFoundException(__('Invalid hosting'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Hosting->delete()) {
            $this->Flash->success(__('The hosting has been deleted.'));
        } else {
            $this->Flash->error(__('The hosting could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
