<div class="hostings form">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Hosting</div>
        <br>
    </div>
    <div class="row">
        <div class="col-md-12 divcard">
            <?php echo $this->Form->create('Hosting'); ?>
            <fieldset>
                <legend><?php echo __('Add Hosting'); ?></legend>
                <?php
                echo $this->Form->input('project_id');
                echo $this->Form->input('company');
                echo $this->Form->input('purchase_date', array('type' => 'text'));
                echo $this->Form->input('price');
                echo $this->Form->input('exchange_rate');
                echo $this->Form->input('paid');
                echo $this->Form->input('is_monthly');
                echo $this->Form->input('for_year', array('label' => 'For Year/Month', 'value' => '1'));
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
echo $this->Html->script(array('jquery-ui.min'));
?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#HostingPurchaseDate').datepicker();
    });
</script>