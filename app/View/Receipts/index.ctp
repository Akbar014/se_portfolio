<div class="receipts index">
    <div class="page_title">
        <br>
        <div class="pagenation">
            &nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?>
            <i>/</i> Receipt List
        </div>
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
                            <td><?php echo $this->Form->input('project_id', array('empty' => 'Please Select')); ?></td>
                            <td><?php echo $this->Form->input('df', array('label' => 'Date from')); ?></td>
                            <td><?php echo $this->Form->input('dt', array('label' => 'To')); ?></td>
                            <td><?php echo $this->Form->button('Search', array('class' => 'btn btn-info', 'name' => 'btnsrc')); ?></td>
                            <td>
                                <div class="text-center">
                                    &nbsp;<?php echo $this->Html->link("<div class='searchadd-btn'>Add New</div> ", array('action' => 'add'), array('escape' => false)); ?></div>
                            </td>
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
                            <th><?php echo $this->Paginator->sort('project_id'); ?></th>
                            <th><?php echo $this->Paginator->sort('payment_type'); ?></th>
                            <th><?php echo $this->Paginator->sort('amount'); ?></th>
                            <th><?php echo $this->Paginator->sort('balance'); ?></th>
                            <th><?php echo $this->Paginator->sort('pdate', 'Date'); ?></th>
                            <th><?php echo $this->Paginator->sort('comments'); ?></th>
                            <th><?php echo $this->Paginator->sort('created'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($receipts as $receipt): ?>
                            <tr>
                                <td><?php echo h($receipt['Receipt']['id']); ?>&nbsp;</td>
                                <td>
                                    <?php echo $this->Html->link($receipt['Project']['name'], array('controller' => 'projects', 'action' => 'view', $receipt['Project']['id'])); ?>
                                </td>
                                <td><?php echo $payment_type[$receipt['Receipt']['payment_type']]; ?>&nbsp;</td>
                                <td><?php echo h($receipt['Receipt']['amount']); ?>&nbsp;</td>
                                <td><?php echo h($receipt['Receipt']['balance']); ?>&nbsp;</td>
                                <td><?php echo h($receipt['Receipt']['pdate']); ?>&nbsp;</td>
                                <td><?php echo h($receipt['Receipt']['comments']); ?>&nbsp;</td>
                                <td><?php echo h($receipt['Receipt']['created']); ?>&nbsp;</td>
                                <td class="actions">
                                    <?php echo $this->Html->link(__("<i style='color:green' class='fa fa-eye'></i>"), array('action' => 'view', $receipt['Receipt']['id']), array('escape' => false, 'title' => 'View')); ?>
                                    <?php echo $this->Form->postLink(__("<i style='color:red' class='fa fa-trash-o'></i>"), array('action' => 'delete', $receipt['Receipt']['id']), array('escape' => false, 'title' => 'Delete', 'confirm' => __('Are you sure you want to delete # %s?', $receipt['Receipt']['id']))); ?>
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