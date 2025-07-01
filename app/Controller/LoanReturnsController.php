<?php

App::uses('AppController', 'Controller');

/**
 * LoanReturns Controller
 *
 * @property LoanReturn $LoanReturn
 * @property PaginatorComponent $Paginator
 */
class LoanReturnsController extends AppController {

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
        $this->LoanReturn->recursive = 0;

        $conditions = array();
        if (!empty($this->request->data['Src']['lender_id'])) {
            $conditions[] = array("LoanReturn.lender_id" => $this->request->data['Src']['lender_id']);
        }
        if (!empty($this->request->data['Src']['df'])) {
            $conditions[] = array("LoanReturn.created >= " => $this->request->data['Src']['df']);
        }
        if (!empty($this->request->data['Src']['dt'])) {
            $conditions[] = array("LoanReturn.created <= " => $this->request->data['Src']['dt']);
        }
        $this->Paginator->settings = array('conditions' => $conditions, 'order' => array('LoanReturn.id' => 'DESC'));

        $this->set('loanReturns', $this->Paginator->paginate());
        
        $lenders = $this->LoanReturn->Lender->find('list', array('order' => array('name' => 'ASC')));
        $this->set(compact('lenders'));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->LoanReturn->exists($id)) {
            throw new NotFoundException(__('Invalid loan return'));
        }
        $options = array('conditions' => array('LoanReturn.' . $this->LoanReturn->primaryKey => $id));
        $this->set('loanReturn', $this->LoanReturn->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->LoanReturn->create();

            //pr($this->request->data, 1);
            if ($this->LoanReturn->save($this->request->data)) {
                $lender = $this->LoanReturn->Lender->find('first', array('conditions' => array('id' => $this->request->data['LoanReturn']['lender_id']), 'recursive' => -1));
                $lender['Lender']['paid'] = ($lender['Lender']['paid'] + $this->request->data['LoanReturn']['amount']);
                $this->LoanReturn->Lender->save($lender);

                $this->Flash->success(__('The loan return has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The loan return could not be saved. Please, try again.'));
            }
        }
        $lenders = $this->LoanReturn->Lender->find('list', array('order' => array('name' => 'ASC')));
        $this->set(compact('lenders'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->LoanReturn->exists($id)) {
            throw new NotFoundException(__('Invalid loan return'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->LoanReturn->save($this->request->data)) {
                $this->Flash->success(__('The loan return has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The loan return could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('LoanReturn.' . $this->LoanReturn->primaryKey => $id));
            $this->request->data = $this->LoanReturn->find('first', $options);
        }
        $lenders = $this->LoanReturn->Lender->find('list', array('order' => array('name' => 'ASC')));
        $this->set(compact('lenders'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->LoanReturn->id = $id;
        if (!$this->LoanReturn->exists()) {
            throw new NotFoundException(__('Invalid loan return'));
        }
        
        $loan = $this->LoanReturn->find('first', array('conditions' => array('id' => $id), 'recursive' => -1));
        $lender = $this->LoanReturn->Lender->find('first', array('conditions' => array('id' => $loan['LoanReturn']['lender_id']), 'recursive' => -1));

        $this->request->allowMethod('post', 'delete');
        if ($this->LoanReturn->delete()) {
            $lender['Lender']['paid'] = ($lender['Lender']['paid'] - $loan['LoanReturn']['amount']);
            $this->LoanReturn->Lender->save($lender);

            $this->Flash->success(__('The loan return has been deleted.'));
        } else {
            $this->Flash->error(__('The loan return could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
