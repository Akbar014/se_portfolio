<div class="visits form">
    <div class="page_title">
        <div class="title"><h1>Visit</h1></div>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Visit</div>
    </div>
    <section class="content">
    <div class="row">
        <div class="col-md-12">
<?php echo $this->Form->create('Visit'); ?>
	<fieldset>
		<legend><?php echo __('Add Visit'); ?></legend>
	<?php
		echo $this->Form->input('employee_id');
		echo $this->Form->input('company_name');
		echo $this->Form->input('type');
		echo $this->Form->input('address');
		echo $this->Form->input('location');
		echo $this->Form->input('owner');
		echo $this->Form->input('contact_person');
		echo $this->Form->input('phone');
		echo $this->Form->input('discussion_about');
		echo $this->Form->input('visit_time');
		echo $this->Form->input('next_visit');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Visits'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
        </section>
</div>
