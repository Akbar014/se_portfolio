<?php

App::uses('AppController', 'Controller');

/**
 * Attendances Controller
 * Owner: Abdul Jalil
 * http://www.softwareend.com
 * @property Attendance $Attendance
 * @property PaginatorComponent $Paginator
 */
class AttendancesController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');

    public function index() {
        $this->loadModel('User');
        $this->Attendance->recursive = 0;

        $conditions = array();
        if (!empty($this->request->data['Attendance']['date'])) {
            $conditions[] = array("Attendance.a_date = '" . $this->request->data['Attendance']['date'] . "'");
        }
        if (!empty($this->request->data['Attendance']['user_id'])) {
            $conditions[] = array("Attendance.user_id = " . $this->request->data['Attendance']['user_id']);
        }
        $this->Paginator->settings = array('conditions' => $conditions, 'order' => array('Attendance.id' => 'DESC'));
        $this->set('attendances', $this->Paginator->paginate());


        $totalAttendances = $this->Attendance->find('count', array('conditions' => $conditions));
        $users = $this->Attendance->Employee->find('list', array('conditions' => array('status' => E_ERROR), 'order' => array('name' => 'ASC')));
        $roles = $this->User->Role->find('list', array('conditions' => array('status' =>E_ERROR), 'order' => array('title' => 'ASC')));
        $this->set(compact('totalAttendances', 'users', 'roles'));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        $this->loadModel('User');
        if ($this->request->is('post') && !empty($this->request->data['Report']['subdate'])) {
            //pr($this->request->data,1);
            foreach ($this->request->data['Employee'] as $value) {
                $this->Attendance->create();
                if ($this->Attendance->save($value)) {
                    $this->Flash->success(__('The attendance has been saved.'));
                } else {
                    $this->Flash->error(__('The attendance could not be saved. Please, try again.'));
                }
            }
            return $this->redirect(array('action' => 'index'));
        }

        $atd_data = array();
        $date = (!empty($this->request->data['Search']['date'])) ? $this->request->data['Search']['date'] : date('Y-m-d');
        $attendances = $this->Attendance->find('all', array('conditions' => array('Attendance.a_date' => $date), 'recursive' => -1));
        foreach ($attendances as $row) {
            $atd_data[$row['Attendance']['employee_id']] = array($row['Attendance']['id'], $row['Attendance']['in_time'], $row['Attendance']['out_time']);
        }
        $leaves = $this->Attendance->Employee->Forsake->find('all', array('conditions' => array("Forsake.startDate<='" . $date . "'", "Forsake.endDate>='" . $date . "'"), 'recursive' => -1));
        foreach ($leaves as $row) {
            $atd_data[$row['Forsake']['employee_id']][3] = 1;
        }

        $this->loadModel('Holiday');
        
        $holiday = $this->Holiday->find('first', array('conditions' => array('DATE(Holiday.hdate)' => $date)));
        $employees = $this->Attendance->Employee->find('all', array('conditions' => array('Employee.status' => E_ERROR), 'recursive' => -1));
        $roles = $this->User->Role->find('list', array('conditions' => array('status <>' => '2'), 'order' => array('title' => 'ASC')));
        $this->set(compact('atd_data', 'employees', 'roles', 'date', 'holiday'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Attendance->id = $id;
        if (!$this->Attendance->exists()) {
            throw new NotFoundException(__('Invalid attendance'));
        }
        if ($this->Attendance->delete()) {
            $this->Flash->success(__('The attendance has been deleted.'));
        } else {
            $this->Flash->error(__('The attendance could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
