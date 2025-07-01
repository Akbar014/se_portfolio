<?php

App::uses('AppController', 'Controller');

/**
 * HostingRenewals Controller
 *
 * @property HostingRenewal $HostingRenewal
 * @property PaginatorComponent $Paginator
 */
class HostingRenewalsController extends AppController {

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
        $this->HostingRenewal->recursive = 0;

        $conditions = array();
        if (!empty($this->request->data['Src']['nm'])) {
            $conditions[] = array("Hosting.company LIKE '%" . $this->request->data['Src']['nm'] . "%'");
        }

        if (!empty($this->request->data['Src']['df'])) {
            $conditions[] = array("HostingRenewal.created >= " => $this->request->data['Src']['df']);
        }
        if (!empty($this->request->data['Src']['dt'])) {
            $conditions[] = array("HostingRenewal.created <= " => $this->request->data['Src']['dt']);
        }
        $this->Paginator->settings = array('conditions' => $conditions, 'order' => array('HostingRenewal.id' => 'DESC'));



        $this->set('hostingRenewals', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->HostingRenewal->exists($id)) {
            throw new NotFoundException(__('Invalid hosting renewal'));
        }
        $options = array('conditions' => array('HostingRenewal.' . $this->HostingRenewal->primaryKey => $id));
        $this->set('hostingRenewal', $this->HostingRenewal->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->HostingRenewal->create();
            if ($this->HostingRenewal->save($this->request->data)) {
                $this->Flash->success(__('The hosting renewal has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                debug($this->HostingRenewal->invalidFields());
                $this->Flash->error(__('The hosting renewal could not be saved. Please, try again.'));
            }
        }
        $hostings = $this->HostingRenewal->Hosting->find('list', array('fields' => array('id', 'company')));
        $this->set(compact('hostings'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->HostingRenewal->exists($id)) {
            throw new NotFoundException(__('Invalid hosting renewal'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->HostingRenewal->save($this->request->data)) {
                $this->Flash->success(__('The hosting renewal has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The hosting renewal could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('HostingRenewal.' . $this->HostingRenewal->primaryKey => $id));
            $this->request->data = $this->HostingRenewal->find('first', $options);
        }
        $hostings = $this->HostingRenewal->Hosting->find('list', array('fields' => array('id', 'company')));
        $this->set(compact('hostings'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->HostingRenewal->id = $id;
        if (!$this->HostingRenewal->exists()) {
            throw new NotFoundException(__('Invalid hosting renewal'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->HostingRenewal->delete()) {
            $this->Flash->success(__('The hosting renewal has been deleted.'));
        } else {
            $this->Flash->error(__('The hosting renewal could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
