<div class="loans index">
    <div class="page_title">
        <br>
        <div class="pagenation">
            &nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?>
            <i>/</i> Loan List
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
                            <th><?php echo __('Lender'); ?></th>
                            <td><?php echo $this->Form->input('lender_id', array('label' => false)); ?></td>
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
                            <th><?php echo $this->Paginator->sort('lender_id'); ?></th>
                            <th><?php echo $this->Paginator->sort('loan_date'); ?></th>
                            <th><?php echo $this->Paginator->sort('return_date'); ?></th>
                            <th><?php echo $this->Paginator->sort('amount'); ?></th>
                            <th><?php echo $this->Paginator->sort('witness'); ?></th>
                            <th><?php echo $this->Paginator->sort('remark'); ?></th>
                            <th><?php echo $this->Paginator->sort('created'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $tot = 0;
                        foreach ($loans as $loan) : ?>
                            <tr>
                                <td><?php echo h($loan['Loan']['id']); ?>&nbsp;</td>
                                <td>
                                    <?php echo $this->Html->link($loan['Lender']['name'], array('controller' => 'lenders', 'action' => 'view', $loan['Lender']['id'])); ?>
                                </td>
                                <td><?php echo h($loan['Loan']['loan_date']); ?>&nbsp;</td>
                                <td><?php echo h($loan['Loan']['return_date']); ?>&nbsp;</td>
                                <td><?php
                                    $tot += $loan['Loan']['amount'];
                                    echo h($loan['Loan']['amount']);
                                    ?>&nbsp;</td>
                                <td><?php echo h($loan['Loan']['witness']); ?>&nbsp;</td>
                                <td><?php echo h($loan['Loan']['remark']); ?>&nbsp;</td>
                                <td><?php echo h($loan['Loan']['created']); ?>&nbsp;</td>
                                <td class="actions">
                                    <?php echo $this->Html->link(__("<i style='color:green' class='fa fa-eye'></i>"), array('action' => 'view', $loan['Loan']['id']), array('escape' => false, 'title' => 'View')); ?>
                                    <?php echo $this->Html->link(__("<i style='color:black' class='fa fa-edit'></i>"), array('action' => 'edit', $loan['Loan']['id']), array('escape' => false, 'title' => 'Edit')); ?>
                                    <?php echo $this->Form->postLink(__("<i style='color:red' class='fa fa-trash-o'></i>"), array('action' => 'delete', $loan['Loan']['id']), array('escape' => false, 'title' => 'Delete', 'confirm' => __('Are you sure you want to delete # %s?', $loan['Loan']['id']))); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="4" class="text-right">Total</td>
                            <td colspan="5"><?php echo h($tot); ?>&nbsp;</td>
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
    $(document).ready(function() {
        $('#SrcDf').datepicker();
        $('#SrcDt').datepicker();

    });
</script>