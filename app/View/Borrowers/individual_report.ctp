
<div class="banks index">
    <br>
    <div class="row">
        <div class="col-lg-12">
            <h4 class="text-center"><?php echo 'Borrower : '.$lend_lists[0]['Borrower']['name']; ?></h4>
        </div>
    </div>
    <div class="row">

        <div class="col-lg-6">
            <div class="panel panel-green">
                <div class="panel-heading text-center bold-text">
                    <div class="pull-left"><h4><?php echo __('Loan List'); ?></h4></div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>SL NO.</th>
                                <th>Loan Date</th>
                                <th>Loan Amount</th>
                                <th>Remark</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sno = 1;
                            $tlend=0;
                            foreach ($lend_lists as $lend_list):
                                ?>
                                <tr>
                                    <td><?php echo $sno; ?></td>
                                    <td><?php echo h($lend_list['Lend']['date']); ?></td>
                                    <td><?php
                                        $tlend += $lend_list['Lend']['amount'];
                                        echo $lend_list['Lend']['amount'];
                                        ?></td>
                                    <td><?php echo h($lend_list['Lend']['remark']); ?></td>

                                </tr>
                                <?php
                                $sno++;
                            endforeach;
                            ?>
                            <tr>
                                <td colspan="2" class="text-right">Total</td>
                                <td><?php
                                    echo $tlend;
                                    ?></td>

                            </tr>
                        </tbody>
                    </table>

                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
        
         <div class="col-lg-6">
            <div class="panel panel-green">
                <div class="panel-heading text-center bold-text">
                    <div class="pull-left"><h4><?php echo __('Repayment List'); ?></h4></div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>SL NO.</th>
                                <th>Payment Date</th>
                                <th>Payment Amount</th>
                                <th>Remark</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sn = 1;
                            $tpay=0;
                            foreach ($repayment_lists as $repayment_list):
                                ?>
                                <tr>
                                    <td><?php echo $sn; ?></td>
                                    <td><?php echo h($repayment_list['Repayment']['payment_date']); ?></td>
                                    <td><?php
                                        $tpay += $repayment_list['Repayment']['pay_amount'];
                                        echo h($repayment_list['Repayment']['pay_amount']);
                                        ?></td>
                                    <td><?php echo h($repayment_list['Repayment']['remark']); ?></td>

                                </tr>
                                <?php
                                $sn++;
                            endforeach;
                            ?>

                            <tr>
                                <td colspan="2" class="text-right">Total</td>
                                <td><?php
                            echo $tpay;
                            ?></td>

                            </tr>
                        </tbody>
                    </table>

                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </div>
   
    
    
    <div class="row">

        <div class="col-lg-8 col-lg-offset-2">
            <div class="panel panel-green">
                <div class="panel-heading text-center bold-text">
                    <div class="pull-left"><h4><?php echo __('Due'); ?></h4></div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                               
                                <th>Total Loan</th>
                                <th>Total Payment</th>
                                <th>Due</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td><?php echo $tlend; ?></td>
                                    <td><?php echo $tpay; ?></td>
                                    <td><?php echo $tlend-$tpay; ?></td>
                                    

                                </tr>
                            
                        </tbody>
                    </table>

                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </div>
    
    
    
</div>



