<div class="hostingRenewals view">
    <div class="page_title">
        <div class="title"><h1>Hosting Renewal</h1></div>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Hosting Renewal Details</div>
    </div>
    <section class="content">
    <div class="row">
        <div class="col-md-12">
<h2><?php echo __('Hosting Renewal'); ?></h2>
	<table class="table table-bordered table-condensed table-hover table-responsive table-striped">
            <tbody>
	<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($hostingRenewal['HostingRenewal']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Hosting'); ?></td>
		<td>
			<?php echo $this->Html->link($hostingRenewal['Hosting']['id'], array('controller' => 'hostings', 'action' => 'view', $hostingRenewal['Hosting']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Renew Date'); ?></td>
		<td>
			<?php echo h($hostingRenewal['HostingRenewal']['renew_date']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Price'); ?></td>
		<td>
			<?php echo h($hostingRenewal['HostingRenewal']['price']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Exchange Rate'); ?></td>
		<td>
			<?php echo h($hostingRenewal['HostingRenewal']['exchange_rate']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Paid'); ?></td>
		<td>
			<?php echo h($hostingRenewal['HostingRenewal']['paid']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Status'); ?></td>
		<td>
			<?php echo h($hostingRenewal['HostingRenewal']['status']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($hostingRenewal['HostingRenewal']['created']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Modified'); ?></td>
		<td>
			<?php echo h($hostingRenewal['HostingRenewal']['modified']); ?>
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
		<li><?php echo $this->Html->link(__('Edit Hosting Renewal'), array('action' => 'edit', $hostingRenewal['HostingRenewal']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hosting Renewal'), array('action' => 'delete', $hostingRenewal['HostingRenewal']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $hostingRenewal['HostingRenewal']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Hosting Renewals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hosting Renewal'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hostings'), array('controller' => 'hostings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hosting'), array('controller' => 'hostings', 'action' => 'add')); ?> </li>
	</ul>
</div>

