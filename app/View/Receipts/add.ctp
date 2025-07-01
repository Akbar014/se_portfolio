<div class="receipts form">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Receipt</div>
        <br>
    </div>

    <div class="row">
        <div class="col-md-12 divcard">
            <?php echo $this->Form->create('Receipt'); ?>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('project_id', array('empty' => 'Please Select')); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('payment_type', array('options' => $payment_type)); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6" id="dueamount"></div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('amount'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('pdate', array('label' => 'Date', 'type' => 'text')); ?>
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
echo $this->Html->script(array('jquery-ui.min'));
?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#ReceiptPdate').datepicker();

        $ctrl = $('#ReceiptProjectId');
        $ctrl.change(function () {
            var val = $ctrl.val();
            if (val) {
                $.ajax({
                    dataType: "html",
                    type: "POST",
                    evalScripts: true,
                    url: '<?php echo $this->Html->url(array('controller' => 'projects', 'action' => 'ajax_project_details')); ?>',
                    data: ({project_id: val}),
                    success: function (data) {
                        $('#dueamount').html(data);
                    }
                });
            }
        });
    });
</script>