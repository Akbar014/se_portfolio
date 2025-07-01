<?php
App::uses('AppController', 'Controller');
/**
 * Subscribes Controller
 *
 * @property Subscribe $Subscribe
 * @property PaginatorComponent $Paginator
 */
class SubscribesController extends AppController {

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
		$this->Subscribe->recursive = 0;
		$this->set('subscribes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Subscribe->exists($id)) {
			throw new NotFoundException(__('Invalid subscribe'));
		}
		$options = array('conditions' => array('Subscribe.' . $this->Subscribe->primaryKey => $id));
		$this->set('subscribe', $this->Subscribe->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Subscribe->create();
			if ($this->Subscribe->save($this->request->data)) {
				$this->Flash->success(__('The subscribe has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The subscribe could not be saved. Please, try again.'));
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
		if (!$this->Subscribe->exists($id)) {
			throw new NotFoundException(__('Invalid subscribe'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Subscribe->save($this->request->data)) {
				$this->Flash->success(__('The subscribe has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The subscribe could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Subscribe.' . $this->Subscribe->primaryKey => $id));
			$this->request->data = $this->Subscribe->find('first', $options);
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
		$this->Subscribe->id = $id;
		if (!$this->Subscribe->exists()) {
			throw new NotFoundException(__('Invalid subscribe'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Subscribe->delete()) {
			$this->Flash->success(__('The subscribe has been deleted.'));
		} else {
			$this->Flash->error(__('The subscribe could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
