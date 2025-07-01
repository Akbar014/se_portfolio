<div class="subscribes view">
    <div class="page_title">
        <div class="title"><h1>Subscribe</h1></div>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Subscribe Details</div>
    </div>
    <section class="content">
    <div class="row">
        <div class="col-md-12">
<h2><?php echo __('Subscribe'); ?></h2>
	<table class="table table-bordered table-condensed table-hover table-responsive table-striped">
            <tbody>
	<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($subscribe['Subscribe']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Email'); ?></td>
		<td>
			<?php echo h($subscribe['Subscribe']['email']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($subscribe['Subscribe']['created']); ?>
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
		<li><?php echo $this->Html->link(__('Edit Subscribe'), array('action' => 'edit', $subscribe['Subscribe']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subscribe'), array('action' => 'delete', $subscribe['Subscribe']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $subscribe['Subscribe']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Subscribes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subscribe'), array('action' => 'add')); ?> </li>
	</ul>
</div>

