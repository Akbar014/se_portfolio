<div class="loans view">
    <div class="page_title">
        <div class="title"><h1>Loan</h1></div>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Loan Details</div>
    </div>
    <section class="content">
    <div class="row">
        <div class="col-md-12">
<h2><?php echo __('Loan'); ?></h2>
	<table class="table table-bordered table-condensed table-hover table-responsive table-striped">
            <tbody>
	<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($loan['Loan']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Lender'); ?></td>
		<td>
			<?php echo $this->Html->link($loan['Lender']['name'], array('controller' => 'lenders', 'action' => 'view', $loan['Lender']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Loan Date'); ?></td>
		<td>
			<?php echo h($loan['Loan']['loan_date']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Return Date'); ?></td>
		<td>
			<?php echo h($loan['Loan']['return_date']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Amount'); ?></td>
		<td>
			<?php echo h($loan['Loan']['amount']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Remain'); ?></td>
		<td>
			<?php echo h($loan['Loan']['remain']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Witness'); ?></td>
		<td>
			<?php echo h($loan['Loan']['witness']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Remark'); ?></td>
		<td>
			<?php echo h($loan['Loan']['remark']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Status'); ?></td>
		<td>
			<?php echo h($loan['Loan']['status']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($loan['Loan']['created']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Modified'); ?></td>
		<td>
			<?php echo h($loan['Loan']['modified']); ?>
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
		<li><?php echo $this->Html->link(__('Edit Loan'), array('action' => 'edit', $loan['Loan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Loan'), array('action' => 'delete', $loan['Loan']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $loan['Loan']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Loans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lenders'), array('controller' => 'lenders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lender'), array('controller' => 'lenders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Loan Returns'), array('controller' => 'loan_returns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan Return'), array('controller' => 'loan_returns', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="related">
	<h3><?php echo __('Related Loan Returns'); ?></h3>
	<?php if (!empty($loan['LoanReturn'])): ?>
	<table class="table table-bordered table-condensed table-hover table-responsive table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Loan Id'); ?></th>
		<th><?php echo __('Return Date'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Remain'); ?></th>
		<th><?php echo __('Remark'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($loan['LoanReturn'] as $loanReturn): ?>
		<tr>
			<td><?php echo $loanReturn['id']; ?></td>
			<td><?php echo $loanReturn['loan_id']; ?></td>
			<td><?php echo $loanReturn['return_date']; ?></td>
			<td><?php echo $loanReturn['amount']; ?></td>
			<td><?php echo $loanReturn['remain']; ?></td>
			<td><?php echo $loanReturn['remark']; ?></td>
			<td><?php echo $loanReturn['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'loan_returns', 'action' => 'view', $loanReturn['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'loan_returns', 'action' => 'edit', $loanReturn['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'loan_returns', 'action' => 'delete', $loanReturn['id']), array('confirm' => __('Are you sure you want to delete # %s?', $loanReturn['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Loan Return'), array('controller' => 'loan_returns', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
