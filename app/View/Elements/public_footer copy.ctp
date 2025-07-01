<footer>
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-5 col-xs-12">
                    <div class="footer-content">
                        <div class="footer-head">
                            <div class="footer-logo">
                                <?php
                                echo $this->Html->link(
                                        $this->Html->image('logo.png', array('alt' => 'logo')), '/', array('escape' => false)
                                );
                                ?>
                            </div>
                            <p>
                                Follow Software End
                            </p>
                            <div class="footer-icons">
                                <ul>
                                    <li><a href="skype:<?php echo SKYPE; ?>"><i class="fa fa-skype"></i></a></li>
                                    <li><a href="<?php echo LINKEDIN; ?>" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="<?php echo GPLUS; ?>" target="_blank"><i class="fa fa-google"></i></a></li>
                                    <li><a href="<?php echo TWITTER; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="<?php echo FACEBOOK; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end single footer -->
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="footer-content">
                        <div class="footer-head">
                            <h4>Quick Link</h4>
                            <ul class="footer-list">
                                <?php foreach ($links as $link) { ?>
                                    <li><?php echo $this->Html->link($link['Quicklink']['name'], $link['Quicklink']['links'], array('escape' => false, 'target' => '_blank'));?></li>
                                 
                                   <?php  }?>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end single footer -->
                <div class="col-md-2 hidden-sm col-xs-12">
                    <div class="footer-content">
                        <div class="footer-head">
                            <h4>Tags</h4>
                            <ul class="footer-tags">
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Industry </a></li>
                                <li><a href="#">Tax</a></li>
                                <li><a href="#">Planning</a></li>
                                <li><a href="#">Online</a></li>
                                <li><a href="#">Consulting</a></li>
                                <li><a href="#">Maketing</a></li>
                                <li><a href="#">Expert</a></li>
                                <li><a href="#">Consulting</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end single footer -->
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="footer-content">
                        <div class="footer-head">
                            <h4>Subscribe</h4>
                            <p>
                                Subscribe to our newsletter
                            </p>
                            <div class="subs-feilds">
                                <div class="suscribe-input">
                                    <?php echo $this->Form->create('Subscribe'); ?>
                                    <?php echo $this->Form->input('email',array('type'=>'email','class'=>'email form-control width-80','placeholder'=>'Type Email','label'=>false)); ?>
                                    <button type="submit" id="sus_submit" class="add-btn">Subscribe</button>
                                    <?php echo $this->Form->end(); ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-area-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="copyright">
                        <p>
                            Copyright &copy; 2018
                            <a href="#">Software End</a> All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>