<div class="projects view">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Project Details</div>
        <br>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-md-12">

                <table class="table table-bordered table-condensed table-hover table-responsive table-striped">
                    <tbody>

                        <tr>
                            <td><?php echo __('Product'); ?></td>
                            <td>
                                <?php echo $this->Html->link($project['Product']['name'], array('controller' => 'products', 'action' => 'view', $project['Product']['id'])); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Client'); ?></td>
                            <td>
                                <?php echo $this->Html->link($project['Client']['name'], array('controller' => 'clients', 'action' => 'view', $project['Client']['id'])); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Name'); ?></td>
                            <td>
                                <?php echo h($project['Project']['name']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Contractor'); ?></td>
                            <td>
                                <?php echo $this->Html->link($project['Contractor']['name'], array('controller' => 'contractors', 'action' => 'view', $project['Contractor']['id'])); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Contractor Percentage'); ?></td>
                            <td>
                                <?php echo h($project['Project']['contractor_percentage']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Extra'); ?></td>
                            <td>
                                <?php echo nl2br($project['Project']['extra']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Requirement'); ?></td>
                            <td>
                                <?php echo nl2br($project['Project']['requirement']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Price'); ?></td>
                            <td>
                                <?php echo h($project['Project']['price']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Advance'); ?></td>
                            <td>
                                <?php echo h($project['Project']['advance']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Paid'); ?></td>
                            <td>
                                <?php echo h($project['Project']['paid']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Due'); ?></td>
                            <td>
                                <?php echo ($project['Project']['price'] - $project['Project']['paid']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Seq'); ?></td>
                            <td>
                                <?php echo h($project['Project']['seq']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Status'); ?></td>
                            <td>
                                <?php echo $status[$project['Project']['status']]; ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Created'); ?></td>
                            <td>
                                <?php echo h($project['Project']['created']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Modified'); ?></td>
                            <td>
                                <?php echo h($project['Project']['modified']); ?>
                                &nbsp;
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<div class="related">
    <?php if (!empty($project['ProjectModification'])): ?>
        <h3><?php echo __('Related Modifications'); ?></h3>
        <table class="table table-bordered table-condensed table-hover table-responsive table-striped">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('modification'); ?></th>
                <th><?php echo __('price'); ?></th>
                <th><?php echo __('start_date'); ?></th>
                <th><?php echo __('end_date'); ?></th>
                <th><?php echo __('status'); ?></th>
                <th><?php echo __('created'); ?></th>
            </tr>
            <?php foreach ($project['ProjectModification'] as $modification): ?>
                <tr>
                    <td><?php echo $modification['id']; ?></td>
                    <td><?php echo $modification['modification']; ?></td>
                    <td><?php echo $modification['price']; ?></td>
                    <td><?php echo $modification['start_date']; ?></td>
                    <td><?php echo $modification['end_date']; ?></td>
                    <td><?php echo $status[$modification['status']]; ?></td>
                    <td><?php echo $modification['created']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <?php if (!empty($project['Receipt'])): ?>
        <h3><?php echo __('Related Receipts'); ?></h3>
        <table class="table table-bordered table-condensed table-hover table-responsive table-striped">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('payment_type'); ?></th>
                <th><?php echo __('amount'); ?></th>
                <th><?php echo __('balance'); ?></th>
                <th><?php echo __('date'); ?></th>
                <th><?php echo __('comments'); ?></th>
                <th><?php echo __('created'); ?></th>
            </tr>
            <?php foreach ($project['Receipt'] as $receipt): ?>
                <tr>
                    <td><?php echo $receipt['id']; ?></td>
                    <td><?php echo $payment_type[$receipt['payment_type']]; ?></td>
                    <td><?php echo $receipt['amount']; ?></td>
                    <td><?php echo $receipt['balance']; ?></td>
                    <td><?php echo $receipt['pdate']; ?></td>
                    <td><?php echo $receipt['comments']; ?></td>
                    <td><?php echo $receipt['created']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

</div>