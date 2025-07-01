<!-- Start testimonials Area -->
<div class="project-area area-padding">
    
    <div class="test-overly"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Contractors <span class="color">say</span></h3>
                    <p>Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="Reviews-content">
                    <!-- start testimonial carousel -->
                    <div class="testimonial-carousel item-indicator">
                        <?php foreach ($contractorsays as $contractorsay) {?>
                            <div class="single-testi">
                            <div class="testi-img ">
                                <?php echo $this->Html->image('ts/' . $contractorsay['Testimonial']['id'] . '.png'); ?>
                                <div class="texti-name">
                                    <h4><?php echo $contractorsay['Testimonial']['creator']?></h4>
                                    <span class="guest-rev"><a href="#"><?php echo $contractorsay['Testimonial']['designation']?></a></span>
                                </div>
                            </div>
                            <div class="contractor-rating">
                                <a href="#"><i class="icon icon-star"></i></a>
                                <a href="#"><i class="icon icon-star"></i></a>
                                <a href="#"><i class="icon icon-star"></i></a>
                                <a href="#"><i class="icon icon-star"></i></a>
                                <a href="#"><i class="icon icon-star"></i></a>
                            </div>
                            <div class="testi-text">
                                <p><?php echo $contractorsay['Testimonial']['content']?></p>
                            </div>
                        </div>
                      <?php   }?>
                        <!-- End single item -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End testimonials end -->
<!-- Start project Area -->
<div class="project-area pdbottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Our <span class="color">valuable contractor</span></h3>
                    <p>Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="project-carousel">
                <!-- single-awesome-project start -->

                <?php foreach ($contractors as $contractor) { ?>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <?php echo $this->Html->image('cn/' . $contractor['Contractor']['id'] . '.png', array('id' => 'simg' . $contractor['Contractor']['id'])); ?>
                                <div class="add-actions text-center">
                                    <a id="glid<?php echo $contractor['Contractor']['id']; ?>" class="venobox" data-gall="myGallery" href="<?php echo $this->webroot.'img/cl/'.$contractor['Contractor']['id'].'t.png'?>">
                                        <i class="port-icon icon icon-picture"></i>
                                    </a>

                                </div>
                            </div>
                            <div class="project-dec">
                                <h4><?php echo $contractor['Contractor']['name']; ?></h4>
                                <p><?php echo substr($contractor['Contractor']['description'], 0, 180); ?></p>
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
