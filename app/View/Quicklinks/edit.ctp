<div class="quicklinks form">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Quicklink</div>
        <br>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?php echo $this->Form->create('Quicklink'); ?>

            <?php
            echo $this->Form->input('id');
            echo $this->Form->input('name');
            echo $this->Form->input('links');
            echo $this->Form->input('status');
            ?>

            <?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'contact-btn')); ?>
        </div>

    </div>

</div>
