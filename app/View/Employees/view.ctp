<div class="employees view">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Employee Details</div>
        <br>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-condensed table-hover table-responsive table-striped">
                    <tbody>

                        <tr>
                            <td><?php echo __('Name'); ?></td>
                            <td>
                                <?php echo h($employee['Employee']['name']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Designation'); ?></td>
                            <td>
                                <?php echo h($employee['Employee']['designation']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Birthdate'); ?></td>
                            <td>
                                <?php echo h($employee['Employee']['birthdate']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Gender'); ?></td>
                            <td>
                                <?php echo h($employee['Employee']['gender']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Religion'); ?></td>
                            <td>
                                <?php echo h($employee['Employee']['religion']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Blood Group'); ?></td>
                            <td>
                                <?php echo h($employee['Employee']['blood_group']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Present Address'); ?></td>
                            <td>
                                <?php echo h($employee['Employee']['present_address']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Permanent Address'); ?></td>
                            <td>
                                <?php echo h($employee['Employee']['permanent_address']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Phone'); ?></td>
                            <td>
                                <?php echo h($employee['Employee']['phone']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Email'); ?></td>
                            <td>
                                <?php echo h($employee['Employee']['email']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Join Date'); ?></td>
                            <td>
                                <?php echo h($employee['Employee']['join_date']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Leave Date'); ?></td>
                            <td>
                                <?php echo h($employee['Employee']['leave_date']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Leav Type'); ?></td>
                            <td>
                                <?php echo h($employee['Employee']['leav_type']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Education'); ?></td>
                            <td>
                                <?php echo h($employee['Employee']['education']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Marital Status'); ?></td>
                            <td>
                                <?php echo h($employee['Employee']['marital_status']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Salary'); ?></td>
                            <td>
                                <?php echo h($employee['Employee']['salary']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Bonus'); ?></td>
                            <td>
                                <?php echo h($employee['Employee']['bonus']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Paid'); ?></td>
                            <td>
                                <?php echo h($employee['Employee']['paid']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Gain'); ?></td>
                            <td>
                                <?php echo h($employee['Employee']['gain']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Status'); ?></td>
                            <td>
                                <?php echo $status[$employee['Employee']['status']]; ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Created'); ?></td>
                            <td>
                                <?php echo h($employee['Employee']['created']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Modified'); ?></td>
                            <td>
                                <?php echo h($employee['Employee']['modified']); ?>
                                &nbsp;
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>



