<div class="visits view">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Visit Details</div>
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
			<?php echo $this->Html->link($visit['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $visit['Employee']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Company Name'); ?></td>
		<td>
			<?php echo h($visit['Visit']['company_name']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Type'); ?></td>
		<td>
			<?php echo h($visit['Visit']['type']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Address'); ?></td>
		<td>
			<?php echo h($visit['Visit']['address']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Location'); ?></td>
		<td>
			<?php echo h($visit['Visit']['location']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Owner'); ?></td>
		<td>
			<?php echo h($visit['Visit']['owner']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Contact Person'); ?></td>
		<td>
			<?php echo h($visit['Visit']['contact_person']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Phone'); ?></td>
		<td>
			<?php echo h($visit['Visit']['phone']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Discussion About'); ?></td>
		<td>
			<?php echo h($visit['Visit']['discussion_about']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Visit Time'); ?></td>
		<td>
			<?php echo h($visit['Visit']['visit_time']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Next Visit'); ?></td>
		<td>
			<?php echo h($visit['Visit']['next_visit']); ?>
			&nbsp;
		</td>
	</tr>
            </tbody>
	</table>
</div>
</div>
        </section>
</div>


