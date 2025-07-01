<div class="projectRequirements form">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Project Modification</div>
        <br>
    </div>
    <div class="row">
        <div class="col-md-12 divcard">
            <?php echo $this->Form->create('ProjectModification'); ?>
            <fieldset>
                <legend><?php echo __('Add Project Modification'); ?></legend>
                <?php
                echo $this->Form->input('project_id');
                echo $this->Form->input('employee_id');
                echo $this->Form->input('modification');
                echo $this->Form->input('price');
                echo $this->Form->input('start_date', array('type' => 'text'));
                echo $this->Form->input('end_date', array('type' => 'text'));
                echo $this->Form->input('approve_date', array('type' => 'text'));
                echo $this->Form->input('status');
                ?>
            </fieldset>
            <?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'contact-btn')); ?>
        </div>

    </div>
    <br>
</div>

<?php
echo $this->Html->css(array('jquery-ui.min'));
echo $this->Html->script(array('jquery.min', 'jquery-ui.min'));
?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#ProjectModificationStartDate').datepicker();
        $('#ProjectModificationEndDate').datepicker();
        $('#ProjectModificationApproveDate').datepicker();
    });
</script>
