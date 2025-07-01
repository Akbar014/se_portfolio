<div class="forsakes form">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Forsake</div>
        <br>
    </div>
    
    <div class="row">
        <div class="col-md-12 divcard">
<?php echo $this->Form->create('Forsake'); ?>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('employee_id'); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('forsake_type',array('type'=>'select','options'=>$forsake_type)); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('days',array('type'=>'text')); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('applyDate',array('type'=>'text')); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('startDate',array('type'=>'text')); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('endDate',array('type'=>'text')); ?>
                </div>
            </div>
            
	<?php
		
		echo $this->Form->input('comments',array('type'=>'textarea','rows'=>3));
		echo $this->Form->input('status');
	?>
	
<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'contact-btn')); ?>
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
        $('#ForsakeApplyDate, #ForsakeStartDate, #ForsakeEndDate').datepicker();
   
});
</script>