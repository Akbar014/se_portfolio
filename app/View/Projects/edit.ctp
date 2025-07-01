<div class="projects form">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Project</div>
        <br>
    </div>

    <div class="row">
        <div class="col-md-12 divcard">
            <?php echo $this->Form->create('Project', array('type' => 'file')); ?>
            <div class="row">
                <div class="col-lg-6">
                    <?php
                    echo $this->Form->input('id');
                    echo $this->Form->input('product_id');
                    ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('web'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('client_id'); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('name'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('contractor_id'); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('contractor_percentage'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <?php echo $this->Form->input('extra', array('type' => 'textarea')); ?>
                </div>
                <div class="col-lg-9">
                    <?php echo $this->Form->input('requirement'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('price'); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('advance'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('start_date', array('type' => 'text')); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('end_date', array('type' => 'text')); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('employee_id'); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('seq'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-1">
                    <?php echo $this->Form->input('status'); ?>
                </div>
                <div class="col-lg-5">
                    <?php echo $this->Form->input('image', array('label' => 'Project Image', 'type' => 'file', 'class' => 'pageimage')); ?>
                </div>
                <div class="col-lg-6">
                    <?php
                    if (!empty($img)) {
                        echo '<div class="control-group text">
                            <label>Uploaded Image</label>
                            ' . $this->Html->image($img, array('alt' => 'No Image', 'width' => '120')) . '
                        </div>';
                    }
                    ?>
                </div>
            </div>

            <?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'contact-btn')); ?>
        </div>
    </div>
</div>

<?php
echo $this->Html->css(array('jquery-ui.min'));
echo $this->Html->script(array('jquery.min', 'jquery-ui.min'));
?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#ProjectStartDate').datepicker();
        $('#ProjectEndDate').datepicker();
    });
</script>
