<!-- Start Service area -->
<div class="project-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Our <span class="color">Services</span></h3>
                    <p>Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="services-all">
                <!-- Start services -->
                
                <?php foreach ($services as $service) {?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services">
                        <a class="service-images" href="#">
                            <i class="flaticon-presentation-17"></i>
                        </a>
                        <div class="service-content">
                            <h4><a href="#"><?php echo $service['Service']['name']?></a></h4>
                            <p><?php echo substr($service['Service']['description'], 0,70)?></p>
                        </div>
                    </div>
                </div>
             <?php    }?>
                
                <div class="col-md-12 text-center">
                    <a class="load-more-btn" href="services.html">More services</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Service area -->