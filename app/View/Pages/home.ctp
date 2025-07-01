<!--   hero area start   -->
<div class="hero-area" id="heroHome4" style="background-image: url('https://softwareend.com/assets/front/img/5e7645d7ce2ad.jpg'); background-size: cover;">
    <div class="container">
        <div class="hero-txt">
            <div class="row">
                <div class="col-12">
                    <span>Financial planning for life</span>
                    <h1>Trusted to help guide entrepreneurs make better financial decisions.</h1>
                    <a href="https://megasoft.biz/plusagency/about-us/22/page" class="hero-boxed-btn" target="_blank">learn more</a>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-area-overlay"></div>
</div>
<!--   hero area end    -->


<!--    introduction area start   -->
<div class="intro-section">
    <div class="container">
        <div class="hero-features">
            <div class="row">
                <style>
                    .sf21::after {
                        background-color: #0A3041;
                    }
                </style>
                <div class="col-md-3 col-sm-6 single-hero-feature sf21" style="background-color: #0A3041;">
                    <div class="outer-container">
                        <div class="inner-container">
                            <div class="icon-wrapper">
                                <i class="fas fa-wallet"></i>
                            </div>
                            <h3>Investment Advice</h3>
                        </div>
                    </div>
                </div>
                <style>
                    .sf22::after {
                        background-color: #0E3E53;
                    }
                </style>
                <div class="col-md-3 col-sm-6 single-hero-feature sf22" style="background-color: #0E3E53;">
                    <div class="outer-container">
                        <div class="inner-container">
                            <div class="icon-wrapper">
                                <i class="fas fa-chart-pie"></i>
                            </div>
                            <h3>Risk Manegment</h3>
                        </div>
                    </div>
                </div>
                <style>
                    .sf23::after {
                        background-color: #0A3041;
                    }
                </style>
                <div class="col-md-3 col-sm-6 single-hero-feature sf23" style="background-color: #0A3041;">
                    <div class="outer-container">
                        <div class="inner-container">
                            <div class="icon-wrapper">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3>Taks &amp; Accounting</h3>
                        </div>
                    </div>
                </div>
                <style>
                    .sf34::after {
                        background-color: #0E3E53;
                    }
                </style>
                <div class="col-md-3 col-sm-6 single-hero-feature sf34" style="background-color: #0E3E53;">
                    <div class="outer-container">
                        <div class="inner-container">
                            <div class="icon-wrapper">
                                <i class="fas fa-suitcase"></i>
                            </div>
                            <h3>Financial Advice</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 pr-lg-0">
                <div class="intro-txt">
                    <span class="section-title">Quem nós somos</span>
                    <h2 class="section-summary">We keep things simple, putting you in control so you can make informed choices </h2>
                    <a href="https://megasoft.biz/plusagency/services" class="intro-btn" target="_blank"><span>what we do</span></a>
                </div>
            </div>
            <div class="col-lg-6 pl-lg-0 px-md-3 px-0">
                <div class="intro-bg" style="background-image: url('https://softwareend.com/assets/front/img/sider.jpg'); background-size: cover;">
                    <a id="play-video" class="video-play-button" href="https://www.youtube.com/watch?v=S7wCAquf9Us">
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--    introduction area end   -->


<!--   service section start   -->
<div class="service-categories">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-6 offset-lg-3">
                <span class="section-title">Our Latest Projects</span>
                <h2 class="section-summary">We work with you to achieve your goals</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <?php foreach ($projects as $project) { ?>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-category">
                        <div class="img-wrapper">
                            <?php echo $this->Html->image('pj/' . $project['Project']['id'] . '.png', array('id' => 'simg' . $project['Project']['id'])); ?>
                        </div>

                        <div class="text">
                            <!-- <h4>Web Design</h4> -->
                            <!-- <h4><?php echo $project['Project']['name']; ?></h4> -->
                            <?php echo $this->Html->link($project['Project']['name'], array('controller' => 'projects', 'action' => 'project_details', $project['Project']['id']), array('escape' => false)); ?>
                            <!-- <h4><?php echo $this->Html->link($project['Project']['name'], array('controller' => 'projects', 'action' => 'project_details', $project['Project']['id']), array('escape' => false)); ?></h4>    -->
                            <p><?php echo substr($project['Product']['description'], 0, 30); ?></p>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti autem beatae eos unde sint provident minima.</p> -->
                            <a id="glid<?php echo $project['Project']['id']; ?>" class="venobox" data-gall="myGallery" href="<?php echo $this->Html->url(array('controller' => 'projects', 'action' => 'project_details', $project['Project']['id'])); ?>" class="readmore">Read More</a>
                        </div>
                    </div>
                </div>


            <?php } ?>


            <!-- <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="single-category">
                    <div class="img-wrapper">
                        <img src="https://softwareend.com/assets/front/img/service_category_icons/1581145594.png" alt="">
                    </div>
                    <div class="text">
                        <h4>Web Development</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti autem beatae eos unde sint provident minima.</p>
                        <a href="https://softwareend.com/services?category=55" class="readmore">Read More</a>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</div>
<!--   service section end   -->


<!--   how we do section start   -->
<div class="approach-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="approach-summary">
                    <span class="section-title">How we do</span>
                    <h2 class="section-summary">A fresh approach to financial services for entrepreneurs</h2>
                    <a href="https://megasoft.biz/plusagency/about-us/22/page" class="boxed-btn" target="_blank"><span>Our Approach</span></a>
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="approach-lists">
                    <li class="single-approach">
                        <div class="approach-icon-wrapper"><i class="fas fa-bullseye"></i></div>
                        <div class="approach-text">
                            <h4>Goals</h4>
                            <p>Great financial advice starts with an understanding of your personal, financial and lifestyle goals At Spring we help you.</p>
                        </div>
                    </li>
                    <li class="single-approach">
                        <div class="approach-icon-wrapper"><i class="fas fa-clipboard-list"></i></div>
                        <div class="approach-text">
                            <h4>Plans</h4>
                            <p>Goals without a plan are just a dream– so at Spring our team of industry experts will work with you to develop strategic plans.</p>
                        </div>
                    </li>
                    <li class="single-approach">
                        <div class="approach-icon-wrapper"><i class="fas fa-sync"></i></div>
                        <div class="approach-text">
                            <h4>Actions</h4>
                            <p>Plans require action or they are just words – at Spring we work with you to implement your strategic plans.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--   how we do section end   -->


<!--    statistics section start    -->
<div class="statistics-section  statistics-bg " id="statisticsSection">
    <div class="statistics-container">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-6">
                    <div class="round"
                        data-value="1"
                        data-number=" <?php echo COMPLETED_PROJECTS;  ?> "
                        data-size="200"
                        data-thickness="6"
                        data-fill="{
                     &quot;color&quot;: &quot;#25D06F&quot;
                     }">
                        <strong></strong>
                        <h5><i class="fas fa-laptop-code"></i> COMPLETED PROJECTS</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="round"
                        data-value="1"
                        data-number=" <?php echo HAPPY_CLIENTS; ?> "
                        data-size="200"
                        data-thickness="6"
                        data-fill="{
                     &quot;color&quot;: &quot;#25D06F&quot;
                     }">
                        <strong></strong>
                        <h5><i class="far fa-smile-beam"></i> HAPPY CLIENTS</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="round"
                        data-value="1"
                        data-number="120"
                        data-size="200"
                        data-thickness="6"
                        data-fill="{
                     &quot;color&quot;: &quot;#25D06F&quot;
                     }">
                        <strong></strong>
                        <h5><i class="far fa-flag"></i> COUNTRIES</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="round"
                        data-value="1"
                        data-number=" <?php echo POSITIVE_REVIEWS; ?> "
                        data-size="200"
                        data-thickness="6"
                        data-fill="{
                     &quot;color&quot;: &quot;#25D06F&quot;
                     }">
                        <strong></strong>
                        <h5><i class="far fa-thumbs-up"></i> POSITIVE REVIEWS </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="statistic-overlay"></div>
</div>
<!--    statistics section end    -->


<!--    case section start   -->
<div class="case-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-6 offset-lg-3">
                <span class="section-title">Our latest projects</span>
                <h2 class="section-summary">A fresh approach to financial projects for entrepreneurs</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="case-carousel owl-carousel owl-theme">

                    <?php foreach ($projects as $project) { ?>
                        <div class="single-case single-case-bg-1" style="background-image: url('<?php echo $this->Html->url('/img/pj/' . $project['Project']['id'] . '.png'); ?>');">
                            <div class="outer-container">
                                <div class="inner-container">
                                    <!-- <h4>Car Service &amp; Car Repair HTML</h4> -->
                                    <h4><?php echo $project['Project']['name']; ?></h4>
                                    <p>
                                    <p><?php echo substr($project['Product']['description'], 0, 20); ?></p>
                                    </p>

                                    <a href="<?php echo $this->Html->url(array('controller' => 'projects',   'action' => 'project_details', $project['Project']['id'])); ?>" class="readmore-btn"><span>Read More</span></a>

                                </div>
                            </div>
                        </div>

                    <?php } ?>

                    <!-- <div class="single-case single-case-bg-1" style="background-image: url('https://softwareend.com/assets/front/img/portfolios/featured/1576937896.jpg');">
                        <div class="outer-container">
                            <div class="inner-container">
                                <h4>Transport &amp; Logistic HTML</h4>
                                <p>HTML &amp; CSS</p>

                                <a href="https://softwareend.com/portfolio/transport-logistic-html/40" class="readmore-btn"><span>Read More</span></a>

                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
</div>
<!--    case section end   -->


<!--   Testimonial section start    -->
<div class="testimonial-section pb-115">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-6 offset-lg-3">
                <span class="section-title">Testimonial</span>
                <h2 class="section-summary">What people say about finlance planning</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-carousel owl-carousel owl-theme">


                    <?php foreach ($clientsays as $clientsay) { ?>
                        <div class="single-testimonial">
                            <div class="img-wrapper">
                                <img src="<?php echo $this->Html->url('/img/ts/' . $clientsay['Testimonial']['id'] . '.png'); ?>" alt="">
                            </div>
                            <div class="client-desc">
                                <p class="comment"><?php echo $clientsay['Testimonial']['content'] ?></p>
                                <h6 class="name"><?php echo $clientsay['Testimonial']['creator'] ?></h6>
                                <p class="rank"><?php echo $clientsay['Testimonial']['designation'] ?></p>
                            </div>
                        </div>

                    <?php } ?>


                    <!-- <div class="single-testimonial">
                        <div class="img-wrapper"><img src="https://softwareend.com/assets/front/img/testimonials/1576864568.jpg" alt=""></div>
                        <div class="client-desc">
                            <p class="comment">They provide innovative solutions with the best. tempor incididunt utla bore et dolor tempor incididunt .</p>
                            <h6 class="name">Ben Stokes</h6>
                            <p class="rank">CTO, Mastermind</p>
                        </div>
                    </div> -->



                </div>

            </div>
        </div>
    </div>
</div>
<!--   Testimonial section end    -->


<!--    team section start   -->
<div class="team-section section-padding" style="background-image: url('<?php echo $this->Html->url('/assets/front/img/bg1.png') ?>'); background-size:cover;">
    <div class="team-content">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6 offset-lg-3">
                    <span class="section-title">Expert Team</span>
                    <h2 class="section-summary">Meet our expert finlance executive team</h2>
                </div>
            </div>
            <div class="row">
                <div class="team-carousel common-carousel owl-carousel owl-theme">

                    <?php foreach ($clients as $client) { ?>
                        <div class="single-team-member">
                            <div class="team-img-wrapper">
                                <!-- <img src="<?php echo $this->Html->url('cl/' . $client['Client']['id'] . '.png', array('id' => 'simg' . $client['Client']['id'])); ?>" alt=""> -->
                                <?php echo $this->Html->image('cl/' . $client['Client']['id'] . '.png', array('id' => 'simg' . $client['Client']['id'])); ?>

                                <div class="social-accounts">
                                    <ul class="social-account-lists">
                                        <li class="single-social-account"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="single-social-account"><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                        <li class="single-social-account"><a href="https://bd.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li class="single-social-account"><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="member-info">

                                <h5 class="member-name"><?php echo $client['Client']['name']; ?></h5>
                                <!-- <small>Advisor</small> -->

                                <!-- <h5 class="member-name"><?php echo $client['Client']['name']; ?></h5> -->
                                <!-- <p><?php echo substr($client['Client']['description'], 0, 180); ?></p> -->


                            </div>
                        </div>
                    <?php } ?>


                    <!-- <div class="single-team-member">
                        <div class="team-img-wrapper">
                            <img src="https://softwareend.com/assets/front/img/members/1576864843.jpg" alt="">
                            <div class="social-accounts">
                                <ul class="social-account-lists">
                                    <li class="single-social-account"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="single-social-account"><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                    <li class="single-social-account"><a href="https://bd.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li class="single-social-account"><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member-info">
                            <h5 class="member-name">Helen fox</h5>
                            <small>Managing Director</small>
                        </div>
                    </div> -->


                </div>
            </div>
        </div>
    </div>
    <div class="team-overlay"></div>
</div>
<!--    team section end   -->


<!-- pricing begin -->
<div class="pricing-tables">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-6 offset-lg-3">
                <span class="section-title">Our Packages</span>
                <h2 class="section-summary">Choose a package which suits you best</h2>
            </div>
        </div>
        <div class="pricing-carousel common-carousel owl-carousel owl-theme">
            <div class="single-pricing-table">
                <span class="title">Basic Package</span>
                <div class="price">
                    <h1>$100.00</h1>
                </div>
                <div class="features">
                    <div style="text-align: center;">
                        <font size="3">7 HTML Pages</font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3"><br></font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3">1 Home Page</font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3"><br></font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3">CMS Version Not Available</font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3"><br></font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3">Logo Design Included</font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3"><br></font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3">1 Revision Available</font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3"><br></font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3">No Support Available</font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3"><br></font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3">Source Code Included</font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3"><br></font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3">Only One Domain Allowed</font>
                    </div>
                </div>

                <a href="https://softwareend.com/package-order/40" class="pricing-btn">Place Order</a>

            </div>
            <div class="single-pricing-table">
                <span class="title">Golden Package</span>
                <div class="price">
                    <h1>$180.00</h1>
                </div>
                <div class="features">
                    <div style="text-align: center;">15 HTML Pages</div>
                    <div style="text-align: center;"><br></div>
                    <div style="text-align: center;">3 Home Pages</div>
                    <div style="text-align: center;"><br></div>
                    <div style="text-align: center;">CMS Version Not Available</div>
                    <div style="text-align: center;"><br></div>
                    <div style="text-align: center;">Logo Design Included</div>
                    <div style="text-align: center;"><br></div>
                    <div style="text-align: center;">2 Revision Available</div>
                    <div style="text-align: center;"><br></div>
                    <div style="text-align: center;">No Support Available</div>
                    <div style="text-align: center;"><br></div>
                    <div style="text-align: center;">Source Code Included</div>
                    <div style="text-align: center;"><br></div>
                    <div style="text-align: center;">Only One Domain Allowed</div>
                </div>

                <a href="https://softwareend.com/package-order/41" class="pricing-btn">Place Order</a>

            </div>
            <div class="single-pricing-table">
                <span class="title">Plutinum Package</span>
                <div class="price">
                    <h1>$350.00</h1>
                </div>
                <div class="features">
                    <div style="text-align: center;">25 HTML Pages</div>
                    <div style="text-align: center;"><br></div>
                    <div style="text-align: center;">5 Home Pages</div>
                    <div style="text-align: center;"><br></div>
                    <div style="text-align: center;">CMS Version Available</div>
                    <div style="text-align: center;"><br></div>
                    <div style="text-align: center;">Logo Design Included</div>
                    <div style="text-align: center;"><br></div>
                    <div style="text-align: center;">2 Revision Available</div>
                    <div style="text-align: center;"><br></div>
                    <div style="text-align: center;">No Support Available</div>
                    <div style="text-align: center;"><br></div>
                    <div style="text-align: center;">Source Code Included</div>
                    <div style="text-align: center;"><br></div>
                    <div style="text-align: center;">Only One Domain Allowed</div>
                </div>

                <a href="https://softwareend.com/package-order/43" class="pricing-btn">Place Order</a>

            </div>
            <div class="single-pricing-table">
                <span class="title">E-commerce</span>
                <div class="price">
                    <h1>$700.00</h1>
                </div>
                <div class="features">
                    <div style="text-align: center;">
                        <font size="3">Shopping Cart with React</font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3"><br></font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3">Advanced Search Filter</font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3"><br></font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3">Single Vendor</font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3"><br></font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3">Logo Design Included</font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3"><br></font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3">2 Revision Available</font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3"><br></font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3">Support Available</font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3"><br></font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3">Source Code Included</font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3"><br></font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3">Only One Domain Allowed</font>
                    </div>
                </div>

                <a href="https://softwareend.com/package-order/44" class="pricing-btn">Place Order</a>

            </div>
            <div class="single-pricing-table">
                <span class="title">Advanced Plutinum</span>
                <div class="price">
                    <h1>$900.00</h1>
                </div>
                <div class="features">
                    <div style="text-align: center;">50 HTML Pages</div>
                    <div style="text-align: center;"><br></div>
                    <div style="text-align: center;">10 Home Pages</div>
                    <div style="text-align: center;"><br></div>
                    <div style="text-align: center;">CMS Version Available</div>
                    <div style="text-align: center;"><br></div>
                    <div style="text-align: center;">Logo Design Included</div>
                    <div style="text-align: center;"><br></div>
                    <div style="text-align: center;">2 Revision Available</div>
                    <div style="text-align: center;"><br></div>
                    <div style="text-align: center;">Support Available</div>
                    <div style="text-align: center;"><br></div>
                    <div style="text-align: center;">Source Code Included</div>
                    <div style="text-align: center;"><br></div>
                    <div style="text-align: center;">Only One Domain Allowed</div>
                </div>

                <a href="https://softwareend.com/package-order/45" class="pricing-btn">Place Order</a>

            </div>
            <div class="single-pricing-table">
                <span class="title">Plutinum Extended</span>
                <div class="price">
                    <h1>$1000.00</h1>
                </div>
                <div class="features">
                    <div style="text-align: center;">
                        <font size="3">60 HTML pages</font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3"><br></font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3">12 initial pages</font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3"><br></font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3">CMS version available</font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3"><br></font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3">Logo Design Included</font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3"><br></font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3">2 Review Available</font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3"><br></font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3">Support Available</font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3"><br></font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3" style="">Source Code Included</font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3"><br></font>
                    </div>
                    <div style="text-align: center;">
                        <font size="3">Only one domain allowed</font>
                    </div>
                </div>

                <a href="https://softwareend.com/package-order/46" class="pricing-btn">Place Order</a>

            </div>
        </div>
    </div>
</div>
<!-- pricing end -->

<!--    service section start   -->
<div class="team-section section-padding" style="background-image: url('<?php echo $this->Html->url('/assets/front/img/bg1.png') ?>'); background-size:cover;">
    <div class="team-content">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6 offset-lg-3">
                    <span class="section-title">Our Services</span>
                    <h2 class="section-summary">Meet our expert finlance Services which we provide</h2>
                </div>
            </div>
            <div class="row">
                <div class="team-carousel common-carousel owl-carousel owl-theme">

                    <?php foreach ($services as $service) { ?>
                        <div class="single-team-member">
                            <div class="team-img-wrapper">
                                <img src="<?php echo $this->Html->url('/assets/front/img/bg1.png') ?>" alt="">
                                <!-- <?php echo $this->Html->image('cl/' . $client['Client']['id'] . '.png', array('id' => 'simg' . $client['Client']['id'])); ?> -->

                                <!-- <div class="social-accounts">
                                    <ul class="social-account-lists">
                                        <li class="single-social-account"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="single-social-account"><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                        <li class="single-social-account"><a href="https://bd.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li class="single-social-account"><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div> -->
                            </div>
                            <div class="member-info">

                                <h5 class="member-name"><?php echo  $service['Service']['name']; ?></h5>
                                <p style="color: green;"><?php echo substr($service['Service']['description'], 0, 70) ?></p>
                                <!-- <small>Advisor</small> -->

                                <!-- <h5 class="member-name"><?php echo $client['Client']['name']; ?></h5> -->
                                <!-- <p><?php echo substr($client['Client']['description'], 0, 180); ?></p> -->


                            </div>
                        </div>
                    <?php } ?>





                    <!-- <div class="single-team-member">
                        <div class="team-img-wrapper">
                            <img src="https://softwareend.com/assets/front/img/members/1576864843.jpg" alt="">
                            <div class="social-accounts">
                                <ul class="social-account-lists">
                                    <li class="single-social-account"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="single-social-account"><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                    <li class="single-social-account"><a href="https://bd.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li class="single-social-account"><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member-info">
                            <h5 class="member-name">Helen fox</h5>
                            <small>Managing Director</small>
                        </div>
                    </div> -->


                </div>
            </div>
        </div>
    </div>
    <div class="team-overlay"></div>
</div>
<!--    service section end   -->

<!--    blog section start   -->
<div class="blog-section section-padding">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-6 offset-lg-3">
                <span class="section-title">Latest Blogs</span>
                <h2 class="section-summary"> Have a look at these blogs </h2>
            </div>
        </div>
        <div class="blog-carousel owl-carousel owl-theme common-carousel">

            <?php foreach ($blogs as $blog) { ?>
                <div class="single-blog">
                    <div class="blog-img-wrapper">
                        <!-- <img src="<?php echo $this->Html->url('bj/' . $blog['Blog']['id'] . '.png'); ?>" id="<?php echo 'bimg' . $blog['Blog']['id']; ?>" alt=""> -->
                        <?php echo $this->Html->image('bj/' . $blog['Blog']['id'] . '.png', array('id' => 'simg' . $blog['Blog']['id'])); ?>

                    </div>

                    <div class="blog-txt">

                        <!-- <p class="date"><small>By <span class="username">admin</span></small> | <small>22nd December, 2019</small> </p> -->

                        <h4 class="blog-title"><a href="https://softwareend.com/blog-details/Lorem-ipsum-dolor-sit-amet,-elit./41"><?php echo  $blog['Blog']['name']; ?></a></h4>


                        <p class="blog-summary"><?php echo substr($blog['Blog']['description'], 0, 70) ?></p>


                        <a href="<?php echo $this->Html->url(array('controller' => 'blogs', 'action' => 'blog_details', $blog['Blog']['id'])); ?>" class="readmore-btn"><span>Read More</span></a>

                    </div>
                </div>

            <?php } ?>


            <!-- <div class="single-blog">
                <div class="blog-img-wrapper">
                    <img src="https://softwareend.com/assets/front/img/blogs/1576945678.jpg" alt="">
                </div>
                <div class="blog-txt">

                    <p class="date"><small>By <span class="username">Admin</span></small> | <small>22nd December, 2019</small> </p>

                    <h4 class="blog-title"><a href="https://softwareend.com/blog-details/Invest-%245000-for-secure-your-policy/42">Invest $5000 for secure your policy</a></h4>


                    <p class="blog-summary">To satisfy customer-specific wishes, we supplements its own ultra-modern fleet and network with an e...</p>


                    <a href="https://softwareend.com/blog-details/Invest-%245000-for-secure-your-policy/42" class="readmore-btn"><span>Read More</span></a>

                </div>
            </div> -->



        </div>
    </div>
</div>
<!--    blog section end   -->


<!--    call to action section start    -->
<div class="cta-section" style="background-image: url('https://softwareend.com/assets/front/img/5e765bc7867d8.jpg')">
    <div class="container">
        <div class="cta-content">
            <div class="row">
                <div class="col-md-9 col-lg-7">
                    <h3>Contact us for help with your finances.</h3>
                </div>
                <div class="col-md-3 col-lg-5 contact-btn-wrapper">
                    <a href="http://localhost/plusagency/plusagency_2.5/contact" class="boxed-btn contact-btn"><span>Contact Us</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="cta-overlay"></div>
</div>
<!--    call to action section end    -->


<!--   partner section start    -->
<div class="partner-section">
    <div class="container top-border">
        <div class="row">
            <div class="col-md-12">
                <div class="partner-carousel owl-carousel owl-theme common-carousel">
                    <a class="single-partner-item d-block" href="https://themeforest.net/" target="_blank">
                        <div class="outer-container">
                            <div class="inner-container">
                                <img src="https://softwareend.com/assets/front/img/partners/1584815450.png" alt="">
                            </div>
                        </div>
                    </a>
                    <a class="single-partner-item d-block" href="https://audiojungle.net/" target="_blank">
                        <div class="outer-container">
                            <div class="inner-container">
                                <img src="https://softwareend.com/assets/front/img/partners/1584815440.png" alt="">
                            </div>
                        </div>
                    </a>
                    <a class="single-partner-item d-block" href="https://codecanyon.net" target="_blank">
                        <div class="outer-container">
                            <div class="inner-container">
                                <img src="https://softwareend.com/assets/front/img/partners/1584815430.png" alt="">
                            </div>
                        </div>
                    </a>
                    <a class="single-partner-item d-block" href="https://graphicriver.net/" target="_blank">
                        <div class="outer-container">
                            <div class="inner-container">
                                <img src="https://softwareend.com/assets/front/img/partners/1584815416.png" alt="">
                            </div>
                        </div>
                    </a>
                    <a class="single-partner-item d-block" href="https://audiojungle.net/" target="_blank">
                        <div class="outer-container">
                            <div class="inner-container">
                                <img src="https://softwareend.com/assets/front/img/partners/1584815403.png" alt="">
                            </div>
                        </div>
                    </a>
                    <a class="single-partner-item d-block" href="https://photodune.net/" target="_blank">
                        <div class="outer-container">
                            <div class="inner-container">
                                <img src="https://softwareend.com/assets/front/img/partners/1584815391.png" alt="">
                            </div>
                        </div>
                    </a>
                    <a class="single-partner-item d-block" href="https://videohive.net/" target="_blank">
                        <div class="outer-container">
                            <div class="inner-container">
                                <img src="https://softwareend.com/assets/front/img/partners/1584815377.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--   partner section end    -->



<!--    announcement banner section start   -->
<a class="announcement-banner" href="https://softwareend.com/assets/front/img/5e76451cec8b9.jpg"></a>
<!--    announcement banner section end   -->