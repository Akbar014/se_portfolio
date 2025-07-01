<div class="receipts view">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Receipt Details</div>
        <br>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-condensed table-hover table-responsive table-striped">
                    <tbody>
                        <tr>
                            <td><?php echo __('Id'); ?></td>
                            <td>
                                <?php echo h($receipt['Receipt']['id']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Project'); ?></td>
                            <td>
                                <?php echo $this->Html->link($receipt['Project']['name'], array('controller' => 'projects', 'action' => 'view', $receipt['Project']['id'])); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Payment Type'); ?></td>
                            <td>
                                <?php echo $payment_type[$receipt['Receipt']['payment_type']]; ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Amount'); ?></td>
                            <td>
                                <?php echo h($receipt['Receipt']['amount']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Balance'); ?></td>
                            <td>
                                <?php echo h($receipt['Receipt']['balance']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Date'); ?></td>
                            <td>
                                <?php echo h($receipt['Receipt']['pdate']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Comments'); ?></td>
                            <td>
                                <?php echo h($receipt['Receipt']['comments']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Created'); ?></td>
                            <td>
                                <?php echo h($receipt['Receipt']['created']); ?>
                                &nbsp;
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>


