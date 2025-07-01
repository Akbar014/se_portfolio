<div class="lenders form">
    <div class="page_title">
        <div class="title"><h1>Lender</h1></div>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Lender</div>
    </div>
    <section class="content">
    <div class="row">
        <div class="col-md-12">
<?php echo $this->Form->create('Lender'); ?>
	<fieldset>
		<legend><?php echo __('Add Lender'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('address');
		echo $this->Form->input('phone');
		echo $this->Form->input('mobile');
		echo $this->Form->input('email');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Lenders'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Loans'), array('controller' => 'loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan'), array('controller' => 'loans', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
        </section>
</div>
