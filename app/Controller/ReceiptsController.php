<?php

App::uses('AppController', 'Controller');

/**
 * Receipts Controller
 *
 * @property Receipt $Receipt
 * @property PaginatorComponent $Paginator
 */
class ReceiptsController extends AppController {

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
        $this->Receipt->recursive = 0;

        $conditions = array();
        if (!empty($this->request->data['Src']['nm'])) {
            $conditions[] = array("Project.name LIKE '%" . $this->request->data['Src']['nm'] . "%'");
        }

        if (!empty($this->request->data['Src']['df'])) {
            $conditions[] = array("Receipt.created >= " => $this->request->data['Src']['df']);
        }
        if (!empty($this->request->data['Src']['dt'])) {
            $conditions[] = array("Receipt.created <= " => $this->request->data['Src']['dt']);
        }
        $this->Paginator->settings = array('conditions' => $conditions, 'order' => array('Receipt.id' => 'DESC'));

        $this->set('receipts', $this->Paginator->paginate());

        $projects = $this->Receipt->Project->find('list');
        $this->set(compact('projects'));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Receipt->exists($id)) {
            throw new NotFoundException(__('Invalid receipt'));
        }
        $options = array('conditions' => array('Receipt.' . $this->Receipt->primaryKey => $id));
        $this->set('receipt', $this->Receipt->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Receipt->create();

            $project = $this->Receipt->Project->find('first', array('conditions' => array('Project.id' => $this->request->data['Receipt']['project_id']), 'recursive' => -1));
            $this->request->data['Receipt']['balance'] = ((float) $project['Project']['price'] - (float) $this->request->data['Receipt']['amount'] - (float) $project['Project']['paid']);
            //pr($this->request->data, 1);

            if ($this->Receipt->save($this->request->data)) {
                $project['Project']['paid'] = ((float) $this->request->data['Receipt']['amount'] + (float) $project['Project']['paid']);
                $this->Receipt->Project->save($project);

                $this->Flash->success(__('The receipt has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The receipt could not be saved. Please, try again.'));
            }
        }
        $projects = $this->Receipt->Project->find('list');
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
        $this->Receipt->id = $id;
        if (!$this->Receipt->exists()) {
            throw new NotFoundException(__('Invalid receipt'));
        }

        $receipt = $this->Receipt->find('first', array('conditions' => array('Receipt.id' => $id), 'recursive' => -1));

        $this->request->allowMethod('post', 'delete');
        if ($this->Receipt->delete()) {

            $project = $this->Receipt->Project->find('first', array('conditions' => array('Project.id' => $receipt['Receipt']['project_id']), 'recursive' => -1));
            $project['Project']['paid'] = ((float) $project['Project']['paid'] - (float) $receipt['Receipt']['amount']);
            $this->Receipt->Project->save($project);

            $this->Flash->success(__('The receipt has been deleted.'));
        } else {
            $this->Flash->error(__('The receipt could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
