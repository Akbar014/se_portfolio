<?php
App::uses('AppController', 'Controller');
/**
 * Blogs Controller
 *
 * @property Blog $Blog
 * @property PaginatorComponent $Paginator
 */
class BlogsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Uploader');
        
        
        public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow(array('blogs_view', 'blog_details'));
    }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Blog->recursive = 0;

        $conditions = array();
        if (!empty($this->request->data['Src']['nm'])) {
            $conditions[] = array("Blog.name LIKE '%" . $this->request->data['Src']['nm'] . "%'");
        }

        if (!empty($this->request->data['Src']['df'])) {
            $conditions[] = array("Blog.created >= " => $this->request->data['Src']['df']);
        }
        if (!empty($this->request->data['Src']['dt'])) {
            $conditions[] = array("Blog.created <= " =>  $this->request->data['Src']['dt']);
        }
        $this->Paginator->settings = array('conditions' => $conditions, 'order' => array('Blog.id' => 'DESC'));



        $this->set('blogs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Blog->exists($id)) {
			throw new NotFoundException(__('Invalid blog'));
		}
		$options = array('conditions' => array('Blog.' . $this->Blog->primaryKey => $id));
		$this->set('Blog', $this->Blog->find('first', $options));
	}


	public function blog_details($id = null) {
		$this->layout = 'public';
		if (!$this->Blog->exists($id)) {
			throw new NotFoundException(__('Invalid blog'));
		}
		$options = array('conditions' => array('Blog.' . $this->Blog->primaryKey => $id));
		$this->set('Blog', $this->Blog->find('first', $options));
	}
        
        
        
        public function blogs_view() {
        $this->layout = 'public';
        $this->Blog->recursive = 0;
        $this->set('blog', $this->Paginator->paginate());
    }


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Blog->create();
			// pr($this->request->data);
			if ($this->Blog->save($this->request->data)) {
				$bid = $this->Blog->getInsertID();

                $this->Uploader->uploadImage($this->request->data['Blog']['image'], $bid, 'bj', 0, 600);
                $this->Uploader->uploadImage($this->request->data['Blog']['image'], $bid . 't', 'bj', 0, 390);

				$this->Flash->success(__('The blog has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The blog could not be saved. Please, try again.'));
			}
		}
	}



	// public function add() {
    //     if ($this->request->is('post')) {
    //         $this->Project->create();
    //         if ($this->Project->save($this->request->data)) {
    //             $pid = $this->Project->getInsertID();
    //             $this->Uploader->uploadImage($this->request->data['Project']['image'], $pid, 'pj', 0, 600);
    //             $this->Uploader->uploadImage($this->request->data['Project']['image'], $pid . 't', 'pj', 0, 390);
    //             $this->Flash->success(__('The project has been saved.'));
    //             return $this->redirect(array('action' => 'index'));
    //         } else {
    //             $this->Flash->error(__('The project could not be saved. Please, try again.'));
    //         }
    //     }
    //     $products = $this->Project->Product->find('list');
    //     $clients = $this->Project->Client->find('list');
    //     $employees = $this->Project->Employee->find('list');
    //     $contractors = $this->Project->Contractor->find('list');
    //     $this->set(compact('products', 'clients', 'employees', 'contractors'));
    // }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Blog->exists($id)) {
			throw new NotFoundException(__('Invalid blog'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Blog->save($this->request->data)) {
				$this->Uploader->uploadImage($this->request->data['Blog']['image'], $id, 'bj', 0, 600);
                $this->Uploader->uploadImage($this->request->data['Blog']['image'], $id . 't', 'bj', 0, 390);
				$this->Flash->success(__('The blog has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The blog could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Blog.' . $this->Blog->primaryKey => $id));
			$this->request->data = $this->Blog->find('first', $options);
		}
		 if (is_file($this->Uploader->uploadDir('pj', $id))) {
            $this->set('img', 'bj/' . $id . ".png");
        }
	}




	// public function edit($id = null) {
    //     if (!$this->Project->exists($id)) {
    //         throw new NotFoundException(__('Invalid project'));
    //     }
    //     if ($this->request->is(array('post', 'put'))) {
    //         if ($this->Project->save($this->request->data)) {
    //             $this->Uploader->uploadImage($this->request->data['Project']['image'], $id, 'pj', 0, 600);
    //             $this->Uploader->uploadImage($this->request->data['Project']['image'], $id . 't', 'pj', 0, 390);
    //             $this->Flash->success(__('The project has been saved.'));
    //             return $this->redirect(array('action' => 'index'));
    //         } else {
    //             $this->Flash->error(__('The project could not be saved. Please, try again.'));
    //         }
    //     } else {
    //         $options = array('conditions' => array('Project.' . $this->Project->primaryKey => $id));
    //         $this->request->data = $this->Project->find('first', $options);
    //     }
    //     if (is_file($this->Uploader->uploadDir('pj', $id))) {
    //         $this->set('img', 'pj/' . $id . ".png");
    //     }

    //     $products = $this->Project->Product->find('list');
    //     $clients = $this->Project->Client->find('list');
    //     $employees = $this->Project->Employee->find('list');
    //     $contractors = $this->Project->Contractor->find('list');
    //     $this->set(compact('products', 'clients', 'employees', 'contractors'));
    // }

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Blog->id = $id;
		if (!$this->Blog->exists()) {
			throw new NotFoundException(__('Invalid blog'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Blog->delete()) {
			$this->Flash->success(__('The blog has been deleted.'));
		} else {
			$this->Flash->error(__('The blog could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
