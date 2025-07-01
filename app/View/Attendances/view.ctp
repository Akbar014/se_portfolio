<div class="attendances view">
    <div class="page_title">
        <div class="title"><h1>Attendance</h1></div>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Attendance Details</div>
    </div>
    <section class="content">
    <div class="row">
        <div class="col-md-12">
<h2><?php echo __('Attendance'); ?></h2>
	<table class="table table-bordered table-condensed table-hover table-responsive table-striped">
            <tbody>
	<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($attendance['Attendance']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Employee'); ?></td>
		<td>
			<?php echo $this->Html->link($attendance['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $attendance['Employee']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('A Date'); ?></td>
		<td>
			<?php echo h($attendance['Attendance']['a_date']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('In Time'); ?></td>
		<td>
			<?php echo h($attendance['Attendance']['in_time']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Out Time'); ?></td>
		<td>
			<?php echo h($attendance['Attendance']['out_time']); ?>
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
		<li><?php echo $this->Html->link(__('Edit Attendance'), array('action' => 'edit', $attendance['Attendance']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Attendance'), array('action' => 'delete', $attendance['Attendance']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $attendance['Attendance']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendances'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendance'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>

