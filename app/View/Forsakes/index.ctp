<div class="forsakes index">
        <div class="page_title">
            <br>
            <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Forsake List</div>
            <br>
        </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading">Search</div>
                <div class="panel-body">
                    <?php echo $this->Form->create('Src', array('class' => 'form-horizontal')); ?>
                    <table class="table table-condensed table-striped table-bordered table-hover">
                        <tr>
                            <th><?php echo __('Title'); ?></th>
                            <td><?php echo $this->Form->input('nm', array('label' => false)); ?></td>
                            <th><?php echo __('Date from'); ?></th>
                            <td><?php echo $this->Form->input('df', array('label' => false)); ?></td>
                            <th><?php echo __('To'); ?></th>
                            <td><?php echo $this->Form->input('dt', array('label' => false)); ?></td>

                            <td><?php echo $this->Form->button('Search', array('class' => 'btn btn-info', 'name' => 'btnsrc')); ?></td>
                            <td><div class="text-center">&nbsp;<?php echo $this->Html->link("<div class='searchadd-btn'>Add New</div> ", array('action' => 'add'), array('escape' => false)); ?></div></td>
                        </tr>
                    </table>

                    <p class="paginginfo">
                        <?php
                        echo $this->Paginator->counter(array(
                            'format' => __('Showing {:start} to {:end} of {:count} records')
                        ));
                        ?>                   
                    </p>
                    <ul class="pagination">
                        <?php
                        echo $this->Paginator->first();
                        echo $this->Paginator->prev();
                        echo $this->Paginator->numbers();
                        echo $this->Paginator->next();
                        echo $this->Paginator->last();
                        ?>
                    </ul>     

                    <?php echo $this->Form->end(); ?>
                </div>


            </div>
        </div>
    </div>
        <section class="content">
    <div class="row">
        <div class="col-md-12">
	<table class="table table-bordered table-condensed table-hover table-responsive table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('employee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('forsake_type'); ?></th>
			<th><?php echo $this->Paginator->sort('days'); ?></th>
			<th><?php echo $this->Paginator->sort('applyDate'); ?></th>
			<th><?php echo $this->Paginator->sort('startDate'); ?></th>
			<th><?php echo $this->Paginator->sort('endDate'); ?></th>
			<th><?php echo $this->Paginator->sort('comments'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($forsakes as $forsake): ?>
	<tr>
		<td><?php echo h($forsake['Forsake']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($forsake['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $forsake['Employee']['id'])); ?>
		</td>
		<td><?php echo h($forsake['Forsake']['forsake_type']); ?>&nbsp;</td>
		<td><?php echo h($forsake['Forsake']['days']); ?>&nbsp;</td>
		<td><?php echo h($forsake['Forsake']['applyDate']); ?>&nbsp;</td>
		<td><?php echo h($forsake['Forsake']['startDate']); ?>&nbsp;</td>
		<td><?php echo h($forsake['Forsake']['endDate']); ?>&nbsp;</td>
		<td><?php echo h($forsake['Forsake']['comments']); ?>&nbsp;</td>
		<td><?php echo h($forsake['Forsake']['status']); ?>&nbsp;</td>
		<td><?php echo h($forsake['Forsake']['created']); ?>&nbsp;</td>
		<td><?php echo h($forsake['Forsake']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__("<i style='color:green' class='fa fa-eye'></i>"), array('action' => 'view', $forsake['Forsake']['id']), array('escape' => false, 'title' => 'View')); ?>
			<?php echo $this->Html->link(__("<i style='color:black' class='fa fa-edit'></i>"), array('action' => 'edit', $forsake['Forsake']['id']), array('escape' => false, 'title' => 'Edit')); ?>
			<?php echo $this->Form->postLink(__("<i style='color:red' class='fa fa-trash-o'></i>"), array('action' => 'delete', $forsake['Forsake']['id']), array('escape' => false, 'title' => 'Delete', 'confirm' => __('Are you sure you want to delete # %s?', $forsake['Forsake']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
        </div>
        </section>
</div>

