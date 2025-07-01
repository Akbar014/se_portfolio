<div class="container">
    <div class="banks form">
        <br>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <div class="panel panel-green">
                    <div class="panel-heading text-center bold-text">
                        <h4><?php echo __('Add Repayment'); ?></h4>                
                    </div>
                    <div class="panel-body">
                        <?php echo $this->Form->create('Repayment'); ?>
                        <?php
                        echo $this->Form->input('borrower_id');
                        echo $this->Form->input('pay_amount');
                        echo $this->Form->input('payment_date',array('type'=>'text'));
                        echo $this->Form->input('remark');
                        echo $this->Form->input('status');
                        ?>
                        <?php echo $this->Form->end(__('Submit')); ?>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
</div>


<?php
echo $this->Html->css(array('jquery-ui.min'));
echo $this->Html->script(array('jq.ui.min'));
?>

<script type="text/javascript">

    $(document).ready(function () {
        $("#RepaymentPaymentDate").datepicker();
    });
</script>

