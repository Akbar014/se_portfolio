
<style>
    ol, ul {
        margin-top: 0;
        margin-bottom: 10px;
        padding: 0;
        margin: 0;
    }

    body{
        font: 13px/2em Arial, Helvetica, sans-serif;

    }
    h2{
        color: #fff;
    }
   
    
    h2:hover {
        color:#337ab7;
        
    }
    
   a:hover {
        color: #337ab7;
        text-decoration: none;
    }
    

</style>


<br>
   
   
    <div class="row margin-bottom-40">
        <br><br>
        <div class="col-md-3 col-sm-6 aos-init" data-aos="fade-right">
            <div class="service-block service-block-sea service-or">
                <div class="service-bg"></div>                
                <?php echo $this->Html->link('<i class="icon-gallery icon-color-light">' . $this->Html->image('hall.png', array('alt' => 'Hall Booking')) . '</i><h2 class="heading-md">Hall Booking</h2>', array('controller' => 'hall_bookings', 'action' => 'add'), array('escape' => false)) ?>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 aos-init" data-aos="zoom-in">
            <div class="service-block service-block-red service-or">
                <div class="service-bg"></div>

                <?php echo $this->Html->link('<i class="icon-gallery icon-color-light">' . $this->Html->image('hostel.png', array('alt' => 'Hostel Booking')) .'</i><h2 class="heading-md">Hostel Booking</h2>', array('controller' => 'users', 'action' => 'login', 'sb'), array('escape' => false)) ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 aos-init" data-aos="fade-left">
            <div class="service-block service-block-blue service-or">
                <div class="service-bg"></div>                

                <?php echo $this->Html->link('<i class="icon-gallery icon-color-light">' . $this->Html->image('courseregi.png', array('alt' => 'Course Registration')) . '</i><h2 class="heading-md">Course Registration</h2>', array('controller' => 'courses', 'action' => 'pubcourses'), array('escape' => false)) ?>

            </div>
        </div>
        <div class="col-md-3 col-sm-6 aos-init" data-aos="fade-right">
            <div class="service-block service-block-orange service-or">
                <div class="service-bg"></div>                

                <?php echo $this->Html->link('<i class="icon-gallery icon-color-light">' . $this->Html->image('memregi.png', array('alt' => 'Member Registration')) . '</i><h2 class="heading-md">Member Registration</h2>', array('controller' => 'members', 'action' => 'add'), array('escape' => false)) ?>

            </div>
        </div>

    </div>
    
   

