<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator', 'Cookie');


	//Lgin
	public function login() {
		$this->layout = 'public';

		if ($this->Auth->loggedIn()) {
			return $this->redirect(array('controller' => 'pages', 'action' => 'dashboard'));
		} else {
			$cookie = $this->Cookie->read('remember_me_cookie');
			if ($cookie !== null) {
				$this->request->data['User'] = $cookie;
				if ($this->Auth->login()) {
					return $this->redirect(array('controller' => 'pages', 'action' => 'dashboard'));
				}
			}
		}

		if ($this->request->is('post')) {
			//pr($this->request->data, 1);
			if ($this->Auth->login()) {
				if ($this->Auth->user('status') == E_ERROR) {
					// write the cookie
					if (isset($this->request->data['User']['rememberme'])) {
						$this->Cookie->write('remember_me_cookie', $this->request->data['User'], true, (12 * 60 * 60));
					}

					$login = array();
					$login['Login']['user_id'] = $this->Auth->user('id');
					$login['Login']['ip'] = $_SERVER['REMOTE_ADDR'];
					$login['Login']['useragent'] = $_SERVER['HTTP_USER_AGENT'];
					$login['Login']['port'] = $_SERVER['REMOTE_PORT'];
					$login['Login']['login'] = date('Y-m-d H:i:s');
					ClassRegistry::init('Login')->save($login);

					$this->Flash->success('Welcome ' . $this->Auth->user('name'));
					return $this->redirect(array('controller' => 'pages', 'action' => 'dashboard'));
				} else {
					$this->Flash->error(__('Your account is inactive.'));
					$this->logout(1);
				}
			} else {
				$this->Flash->error('Your username/password combination was incorrect.');
			}
		}
	}




	public function logout($inact = null) {
		$this->Cookie->delete('remember_me_cookie');

		$this->loadModel('Login');
		$login = $this->Login->find('first', array('conditions' => array('user_id' => $this->Auth->user('id'), 'logout IS NULL'), 'order' => array('login' => 'DESC'), 'recursive' => -1));
		$login['Login']['logout'] = date('Y-m-d H:i:s');
		$this->Login->save($login);

		$this->Session->destroy();

		if ($inact) {
			$this->Flash->error('Your account is inactive.');
		}

		return $this->redirect($this->Auth->logout());
	}








	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		}
		$roles = $this->User->Role->find('list');
		$employees = $this->User->Employee->find('list');
		$this->set(compact('roles', 'employees'));
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$roles = $this->User->Role->find('list');
		$employees = $this->User->Employee->find('list');
		$this->set(compact('roles', 'employees'));
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Flash->success(__('The user has been deleted.'));
		} else {
			$this->Flash->error(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
