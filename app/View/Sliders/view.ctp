<div class="sliders view">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Slider Details</div>
        <br>
    </div>
    <section class="content">
    <div class="row">
        <div class="col-md-12">
	<table class="table table-bordered table-condensed table-hover table-responsive table-striped">
            <tbody>
	
	<tr>
		<td><?php echo __('Title'); ?></td>
		<td>
			<?php echo h($slider['Slider']['title']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Content'); ?></td>
		<td>
			<?php echo h($slider['Slider']['content']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Seq'); ?></td>
		<td>
			<?php echo h($slider['Slider']['seq']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Status'); ?></td>
		<td>
			<?php echo h($slider['Slider']['status']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($slider['Slider']['created']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Modified'); ?></td>
		<td>
			<?php echo h($slider['Slider']['modified']); ?>
			&nbsp;
		</td>
	</tr>
            </tbody>
	</table>
</div>
</div>
        </section>
</div>


