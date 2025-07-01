<?php

App::uses('AppController', 'Controller');

/**
 * Forsakes Controller
 * Owner: Abdul Jalil
 * http://www.softwareend.com
 * @property Forsake $Forsake
 * @property PaginatorComponent $Paginator
 */
class ForsakesController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');

    public function index() {
        $this->Forsake->recursive = 0;
        $conditions = array();
        if (!empty($this->request->data['Forsake']['date'])) {
            $conditions[] = array("Forsake.startDate <= '" . $this->request->data['Forsake']['date'] . "'");
        }
        if (!empty($this->request->data['Forsake']['datet'])) {
            $conditions[] = array("Forsake.endDate >= '" . $this->request->data['Forsake']['datet'] . "'");
        }
        if (!empty($this->request->data['Forsake']['user_id'])) {
            $conditions[] = array("Forsake.user_id = " . $this->request->data['Forsake']['user_id']);
        }
        $this->Paginator->settings = array('conditions' => $conditions, 'order' => array('Forsake.id' => 'DESC'));
        $this->set('forsakes', $this->Paginator->paginate());

        $totalForsakes = $this->Forsake->find('count', array('conditions' => $conditions));
        $users = $this->Forsake->User->find('list', array('conditions' => array('status <>' => '2'), 'order' => array('name' => 'ASC')));
        pr($users);
        $this->set(compact('totalForsakes', 'users'));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Forsake->exists($id)) {
            throw new NotFoundException(__('Invalid leave'));
        }
        $options = array('conditions' => array('Forsake.' . $this->Forsake->primaryKey => $id));
        $this->set('forsake', $this->Forsake->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $attendances = $this->Forsake->Employee->Attendance->find('list', array('conditions' => array('Attendance.employee_id' => $this->request->data['Forsake']['employee_id'], 'Attendance.a_date >=' => $this->request->data['Forsake']['startDate'], 'Attendance.a_date <=' => $this->request->data['Forsake']['endDate'])));
            if (count($attendances)) {
                $this->Flash->success(__('The leave could not be saved. Attendance exist.'));
                return $this->redirect(array('action' => 'index'));
            }

            $sDate = strtotime($this->request->data['Forsake']['startDate']);
            $eDate = strtotime($this->request->data['Forsake']['endDate']);
            $days = ($eDate - $sDate) / 86400;
            $this->request->data['Forsake']['days'] = $days + 1;

            $date_array = array();
            for ($i = $sDate; $i <= $eDate; $i = $i + 86400) {
                $thisDate = date('Y-m-d', $i);
                $date_array[$thisDate] = $thisDate;
            }

            $this->Forsake->create();
            if ($this->Forsake->save($this->request->data)) {
                $this->Flash->success(__('The leave has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->success(__('The leave could not be saved. Please, try again.'));
            }
        }

       $employees = $this->Forsake->Employee->find('list', array('conditions' => array('status' => E_ERROR), 'order' => array('name' => 'ASC')));
        $this->set(compact('employees'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Forsake->exists($id)) {
            throw new NotFoundException(__('Invalid leave'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $attendances = $this->Forsake->User->Attendance->find('list', array('conditions' => array('Attendance.user_id' => $this->request->data['Forsake']['user_id'], 'Attendance.a_date >=' => $this->request->data['Forsake']['startDate'], 'Attendance.a_date <=' => $this->request->data['Forsake']['endDate'])));
            if (count($attendances)) {
                $this->Flash->error(__('The leave could not be saved. Attendance exist.'));
                return $this->redirect(array('action' => 'index'));
            }

            $sDate = strtotime($this->request->data['Forsake']['startDate']);
            $eDate = strtotime($this->request->data['Forsake']['endDate']);
            $days = ($eDate - $sDate) / 86400;
            $this->request->data['Forsake']['days'] = $days + 1;

            $date_array = array();
            for ($i = $sDate; $i <= $eDate; $i = $i + 86400) {
                $thisDate = date('Y-m-d', $i);
                $date_array[$thisDate] = $thisDate;
            }

            if ($this->Forsake->save($this->request->data)) {
                $this->Flash->success(__('The leave has been updated.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->success(__('The leave could not be updated. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Forsake.' . $this->Forsake->primaryKey => $id));
            $this->request->data = $this->Forsake->find('first', $options);
        }
        $users = $this->Forsake->User->find('list', array('conditions' => array('status <>' => '2'), 'order' => array('name' => 'ASC')));
        $this->set(compact('users'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Forsake->id = $id;
        if (!$this->Forsake->exists()) {
            throw new NotFoundException(__('Invalid leave'));
        }
        if ($this->Forsake->delete()) {
            $this->Flash->success(__('The leave has been deleted.'));
        } else {
            $this->Flash->error(__('The leave could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
