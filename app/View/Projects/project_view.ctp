
<style>
    
</style>
<!-- Start project Area -->
<div class="project-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Our <span class="color">Projects</span></h3>
                    <p>Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="project-carousel">
                <!-- single-awesome-project start -->

                <?php foreach ($projects as $project) { ?>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <?php echo $this->Html->image('pj/' . $project['Project']['id'] . '.png', array('id' => 'simg' . $project['Project']['id'])); ?>
                                <div class="add-actions text-center">
                                    <a id="glid<?php echo $project['Project']['id']; ?>" class="venobox" data-gall="myGallery" href="<?php echo $this->webroot.'img/pj/'.$project['Project']['id'].'t.png'?>">
                                        <i class="port-icon icon icon-picture"></i>
                                    </a>

                                </div>
                            </div>
                            <div class="project-dec">
                                <h4><?php echo $this->Html->link($project['Project']['name'], array('controller'=>'projects','action' => 'project_details',$project['Project']['id']), array('escape' => false)); ?></h4>
                                <p><?php echo substr($project['Product']['description'], 0, 180); ?></p>
                            </div>
                        </div>
                    </div>

                <?php } ?>

            </div>		
        </div>	
    </div>
    <!-- End main content -->
</div>
<!-- End project Area -->