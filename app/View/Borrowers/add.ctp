<div class="container">
    <div class="banks form">
        <br>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <div class="panel panel-green">
                    <div class="panel-heading text-center bold-text">
                        <h4><?php echo __('Add Borrower'); ?></h4>
                    </div>
                    <div class="panel-body">
                        <?php echo $this->Form->create('Borrower', array('type' => 'file')); ?>
                        <?php
                        echo $this->Form->input('name');
                        echo $this->Form->input('phone');
                        echo $this->Form->input('district_id', array('empty' => 'Please Select', 'required' => true));
                        echo $this->Form->input('upazila_id', array('empty' => 'Please Select', 'required' => true));
                        echo $this->Form->input('email', array('required' => false));
                        echo $this->Form->input('address', array('type' => 'textarea'));
                        echo $this->Form->input('image', array('label' => 'Profile Photo', 'type' => 'file', 'class' => 'pageimage'));
                        echo $this->Form->input('status');
                        ?>
                        <?php echo $this->Form->end(__('Submit')); ?>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function () {
        $("#BorrowerDistrictId").change(function () {
            ajax_getupazila($(this).val());
        });
    });

    function ajax_getupazila(val) {
        if (val !== '') {
            $.ajax({
                type: 'POST',
                url: '<?php echo $this->Html->url(array('controller' => 'upazilas', 'action' => 'ajax_getupazila')); ?>',
                data: {district_id: val},
                success: function (data) {
                    $("#BorrowerUpazilaId").html(data).trigger('change');
                }
            });

        }
    }
</script>
