<div class="payments form">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Payment</div>
        <br>
    </div>

    <div class="row">
        <div class="col-md-12 divcard">
            <?php echo $this->Form->create('Payment'); ?>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('employee_id'); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('payment_type'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('amount'); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('balance'); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('advance'); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('cause_advance'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('pdate', array('label' => 'Payment Date', 'type' => 'text')); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('comments'); ?>
                </div>
            </div>

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
        $('#PaymentPdate').datepicker();
   
});
</script>