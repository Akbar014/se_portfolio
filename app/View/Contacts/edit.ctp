<div class="contacts form">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Contact</div>
        <br>
    </div>

    <div class="row">
        <div class="col-md-12 divcard">
            <?php echo $this->Form->create('Contact'); ?>
            <div class="row">
                <div class="col-lg-6">
                    <?php  
                    echo $this->Form->input('id');
                    echo $this->Form->input('name');
                    ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('email'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php  
                    echo $this->Form->input('phone');
                    ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('subject'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php  
                    echo $this->Form->input('message');
                    ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('replay'); ?>
                </div>
            </div>

            <?php
           
            echo $this->Form->input('status');
            ?>

            <?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'contact-btn')); ?>
        </div>

    </div>
    <br>

</div>
