<div class="holidays index">
        <div class="page_title">
            <br>
            <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Holiday List</div>
            <div class="pull-right">&nbsp;<?php echo $this->Html->link("<div class='contact-btn'>Add New</div> ", array('action' => 'add'), array('escape' => false)); ?></div>
            <br>
        </div>
    
        <section class="content">
    <div class="row">
        <div class="col-md-12">
	<table class="table table-bordered table-condensed table-hover table-responsive table-striped mrt10">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('hdate'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($holidays as $holiday): ?>
	<tr>
		<td><?php echo h($holiday['Holiday']['id']); ?>&nbsp;</td>
		<td><?php echo h($holiday['Holiday']['title']); ?>&nbsp;</td>
		<td><?php echo h($holiday['Holiday']['hdate']); ?>&nbsp;</td>
		<td><?php echo h($holiday['Holiday']['status']); ?>&nbsp;</td>
		<td><?php echo h($holiday['Holiday']['created']); ?>&nbsp;</td>
		<td><?php echo h($holiday['Holiday']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__("<i style='color:green' class='fa fa-eye'></i>"), array('action' => 'view', $holiday['Holiday']['id']), array('escape' => false, 'title' => 'View')); ?>
			<?php echo $this->Html->link(__("<i style='color:black' class='fa fa-edit'></i>"), array('action' => 'edit', $holiday['Holiday']['id']), array('escape' => false, 'title' => 'Edit')); ?>
			<?php echo $this->Form->postLink(__("<i style='color:red' class='fa fa-trash-o'></i>"), array('action' => 'delete', $holiday['Holiday']['id']), array('escape' => false, 'title' => 'Delete', 'confirm' => __('Are you sure you want to delete # %s?', $holiday['Holiday']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
        </div>
        </section>
</div>

