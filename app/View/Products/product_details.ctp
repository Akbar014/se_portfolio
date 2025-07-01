
<div class="container">
    <div class="courses index">
        <div class="page_title">
            <br>
            <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Product Details</div>
            <br>
        </div>

        <section class="content">
            <div class="row">
                <div class="col-md-8">

                    <h4 class="blcol"><?php echo $product['Product']['name']; ?> </h4>
                    <p><?php echo $this->Html->image('pd/' . $product['Product']['id'] . '.png', array('alt' => 'No Image')); ?></p>
                    <h4 class="blcol"><?php //echo 'Product Description'; ?> </h4>
                    <p><?php //echo $product['Product']['description'] ?> </p>
                    <h3 class="blcol"><?php echo 'Product Overview'; ?> </h3>
                    <p><?php echo $product['Product']['overview'] ?> </p>

                </div>
                <div class="col-md-4">
                    <br><br>
                    <div class="col-md-12">
                         <h4 class="blcol"><?php echo 'Key Feature'; ?> </h4>
                        <p><?php echo $product['Product']['feature']; ?> </p>
                        <p><strong>Demo Link: </strong><?php echo $product['Product']['demo']; ?></p>
                        <p><strong>Price: </strong>  <?php echo $product['Product']['price']; ?></p>
                    </div>


                </div>
            </div>
            <br>
        </section>
    </div>

</div>

