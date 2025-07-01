<div class="salaries view">
    <div class="page_title">
        <div class="title"><h1>Salary</h1></div>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Salary Details</div>
    </div>
    <section class="content">
    <div class="row">
        <div class="col-md-12">
<h2><?php echo __('Salary'); ?></h2>
	<table class="table table-bordered table-condensed table-hover table-responsive table-striped">
            <tbody>
	<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($salary['Salary']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Employee'); ?></td>
		<td>
			<?php echo $this->Html->link($salary['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $salary['Employee']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Days'); ?></td>
		<td>
			<?php echo h($salary['Salary']['days']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Leaves'); ?></td>
		<td>
			<?php echo h($salary['Salary']['leaves']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Presents'); ?></td>
		<td>
			<?php echo h($salary['Salary']['presents']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Salary'); ?></td>
		<td>
			<?php echo h($salary['Salary']['salary']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Bonus'); ?></td>
		<td>
			<?php echo h($salary['Salary']['bonus']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Amount'); ?></td>
		<td>
			<?php echo h($salary['Salary']['amount']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Sal Month'); ?></td>
		<td>
			<?php echo h($salary['Salary']['sal_month']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($salary['Salary']['created']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Modified'); ?></td>
		<td>
			<?php echo h($salary['Salary']['modified']); ?>
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
		<li><?php echo $this->Html->link(__('Edit Salary'), array('action' => 'edit', $salary['Salary']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Salary'), array('action' => 'delete', $salary['Salary']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $salary['Salary']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Salaries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salary'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>

