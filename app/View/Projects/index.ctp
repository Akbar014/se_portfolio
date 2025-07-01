<div class="projects index">
    <div class="page_title">
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Project List</div>
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
                            <td><?php echo $this->Form->input('product_id', array('empty' => 'Please Select')); ?></td>
                            <td><?php echo $this->Form->input('df', array('label' => 'Date from')); ?></td>
                            <td><?php echo $this->Form->input('dt', array('label' => 'To')); ?></td>

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
                            <th><?php echo $this->Paginator->sort('product_id'); ?></th>
                            <th><?php echo $this->Paginator->sort('client_id'); ?></th>
                            <th><?php echo $this->Paginator->sort('name'); ?></th>
                            <th><?php echo $this->Paginator->sort('requirement'); ?></th>
                            <th><?php echo $this->Paginator->sort('price'); ?></th>
                            <th><?php echo $this->Paginator->sort('advance'); ?></th>
                            <th><?php echo $this->Paginator->sort('paid'); ?></th>
                            <th><?php echo $this->Paginator->sort('paid', 'Due'); ?></th>
                            <th><?php echo $this->Paginator->sort('seq'); ?></th>
                            <th><?php echo $this->Paginator->sort('status'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($projects as $project): ?>
                            <tr>
                                <td><?php echo h($project['Project']['id']); ?>&nbsp;</td>
                                <td>
                                    <?php echo $this->Html->link($project['Product']['name'], array('controller' => 'products', 'action' => 'view', $project['Product']['id'])); ?>
                                </td>
                                <td>
                                    <?php echo $this->Html->link($project['Client']['name'], array('controller' => 'clients', 'action' => 'view', $project['Client']['id'])); ?>
                                </td>
                                <td><?php echo h($project['Project']['name']); ?>&nbsp;</td>
                                <td><?php echo substr($project['Project']['requirement'], 0, 70); ?>...</td>
                                <td><?php echo h($project['Project']['price']); ?>&nbsp;</td>
                                <td><?php echo h($project['Project']['advance']); ?>&nbsp;</td>
                                <td><?php echo h($project['Project']['paid']); ?>&nbsp;</td>
                                <td><?php echo ($project['Project']['price'] - $project['Project']['paid']); ?>&nbsp;</td>
                                <td><?php echo h($project['Project']['seq']); ?>&nbsp;</td>
                                <td><?php echo h($project['Project']['status']); ?>&nbsp;</td>
                                <td class="actions">
                                    <?php echo $this->Html->link(__("<i style='color:green' class='fa fa-eye'></i>"), array('action' => 'view', $project['Project']['id']), array('escape' => false, 'title' => 'View')); ?>
                                    <?php echo $this->Html->link(__("<i style='color:black' class='fa fa-edit'></i>"), array('action' => 'edit', $project['Project']['id']), array('escape' => false, 'title' => 'Edit')); ?>
                                    <?php echo $this->Form->postLink(__("<i style='color:red' class='fa fa-trash-o'></i>"), array('action' => 'delete', $project['Project']['id']), array('escape' => false, 'title' => 'Delete', 'confirm' => __('Are you sure you want to delete # %s?', $project['Project']['id']))); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<?php
echo $this->Html->css(array('jquery-ui.min'));
echo $this->Html->script(array('jquery.min', 'jquery-ui.min'));
?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#SrcDf').datepicker();
        $('#SrcDt').datepicker();

    });
</script>
