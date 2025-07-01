<div class="domains form">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Domain</div>
        <br>
    </div>
    <div class="row">
        <div class="col-md-12 divcard">
            <?php echo $this->Form->create('Domain'); ?>
            <fieldset>
                <legend><?php echo __('Edit Domain'); ?></legend>
                <?php
                echo $this->Form->input('id');
                echo $this->Form->input('project_id');
                echo $this->Form->input('name');
                echo $this->Form->input('purchase_date', array('type' => 'text'));
                echo $this->Form->input('price');
                echo $this->Form->input('exchange_rate');
                echo $this->Form->input('paid');
                echo $this->Form->input('for_year');
                echo $this->Form->input('status');
                ?>
            </fieldset>
            <?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'contact-btn')); ?>
        </div>
    </div>
    <br>
</div>
