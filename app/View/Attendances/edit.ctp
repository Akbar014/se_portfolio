<div class="attendances form">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Attendance</div>
        <br>
    </div>

    <div class="row">
        <div class="col-md-12 divcard">
            
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <?php echo $this->Form->create('Attendance'); ?>
                    <?php
                    echo $this->Form->input('id');
                    echo $this->Form->input('employee_id');
                    echo $this->Form->input('a_date', array('type' => 'text','label'=>'Attendance Date'));
                    echo $this->Form->input('in_time');
                    echo $this->Form->input('out_time');
                    ?>
                    <?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'contact-btn')); ?>
                </div>
            </div>

        </div>

    </div>
    <br>

</div>
<?php
echo $this->Html->css(array('jquery-ui.min','jquery.ui.timepicker-addon'));
echo $this->Html->script(array('jquery.min','jquery-ui.min','jquery.ui.timepicker-addon'));
?>
<script type="text/javascript">
    $( document ).ready(function() {
        $('#AttendanceADate').datepicker();
        $('#AttendanceInTime, #AttendanceOutTime').timepicker();
   
});
</script>