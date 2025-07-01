<?php

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public $components = array(
        'Session',
        'Auth' => array(
            'logoutRedirect' => array('controller' => 'pages', 'action' => 'home')
        ), 'Flash'
    );

    public function beforeFilter() {
        if ($this->Auth->loggedIn()) {
            $this->perms = json_decode($this->Auth->user('Role.roles'), true);
            $this->set('perms', $this->perms);
            $this->isAuthorized();
        }

        $this->set('current_user', $this->Auth->user());
        $this->set('status', array(E_ERROR => 'Active', PHP_DEBUG => 'Inactive', E_WARNING => 'Pending'));
        $this->set('types', array(E_ERROR => 'Page', E_WARNING => 'Link'));
        $this->set('payment_type', array(E_ERROR => 'Cash', E_WARNING => 'Bank', E_PARSE => 'bKash'));
        $this->set('forsake_type', array('1' => 'Sick leave', '2' => 'Sick part of the day', '3' => 'Maternity leave', '4' => 'Pregnancy-related sick leave', '5' => 'Welfare leave', '6' => 'Parental leave', '7' => 'Family care leave', '8' => 'Compassionate leave', '9' => 'Educational leave'));
        $this->set('menu_data', $this->getMenu());

        $this->getSiteSetting();
        $this->disableCache();

        $this->saveLog();
        $this->getlink();
    }

    private function isAuthorized() {
        if (in_array($this->params['action'], $this->Auth->allowedActions)) {
            return true;
        }
        if (!isset($this->perms[Inflector::camelize($this->params['controller']) . "Controller"][$this->params['action']]) || is_numeric($this->perms[Inflector::camelize($this->params['controller']) . "Controller"][$this->params['action']])) {
            //throw new UnauthorizedException(__('You are not authorized to access this page.'));
        } else {
            //echo Router::url(['controller' => $this->params['controller'], 'action' => 'index']);
            return true;
        }
    }

    private function getSiteSetting() {
        if (!defined('SITE_TITLE')) {
            $conf = ClassRegistry::init('Config')->find('list', array('fields' => array('key', 'value')));
            foreach ($conf as $key => $value) {
                define($key, $value);
            }
        }
    }

    private function saveLog() {
        $log = array();
        $log['Log']['id'] = null;
        $log['Log']['user_id'] = $this->Auth->user('id');
        $log['Log']['ip'] = $_SERVER['REMOTE_ADDR'];
        $log['Log']['port'] = $_SERVER['REMOTE_PORT'];
        $log['Log']['controller'] = $this->params['controller'];
        $log['Log']['action'] = $this->here;

        if ($this->request->isPost() || $this->request->isPut()) {
            $log['Log']['form_data'] = json_encode($this->request->data);
            //pr($log, 1);
        }

        ClassRegistry::init('Log')->save($log);
    }

    protected function getmenues() {
        $aCtrlClasses = App::objects('controller');
        $ignore = 'AppController';
        App::import('Controller', $ignore);
        $ignoreActions = get_class_methods($ignore);

        $controllers = array();
        foreach ($aCtrlClasses as $controller) {
            if ($controller != $ignore) {
                App::import('Controller', str_replace('Controller', '', $controller));
                $logions = get_class_methods($controller);
                $controllers[$controller] = array_diff($logions, $ignoreActions);

                foreach ($controllers[$controller] as $key => $value) {
                    unset($controllers[$controller][$key]);
                    $controllers[$controller][$value] = $value;
                }
            }
        }

        return $controllers;
    }

    private function getMenu() {
        $this->loadModel('Menu');
        $data = $this->Menu->find(
            'threaded',
            array(
                'recursive' => -1,
                'fields' => array(
                    'Menu.id',
                    'Menu.parent_id',
                    'Menu.name',
                    'Menu.slug',
                    'Menu.url',
                    'Menu.type'
                ),
                'conditions' => array('Menu.status' => E_ERROR),
                'order' => array('Menu.order')
            )
        );

        return $data;
    }

    protected function tojson($arrr, $object) {
        $arrs = array();
        foreach ($arrr as $arr) {
            $arrs[] = $arr[$object];
        }
        return json_encode($arrs);
    }

    private function getlink() {
        $this->loadModel('Quicklink');
        $links = $this->Quicklink->find('all', array('conditions' => array('status' => E_ERROR)));
        $this->set('links', $links);
    }
}
