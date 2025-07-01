<div class="users view">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> User Details</div>
        <br>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-condensed table-hover table-responsive table-striped">
                    <tbody>

                        <tr>
                            <td><?php echo __('Role'); ?></td>
                            <td>
                                <?php echo $this->Html->link($user['Role']['title'], array('controller' => 'roles', 'action' => 'view', $user['Role']['id'])); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Employee'); ?></td>
                            <td>
                                <?php echo $this->Html->link($user['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $user['Employee']['id'])); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Username'); ?></td>
                            <td>
                                <?php echo h($user['User']['username']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Password'); ?></td>
                            <td>
                                <?php echo h($user['User']['password']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Status'); ?></td>
                            <td>
                                <?php echo $status[$user['User']['status']]; ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Created'); ?></td>
                            <td>
                                <?php echo h($user['User']['created']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Modified'); ?></td>
                            <td>
                                <?php echo h($user['User']['modified']); ?>
                                &nbsp;
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>


