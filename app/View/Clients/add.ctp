<div class="clients form">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Client</div>
        <br>
    </div>

    <div class="row">
        <div class="col-md-12 divcard">
            <?php echo $this->Form->create('Client',array('type'=>'file')); ?>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('name'); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('email'); ?>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('phone'); ?>

                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('mobile'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('web'); ?>


                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('address'); ?>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('contact_person'); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('contact_phone'); ?>
                </div>
            </div>
            
            <?php
            echo $this->Form->input('description');
            ?>

            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('status'); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('image', array('label' => 'Recent Photo', 'type' => 'file', 'class' => 'pageimage')); ?>
                </div>
            </div>

            <?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'contact-btn')); ?>
        </div>

    </div>
    <br>

</div>
