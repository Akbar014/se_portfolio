<?php
echo $this->Html->css(array('jquery-ui.min'));
echo $this->Html->script(array('jq.ui.min'));

?>
<script type='text/javascript'>
    $(document).ready(function () {
        $('#SrcDf, #SrcDt').datepicker();
    });
</script>

<div class="banks index">
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading text-center bold-text">Search</div>
                <div class="panel-body">
                    <?php echo $this->Form->create('Src'); ?>
                    <table class="table table-condensed table-striped table-bordered table-hover">
                        <tr>
                            <th><?php echo __('Title'); ?></th>
                            <td><?php echo $this->Form->input('nm', array('label' => false)); ?></td>
                            <th><?php echo __('Date from'); ?></th>
                            <td><?php echo $this->Form->input('df', array('label' => false)); ?></td>
                            <th><?php echo __('To'); ?></th>
                            <td><?php echo $this->Form->input('dt', array('label' => false)); ?></td>

                            <td><?php echo $this->Form->button('Search', array('class' => 'btn btn-info', 'name' => 'btnsrc')); ?></td>
                        </tr>
                    </table>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>
        
        
        <div class="col-lg-12">
            <div class="panel panel-green">
                <div class="panel-heading text-center bold-text">
                    <div class="pull-left"><h4><?php echo __('Repayments'); ?></h4></div>
                    <div class="pull-right">&nbsp;<?php echo $this->Html->link("<i class='glyphicon glyphicon-plus-sign' title='Add New'></i>", array('action' => 'add'), array('escape' => false)); ?></div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?php echo $this->Paginator->sort('id'); ?></th>
                                <th><?php echo $this->Paginator->sort('borrower_id'); ?></th>
                                <th><?php echo $this->Paginator->sort('pay_amount'); ?></th>
                                <th><?php echo $this->Paginator->sort('payment_date'); ?></th>
                                <th><?php echo $this->Paginator->sort('remark'); ?></th>
                                <th><?php echo $this->Paginator->sort('status'); ?></th>
                                
                                <th class="actions"><?php echo __('Actions'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($repayments as $repayment): ?>
                                <tr>
                                    <td><?php echo h($repayment['Repayment']['id']); ?></td>
                                    <td>
                                        <?php echo $this->Html->link($repayment['Borrower']['name'], array('controller' => 'borrowers', 'action' => 'view', $repayment['Borrower']['id'])); ?>
                                    </td>
                                    <td><?php echo h($repayment['Repayment']['pay_amount']); ?></td>
                                    <td><?php echo h($repayment['Repayment']['payment_date']); ?></td>
                                    <td><?php echo h($repayment['Repayment']['remark']); ?></td>
                                    <td><?php echo $status[$repayment['Repayment']['status']]; ?></td>
                                    <td class="actions">
                                        <?php echo $this->Html->link(__('<i style="color:green" class="glyphicon glyphicon-unchecked" title="View"></i>'), array('action' => 'view', $repayment['Repayment']['id']), array('escape' => false, 'target' => '_blank')); ?>
                                        <?php echo $this->Html->link(__('<i style="color:black" class="glyphicon glyphicon-edit" title="Edit"></i>'), array('action' => 'edit', $repayment['Repayment']['id']), array('escape' => false)); ?>
                                        <?php echo $this->Form->postLink(__('<i style="color:red" class="glyphicon glyphicon-trash" title="Delete"></i>'), array('action' => 'delete', $repayment['Repayment']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $repayment['Repayment']['id']), 'escape' => false)); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>


                    <p class="paginginfo">
                        <?php
                        echo $this->Paginator->counter(array(
                            'format' => __('Showing {:start} to {:end} of {:count} records')
                        ));
                        ?>                    </p>
                    <div class="paging">
                        <?php
                        echo $this->Paginator->first();
                        echo $this->Paginator->prev();
                        echo $this->Paginator->numbers();
                        echo $this->Paginator->next();
                        echo $this->Paginator->last();
                        ?>
                    </div>    
                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </div>
</div>



