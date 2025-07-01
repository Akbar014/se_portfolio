
<div class="courses form">
    <div class="page_title">
        
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Config</div>
        <br>
    </div>
   
        <div class="row">
            <div class="col-md-12 divcard">
                <?php echo $this->Form->create('Config'); ?>
                
                    <?php
                    echo $this->Form->input('id');

                    echo $this->Form->input('SITE_TITLE', array('label' => 'SITE TITLE', 'class' => 'form-control', 'required' => true, 'value' => SITE_TITLE));
                    echo $this->Form->input('PHONE', array('label' => 'PHONE', 'class' => 'form-control', 'required' => true, 'value' => PHONE));
                    echo $this->Form->input('ADMIN_EMAIL', array('label' => 'ADMIN EMAIL', 'class' => 'form-control', 'required' => true, 'value' => ADMIN_EMAIL));
                    echo $this->Form->input('TEMPLATE', array('label' => 'TEMPLATE', 'class' => 'form-control', 'required' => true, 'value' => TEMPLATE));
                    echo $this->Form->input('OFFICE_ADDRESS', array('label' => 'OFFICE_ADDRESS', 'class' => 'form-control', 'required' => true, 'value' => OFFICE_ADDRESS));
                    echo $this->Form->input('LOGIN_TITLE', array('label' => 'LOGIN TITLE', 'class' => 'form-control', 'required' => true, 'value' => LOGIN_TITLE));
                    echo $this->Form->input('PRINT_INSURANCE', array('label' => 'PRINT INSURANCE', 'class' => 'form-control', 'required' => true, 'value' => PRINT_INSURANCE));

                    echo $this->Form->input('GOOGLE_MAP', array('type' => 'textarea', 'rows'=>3,'label' => 'GOOGLE MAP', 'class' => 'form-control', 'required' => true, 'value' => GOOGLE_MAP));
                    echo $this->Form->input('SKYPE', array('label' => 'SKYPE', 'class' => 'form-control', 'required' => true, 'value' => SKYPE));
                    echo $this->Form->input('FACEBOOK', array('label' => 'FACEBOOK LINK', 'class' => 'form-control', 'required' => true, 'value' => FACEBOOK));
                    echo $this->Form->input('TWITTER', array('label' => 'TWITTER LINK', 'class' => 'form-control', 'required' => true, 'value' => TWITTER));
                    echo $this->Form->input('GPLUS', array('label' => 'GOOGLE_PLUS LINK', 'class' => 'form-control', 'required' => true, 'value' => GPLUS));
                    echo $this->Form->input('LINKEDIN', array('label' => 'LINKEDIN LINK', 'class' => 'form-control', 'required' => true, 'value' => LINKEDIN));

                    ?>
                <?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'contact-btn')); ?>
            </div>

        </div>
    <br>
   
</div>

<?php
echo $this->Html->script(array('ckeditor/ckeditor'));
?>
<script type="text/javascript">
//<![CDATA[
    CKEDITOR.replace('ConfigABOUTUS');
//]]>
</script>