<div class="clients view">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Client Details</div>
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
                                <?php echo h($client['Client']['id']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Name'); ?></td>
                            <td>
                                <?php echo h($client['Client']['name']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Description'); ?></td>
                            <td>
                                <?php echo h($client['Client']['description']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Address'); ?></td>
                            <td>
                                <?php echo h($client['Client']['address']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Phone'); ?></td>
                            <td>
                                <?php echo h($client['Client']['phone']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Mobile'); ?></td>
                            <td>
                                <?php echo h($client['Client']['mobile']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Email'); ?></td>
                            <td>
                                <?php echo h($client['Client']['email']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Web'); ?></td>
                            <td>
                                <?php echo h($client['Client']['web']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Contact Person'); ?></td>
                            <td>
                                <?php echo h($client['Client']['contact_person']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Contact Phone'); ?></td>
                            <td>
                                <?php echo h($client['Client']['contact_phone']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Status'); ?></td>
                            <td>
                                <?php echo $status[$client['Client']['status']]; ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Created'); ?></td>
                            <td>
                                <?php echo h($client['Client']['created']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Modified'); ?></td>
                            <td>
                                <?php echo h($client['Client']['modified']); ?>
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
    <?php if (!empty($client['Project'])): ?>
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
            <?php foreach ($client['Project'] as $project): ?>
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
