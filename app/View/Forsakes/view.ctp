<div class="forsakes view">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Forsake Details</div>
        <br>
    </div>
    <section class="content">
    <div class="row">
        <div class="col-md-12">
	<table class="table table-bordered table-condensed table-hover table-responsive table-striped">
            <tbody>
	
	<tr>
		<td><?php echo __('Employee'); ?></td>
		<td>
			<?php echo $this->Html->link($forsake['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $forsake['Employee']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Forsake Type'); ?></td>
		<td>
			<?php echo h($forsake['Forsake']['forsake_type']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Days'); ?></td>
		<td>
			<?php echo h($forsake['Forsake']['days']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('ApplyDate'); ?></td>
		<td>
			<?php echo h($forsake['Forsake']['applyDate']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('StartDate'); ?></td>
		<td>
			<?php echo h($forsake['Forsake']['startDate']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('EndDate'); ?></td>
		<td>
			<?php echo h($forsake['Forsake']['endDate']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Comments'); ?></td>
		<td>
			<?php echo h($forsake['Forsake']['comments']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Status'); ?></td>
		<td>
			<?php echo h($forsake['Forsake']['status']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($forsake['Forsake']['created']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Modified'); ?></td>
		<td>
			<?php echo h($forsake['Forsake']['modified']); ?>
			&nbsp;
		</td>
	</tr>
            </tbody>
	</table>
</div>
</div>
        </section>
</div>


