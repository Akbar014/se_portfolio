<div class="expenses form">
    <div class="page_title">
        <div class="title"><h1>Expense</h1></div>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Expense</div>
    </div>
    <section class="content">
    <div class="row">
        <div class="col-md-12">
<?php echo $this->Form->create('Expense'); ?>
	<fieldset>
		<legend><?php echo __('Edit Expense'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('expensehead_id');
		echo $this->Form->input('amount');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Expense.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Expense.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Expenses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Expenseheads'), array('controller' => 'expenseheads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expensehead'), array('controller' => 'expenseheads', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
        </section>
</div>
