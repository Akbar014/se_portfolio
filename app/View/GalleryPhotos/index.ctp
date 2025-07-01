<div class="galleryphotos index">
        <div class="page_title">
            <br>
            <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Galleryphoto List</div>
            <div class="pull-right">&nbsp;<?php echo $this->Html->link("<div class='contact-btn'>Add New</div> ", array('action' => 'add',$this->params['pass'][0]), array('escape' => false)); ?></div>
            <br>
        </div>
    
        <section class="content">
    <div class="row">
        <div class="col-md-12">
	<table class="table table-bordered table-condensed table-hover table-responsive table-striped mrt10">
	<thead>
	<tr> 
                        <th><?php echo $this->Paginator->sort('image'); ?></th>
                        <th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('gallery_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($galleryphotos as $galleryphoto): ?>
	<tr>
		<td><?php echo $this->Html->image('gp/' . $galleryphoto['Galleryphoto']['id'] . 't.png', array('alt' => 'No Image', 'width' => '80')); ?>&nbsp;</td>
                <td><?php echo h($galleryphoto['Galleryphoto']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $galleryphoto['Gallery']['title']; ?>
		</td>
		<td><?php echo $status[$galleryphoto['Galleryphoto']['status']]; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__("<i style='color:green' class='fa fa-eye'></i>"), array('action' => 'view', $galleryphoto['Galleryphoto']['id']), array('escape' => false, 'title' => 'View')); ?>
			<?php echo $this->Html->link(__("<i style='color:black' class='fa fa-edit'></i>"), array('action' => 'edit', $galleryphoto['Galleryphoto']['id'],$galleryphoto['Gallery']['id']), array('escape' => false, 'title' => 'Edit')); ?>
			<?php echo $this->Form->postLink(__("<i style='color:red' class='fa fa-trash-o'></i>"), array('action' => 'delete',$galleryphoto['Galleryphoto']['id'],$galleryphoto['Gallery']['id']), array('confirm' => __('Are you sure you want to delete?'), 'escape' => false,'title' => 'Delete')); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
        </div>
        </section>
</div>

