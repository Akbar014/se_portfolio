<?php
App::uses('AppController', 'Controller');
/**
 * DomainRenewals Controller
 *
 * @property DomainRenewal $DomainRenewal
 * @property PaginatorComponent $Paginator
 */
class DomainRenewalsController extends AppController {

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
		$this->DomainRenewal->recursive = 0;

        $conditions = array();
        if (!empty($this->request->data['Src']['nm'])) {
            $conditions[] = array("Domain.name LIKE '%" . $this->request->data['Src']['nm'] . "%'");
        }

        if (!empty($this->request->data['Src']['df'])) {
            $conditions[] = array("DomainRenewal.created >= " => $this->request->data['Src']['df']);
        }
        if (!empty($this->request->data['Src']['dt'])) {
            $conditions[] = array("DomainRenewal.created <= " =>  $this->request->data['Src']['dt']);
        }
        $this->Paginator->settings = array('conditions' => $conditions, 'order' => array('DomainRenewal.id' => 'DESC'));



        $this->set('domainRenewals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DomainRenewal->exists($id)) {
			throw new NotFoundException(__('Invalid domain renewal'));
		}
		$options = array('conditions' => array('DomainRenewal.' . $this->DomainRenewal->primaryKey => $id));
		$this->set('domainRenewal', $this->DomainRenewal->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DomainRenewal->create();
			if ($this->DomainRenewal->save($this->request->data)) {
				$this->Flash->success(__('The domain renewal has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The domain renewal could not be saved. Please, try again.'));
			}
		}
		$domains = $this->DomainRenewal->Domain->find('list');
		$this->set(compact('domains'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DomainRenewal->exists($id)) {
			throw new NotFoundException(__('Invalid domain renewal'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DomainRenewal->save($this->request->data)) {
				$this->Flash->success(__('The domain renewal has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The domain renewal could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DomainRenewal.' . $this->DomainRenewal->primaryKey => $id));
			$this->request->data = $this->DomainRenewal->find('first', $options);
		}
		$domains = $this->DomainRenewal->Domain->find('list');
		$this->set(compact('domains'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DomainRenewal->id = $id;
		if (!$this->DomainRenewal->exists()) {
			throw new NotFoundException(__('Invalid domain renewal'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DomainRenewal->delete()) {
			$this->Flash->success(__('The domain renewal has been deleted.'));
		} else {
			$this->Flash->error(__('The domain renewal could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
