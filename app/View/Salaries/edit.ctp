<div class="salaries form">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Salary</div>
        <br>
    </div>
    
        <div class="row">
            <div class="col-md-12 divcard">
                <?php echo $this->Form->create('Salary'); ?>
                <div class="row">
                    <div class="col-lg-6">
                        <?php
                        echo $this->Form->input('id');
                        echo $this->Form->input('employee_id');
                        ?>
                    </div>
                    <div class="col-lg-6">
                        <?php echo $this->Form->input('days',array('label'=>'Working Days')); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <?php echo $this->Form->input('leaves'); ?>
                    </div>
                    <div class="col-lg-6">
                        <?php echo $this->Form->input('presents'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <?php echo $this->Form->input('salary'); ?>
                    </div>
                    <div class="col-lg-6">
                        <?php echo $this->Form->input('bonus'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <?php echo $this->Form->input('amount'); ?>
                    </div>
                    <div class="col-lg-6">
                        <?php echo $this->Form->input('sal_month',array('label'=>'Month of Salary')); ?>
                    </div>
                </div>



                <?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'contact-btn')); ?>
            </div>

        </div>
        <br>
   
</div>
