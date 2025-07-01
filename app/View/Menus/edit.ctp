<div class="menus form">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Menu</div>
        <br>
    </div>

    <div class="row">
        <div class="col-md-12 divcard">
            <?php echo $this->Form->create('Menu'); ?>
            <div class="row">
                <div class="col-lg-6">
                    <?php
                    $diff = array('index' => 'index', 'view' => 'view', 'add' => 'add', 'edit' => 'edit', 'delete' => 'delete');
                    echo $this->Form->input('id');
                    echo $this->Form->input('type', array('onchange' => '_sh()'));
                    ?>
                </div>
                <div class="col-lg-6">
                    <?php
                    echo '<div id="divpage">';
                    echo $this->Form->input('page_id', array('empty' => '--Please select--'));
                    echo '</div>';
                    echo '<div class="form-group select required" id="divurl"><label for="MenuUrl">Url</label><select name="data[Menu][url]" class="form-control" id="MenuUrl"><option value="">--Please select--</option>';
                    foreach ($urls as $key => $url) {
                        $url = array_diff($url, $diff);
                        if (count($url) > 0) {
                            $og = str_replace('Controller', '', $key);
                            echo '<optgroup label="' . $og . ' Management">';
                            foreach ($url as $val) {
                                $ogl = strtolower($og) . '/' . $val;
                                $sel = ($this->request->data['Menu']['url'] == $ogl) ? ' selected="selected"' : '';
                                echo '<option value="' . $ogl . '"' . $sel . '>' . $ogl . '</option>';
                            }
                            echo '</optgroup>';
                        }
                    }
                    echo '</select></div>';
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('name'); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('slug'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('parent_id', array('empty' => '--Please select--')); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('order'); ?>
                </div>
            </div>
            <?php
            echo $this->Form->input('status');
            ?>

            <?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'contact-btn')); ?>
        </div>
    </div>
    <br>

</div>
<script type="text/javascript">
    $(document).ready(function () {
        _sh();

        $('#MenuName').blur(function () {
            var small = $(this).val().toLowerCase();
            $('#MenuSlug').val(small.replace(" ", "-") + "-" + Math.floor((Math.random() * 1000) + 1));
        });
    });
    function _sh() {
        if ($("#MenuType").val() === '1') {
            $("#divpage").show();
            $("#divurl").hide();
        } else {
            $("#divpage").hide();
            $("#divurl").show();
        }
    }
</script>