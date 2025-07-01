

<?php
echo $this->Html->script(array('moment', 'bootstrap-datetimepicker'));
?>
<script type="text/javascript">
    $(function () {
        $('#SearchDate').datetimepicker({
            viewMode: 'months',
            format: 'YYYY-MM'
        });
    });
</script>
<div class="page_title">
    <br>
    <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Salary</div>
    <br>
</div>
<div class="row">
    <div class="col-md-12 divcard">

        <?php echo $this->Form->create('Search', array('class' => 'form-horizontal')); ?>
        <div class="col-md-12">
            <div class="form-group">
                <div class="col-md-1"> 
                    Month:
                </div>
                <div class="col-md-2"> 
                    <?php echo $this->Form->input('date', array('label' => false, 'div' => false, 'class' => 'form-control', 'required' => false, 'placeholder' => 'Date', 'value' => $date)); ?>
                </div>

                <div class="col-md-1"> 
                    <button class="btn btn-info pull-right" type="submit" name="btnsrc">Search</button>
                </div>
            </div>
        </div>
        <?php echo $this->Form->end(); ?>

        <?php echo $this->Form->create('Salary', array('class' => 'form-horizontal')); ?>
        <div class="row">
            <?php echo $this->Form->input('subdate', array('type' => 'hidden', 'value' => $date)); ?>
            <button class="contact-btn" type="submit" name="btnsmb" onclick="return confirm('Please sure again for submission');" style="position:absolute;right:5px;top:6px">Process For This Month</button>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>SL#</th>
                        <th>Picture</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Days</th>
                        <th>Leave</th>
                        <th>Present</th>
                        <th>Absence</th>
                        <th>Salary</th>
                        <th>Bonus</th>
                        <th>Salary Payable</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    $days = ($mdays - count($holidays));
                    $arrm = explode("-", $date);

                    foreach ($employees as $user):
                        $uid = $user['Employee']['id'];
                        $leaves = isset($ltd_data[$uid]) ? count($ltd_data[$uid]) : 0;
                        $present = 0;
                        $salary = (float) $user['Employee']['salary'];
                        $bonus = (float) $user['Employee']['bonus'];
                        ?>
                        <tr>
                            <td colspan="12" style="padding:0px">
                                <table class="table table-bordered" style="width:100%;margin:0;background:#ba50e1;color:white">
                                    <tr>
                                        <?php
                                        for ($day = 1; $day <= $mdays; $day ++) {
                                            $dt = $arrm[0] . '-' . $arrm[1] . '-' . (strlen($day) > 1 ? $day : '0' . $day);
                                            if (isset($holidays[$dt])) {
                                                $dis = '<b class="label label-warning" title="' . $holidays[$dt] . '">H</b>';
                                            }
                                            if (!empty($ptd_data[$uid][$dt][0])) {
                                                $present += 1;
                                                $dis = '<b class="label label-success" title="From: ' . $ptd_data[$uid][$dt][0] . ', To: ' . $ptd_data[$uid][$dt][1] . '">P</b>';
                                            }
                                            if (isset($ltd_data[$uid][$dt])) {
                                                $dis = '<b class="label label-info" title="' . $forsake_type[$ltd_data[$uid][$dt]] . '">L</b>';
                                            }
                                            if (empty($holidays[$dt]) && empty($ptd_data[$uid][$dt]) && empty($ltd_data[$uid][$dt])) {
                                                $dis = '<b class="label label-danger" title="Absent">A</b>';
                                            }
                                            echo '<td style="padding:0px 2px 4px 2px;font-weight:bold;line-height:14px"><div>' . $day . '</div>' . $dis . '</td>';
                                        }
                                        $amount = ((($salary / $days) * ($present + $leaves)) + $bonus);
                                        ?>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo ++$i; ?></td>
                            <td>
                                <?php echo $this->Html->image('u/' . $uid . '.png', array('alt' => 'No Image', 'width' => '80')); ?>
                                <input type="hidden" name="data[Employee][<?php echo $i; ?>][Salary][sal_month]" value="<?php echo $date; ?>" />
                                <input type="hidden" name="data[Employee][<?php echo $i; ?>][Salary][employee_id]" value="<?php echo $uid; ?>" />
                                <input type="hidden" name="data[Employee][<?php echo $i; ?>][Salary][days]" value="<?php echo $days; ?>" />
                                <input type="hidden" name="data[Employee][<?php echo $i; ?>][Salary][leaves]" value="<?php echo $leaves; ?>" />
                                <input type="hidden" name="data[Employee][<?php echo $i; ?>][Salary][presents]" value="<?php echo $present; ?>" />
                                <input type="hidden" name="data[Employee][<?php echo $i; ?>][Salary][salary]" value="<?php echo $salary; ?>" />
                                <input type="hidden" name="data[Employee][<?php echo $i; ?>][Salary][bonus]" value="<?php echo $bonus; ?>" />
                                <input type="hidden" name="data[Employee][<?php echo $i; ?>][Salary][amount]" value="<?php echo $amount; ?>" />
                            </td>
                            <td><?php echo h($user['Employee']['name']); ?></td>
                            <td><?php echo h($user['Employee']['designation']); ?></td>
                            <td><?php echo '<b title="Actual Duty Days">' . $days . '</b>(' . $mdays . ')'; ?></td>
                            <td><?php echo $leaves; ?></td>
                            <td><?php echo $present; ?></td>
                            <td><?php echo ($days - $present - $leaves); ?></td>
                            <td><?php echo $salary; ?></td>
                            <td><?php echo $bonus; ?></td>
                            <td><?php echo number_format($amount, 2, '.', ','); ?></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
        <?php echo $this->Form->end(); ?>

    </div>
</div>
<br>
</div>


