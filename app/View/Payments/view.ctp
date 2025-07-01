<div class="payments view">
    <div class="page_title">
        <div class="title"><h1>Payment</h1></div>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Payment Details</div>
    </div>
    <section class="content">
    <div class="row">
        <div class="col-md-12">
<h2><?php echo __('Payment'); ?></h2>
	<table class="table table-bordered table-condensed table-hover table-responsive table-striped">
            <tbody>
	<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($payment['Payment']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Employee'); ?></td>
		<td>
			<?php echo $this->Html->link($payment['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $payment['Employee']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Payment Type'); ?></td>
		<td>
			<?php echo h($payment['Payment']['payment_type']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Amount'); ?></td>
		<td>
			<?php echo h($payment['Payment']['amount']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Balance'); ?></td>
		<td>
			<?php echo h($payment['Payment']['balance']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Advance'); ?></td>
		<td>
			<?php echo h($payment['Payment']['advance']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Cause Advance'); ?></td>
		<td>
			<?php echo h($payment['Payment']['cause_advance']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Pdate'); ?></td>
		<td>
			<?php echo h($payment['Payment']['pdate']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Comments'); ?></td>
		<td>
			<?php echo h($payment['Payment']['comments']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($payment['Payment']['created']); ?>
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
		<li><?php echo $this->Html->link(__('Edit Payment'), array('action' => 'edit', $payment['Payment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Payment'), array('action' => 'delete', $payment['Payment']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $payment['Payment']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>

