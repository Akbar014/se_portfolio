

<div class="intro-area">
    <div class="main-overly"></div>
    <div class="intro-carousel">
        <?php foreach ($sliders as $slider) { ?>

            <div class="intro-content">
                <div class="slider-images">
                    <?php echo $this->Html->image('slider/' . $slider['Slider']['id'] . '.png'); ?>
                </div>
                <div class="slider-content">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- layer 1 -->
                                        <div class="layer-1-2">
                                            <h1 class="title2"><?php echo $slider['Slider']['title'] ?></h1>
                                        </div>
                                        <!-- layer 2 -->
                                        <div class="layer-1-1 ">
                                            <p><?php echo $slider['Slider']['content'] ?></p>
                                        </div>
                                        <!-- layer 3 -->
                                        <div class="layer-1-3">
                                            <?php echo $this->Html->link("<div class='ready-btn left-btn'>Our Services</div> ", array('controller' => 'services', 'action' => 'services_view'), array('escape' => false)); ?>
                                            <?php echo $this->Html->link("<div class='ready-btn right-btn'>Our Products</div> ", array('controller' => 'products', 'action' => 'product_view'), array('escape' => false)); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</div>
<!-- End Slider Area -->
<!-- Welcome product area start -->

<div class="welcome-area bg-color area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Our <span class="color">Products</span></h3>
                    <p>If you are looking for the best brains and the best technology in the industry, we have them all. Customer satisfaction is always our main priority that’s why we utilize the finest professionals and technology to work for you.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="project-carousel">
                <!-- single-awesome-project start -->

                <?php foreach ($products as $product) { ?>

                    <div class="col-md-4 col-sm-4 col-xs-12">

                        <div class="well-services">
                            <div class="services-img htlimit">
                                <?php echo $this->Html->image('pd/' . $product['Product']['id'] . '.png'); ?>
                                <div class="image-layer">
                                    <a href="#"><i class="flaticon-graph-8" ></i>business analysis</a>
                                    <a href="#"><i class="flaticon-graph-3" ></i>Digital growth</a>
                                    <a href="#"><i class="flaticon-notes-2" ></i>Investment plan</a>
                                    <a href="#"><i class="flaticon-investment" ></i>Complete achievement</a>
                                </div>
                            </div>
                            <div class="main-services">
                                <div class="service-content">
                                    <h4 style="height: 60px;"><?php echo $this->Html->link($product['Product']['name'], array('controller' => 'products', 'action' => 'product_details', $product['Product']['id']), array('escape' => false)); ?></h4>                                   
                                    <p><?php echo substr($product['Product']['description'], 0, 70) ?></p>
                                    <?php echo $this->Html->link("read more", array('controller' => 'products', 'action' => 'product_details', $product['Product']['id']), array('class' => 'service-btn', 'escape' => false)); ?>
                                </div>
                            </div>
                        </div>

                    </div>

                <?php } ?>

            </div>		
        </div>	
    </div>
    <!-- End main content -->
</div>

<!-- Welcome product area End -->
<!-- Start Service area -->
<div class="services-area area-padding">
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

                <?php foreach ($services as $service) { ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-services">
                            <a class="service-images" href="#">
                                <i class="flaticon-presentation-17"></i>
                            </a>
                            <div class="service-content">
                                <h4><a href="#"><?php echo $service['Service']['name'] ?></a></h4>
                                <p><?php echo substr($service['Service']['description'], 0, 70) ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <div class="col-md-12 text-center">
                    <?php echo $this->Html->link("More services", array('controller' => 'services', 'action' => 'services_view'), array('class' => 'load-more-btn', 'escape' => false)); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Service area -->
<!-- Start Counter Area -->
<div class="counter-area area-padding parallax-bg fix" data-stellar-background-ratio="0.6">
    <div class="container">
        <div class="row">
            <div class="fun-content">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="fun_text">
                        <span class="counter">5060</span>
                        <h5>Happy Customer</h5>
                    </div>
                </div>
                <!-- fun_text  -->
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="fun_text">
                        <span class="counter">10050</span>
                        <h5>Complete project</h5>
                    </div>
                </div>
                <!-- fun_text  -->
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="fun_text">
                        <span class="counter">20</span>
                        <h5>Present Project</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="fun_text">
                        <span class="counter">40</span>
                        <h5>Awards won</h5>
                    </div>
                </div>

            </div>
        </div>
        <!-- end Row -->
    </div>
</div>
<!-- End Counter Area -->
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
                                    <a id="glid<?php echo $project['Project']['id']; ?>" class="venobox" data-gall="myGallery" href="<?php echo $this->webroot . 'img/pj/' . $project['Project']['id'] . 't.png' ?>">
                                        <i class="port-icon icon icon-picture"></i>
                                    </a>

                                </div>
                            </div>
                            <div class="project-dec">
                                <h4><?php echo $this->Html->link($project['Project']['name'], array('controller' => 'projects', 'action' => 'project_details', $project['Project']['id']), array('escape' => false)); ?></h4>   
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

<!-- Start testimonials Area -->
<div class="testimonial-area area-padding">
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

                        <?php foreach ($clientsays as $clientsay) { ?>
                            <div class="single-testi">
                                <div class="testi-img ">
                                    <?php echo $this->Html->image('ts/' . $clientsay['Testimonial']['id'] . '.png'); ?>
                                    <div class="texti-name">
                                        <h4><?php echo $clientsay['Testimonial']['creator'] ?></h4>
                                        <span class="guest-rev"><a href="#"><?php echo $clientsay['Testimonial']['designation'] ?></a></span>
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
                                    <p><?php echo $clientsay['Testimonial']['content'] ?></p>
                                </div>
                            </div>
                        <?php } ?>

                        <!-- End single item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End testimonials end -->
<!-- Start Overview -->
<div class="project-area area-padding">
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
                                    <a id="glid<?php echo $client['Client']['id']; ?>" class="venobox" data-gall="myGallery" href="<?php echo $this->webroot . 'img/cl/' . $client['Client']['id'] . 't.png' ?>">
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
<!-- End Overview -->
<!--Blog Area Start-->
<div class="blog-area blog-area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Latest<span class="color"> News</span></h3>
                    <p>Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog-grid home-blog">
                <!-- Start single blog -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a class="image-scale" href="#">
                                <img src="img/blog/b1.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-title">
                                <div class="blog-meta">
                                    <span class="date-type">
                                        20 june, 2017
                                    </span>
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        13
                                    </span>
                                </div>
                                <a href="#">
                                    <h4>The phrasal sequence of the Lorem Ipsum text.</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a class="image-scale" href="#">
                                <img src="img/blog/b2.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-title">
                                <div class="blog-meta">
                                    <span class="date-type">
                                        20 june, 2017
                                    </span>
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        13
                                    </span>
                                </div>
                                <a href="#">
                                    <h4>Make sure the prototype looks finished by.</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a class="image-scale" href="#">
                                <img src="img/blog/b3.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-title">
                                <div class="blog-meta">
                                    <span class="date-type">
                                        20 june, 2017
                                    </span>
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        13
                                    </span>
                                </div>
                                <a href="#">
                                    <h4>Designer have to make sure the prototype looks.</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
            </div>
        </div>
        <!-- End row -->
    </div>
</div>