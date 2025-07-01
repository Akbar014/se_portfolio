<div class="sliders form">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Slider</div>
        <br>
    </div>
    
    <div class="row">
        <div class="col-md-12 divcard">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <?php echo $this->Form->create('Slider',array('type' => 'file')); ?>
                    <?php
                     echo $this->Form->input('id');
                    echo $this->Form->input('title');
                    echo $this->Form->input('content');
                    echo $this->Form->input('seq');
                    if (!empty($img)) {
                        echo '<div class="control-group text">
                            <label>Uploaded Image</label>
                            ' . $this->Html->image($img, array('alt' => 'No Image', 'width' => '100')) . '
                        </div>';
                    }
                    echo $this->Form->input('image', array('label' => 'Slider Image', 'type' => 'file', 'class' => 'pageimage2'));
                    echo $this->Form->input('status');
                    ?>

                    <?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'contact-btn')); ?>
                </div>

            </div>

        </div>

    </div>
    <br>
       
</div>
