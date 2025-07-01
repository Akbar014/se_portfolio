<div class="breadcrumb-area contact" style="background-image: url('https://softwareend.com/assets/front/img/642e9a94e317e.jpg');background-size:cover;">
    <div class="container">
        <div class="breadcrumb-txt">
            <div class="row">
                <div class="col-xl-7 col-lg-8 col-sm-10">
                    <span>Contact Us</span>
                    <h1>Need information? contact us</h1>
                    <ul class="breadcumb">
                        <li><a href="https://softwareend.com">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-area-overlay"></div>
</div>





<div class="contact-form-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <span class="section-title">Contact us</span>
                <h2 class="section-summary">Need information fill form and send us</h2>
                <!-- <form action="https://softwareend.com/sendmail" class="contact-form" method="POST">
                    <input type="hidden" name="_token" value="d15qrF6c81Fi2IYVFNZ3Lmd9at5rIMyC1sSFlxUh">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-element">
                                <input name="name" type="text" placeholder="Name" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-element">
                                <input name="email" type="email" placeholder="Email" required="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-element">
                                <input name="subject" type="text" placeholder="Subject" required="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-element">
                                <textarea name="message" id="comment" cols="30" rows="10" placeholder="Comment" required=""></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <script src="https://www.google.com/recaptcha/api.js?" async="" defer=""></script>

                            <div data-sitekey="6LfEX70UAAAAAJy7CKDHaIMRnb8JlwDuWy4u7NCo" class="g-recaptcha">
                                <div style="width: 304px; height: 78px;">
                                    <div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-8914klzc21na" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfEX70UAAAAAJy7CKDHaIMRnb8JlwDuWy4u7NCo&amp;co=aHR0cHM6Ly9zb2Z0d2FyZWVuZC5jb206NDQz&amp;hl=en&amp;v=h7qt2xUGz2zqKEhSc8DD8baZ&amp;size=normal&amp;cb=2pwechdszptn"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                </div><iframe style="display: none;"></iframe>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-element no-margin">
                                <input type="submit" value="Submit">
                            </div>
                        </div>
                    </div>
                </form> -->
                                      


                <?php echo $this->Form->create('Contact'); ?>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name', 'label' => false)); ?>
                    <div class="help-block with-errors"></div>
                </div>
            
                <div class="col-md-12 col-sm-6 col-xs-12">
                    <?php echo $this->Form->input('email', array(
                        'type' => 'email',
                        'class' => 'email form-control',
                        'placeholder' => 'Email',
                        'data-error' => 'Please enter your email',
                        'label' => false
                    )); ?>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="col-md-12 col-sm-6 col-xs-12">
                    <?php echo $this->Form->input('phone', array(
                        'type' => 'text',
                        'class' => 'form-control',
                        'placeholder' => 'Phone',
                        'data-error' => 'Please enter your phone number',
                        'label' => false
                    )); ?>
                    <div class="help-block with-errors"></div>
                </div>


                <div class="col-md-12 col-sm-12 col-xs-12">
                    <?php echo $this->Form->input('subject', array('type' => 'text', 'class' => 'form-control', 'placeholder' => 'Subject', 'data-error' => 'Please enter your message subject', 'label' => false)); ?>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <?php echo $this->Form->input('message', array('type' => 'textarea', 'rows' => 7, 'class' => 'form-control', 'placeholder' => 'Message', 'data-error' => 'Write your message', 'label' => false)); ?>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'contact-btn')); ?>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                </div>
                <?php //echo $this->Form->end(__('Submit')); 
                ?>





            </div>
            <div class="col-lg-6">
                <div class="map-wrapper">


                    <div id="map" style="position: relative; overflow: hidden;">
                        <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                            <div class="gm-err-container">
                                <div class="gm-err-content">
                                    <!-- <div class="gm-err-icon"><img src="https://maps.gstatic.com/mapfiles/api-3/images/icon_error.png" alt="" draggable="false" style="user-select: none;"></div>
                                    <div class="gm-err-title">Oops! Something went wrong.</div>
                                    <div class="gm-err-message">This page didn't load Google Maps correctly. See the JavaScript console for technical details.</div> -->
                                    <iframe src="<?php echo GOOGLE_MAP; ?>" width="600" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="contact-infos">
                        <div class="single-contact-info">
                            <div class="icon-wrapper">
                                <i class="fa fa-home"></i>
                            </div>
                            <p><?php echo OFFICE_ADDRESS; ?> </p>
                        </div>
                        <div class="single-contact-info">
                            <div class="icon-wrapper">
                                <i class="fa fa-phone"></i>
                            </div>
                            <p><?php echo PHONE; ?></p>
                        </div>
                        <div class="single-contact-info">
                            <div class="icon-wrapper">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <p><?php echo ADMIN_EMAIL; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
if ($this->Session->check('Message.flash')) {
    $flash = $this->Session->read('Message.flash');
    $message = $flash['message'];
    $element = $flash['element'];
    $class = isset($flash['params']['class']) ? $flash['params']['class'] : 'success'; // default fallback
    $this->Session->delete('Message.flash');
?>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        Swal.fire({
            icon: '<?php echo ($class === "success") ? "success" : "error"; ?>',
            title: '<?php echo ($class === "success") ? "Success" : "Error"; ?>',
            text: '<?php echo addslashes($message); ?>',
            confirmButtonColor: '#3085d6'
        });
    });
</script>
<?php } ?>

