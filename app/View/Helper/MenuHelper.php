
<?php

App::uses('AppHelper', 'View/Helper');

class MenuHelper extends AppHelper {

    public $helpers = array('Html');

    public function menuGenerator2($strmenus, $strsub, $styleUlclass = null, $styleLiclass = null, $link = 1, $sortable = 1, $lang = null) {
        if ($strsub == NULL) {
            $strsub = $strmenus;
            foreach ($strmenus as $k => $v) {
                if ($v['Menu']['parent_id'] > 0) {
                    unset($strmenus[$k]);
                }
            }
        }

        $html = '<ul' . ($styleUlclass ? ' class="' . $styleUlclass . '"' : '') . '>';
        foreach ($strmenus as $strmenu) {
            //pr($strmenu);
            foreach ($strsub as $k => $v) {
                if ($v['Menu']['parent_id'] != $strmenu['Menu']['id']) {
                    unset($strsub[$k]);
                }
            }

            if (count($strsub) > 0) {
                $html .= '<li class="dropdown">';
                $caret = '<b class="caret"></b>';
                $extra = array('escape' => false, "class" => "dropdown-toggle", "data-toggle" => "dropdown");
            } else {
                $html .= '<li>';
                $caret = '';
                $extra = array('escape' => false);
            }

            if ($strmenu['Menu']['type'] == E_ERROR) {
                $html .= $this->Html->link($strmenu ['Menu']['name'] . $caret, array('controller' => 'pages', 'action' => 'page', $strmenu['Menu']['slug']), $extra);
            } else {
                $arrpg = explode("/", $strmenu['Menu']['url']);
                //pr($arrpg);
                $html .= $this->Html->link($strmenu['Menu']['name'] . $caret, array('controller' => $arrpg[0], 'action' => $arrpg[1]), $extra);
            }

            if (count($strsub) > 0) {
                $html .= $this->menuGenerator($strsub, $strmenus, 'dropdown-menu');
            }

            $html .= '</li>';
        }
        $html .= '</ul>';

        return $html;
    }

    //public menu generator
    public function menuGenerator($threaded, $level = 0, $styleUlclass = null) {
        $html = '<ul class="' . $styleUlclass . '">';
        foreach ($threaded as $key => $node) {
            if (!empty($node['children'][0]['Menu'])) {
                $html .= '<li class="dropdown open">';
                $caret = '<b class="caret"></b>';
                $extra = array('escape' => false, "class" => "dropdown-toggle", "data-toggle" => "dropdown");
            } else {
                $caret = "";
                $html .= '<li>';
                $extra = array('escape' => false);
            }
            foreach ($node as $type => $threaded) {
                if ($type !== 'children') {
                    if ($threaded['type'] == E_ERROR) {
                        $html .= $this->Html->link($threaded['name'] . $caret, array('controller' => 'pages', 'action' => 'page', $threaded['slug']), $extra);
                    } else {
                        $arrpg = explode("/", $threaded['url']);
                        $html .= $this->Html->link($threaded['name'] . $caret, array('controller' => $arrpg[0], 'action' => $arrpg[1]), $extra);
                    }
                } else {
                    if (!empty($threaded)) {
                        $html .= $this->menuGenerator($threaded, $level + 2, 'sub-menu');
                    }
                }
            }
            $html .= '</li>';
        }
        $html .= '</ul>';

        return $html;
    }

}
