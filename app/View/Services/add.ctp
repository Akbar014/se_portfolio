<div class="services form">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Service</div>
        <br>
    </div>

    <div class="row">
        <div class="col-md-12 divcard">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <?php echo $this->Form->create('Service'); ?>
                    <?php
                    echo $this->Form->input('name');
                    echo $this->Form->input('description');
                    echo $this->Form->input('status');
                    ?>

                    <?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'contact-btn')); ?>
                </div>

            </div>

        </div>

    </div>
    <br>

</div>
