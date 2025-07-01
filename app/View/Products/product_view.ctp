


<!-- Start project Area -->
<div class="project-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Our <span class="color">Products</span></h3>
                    <p>Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="project-carousel">
                <!-- single-awesome-project start -->

                <?php foreach ($products as $product) { ?>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                      
                        <div class="well-services">
                            <div class="services-img">
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
                                    <h4 style="height: 60px;"><?php echo $this->Html->link($product['Product']['name'], array('controller'=>'products','action' => 'product_details',$product['Product']['id']), array('escape' => false)); ?></h4>                                   
                                    <p><?php echo substr($product['Product']['description'], 0,70)?></p>
                                    <?php echo $this->Html->link("read more", array('controller'=>'products','action' => 'product_details',$product['Product']['id']), array('class'=>'service-btn','escape' => false)); ?>
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
<!-- End project Area -->