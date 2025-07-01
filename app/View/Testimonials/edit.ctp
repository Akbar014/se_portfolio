

<div class="testimonials form">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Testimonial</div>
        <br>
    </div>

    <div class="row">
        <div class="col-md-12 divcard">
            
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <?php echo $this->Form->create('Testimonial',array('type' => 'file')); ?>
                    <?php
                    echo $this->Form->input('id');
                    echo $this->Form->input('title');
                    echo $this->Form->input('creator');
                    echo $this->Form->input('content',array('type'=>'textarea','rows'=>3));
                    echo $this->Form->input('designation',array('label'=>'Designation & Organization'));
                    if (!empty($img)) {
                        echo '<div class="control-group text">
                            <label>Uploaded Photo</label>
                            ' . $this->Html->image($img, array('alt' => 'No Image', 'width' => '100')) . '
                        </div>';
                    }
                    echo $this->Form->input('image', array('label' => 'Recent Photo', 'type' => 'file', 'class' => 'pageimage2'));
                    echo $this->Form->input('status');
                    ?>
                    <?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'contact-btn')); ?>
                </div>
                
                
            </div>
            
                    
            

        </div>

    </div>
    <br>

</div>
