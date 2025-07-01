<div class="employees form">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Employee</div>
        <br>
    </div>

    <div class="row">
        <div class="col-md-12 divcard">
            <?php echo $this->Form->create('Employee', array('type' => 'file')); ?>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('name'); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('designation'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('phone'); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('email'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('present_address'); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('permanent_address'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('gender', array('type' => 'select')); ?>

                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('marital_status', array('type' => 'select', 'options' => $mastatus)); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('religion', array('type' => 'select')); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('birthdate', array('type' => 'text')); ?>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('blood_group', array('type' => 'select', 'options' => $bloodgs)); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('join_date', array('type' => 'text')); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('leave_date', array('type' => 'text')); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('leav_type', array('type' => 'select', 'empty' => 'Please select', 'options' => $leavetypes)); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('salary'); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('bonus'); ?>
                </div>
            </div>

            <?php
            echo $this->Form->input('education', array('label' => 'Education (Last Educational Qualification & Institution)'));
            ?>

            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('status'); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('image', array('label' => 'Recent Photo', 'type' => 'file', 'class' => 'pageimage')); ?>
                </div>
            </div>

            <?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'contact-btn')); ?>
        </div>

    </div>
    <br>
</div>
<?php
echo $this->Html->css(array('jquery-ui.min'));
echo $this->Html->script(array('jquery-ui.min'));
?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#EmployeeBirthdate, #EmployeeJoinDate, #EmployeeLeaveDate').datepicker();
    });
</script>