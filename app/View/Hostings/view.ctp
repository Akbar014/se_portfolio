<div class="hostings view">
    <div class="page_title">
        <div class="title"><h1>Hosting</h1></div>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Hosting Details</div>
    </div>
    <section class="content">
    <div class="row">
        <div class="col-md-12">
<h2><?php echo __('Hosting'); ?></h2>
	<table class="table table-bordered table-condensed table-hover table-responsive table-striped">
            <tbody>
	<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($hosting['Hosting']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Project'); ?></td>
		<td>
			<?php echo $this->Html->link($hosting['Project']['name'], array('controller' => 'projects', 'action' => 'view', $hosting['Project']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Company'); ?></td>
		<td>
			<?php echo h($hosting['Hosting']['company']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Purchase Date'); ?></td>
		<td>
			<?php echo h($hosting['Hosting']['purchase_date']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Price'); ?></td>
		<td>
			<?php echo h($hosting['Hosting']['price']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Exchange Rate'); ?></td>
		<td>
			<?php echo h($hosting['Hosting']['exchange_rate']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Paid'); ?></td>
		<td>
			<?php echo h($hosting['Hosting']['paid']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Status'); ?></td>
		<td>
			<?php echo h($hosting['Hosting']['status']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($hosting['Hosting']['created']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Modified'); ?></td>
		<td>
			<?php echo h($hosting['Hosting']['modified']); ?>
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
		<li><?php echo $this->Html->link(__('Edit Hosting'), array('action' => 'edit', $hosting['Hosting']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hosting'), array('action' => 'delete', $hosting['Hosting']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $hosting['Hosting']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Hostings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hosting'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hosting Renewals'), array('controller' => 'hosting_renewals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hosting Renewal'), array('controller' => 'hosting_renewals', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="related">
	<h3><?php echo __('Related Hosting Renewals'); ?></h3>
	<?php if (!empty($hosting['HostingRenewal'])): ?>
	<table class="table table-bordered table-condensed table-hover table-responsive table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Hosting Id'); ?></th>
		<th><?php echo __('Renew Date'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Exchange Rate'); ?></th>
		<th><?php echo __('Paid'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hosting['HostingRenewal'] as $hostingRenewal): ?>
		<tr>
			<td><?php echo $hostingRenewal['id']; ?></td>
			<td><?php echo $hostingRenewal['hosting_id']; ?></td>
			<td><?php echo $hostingRenewal['renew_date']; ?></td>
			<td><?php echo $hostingRenewal['price']; ?></td>
			<td><?php echo $hostingRenewal['exchange_rate']; ?></td>
			<td><?php echo $hostingRenewal['paid']; ?></td>
			<td><?php echo $hostingRenewal['status']; ?></td>
			<td><?php echo $hostingRenewal['created']; ?></td>
			<td><?php echo $hostingRenewal['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hosting_renewals', 'action' => 'view', $hostingRenewal['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hosting_renewals', 'action' => 'edit', $hostingRenewal['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hosting_renewals', 'action' => 'delete', $hostingRenewal['id']), array('confirm' => __('Are you sure you want to delete # %s?', $hostingRenewal['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hosting Renewal'), array('controller' => 'hosting_renewals', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
