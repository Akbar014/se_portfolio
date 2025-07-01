<div class="holidays form">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Holiday</div>
        <br>
    </div>

    <div class="row">
        <div class="col-md-12 divcard">
           
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                     <?php echo $this->Form->create('Holiday'); ?>
                    <?php 
                     echo $this->Form->input('id');
                    echo $this->Form->input('title');
                    echo $this->Form->input('hdate',array('type'=>'text','label'=>'Holiday Date'));
                    echo $this->Form->input('status');
                    ?>
                    <?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'contact-btn')); ?>
                </div>
                
            </div>
            
        </div>
        
    </div>
    <br>

</div>
<?php
echo $this->Html->css(array('jquery-ui.min'));
echo $this->Html->script(array('jquery.min','jquery-ui.min'));
?>
<script type="text/javascript">
    $( document ).ready(function() {
        $('#HolidayHdate').datepicker();
   
});
</script>