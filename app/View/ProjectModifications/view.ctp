<div class="projectModifications view">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Project Modification</div>
        <br>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo __('Project Modification'); ?></h2>
                <table class="table table-bordered table-condensed table-hover table-responsive table-striped">
                    <tbody>
                        <tr>
                            <td><?php echo __('Id'); ?></td>
                            <td>
                                <?php echo h($projectModification['ProjectModification']['id']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Project'); ?></td>
                            <td>
                                <?php echo $this->Html->link($projectModification['Project']['name'], array('controller' => 'projects', 'action' => 'view', $projectModification['Project']['id'])); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Employee'); ?></td>
                            <td>
                                <?php echo $this->Html->link($projectModification['Employee']['name'], array('controller' => 'projects', 'action' => 'view', $projectModification['Project']['id'])); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Modification'); ?></td>
                            <td>
                                <?php echo nl2br($projectModification['ProjectModification']['modification']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Start Date'); ?></td>
                            <td>
                                <?php echo h($projectModification['ProjectModification']['start_date']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('End Date'); ?></td>
                            <td>
                                <?php echo h($projectModification['ProjectModification']['end_date']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Approve Date'); ?></td>
                            <td>
                                <?php echo h($projectModification['ProjectModification']['approve_date']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Price'); ?></td>
                            <td>
                                <?php echo h($projectModification['ProjectModification']['price']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Status'); ?></td>
                            <td>
                                <?php echo $status[$projectModification['ProjectModification']['status']]; ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Created'); ?></td>
                            <td>
                                <?php echo h($projectModification['ProjectModification']['created']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Modified'); ?></td>
                            <td>
                                <?php echo h($projectModification['ProjectModification']['modified']); ?>
                                &nbsp;
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

