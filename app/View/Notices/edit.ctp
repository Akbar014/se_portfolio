<div class="notices form">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Notice</div>
        <br>
    </div>

    <div class="row">
        <div class="col-md-12 divcard">
            <?php echo $this->Form->create('Notice'); ?>
            <?php
            echo $this->Form->input('id');
            echo $this->Form->input('title');
            echo $this->Form->input('notice',array('rows'=>5));
            ?>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('publish_date',array('type'=>'text'));?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('type');?>
                </div>
            </div>
            <?php
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
        $('#NoticePublishDate').datepicker();
   
});
</script>