<div class="products form">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Product</div>
        <br>
    </div>

    <div class="row">
        <div class="col-md-12 divcard">
            <?php echo $this->Form->create('Product', array('type' => 'file')); ?>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('category_id'); ?>
                </div>
                <div class="col-lg-6">
                    <?php
                    echo $this->Form->input('id');
                    echo $this->Form->input('name');
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('description'); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('feature'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('demo'); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('credential'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Form->input('seq'); ?>
                </div>
                <div class="col-lg-6">
                    <?php echo $this->Form->input('price'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <?php echo $this->Form->input('status'); ?>
                </div>
                <div class="col-lg-3">
                    <?php echo $this->Form->input('is_public'); ?>
                </div>
                <div class="col-lg-3">
                    <?php echo $this->Form->input('image', array('label' => 'Project Image', 'type' => 'file', 'class' => 'pageimage')); ?>
                </div>
                <div class="col-lg-3">
                    <?php
                    if (!empty($img)) {
                        echo '<div class="control-group text">
                            <label>Uploaded Image</label>
                            ' . $this->Html->image($img, array('alt' => 'No Image', 'width' => '120')) . '
                        </div>';
                    }
                    ?>
                </div>
            </div>


            <?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'contact-btn')); ?>
        </div>

    </div>
    <br>

</div>
