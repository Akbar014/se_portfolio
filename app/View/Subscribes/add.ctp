<div class="subscribes form">
    <div class="page_title">
        <div class="title"><h1>Subscribe</h1></div>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Subscribe</div>
    </div>
    <section class="content">
    <div class="row">
        <div class="col-md-12">
<?php echo $this->Form->create('Subscribe'); ?>
	<fieldset>
		<legend><?php echo __('Add Subscribe'); ?></legend>
	<?php
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Subscribes'), array('action' => 'index')); ?></li>
	</ul>
</div>
</div>
        </section>
</div>
