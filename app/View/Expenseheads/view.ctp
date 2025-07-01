<div class="expenseheads view">
    <div class="page_title">
        <div class="title"><h1>Expensehead</h1></div>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Expensehead Details</div>
    </div>
    <section class="content">
    <div class="row">
        <div class="col-md-12">
<h2><?php echo __('Expensehead'); ?></h2>
	<table class="table table-bordered table-condensed table-hover table-responsive table-striped">
            <tbody>
	<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($expensehead['Expensehead']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Type'); ?></td>
		<td>
			<?php echo h($expensehead['Expensehead']['type']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Name'); ?></td>
		<td>
			<?php echo h($expensehead['Expensehead']['name']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Description'); ?></td>
		<td>
			<?php echo h($expensehead['Expensehead']['description']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Seq'); ?></td>
		<td>
			<?php echo h($expensehead['Expensehead']['seq']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Status'); ?></td>
		<td>
			<?php echo h($expensehead['Expensehead']['status']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($expensehead['Expensehead']['created']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Modified'); ?></td>
		<td>
			<?php echo h($expensehead['Expensehead']['modified']); ?>
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
		<li><?php echo $this->Html->link(__('Edit Expensehead'), array('action' => 'edit', $expensehead['Expensehead']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Expensehead'), array('action' => 'delete', $expensehead['Expensehead']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $expensehead['Expensehead']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Expenseheads'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expensehead'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Expenses'), array('controller' => 'expenses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expense'), array('controller' => 'expenses', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="related">
	<h3><?php echo __('Related Expenses'); ?></h3>
	<?php if (!empty($expensehead['Expense'])): ?>
	<table class="table table-bordered table-condensed table-hover table-responsive table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Expensehead Id'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($expensehead['Expense'] as $expense): ?>
		<tr>
			<td><?php echo $expense['id']; ?></td>
			<td><?php echo $expense['expensehead_id']; ?></td>
			<td><?php echo $expense['amount']; ?></td>
			<td><?php echo $expense['description']; ?></td>
			<td><?php echo $expense['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'expenses', 'action' => 'view', $expense['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'expenses', 'action' => 'edit', $expense['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'expenses', 'action' => 'delete', $expense['id']), array('confirm' => __('Are you sure you want to delete # %s?', $expense['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Expense'), array('controller' => 'expenses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
