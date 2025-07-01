<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo SITE_TITLE; ?>:
            <?php echo $this->fetch('title'); ?>
        </title>

        <?php
        echo $this->Html->css(array(
            'bootstrap',
            'bootstrap-theme',
            'ie10-viewport-bug-workaround',
            'style',
            'header',
            'mobile-css',
            'left-menu',
            'font-awesome',
            'common'
        ));
        echo $this->Html->script(array(
            'jquery.min',
            'bootstrap',
            'ie10-viewport-bug-workaround',
            'ie-emulation-modes-warning',
            'app',
        ));

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>

    <body>
        <?php echo $this->element('admin_header'); ?>
        <div class="clearfix"></div>
        <div id="body_wrapper">
            <div class="container">
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>
        <?php
        echo $this->element('admin_footer');
        echo $this->element('sql_dump');
        ?>

        <a href="#" class="scrollup"></a> 

        <script>
            $(document).ready(function () {
                $(".dropdown").hover(
                        function () {
                            $('.dropdown-menu', this).stop(true, true).fadeIn("fast");
                            $(this).toggleClass('open');
                            $('b', this).toggleClass("caret caret-up");
                        },
                        function () {
                            $('.dropdown-menu', this).stop(true, true).fadeOut("fast");
                            $(this).toggleClass('open');
                            $('b', this).toggleClass("caret caret-up");
                        });
            });
        </script>
    </body>

</html>