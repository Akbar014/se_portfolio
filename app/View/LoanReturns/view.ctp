<div class="loanReturns view">
    <div class="page_title">
        <div class="title"><h1>Loan Return</h1></div>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Loan Return Details</div>
    </div>
    <section class="content">
    <div class="row">
        <div class="col-md-12">
<h2><?php echo __('Loan Return'); ?></h2>
	<table class="table table-bordered table-condensed table-hover table-responsive table-striped">
            <tbody>
	<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($loanReturn['LoanReturn']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Loan'); ?></td>
		<td>
			<?php echo $this->Html->link($loanReturn['Loan']['id'], array('controller' => 'loans', 'action' => 'view', $loanReturn['Loan']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Return Date'); ?></td>
		<td>
			<?php echo h($loanReturn['LoanReturn']['return_date']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Amount'); ?></td>
		<td>
			<?php echo h($loanReturn['LoanReturn']['amount']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Remain'); ?></td>
		<td>
			<?php echo h($loanReturn['LoanReturn']['remain']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Remark'); ?></td>
		<td>
			<?php echo h($loanReturn['LoanReturn']['remark']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($loanReturn['LoanReturn']['created']); ?>
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
		<li><?php echo $this->Html->link(__('Edit Loan Return'), array('action' => 'edit', $loanReturn['LoanReturn']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Loan Return'), array('action' => 'delete', $loanReturn['LoanReturn']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $loanReturn['LoanReturn']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Loan Returns'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan Return'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Loans'), array('controller' => 'loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan'), array('controller' => 'loans', 'action' => 'add')); ?> </li>
	</ul>
</div>

