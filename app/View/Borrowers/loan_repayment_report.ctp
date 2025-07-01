
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
                            <th><?php echo __('Borrower Name'); ?></th>
                            <td><?php echo $this->Form->input('borrower_id', array('options' => $borrowers_list, 'empty' => 'Please Select', 'label' => false)); ?></td>

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
                    <div class="pull-left"><h4><?php echo __('Loan & Repayment Report'); ?></h4></div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Amount</th>
                                <th>Paid</th>
                                <th>Due</th>
                                <th class="actions"><?php echo __('Actions'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $tamount = $tpaid = 0;
                            foreach ($borrowers as $borrower):
                                ?>
                                <tr>
                                    <td><?php echo h($borrower['Borrower']['id']); ?></td>
                                    <td><?php echo h($borrower['Borrower']['name']); ?></td>
                                    <td><?php echo h($borrower['Borrower']['phone']); ?></td>
                                    <td><?php echo h($borrower['Borrower']['email']); ?></td>
                                    <td><?php echo h($borrower['Borrower']['address']); ?></td>
                                    <td><?php
                                       $tamount += $borrower['Borrower']['amount'];
                                        echo h($borrower['Borrower']['amount']);
                                        ?></td>
                                    <td><?php
                                        $tpaid += $borrower['Borrower']['paid'];
                                        echo h($borrower['Borrower']['paid']);
                                        ?></td>
                                    <td><?php
                                        echo $borrower['Borrower']['amount'] - $borrower['Borrower']['paid'];
                                        ?></td>
                                    <td class="actions">
                                        <?php echo $this->Html->link(__('<i style="color:green" class="glyphicon glyphicon-unchecked" title="View"></i>'), array('action' => 'individual_report', $borrower['Borrower']['id']), array('escape' => false, 'target' => '_blank')); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td colspan="5" class="text-right">Total </td>
                                <td><?php echo $tamount; ?></td>
                                <td><?php echo $tpaid; ?></td>
                                <td><?php echo $tamount - $tpaid; ?></td>
                            </tr>

                        </tbody>
                    </table>


                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </div>
</div>



