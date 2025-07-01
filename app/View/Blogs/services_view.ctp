<!-- Start Blog area -->
<div class="project-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Our <span class="color">blogs</span></h3>
                    <p>Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blogs-all">
                <!-- Start blogs -->
                
                <?php foreach ($blogs as $Blog) {?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blogs">
                        <a class="Blog-images" href="#">
                            <i class="flaticon-presentation-17"></i>
                        </a>
                        <div class="Blog-content">
                            <h4><a href="#"><?php echo $Blog['Blog']['name']?></a></h4>
                            <p><?php echo substr($Blog['Blog']['description'], 0,70)?></p>
                        </div>
                    </div>
                </div>
             <?php    }?>
                
                <div class="col-md-12 text-center">
                    <a class="load-more-btn" href="blogs.html">More blogs</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog area -->