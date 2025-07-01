<?php
App::uses('AppController', 'Controller');
/**
 * Quicklinks Controller
 *
 * @property Quicklink $Quicklink
 * @property PaginatorComponent $Paginator
 */
class QuicklinksController extends AppController {

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
		$this->Quicklink->recursive = 0;

        $conditions = array();
        if (!empty($this->request->data['Src']['nm'])) {
            $conditions[] = array("Quicklink.name LIKE '%" . $this->request->data['Src']['nm'] . "%'");
        }

        if (!empty($this->request->data['Src']['df'])) {
            $conditions[] = array("Quicklink.created >= " => $this->request->data['Src']['df']);
        }
        if (!empty($this->request->data['Src']['dt'])) {
            $conditions[] = array("Quicklink.created <= " =>  $this->request->data['Src']['dt']);
        }
        $this->Paginator->settings = array('conditions' => $conditions, 'order' => array('Quicklink.id' => 'DESC'));



        $this->set('quicklinks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Quicklink->exists($id)) {
			throw new NotFoundException(__('Invalid quicklink'));
		}
		$options = array('conditions' => array('Quicklink.' . $this->Quicklink->primaryKey => $id));
		$this->set('quicklink', $this->Quicklink->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Quicklink->create();
			if ($this->Quicklink->save($this->request->data)) {
				$this->Flash->success(__('The quicklink has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The quicklink could not be saved. Please, try again.'));
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
		if (!$this->Quicklink->exists($id)) {
			throw new NotFoundException(__('Invalid quicklink'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Quicklink->save($this->request->data)) {
				$this->Flash->success(__('The quicklink has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The quicklink could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Quicklink.' . $this->Quicklink->primaryKey => $id));
			$this->request->data = $this->Quicklink->find('first', $options);
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
		$this->Quicklink->id = $id;
		if (!$this->Quicklink->exists()) {
			throw new NotFoundException(__('Invalid quicklink'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Quicklink->delete()) {
			$this->Flash->success(__('The quicklink has been deleted.'));
		} else {
			$this->Flash->error(__('The quicklink could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
