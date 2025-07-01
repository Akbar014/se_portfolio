<div class="contractors view">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Contractor Details</div>
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
                                <?php echo h($contractor['Contractor']['id']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Name'); ?></td>
                            <td>
                                <?php echo h($contractor['Contractor']['name']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Description'); ?></td>
                            <td>
                                <?php echo h($contractor['Contractor']['description']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Address'); ?></td>
                            <td>
                                <?php echo h($contractor['Contractor']['address']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Phone'); ?></td>
                            <td>
                                <?php echo h($contractor['Contractor']['phone']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Mobile'); ?></td>
                            <td>
                                <?php echo h($contractor['Contractor']['mobile']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Email'); ?></td>
                            <td>
                                <?php echo h($contractor['Contractor']['email']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Web'); ?></td>
                            <td>
                                <?php echo h($contractor['Contractor']['web']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Status'); ?></td>
                            <td>
                                <?php echo $status[$contractor['Contractor']['status']]; ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Created'); ?></td>
                            <td>
                                <?php echo h($contractor['Contractor']['created']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Modified'); ?></td>
                            <td>
                                <?php echo h($contractor['Contractor']['modified']); ?>
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
    <h3><?php echo __('Related Projects'); ?></h3>
    <?php if (!empty($contractor['Project'])): ?>
        <table class="table table-bordered table-condensed table-hover table-responsive table-striped">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Name'); ?></th>
                <th><?php echo __('Requirement'); ?></th>
                <th><?php echo __('Price'); ?></th>
                <th><?php echo __('Advance'); ?></th>
                <th><?php echo __('Paid'); ?></th>
                <th><?php echo __('Created'); ?></th>
            </tr>
            <?php foreach ($contractor['Project'] as $project): ?>
                <tr>
                    <td><?php echo $project['id']; ?></td>
                    <td><?php echo $project['name']; ?></td>
                    <td><?php echo $project['requirement']; ?></td>
                    <td><?php echo $project['price']; ?></td>
                    <td><?php echo $project['advance']; ?></td>
                    <td><?php echo $project['paid']; ?></td>
                    <td><?php echo $project['created']; ?></td>

                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

</div>
