<div class="cars view">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Car Details</div>
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
			<?php echo $this->Html->link($car['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $car['Employee']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Company Name'); ?></td>
		<td>
			<?php echo h($car['Car']['company_name']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Type'); ?></td>
		<td>
			<?php echo h($car['Car']['type']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Address'); ?></td>
		<td>
			<?php echo h($car['Car']['address']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Location'); ?></td>
		<td>
			<?php echo h($car['Car']['location']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Owner'); ?></td>
		<td>
			<?php echo h($car['Car']['owner']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Contact Person'); ?></td>
		<td>
			<?php echo h($car['Car']['contact_person']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Phone'); ?></td>
		<td>
			<?php echo h($car['Car']['phone']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Discussion About'); ?></td>
		<td>
			<?php echo h($car['Car']['discussion_about']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Car Time'); ?></td>
		<td>
			<?php echo h($car['Car']['car_time']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Next Car'); ?></td>
		<td>
			<?php echo h($car['Car']['next_car']); ?>
			&nbsp;
		</td>
	</tr>
            </tbody>
	</table>
</div>
</div>
        </section>
</div>


