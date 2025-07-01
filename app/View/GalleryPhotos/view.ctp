<div class="galleryphotos view">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Galleryphoto Details</div>
        <br>
    </div>
    <section class="content">
    <div class="row">
        <div class="col-md-12">
            <?php echo $this->Html->image('gp/' . $galleryphoto['Galleryphoto']['id'] . '.png', array('alt' => 'No Image')); ?>
	<table class="table table-bordered table-condensed table-hover table-responsive table-striped mrt10">
            <tbody>
	
	<tr>
		<td><?php echo __('Gallery'); ?></td>
		<td>
			<?php echo $this->Html->link($galleryphoto['Gallery']['title'], array('controller' => 'galleries', 'action' => 'view', $galleryphoto['Gallery']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Name'); ?></td>
		<td>
			<?php echo h($galleryphoto['Galleryphoto']['name']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Status'); ?></td>
		<td>
			<?php echo h($galleryphoto['Galleryphoto']['status']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($galleryphoto['Galleryphoto']['created']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Modified'); ?></td>
		<td>
			<?php echo h($galleryphoto['Galleryphoto']['modified']); ?>
			&nbsp;
		</td>
	</tr>
            </tbody>
	</table>
</div>
</div>
        </section>
</div>


