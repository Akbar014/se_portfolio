<?php

App::uses('AppController', 'Controller');

/**
 * Employees Controller
 *
 * @property Employee $Employee
 * @property PaginatorComponent $Paginator
 */
class EmployeesController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Uploader');
    private $genders = array('1' => 'Male', '2' => 'Female', '3' => 'Neuter');
    private $leavetypes = array('1' => 'Willingly', '2' => 'Sacked', '3' => 'Other');
    private $bloodgs = array('1' => 'A+ve', '2' => 'B+ve', '3' => 'AB+ve', '4' => 'O+ve', '5' => 'A-ve', '6' => 'B-ve', '7' => 'AB-ve', '8' => 'O-ve');
    private $mastatus = array('1' => 'Married (and not separated)', '2' => 'Living common law', '3' => 'Widowed', '4' => 'Separated', '5' => 'Divorced', '6' => 'Single');
    private $religions = array('1' => 'Islam', '2' => 'Hinduism', '3' => 'Christianity', '4' => 'Catholicism', '5' => 'Agnosticism', '6' => 'Buddhism', '7' => 'Atheism', '8' => 'Anglicanism', '9' => 'Sikhism', '10' => 'Seventh-Day Adventists', '11' => 'Mormonism', '12' => 'Judaism');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->set('mastatus', $this->mastatus);
        $this->set('bloodgs', $this->bloodgs);
        $this->set('genders', $this->genders);
        $this->set('religions', $this->religions);
        $this->set('leavetypes', $this->leavetypes);
    }

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Employee->recursive = 0;

        $conditions = array();

        if (!empty($this->request->data['Src']['nm'])) {
            $conditions[] = array("Employee.name LIKE '%" . $this->request->data['Src']['nm'] . "%'");
        }

        if (!empty($this->request->data['Src']['df'])) {
            $conditions[] = array("Employee.created >= " => $this->request->data['Src']['df']);
        }
        if (!empty($this->request->data['Src']['dt'])) {
            $conditions[] = array("Employee.created <= " =>  $this->request->data['Src']['dt']);
        }

        $this->Paginator->settings = array('conditions' => $conditions, 'order' => array('Employee.id' => 'DESC'));
        $this->set('employees', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Employee->exists($id)) {
            throw new NotFoundException(__('Invalid employee'));
        }
        $options = array('conditions' => array('Employee.' . $this->Employee->primaryKey => $id));
        $this->set('employee', $this->Employee->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Employee->create();
            if ($this->Employee->save($this->request->data)) {
                $this->Uploader->uploadImage($this->request->data['Employee']['image'], $this->Employee->getInsertID(), 'em', 0, 150);
                $this->Flash->success(__('The employee has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The employee could not be saved. Please, try again.'));
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
        if (!$this->Employee->exists($id)) {
            throw new NotFoundException(__('Invalid employee'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Employee->save($this->request->data)) {
                $this->Uploader->uploadImage($this->request->data['Employee']['image'], $id, 'em', 0, 150);
                $this->Flash->success(__('The employee has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                debug($this->Employee->invalidFields());
                $this->Flash->error(__('The employee could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Employee.' . $this->Employee->primaryKey => $id));
            $this->request->data = $this->Employee->find('first', $options);
        }
        
        if (is_file($this->Uploader->uploadDir('em', $id))) {
            $this->set('img', 'em/' . $id . ".png");
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
        $this->Employee->id = $id;
        if (!$this->Employee->exists()) {
            throw new NotFoundException(__('Invalid employee'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Employee->delete()) {
            $this->Flash->success(__('The employee has been deleted.'));
        } else {
            $this->Flash->error(__('The employee could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
