<div class="domainRenewals view">
    <div class="page_title">
        <div class="title"><h1>Domain Renewal</h1></div>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Domain Renewal Details</div>
    </div>
    <section class="content">
    <div class="row">
        <div class="col-md-12">
<h2><?php echo __('Domain Renewal'); ?></h2>
	<table class="table table-bordered table-condensed table-hover table-responsive table-striped">
            <tbody>
	<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($domainRenewal['DomainRenewal']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Domain'); ?></td>
		<td>
			<?php echo $this->Html->link($domainRenewal['Domain']['name'], array('controller' => 'domains', 'action' => 'view', $domainRenewal['Domain']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Renew Date'); ?></td>
		<td>
			<?php echo h($domainRenewal['DomainRenewal']['renew_date']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Price'); ?></td>
		<td>
			<?php echo h($domainRenewal['DomainRenewal']['price']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Exchange Rate'); ?></td>
		<td>
			<?php echo h($domainRenewal['DomainRenewal']['exchange_rate']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Paid'); ?></td>
		<td>
			<?php echo h($domainRenewal['DomainRenewal']['paid']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Status'); ?></td>
		<td>
			<?php echo h($domainRenewal['DomainRenewal']['status']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($domainRenewal['DomainRenewal']['created']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Modified'); ?></td>
		<td>
			<?php echo h($domainRenewal['DomainRenewal']['modified']); ?>
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
		<li><?php echo $this->Html->link(__('Edit Domain Renewal'), array('action' => 'edit', $domainRenewal['DomainRenewal']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Domain Renewal'), array('action' => 'delete', $domainRenewal['DomainRenewal']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $domainRenewal['DomainRenewal']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Domain Renewals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Domain Renewal'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Domains'), array('controller' => 'domains', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Domain'), array('controller' => 'domains', 'action' => 'add')); ?> </li>
	</ul>
</div>

