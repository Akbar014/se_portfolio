<div class="container">
    <div class="banks form">
        <br>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <div class="panel panel-green">
                    <div class="panel-heading text-center bold-text">
                        <h4><?php echo __('Edit Loan'); ?></h4>                
                    </div>
                    <div class="panel-body">
                        <?php echo $this->Form->create('Lend'); ?>
                        <?php
                        echo $this->Form->input('id');
                        echo $this->Form->input('borrower_id',array('type'=>'hidden'));
                        echo $this->Form->input('date',array('type'=>'text'));
                        echo $this->Form->input('amount');
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
        $("#LendDate").datepicker();
    });
</script>
