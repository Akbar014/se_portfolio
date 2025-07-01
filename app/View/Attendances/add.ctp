
<?php
echo $this->Html->script(array('moment', 'plugins/bootstrap/bootstrap-datetimepicker'));
?>
<script type="text/javascript">
    $(function () {
        $(".timepicker").datetimepicker({format: 'HH:mm:ss'});
    });
</script>

<div class="salaries form">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Attendance</div>
        <br>
    </div>
    <div class="row">
        <div class="col-md-12 divcard">

            <?php echo $this->Form->create('Search', array('class' => 'form-horizontal')); ?>
            <div class="col-md-12">
                <div class="form-group">
                    <div class="col-md-1"> 
                        Date:
                    </div>
                    <div class="col-md-2"> 
                        <?php echo $this->Form->input('date', array('label' => false, 'div' => false, 'class' => 'datepicker form-control', 'required' => false, 'placeholder' => 'Date', 'value' => $date)); ?>
                    </div>

                    <div class="col-md-1"> 
                        <button class="btn btn-info pull-right" type="submit" name="btnsrc">Search</button>
                    </div>

                    <div class="col-md-7"> 
                        <?php
                        if (!empty($holiday)) {
                            echo '<label class="label-warning">Today is holiday (' . $holiday['Holiday']['title'] . ')</label>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php echo $this->Form->end(); ?>

            <?php echo $this->Form->create('Report', array('class' => 'form-horizontal')); ?>
            <div class="row">
                <?php echo $this->Form->input('subdate', array('type' => 'hidden', 'value' => $date)); ?>
                <div class="pull-right">&nbsp;<button class="contact-btn" type="submit" name="btnsmb" onclick="return confirm('Please sure again for submission');" style="position:absolute;right:5px;top:6px">Save Attends</button></div>

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>SL#</th>
                            <th>Picture</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Start Time</th>	
                            <th>End Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($employees as $user):
                            $aid = $int = $out = $disabled = NULL;
                            if (isset($atd_data[$user['Employee']['id']][0])) {
                                $aid = $atd_data[$user['Employee']['id']][0];
                            }
                            if (isset($atd_data[$user['Employee']['id']][1])) {
                                $int = $atd_data[$user['Employee']['id']][1];
                            }
                            if (isset($atd_data[$user['Employee']['id']][2])) {
                                $out = $atd_data[$user['Employee']['id']][2];
                            }
                            if (isset($atd_data[$user['Employee']['id']][3])) {
                                $out = $int = 'Leave';
                                $disabled = 'disabled="disabled"';
                                $class = NULL;
                            } else {
                                $class = " timepicker";
                            }
                            ?>
                            <tr>
                                <td><?php echo ++$i; ?></td>
                                <td>
                                    <?php echo $this->Html->image('u/' . $user['Employee']['id'] . '.png', array('alt' => 'No Image', 'width' => '80')); ?>
                                    <?php if ($aid != NULL): ?>
                                        <input type="hidden" name="data[Employee][<?php echo $i; ?>][Attendance][id]" value="<?php echo $aid; ?>" />
                                    <?php endif; ?>
                                    <?php if ($class != NULL): ?>
                                        <input type="hidden" name="data[Employee][<?php echo $i; ?>][Attendance][employee_id]" value="<?php echo $user['Employee']['id']; ?>" />
                                        <input type="hidden" name="data[Employee][<?php echo $i; ?>][Attendance][a_date]" value="<?php echo $date; ?>" />
                                    <?php endif; ?>
                                </td>
                                <td><?php echo h($user['Employee']['name']); ?></td>
                                <td><?php echo h($user['Employee']['designation']); ?></td>
                                <td><input type="text" class="form-control<?php echo $class; ?>" name="data[Employee][<?php echo $i; ?>][Attendance][in_time]" value="<?php echo $int; ?>" <?php echo $disabled; ?> size="10" id="AttendanceInTime"/></td>
                                <td><input type="text" class="form-control<?php echo $class; ?>" name="data[Employee][<?php echo $i; ?>][Attendance][out_time]" value="<?php echo $out; ?>" <?php echo $disabled; ?> size="10" id="AttendanceOutTime"/></td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
            <?php echo $this->Form->end(); ?>

        </div>
    </div>
    <br/>
</div>


<?php
echo $this->Html->css(array('jquery-ui.min', 'jquery.ui.timepicker-addon'));
echo $this->Html->script(array('jquery.min', 'jquery-ui.min', 'jquery.ui.timepicker-addon'));
?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#SearchDate').datepicker();
        $('#AttendanceInTime, #AttendanceOutTime').timepicker();

    });
</script>
