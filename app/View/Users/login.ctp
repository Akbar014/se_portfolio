

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="page_title ">
    <div class="pagenation">&nbsp;<?php echo $this->Html->link("Home", '/', array('escape' => false)); ?> <i>/</i> Login</div>
    <br>
</div>

<!-- Start contact Area -->
<div class="contact-page area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 col-lg-offset-4">
                <div class="contact-form">
                    <div class="row">
                        <?php echo $this->Form->create('User'); ?>
                        
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php echo $this->Form->input('username', array('label' => false, 'class' => 'form-control', 'autofocus' => 'on', 'placeholder' => 'Username','required'=>FALSE)); ?>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php echo $this->Form->input('password', array('label' => false, 'type' => 'password', 'class' => 'form-control', 'autofocus' => 'on', 'placeholder' => 'Password','required'=>FALSE)); ?>
                            <div class="help-block with-errors"></div>
                        </div>
                        
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                            <?php echo $this->Form->end(array('label' => 'Log In', 'class' => 'contact-btn')); ?>
                            <div id="msgSubmit" class="h3 text-center hidden"></div> 
                            <div class="clearfix"></div>
                        </div>   
                        <?php //echo $this->Form->end(__('Submit')); ?>
                    </div>
                </div>
            </div>
            <!-- End contact Form -->
        </div>
    </div>

</div>