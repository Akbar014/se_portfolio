<div class="lenders view">
    <div class="page_title">
        <div class="title"><h1>Lender</h1></div>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Lender Details</div>
    </div>
    <section class="content">
    <div class="row">
        <div class="col-md-12">
<h2><?php echo __('Lender'); ?></h2>
	<table class="table table-bordered table-condensed table-hover table-responsive table-striped">
            <tbody>
	<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($lender['Lender']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Name'); ?></td>
		<td>
			<?php echo h($lender['Lender']['name']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Address'); ?></td>
		<td>
			<?php echo h($lender['Lender']['address']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Phone'); ?></td>
		<td>
			<?php echo h($lender['Lender']['phone']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Mobile'); ?></td>
		<td>
			<?php echo h($lender['Lender']['mobile']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Email'); ?></td>
		<td>
			<?php echo h($lender['Lender']['email']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Status'); ?></td>
		<td>
			<?php echo h($lender['Lender']['status']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($lender['Lender']['created']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Modified'); ?></td>
		<td>
			<?php echo h($lender['Lender']['modified']); ?>
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
		<li><?php echo $this->Html->link(__('Edit Lender'), array('action' => 'edit', $lender['Lender']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lender'), array('action' => 'delete', $lender['Lender']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $lender['Lender']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Lenders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lender'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Loans'), array('controller' => 'loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan'), array('controller' => 'loans', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="related">
	<h3><?php echo __('Related Loans'); ?></h3>
	<?php if (!empty($lender['Loan'])): ?>
	<table class="table table-bordered table-condensed table-hover table-responsive table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Lender Id'); ?></th>
		<th><?php echo __('Loan Date'); ?></th>
		<th><?php echo __('Return Date'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Remain'); ?></th>
		<th><?php echo __('Witness'); ?></th>
		<th><?php echo __('Remark'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($lender['Loan'] as $loan): ?>
		<tr>
			<td><?php echo $loan['id']; ?></td>
			<td><?php echo $loan['lender_id']; ?></td>
			<td><?php echo $loan['loan_date']; ?></td>
			<td><?php echo $loan['return_date']; ?></td>
			<td><?php echo $loan['amount']; ?></td>
			<td><?php echo $loan['remain']; ?></td>
			<td><?php echo $loan['witness']; ?></td>
			<td><?php echo $loan['remark']; ?></td>
			<td><?php echo $loan['status']; ?></td>
			<td><?php echo $loan['created']; ?></td>
			<td><?php echo $loan['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'loans', 'action' => 'view', $loan['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'loans', 'action' => 'edit', $loan['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'loans', 'action' => 'delete', $loan['id']), array('confirm' => __('Are you sure you want to delete # %s?', $loan['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Loan'), array('controller' => 'loans', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
