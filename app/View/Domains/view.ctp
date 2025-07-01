<div class="domains view">
    <div class="page_title">
        <div class="title"><h1>Domain</h1></div>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Domain Details</div>
    </div>
    <section class="content">
    <div class="row">
        <div class="col-md-12">
<h2><?php echo __('Domain'); ?></h2>
	<table class="table table-bordered table-condensed table-hover table-responsive table-striped">
            <tbody>
	<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($domain['Domain']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Project'); ?></td>
		<td>
			<?php echo $this->Html->link($domain['Project']['name'], array('controller' => 'projects', 'action' => 'view', $domain['Project']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Name'); ?></td>
		<td>
			<?php echo h($domain['Domain']['name']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Purchase Date'); ?></td>
		<td>
			<?php echo h($domain['Domain']['purchase_date']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Price'); ?></td>
		<td>
			<?php echo h($domain['Domain']['price']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Exchange Rate'); ?></td>
		<td>
			<?php echo h($domain['Domain']['exchange_rate']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Paid'); ?></td>
		<td>
			<?php echo h($domain['Domain']['paid']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Status'); ?></td>
		<td>
			<?php echo h($domain['Domain']['status']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($domain['Domain']['created']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Modified'); ?></td>
		<td>
			<?php echo h($domain['Domain']['modified']); ?>
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
		<li><?php echo $this->Html->link(__('Edit Domain'), array('action' => 'edit', $domain['Domain']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Domain'), array('action' => 'delete', $domain['Domain']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $domain['Domain']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Domains'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Domain'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Domain Renewals'), array('controller' => 'domain_renewals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Domain Renewal'), array('controller' => 'domain_renewals', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="related">
	<h3><?php echo __('Related Domain Renewals'); ?></h3>
	<?php if (!empty($domain['DomainRenewal'])): ?>
	<table class="table table-bordered table-condensed table-hover table-responsive table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Domain Id'); ?></th>
		<th><?php echo __('Renew Date'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Exchange Rate'); ?></th>
		<th><?php echo __('Paid'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($domain['DomainRenewal'] as $domainRenewal): ?>
		<tr>
			<td><?php echo $domainRenewal['id']; ?></td>
			<td><?php echo $domainRenewal['domain_id']; ?></td>
			<td><?php echo $domainRenewal['renew_date']; ?></td>
			<td><?php echo $domainRenewal['price']; ?></td>
			<td><?php echo $domainRenewal['exchange_rate']; ?></td>
			<td><?php echo $domainRenewal['paid']; ?></td>
			<td><?php echo $domainRenewal['status']; ?></td>
			<td><?php echo $domainRenewal['created']; ?></td>
			<td><?php echo $domainRenewal['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'domain_renewals', 'action' => 'view', $domainRenewal['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'domain_renewals', 'action' => 'edit', $domainRenewal['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'domain_renewals', 'action' => 'delete', $domainRenewal['id']), array('confirm' => __('Are you sure you want to delete # %s?', $domainRenewal['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Domain Renewal'), array('controller' => 'domain_renewals', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
