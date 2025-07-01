<?php
App::uses('AppController', 'Controller');
/**
 * Expenseheads Controller
 *
 * @property Expensehead $Expensehead
 * @property PaginatorComponent $Paginator
 */
class ExpenseheadsController extends AppController {

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
		$this->Expensehead->recursive = 0;

        $conditions = array();
        if (!empty($this->request->data['Src']['nm'])) {
            $conditions[] = array("Expensehead.name LIKE '%" . $this->request->data['Src']['nm'] . "%'");
        }

        if (!empty($this->request->data['Src']['df'])) {
            $conditions[] = array("Expensehead.created >= " => $this->request->data['Src']['df']);
        }
        if (!empty($this->request->data['Src']['dt'])) {
            $conditions[] = array("Expensehead.created <= " =>  $this->request->data['Src']['dt']);
        }
        $this->Paginator->settings = array('conditions' => $conditions, 'order' => array('Expensehead.id' => 'DESC'));



        $this->set('expenseheads', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Expensehead->exists($id)) {
			throw new NotFoundException(__('Invalid expensehead'));
		}
		$options = array('conditions' => array('Expensehead.' . $this->Expensehead->primaryKey => $id));
		$this->set('expensehead', $this->Expensehead->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Expensehead->create();
			if ($this->Expensehead->save($this->request->data)) {
				$this->Flash->success(__('The expensehead has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The expensehead could not be saved. Please, try again.'));
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
		if (!$this->Expensehead->exists($id)) {
			throw new NotFoundException(__('Invalid expensehead'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Expensehead->save($this->request->data)) {
				$this->Flash->success(__('The expensehead has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The expensehead could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Expensehead.' . $this->Expensehead->primaryKey => $id));
			$this->request->data = $this->Expensehead->find('first', $options);
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
		$this->Expensehead->id = $id;
		if (!$this->Expensehead->exists()) {
			throw new NotFoundException(__('Invalid expensehead'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Expensehead->delete()) {
			$this->Flash->success(__('The expensehead has been deleted.'));
		} else {
			$this->Flash->error(__('The expensehead could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
