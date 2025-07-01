<div class="configs index">
        <div class="page_title">
            <br>
            <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Config List</div>
        </div>
    <div class="pull-right mrb">&nbsp;<?php echo $this->Html->link("<div class='contact-btn'>Edit</div> ", array('action' => 'edit'), array('escape' => false)); ?></div>
        <section class="content">
    <div class="row">
        <div class="col-md-12">
	<table class="table table-bordered table-condensed table-hover table-responsive table-striped mrt10">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('key'); ?></th>
			<th><?php echo $this->Paginator->sort('value'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($configs as $config): ?>
	<tr>
		<td><?php echo h($config['Config']['key']); ?>&nbsp;</td>
                <td><?php echo substr($config['Config']['value'], 0,100); ?>&nbsp;</td>
		
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
        </div>
        </section>
</div>

