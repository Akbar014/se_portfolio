<div class="expenses view">
    <div class="page_title">
        <div class="title"><h1>Expense</h1></div>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Expense Details</div>
    </div>
    <section class="content">
    <div class="row">
        <div class="col-md-12">
<h2><?php echo __('Expense'); ?></h2>
	<table class="table table-bordered table-condensed table-hover table-responsive table-striped">
            <tbody>
	<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($expense['Expense']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Expensehead'); ?></td>
		<td>
			<?php echo $this->Html->link($expense['Expensehead']['name'], array('controller' => 'expenseheads', 'action' => 'view', $expense['Expensehead']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Amount'); ?></td>
		<td>
			<?php echo h($expense['Expense']['amount']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Description'); ?></td>
		<td>
			<?php echo h($expense['Expense']['description']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($expense['Expense']['created']); ?>
			&nbsp;
		</td>
	</tr>
            </tbody>
	</table>
</div>
</div>
        </section>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Expense'), array('action' => 'edit', $expense['Expense']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Expense'), array('action' => 'delete', $expense['Expense']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $expense['Expense']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Expenses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expense'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Expenseheads'), array('controller' => 'expenseheads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expensehead'), array('controller' => 'expenseheads', 'action' => 'add')); ?> </li>
	</ul>
</div>

