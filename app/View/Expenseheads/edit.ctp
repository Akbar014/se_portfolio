<div class="expenseheads form">
    <div class="page_title">
        <div class="title"><h1>Expensehead</h1></div>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Expensehead</div>
    </div>
    <section class="content">
    <div class="row">
        <div class="col-md-12">
<?php echo $this->Form->create('Expensehead'); ?>
	<fieldset>
		<legend><?php echo __('Edit Expensehead'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('type');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('seq');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Expensehead.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Expensehead.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Expenseheads'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Expenses'), array('controller' => 'expenses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expense'), array('controller' => 'expenses', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
        </section>
</div>
