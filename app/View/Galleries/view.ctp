<div class="galleries view">
    <div class="page_title">
        <div class="title"><h1>Gallery</h1></div>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Gallery Details</div>
    </div>
    <section class="content">
    <div class="row">
        <div class="col-md-12">
<h2><?php echo __('Gallery'); ?></h2>
	<table class="table table-bordered table-condensed table-hover table-responsive table-striped">
            <tbody>
	<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($gallery['Gallery']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Title'); ?></td>
		<td>
			<?php echo h($gallery['Gallery']['title']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Status'); ?></td>
		<td>
			<?php echo h($gallery['Gallery']['status']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($gallery['Gallery']['created']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Modified'); ?></td>
		<td>
			<?php echo h($gallery['Gallery']['modified']); ?>
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
		<li><?php echo $this->Html->link(__('Edit Gallery'), array('action' => 'edit', $gallery['Gallery']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Gallery'), array('action' => 'delete', $gallery['Gallery']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $gallery['Gallery']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Galleries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gallery'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Gallery Photos'), array('controller' => 'gallery_photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gallery Photo'), array('controller' => 'gallery_photos', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="related">
	<h3><?php echo __('Related Gallery Photos'); ?></h3>
	<?php if (!empty($gallery['GalleryPhoto'])): ?>
	<table class="table table-bordered table-condensed table-hover table-responsive table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Gallery Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($gallery['GalleryPhoto'] as $galleryPhoto): ?>
		<tr>
			<td><?php echo $galleryPhoto['id']; ?></td>
			<td><?php echo $galleryPhoto['gallery_id']; ?></td>
			<td><?php echo $galleryPhoto['name']; ?></td>
			<td><?php echo $galleryPhoto['status']; ?></td>
			<td><?php echo $galleryPhoto['created']; ?></td>
			<td><?php echo $galleryPhoto['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'gallery_photos', 'action' => 'view', $galleryPhoto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'gallery_photos', 'action' => 'edit', $galleryPhoto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'gallery_photos', 'action' => 'delete', $galleryPhoto['id']), array('confirm' => __('Are you sure you want to delete # %s?', $galleryPhoto['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Gallery Photo'), array('controller' => 'gallery_photos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
