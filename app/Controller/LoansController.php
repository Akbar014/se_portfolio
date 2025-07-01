<?php

App::uses('AppController', 'Controller');

/**
 * Loans Controller
 *
 * @property Loan $Loan
 * @property PaginatorComponent $Paginator
 */
class LoansController extends AppController {

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
        $this->Loan->recursive = 0;

        $conditions = array();
        if (!empty($this->request->data['Src']['lender_id'])) {
            $conditions[] = array("Loan.lender_id" => $this->request->data['Src']['lender_id']);
        }
        if (!empty($this->request->data['Src']['df'])) {
            $conditions[] = array("Loan.created >= " => $this->request->data['Src']['df']);
        }
        if (!empty($this->request->data['Src']['dt'])) {
            $conditions[] = array("Loan.created <= " => $this->request->data['Src']['dt']);
        }
        $this->Paginator->settings = array('conditions' => $conditions, 'order' => array('Loan.id' => 'DESC'));

        $this->set('loans', $this->Paginator->paginate());

        $lenders = $this->Loan->Lender->find('list', array('order' => array('name' => 'ASC')));
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
        if (!$this->Loan->exists($id)) {
            throw new NotFoundException(__('Invalid loan'));
        }
        $options = array('conditions' => array('Loan.' . $this->Loan->primaryKey => $id));
        $this->set('loan', $this->Loan->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Loan->create();

            //pr($this->request->data, 1);
            if ($this->Loan->save($this->request->data)) {
                $lender = $this->Loan->Lender->find('first', array('conditions' => array('id' => $this->request->data['Loan']['lender_id']), 'recursive' => -1));
                $lender['Lender']['total'] = ($lender['Lender']['total'] + $this->request->data['Loan']['amount']);
                $this->Loan->Lender->save($lender);

                $this->Flash->success(__('The loan has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                debug($this->Loan->InvalidFields());
                $this->Flash->error(__('The loan could not be saved. Please, try again.'));
            }
        }
        $lenders = $this->Loan->Lender->find('list', array('order' => array('name' => 'ASC')));
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
        if (!$this->Loan->exists($id)) {
            throw new NotFoundException(__('Invalid loan'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Loan->save($this->request->data)) {
                $this->Flash->success(__('The loan has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The loan could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Loan.' . $this->Loan->primaryKey => $id));
            $this->request->data = $this->Loan->find('first', $options);
        }
        $lenders = $this->Loan->Lender->find('list');
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
        $this->Loan->id = $id;
        if (!$this->Loan->exists()) {
            throw new NotFoundException(__('Invalid loan'));
        }

        $loan = $this->Loan->find('first', array('conditions' => array('id' => $id), 'recursive' => -1));
        $lender = $this->Loan->Lender->find('first', array('conditions' => array('id' => $loan['Loan']['lender_id']), 'recursive' => -1));

        $this->request->allowMethod('post', 'delete');
        if ($this->Loan->delete()) {
            $lender['Lender']['total'] = ($lender['Lender']['total'] - $loan['Loan']['amount']);
            $this->Loan->Lender->save($lender);

            $this->Flash->success(__('The loan has been deleted.'));
        } else {
            $this->Flash->error(__('The loan could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
