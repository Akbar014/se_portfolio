<?php

App::uses('AppController', 'Controller');

/**
 * ProjectModifications Controller
 *
 * @property ProjectModification $ProjectModification
 * @property PaginatorComponent $Paginator
 */
class ProjectModificationsController extends AppController {

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
        $this->ProjectModification->recursive = 0;

        $conditions = array();
        if (!empty($this->request->data['Src']['nm'])) {
            $conditions[] = array("Project.name LIKE '%" . $this->request->data['Src']['nm'] . "%'");
        }

        if (!empty($this->request->data['Src']['df'])) {
            $conditions[] = array("ProjectModification.created >= " => $this->request->data['Src']['df']);
        }
        if (!empty($this->request->data['Src']['dt'])) {
            $conditions[] = array("ProjectModification.created <= " => $this->request->data['Src']['dt']);
        }
        $this->Paginator->settings = array('conditions' => $conditions, 'order' => array('ProjectModification.id' => 'DESC'));

        $this->set('projectModifications', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->ProjectModification->exists($id)) {
            throw new NotFoundException(__('Invalid project modification'));
        }
        $options = array('conditions' => array('ProjectModification.' . $this->ProjectModification->primaryKey => $id));
        $this->set('projectModification', $this->ProjectModification->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->ProjectModification->create();

            $project = $this->ProjectModification->Project->find('first', array('conditions' => array('Project.id' => $this->request->data['ProjectModification']['project_id']), 'recursive' => -1));
            //pr($this->request->data, 1);

            if ($this->ProjectModification->save($this->request->data)) {
                $project['Project']['price'] = ((float) $this->request->data['ProjectModification']['price'] + (float) $project['Project']['price']);
                $this->ProjectModification->Project->save($project);

                $this->Flash->success(__('The project modification has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The project modification could not be saved. Please, try again.'));
            }

            if ($this->ProjectModification->save($this->request->data)) {
                $this->Flash->success(__('The project modification has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The project modification could not be saved. Please, try again.'));
            }
        }
        $projects = $this->ProjectModification->Project->find('list');
        $employees = $this->ProjectModification->Employee->find('list');
        $this->set(compact('projects', 'employees'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->ProjectModification->id = $id;
        if (!$this->ProjectModification->exists()) {
            throw new NotFoundException(__('Invalid project modification'));
        }

        $receipt = $this->ProjectModification->find('first', array('conditions' => array('ProjectModification.id' => $id), 'recursive' => -1));

        $this->request->allowMethod('post', 'delete');
        if ($this->ProjectModification->delete()) {

            $project = $this->ProjectModification->Project->find('first', array('conditions' => array('Project.id' => $receipt['ProjectModification']['project_id']), 'recursive' => -1));
            $project['Project']['price'] = ((float) $project['Project']['price'] - (float) $receipt['ProjectModification']['price']);
            $this->ProjectModification->Project->save($project);

            $this->Flash->success(__('The project modification has been deleted.'));
        } else {
            $this->Flash->error(__('The project modification could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
