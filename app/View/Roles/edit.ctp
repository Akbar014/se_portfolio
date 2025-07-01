
<div class="roles form">
    <div class="page_title">
        
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Role</div>
        <br>
    </div>
   
        <div class="row">
            <div class="col-lg-12 divcard">
                <?php echo $this->Form->create('Role'); ?>
                <div class="row">
                    <div class="col-lg-6">
                        <?php echo $this->Form->input('title');?>
                    </div>
                    <div class="col-lg-6">
                        <?php echo $this->Form->input('description');?>
                    </div>
                </div>
                
                    <?php
                    echo $this->Form->input('id');

                    $selvals = json_decode($this->request->data['Role']['roles'], true);

                    foreach ($menudata as $key => $value) {
                        echo '<div class="row"><div class="col-md-12" id="' . $key . '"><strong>' . str_replace('Controller', ' Management', $key) . '</strong>&nbsp;&nbsp;&nbsp;<a href="javascript:;" onclick="_sel(this, \'' . $key . '\')">Check All</a><br />';
                        foreach ($value as $k => $val) {
                            echo '<div class="col-md-2">';
                            if (isset($selvals[$key][$val]) && $selvals[$key][$val] == $val) {
                                echo $this->Form->input("Role.roles.$key.$val", array('type' => 'checkbox', 'checked' => true, 'value' => $val));
                            } else {
                                echo $this->Form->input("Role.roles.$key.$val", array('type' => 'checkbox', 'value' => $val));
                            }
                            echo '</div>';
                        }
                        echo '</div></div><hr>';
                    }

                    echo $this->Form->input('status');
                    ?>
              
                <?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'contact-btn')); ?>
            </div>
        </div>
   
</div>
<script>
    function _sel(id, area) {
        if ($(id).html() === 'Check All') {
            $('#' + area).find('input[type="checkbox"]').prop('checked', true);
            $(id).html('Uncheck All');
        } else {
            $('#' + area).find('input[type="checkbox"]').removeAttr('checked');
            $(id).html('Check All');
        }
    }
</script>