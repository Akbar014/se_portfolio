
<div class="container">
    <div class="courses index">
        <div class="page_title">
            <br>
            <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Product Details</div>
            <br>
        </div>

        <section class="content">
            <div class="row">
                <div class="col-md-8">

                    <h4 class="blcol"><?php
                    //pr($project);
                    echo $project['Project']['name']; ?> </h4>
                    <p><?php echo $this->Html->image('pj/' . $project['Project']['id'] . '.png', array('alt' => 'No Image')); ?></p>
                    <h4 class="blcol"><?php echo 'Project Requirement'; ?> </h4>
                    <p><?php echo $project['Project']['requirement'] ?> </p>
                    <h3 class="blcol"><?php echo 'Project Modification'; ?> </h3>
                    <p><?php echo $project['Project']['modification'] ?> </p>

                </div>
                <div class="col-md-4">
                    <br><br>
                    <div class="col-md-12">
                         <h4 class="blcol"><?php echo 'Key Feature'; ?> </h4>
                        <p><?php //echo $project['Project']['feature']; ?> </p>
                        <p><strong>Demo Link: </strong><?php //echo $project['Project']['demo']; ?></p>
                        <p><strong>Price: </strong>  <?php echo $project['Product']['price']; ?></p>
                    </div>


                </div>
            </div>
            <br>
        </section>
    </div>

</div>

