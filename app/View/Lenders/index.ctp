<div class="lenders index">
    <div class="page_title">
        <br>
        <div class="pagenation">
            &nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?>
            <i>/</i> Lender List
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
                            <th><?php echo __('Name'); ?></th>
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
                            <th><?php echo $this->Paginator->sort('name'); ?></th>
                            <th><?php echo $this->Paginator->sort('address'); ?></th>
                            <th><?php echo $this->Paginator->sort('phone'); ?></th>
                            <th><?php echo $this->Paginator->sort('mobile'); ?></th>
                            <th><?php echo $this->Paginator->sort('email'); ?></th>
                            <th><?php echo $this->Paginator->sort('total'); ?></th>
                            <th><?php echo $this->Paginator->sort('paid'); ?></th>
                            <th><?php echo $this->Paginator->sort('due'); ?></th>
                            <th><?php echo $this->Paginator->sort('status'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $totals = $paids = $dues = 0;
                        foreach ($lenders as $lender): ?>
                            <tr>
                                <td><?php echo h($lender['Lender']['id']); ?>&nbsp;</td>
                                <td><?php echo h($lender['Lender']['name']); ?>&nbsp;</td>
                                <td><?php echo h($lender['Lender']['address']); ?>&nbsp;</td>
                                <td><?php echo h($lender['Lender']['phone']); ?>&nbsp;</td>
                                <td><?php echo h($lender['Lender']['mobile']); ?>&nbsp;</td>
                                <td><?php echo h($lender['Lender']['email']); ?>&nbsp;</td>
                                <td>
                                    <?php 
                                    $totals += $lender['Lender']['total'];
                                    echo h($lender['Lender']['total']); 
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                    $paids += $lender['Lender']['paid'];
                                    echo h($lender['Lender']['paid']); 
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                    $dues += $lender['Lender']['due'];
                                    echo h($lender['Lender']['due']); 
                                    ?>
                                </td>
                                <td><?php echo $status[$lender['Lender']['status']]; ?>&nbsp;</td>
                                <td class="actions">
                                    <?php echo $this->Html->link(__("<i style='color:green' class='fa fa-eye'></i>"), array('action' => 'view', $lender['Lender']['id']), array('escape' => false, 'title' => 'View')); ?>
                                    <?php echo $this->Html->link(__("<i style='color:black' class='fa fa-edit'></i>"), array('action' => 'edit', $lender['Lender']['id']), array('escape' => false, 'title' => 'Edit')); ?>
                                    <?php //echo $this->Form->postLink(__("<i style='color:red' class='fa fa-trash-o'></i>"), array('action' => 'delete', $lender['Lender']['id']), array('escape' => false, 'title' => 'Delete', 'confirm' => __('Are you sure you want to delete # %s?', $lender['Lender']['id']))); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                            <tr>
                                <td colspan="5"></td>
                                <td>Total</td>
                                <td><?php echo $totals; ?></td>
                                <td><?php echo $paids; ?></td>
                                <td><?php echo $dues; ?></td>
                            </tr>
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
