<div class="hostings index">
    <div class="page_title">
        <br>
        <div class="pagenation">
            &nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?>
            <i>/</i> Hosting List
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
                            <th><?php echo __('Company'); ?></th>
                            <td><?php echo $this->Form->input('nm', array('label' => false)); ?></td>
                            <th><?php echo __('Date from'); ?></th>
                            <td><?php echo $this->Form->input('df', array('label' => false)); ?></td>
                            <th><?php echo __('To'); ?></th>
                            <td><?php echo $this->Form->input('dt', array('label' => false)); ?></td>

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
                            <th><?php echo $this->Paginator->sort('company'); ?></th>
                            <th><?php echo $this->Paginator->sort('purchase_date'); ?></th>
                            <th><?php echo $this->Paginator->sort('is_monthly'); ?></th>
                            <th><?php echo $this->Paginator->sort('for_year', 'Expiration'); ?></th>
                            <th><?php echo $this->Paginator->sort('price'); ?></th>
                            <th><?php echo $this->Paginator->sort('exchange_rate'); ?></th>
                            <th><?php echo $this->Paginator->sort('paid'); ?></th>
                            <th><?php echo $this->Paginator->sort('status'); ?></th>
                            <th><?php echo $this->Paginator->sort('created'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($hostings as $hosting): ?>
                            <tr>
                                <td><?php echo h($hosting['Hosting']['id']); ?>&nbsp;</td>
                                <td>
                                    <?php echo $this->Html->link($hosting['Project']['name'], array('controller' => 'projects', 'action' => 'view', $hosting['Project']['id'])); ?>
                                </td>
                                <td><?php echo h($hosting['Hosting']['company']); ?>&nbsp;</td>
                                <td><?php echo h($hosting['Hosting']['purchase_date']); ?>&nbsp;</td>
                                <td><?php echo h($hosting['Hosting']['is_monthly']); ?>&nbsp;</td>
                                <td>
                                    <?php
                                    if ($hosting['Hosting']['is_monthly'] == E_ERROR) {
                                        echo date('Y-m-d', strtotime($hosting['Hosting']['purchase_date']) + ($hosting['Hosting']['for_year'] * 24 * 60 * 60));
                                    } else {
                                        echo date('Y-m-d', strtotime($hosting['Hosting']['purchase_date']) + ($hosting['Hosting']['for_year'] * 365 * 24 * 60 * 60));
                                    }
                                    ?>
                                </td>
                                <td><?php echo h($hosting['Hosting']['price']); ?>&nbsp;</td>
                                <td><?php echo h($hosting['Hosting']['exchange_rate']); ?>&nbsp;</td>
                                <td><?php echo h($hosting['Hosting']['paid']); ?>&nbsp;</td>
                                <td><?php echo $status[$hosting['Hosting']['status']]; ?>&nbsp;</td>
                                <td><?php echo h($hosting['Hosting']['created']); ?>&nbsp;</td>
                                <td class="actions">
                                    <?php echo $this->Html->link(__("<i style='color:green' class='fa fa-eye'></i>"), array('action' => 'view', $hosting['Hosting']['id']), array('escape' => false, 'title' => 'View')); ?>
                                    <?php echo $this->Html->link(__("<i style='color:black' class='fa fa-edit'></i>"), array('action' => 'edit', $hosting['Hosting']['id']), array('escape' => false, 'title' => 'Edit')); ?>
                                    <?php echo $this->Form->postLink(__("<i style='color:red' class='fa fa-trash-o'></i>"), array('action' => 'delete', $hosting['Hosting']['id']), array('escape' => false, 'title' => 'Delete', 'confirm' => __('Are you sure you want to delete # %s?', $hosting['Hosting']['id']))); ?>
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