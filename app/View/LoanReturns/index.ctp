<div class="loanReturns index">
    <div class="page_title">
        <br>
        <div class="pagenation">
            &nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?>
            <i>/</i> Loan Return List
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
                        foreach ($loanReturns as $loanReturn) : ?>
                            <tr>
                                <td><?php echo h($loanReturn['LoanReturn']['id']); ?>&nbsp;</td>
                                <td>
                                    <?php echo $this->Html->link($loanReturn['Lender']['name'], array('controller' => 'lenders', 'action' => 'view', $loanReturn['Lender']['id'])); ?>
                                </td>
                                <td><?php echo h($loanReturn['LoanReturn']['return_date']); ?>&nbsp;</td>
                                <td><?php
                                    $tot += $loanReturn['LoanReturn']['amount'];
                                    echo h($loanReturn['LoanReturn']['amount']);
                                    ?>&nbsp;</td>
                                <td><?php echo h($loanReturn['LoanReturn']['witness']); ?>&nbsp;</td>
                                <td><?php echo h($loanReturn['LoanReturn']['remark']); ?>&nbsp;</td>
                                <td><?php echo h($loanReturn['LoanReturn']['created']); ?>&nbsp;</td>
                                <td class="actions">
                                    <?php echo $this->Html->link(__("<i style='color:green' class='fa fa-eye'></i>"), array('action' => 'view', $loanReturn['LoanReturn']['id']), array('escape' => false, 'title' => 'View')); ?>
                                    <?php echo $this->Html->link(__("<i style='color:black' class='fa fa-edit'></i>"), array('action' => 'edit', $loanReturn['LoanReturn']['id']), array('escape' => false, 'title' => 'Edit')); ?>
                                    <?php echo $this->Form->postLink(__("<i style='color:red' class='fa fa-trash-o'></i>"), array('action' => 'delete', $loanReturn['LoanReturn']['id']), array('escape' => false, 'title' => 'Delete', 'confirm' => __('Are you sure you want to delete # %s?', $loanReturn['LoanReturn']['id']))); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="3" class="text-right">Total</td>
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