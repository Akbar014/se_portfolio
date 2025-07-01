<header class="header-one">
    <!-- Start top bar -->
    <div class="topbar-area fix hidden-xs">
        <div class="container">
            <div class="row">
                <div class=" col-md-6 col-sm-6">
                    <div class="topbar-left">
                        <ul>
                            <li><a href="mailto:<?php echo ADMIN_EMAIL; ?>"><i class="fa fa-envelope"></i><?php echo ADMIN_EMAIL; ?></a></li>
                            <li><a href="tel:<?php echo PHONE; ?>"><i class="fa fa-phone"></i><?php echo PHONE; ?></a></li>
                        </ul>  
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="quote-button">
                        <a href="#" class="quote-btn"  title="Quick view" data-toggle="modal" data-target="#quoteModal">free consultation</a>
                    </div>
                    <div class="top-social">
                        <ul>
                            <li><a href="skype:<?php echo SKYPE; ?>"><i class="fa fa-skype"></i></a></li>
                            <li><a href="<?php echo LINKEDIN; ?>" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                            <li><a href="<?php echo GPLUS; ?>" target="_blank"><i class="fa fa-google"></i></a></li>
                            <li><a href="<?php echo TWITTER; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="<?php echo FACEBOOK; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End top bar -->
    <!-- header-area start -->
    <div id="sticker" class="header-area hidden-xs">
        <div class="container">
            <div class="row">
                <!-- logo start -->
                <div class="col-md-2 col-sm-2">
                    <div class="logo">
                        <!-- Brand -->
                        <?php
                        echo $this->Html->link(
                                $this->Html->image('logo.png', array('alt' => 'logo')), '/', array('escape' => false)
                        );
                        ?>
                    </div>
                </div>
                <!-- logo end -->
                <div class="col-md-10 col-sm-10">
                    <div class="header-right-link">
                        <!-- search option start -->
                        <form action="#">
                            <div class="search-option">
                                <input type="text" placeholder="Search...">
                                <button class="button" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                            <a class="main-search" href="#"><i class="fa fa-search"></i></a>
                        </form>
                    </div>
                    <nav class="navbar navbar-default">
                        <div class="collapse navbar-collapse" id="navbar-example">
                            <div class="main-menu">
                                <?php
                                $mn = $this->Menu->menuGenerator($menu_data, 0, 'nav navbar-nav');
                                echo $mn;
                                ?>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <div class="logo">
                            <?php
                            echo $this->Html->link(
                                    $this->Html->image('logo.png', array('alt' => 'logo')), '/', array('escape' => false)
                            );
                            ?>
                        </div>
                        <nav id="dropdown">
                            <?php
                            echo $mn;
                            ?>
                        </nav>
                    </div>					
                </div>
            </div>
        </div>
    </div>
</header>
