<!-- Start contact Area -->
<div class="contact-page area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="contact-head">
                    <div class="contact-icon">
                        <div class="contact-inner">
                            <h5>Location :</h5>
                            <a href="#"><i class="fa fa-map"></i><span><?php echo OFFICE_ADDRESS?></span></a>
                            <a href="#"><i class="fa fa-phone"></i><span><?php echo PHONE?></span></a>
                            <a href="#"><i class="fa fa-envelope"></i><span><?php echo ADMIN_EMAIL?></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End contact icon -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="contact-form">
                    <div class="row">
                        <?php echo $this->Form->create('Contact'); ?>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <?php echo $this->Form->input('name',array('class'=>'form-control','placeholder'=>'Name','label'=>false));?>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?php echo $this->Form->input('email',array('type'=>'email','class'=>'email form-control','placeholder'=>'Email','data-error'=>'Please enter your email','label'=>false));?>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?php echo $this->Form->input('phone',array('type'=>'text','class'=>'form-control','placeholder'=>'Phone','data-error'=>'Please enter your phone number','label'=>false));?>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <?php echo $this->Form->input('subject',array('type'=>'text','class'=>'form-control','placeholder'=>'Subject','data-error'=>'Please enter your message subject','label'=>false));?>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <?php echo $this->Form->input('message',array('type'=>'textarea','rows'=>7,'class'=>'form-control','placeholder'=>'Message','data-error'=>'Write your message','label'=>false));?>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                <?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'contact-btn')); ?>
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
<!-- Start contact Area -->
<div class="map-area">
    <div class="container-full">
        <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- Start Map -->
                <div class="map-area">
                    <iframe src="<?php echo trim(GOOGLE_MAP); ?>" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <!-- End Map -->
            </div>
        </div>
    </div>
</div>
<!-- Start Footer bottom Area -->