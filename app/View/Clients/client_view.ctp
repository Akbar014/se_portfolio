<!-- Start testimonials Area -->
<div class="project-area area-padding">
    
    <div class="test-overly"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Clients <span class="color">say</span></h3>
                    <p>Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="Reviews-content">
                    <!-- start testimonial carousel -->
                    <div class="testimonial-carousel item-indicator">
                        <?php foreach ($clientsays as $clientsay) {?>
                            <div class="single-testi">
                            <div class="testi-img ">
                                <?php echo $this->Html->image('ts/' . $clientsay['Testimonial']['id'] . '.png'); ?>
                                <div class="texti-name">
                                    <h4><?php echo $clientsay['Testimonial']['creator']?></h4>
                                    <span class="guest-rev"><a href="#"><?php echo $clientsay['Testimonial']['designation']?></a></span>
                                </div>
                            </div>
                            <div class="client-rating">
                                <a href="#"><i class="icon icon-star"></i></a>
                                <a href="#"><i class="icon icon-star"></i></a>
                                <a href="#"><i class="icon icon-star"></i></a>
                                <a href="#"><i class="icon icon-star"></i></a>
                                <a href="#"><i class="icon icon-star"></i></a>
                            </div>
                            <div class="testi-text">
                                <p><?php echo $clientsay['Testimonial']['content']?></p>
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
                    <h3>Our <span class="color">valuable client</span></h3>
                    <p>Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="project-carousel">
                <!-- single-awesome-project start -->

                <?php foreach ($clients as $client) { ?>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <?php echo $this->Html->image('cl/' . $client['Client']['id'] . '.png', array('id' => 'simg' . $client['Client']['id'])); ?>
                                <div class="add-actions text-center">
                                    <a id="glid<?php echo $client['Client']['id']; ?>" class="venobox" data-gall="myGallery" href="<?php echo $this->webroot.'img/cl/'.$client['Client']['id'].'t.png'?>">
                                        <i class="port-icon icon icon-picture"></i>
                                    </a>

                                </div>
                            </div>
                            <div class="project-dec">
                                <h4><?php echo $client['Client']['name']; ?></h4>
                                <p><?php echo substr($client['Client']['description'], 0, 180); ?></p>
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
