<div class="container">
    <div class="borrower view">
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-green">
                    <div class="panel-heading text-center bold-text">
                        <?php echo __('Borrower'); ?>                </div>
                    <div class="panel-body"> 

                        <div class='row show-grid'>
                            <div class='col-md-3 col-sm-12'><?php echo __('Profile Photo'); ?></div>
                            <div class='col-md-9 col-sm-12'>
                                <?php echo $this->Html->image('b/' . $borrower['Borrower']['id'] . '.png', array('alt' => 'No Image', 'width' => '300')); ?>
                            </div>
                        </div> <div class='row show-grid'>
                            <div class='col-md-3 col-sm-12'><?php echo __('Name'); ?></div>
                            <div class='col-md-9 col-sm-12'>
                                <?php echo h($borrower['Borrower']['name']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row show-grid'>
                            <div class='col-md-3 col-sm-12'><?php echo __('Phone'); ?></div>
                            <div class='col-md-9 col-sm-12'>
                                <?php echo h($borrower['Borrower']['phone']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row show-grid'>
                            <div class='col-md-3 col-sm-12'><?php echo __('Email'); ?></div>
                            <div class='col-md-9 col-sm-12'>
                                <?php echo h($borrower['Borrower']['email']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row show-grid'>
                            <div class='col-md-3 col-sm-12'><?php echo __('Address'); ?></div>
                            <div class='col-md-9 col-sm-12'>
                                <?php echo h($borrower['Borrower']['address']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row show-grid'>
                            <div class='col-md-3 col-sm-12'><?php echo __('Amount'); ?></div>
                            <div class='col-md-9 col-sm-12'>
                                <?php echo h($borrower['Borrower']['amount']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row show-grid'>
                            <div class='col-md-3 col-sm-12'><?php echo __('Paid'); ?></div>
                            <div class='col-md-9 col-sm-12'>
                                <?php echo h($borrower['Borrower']['paid']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row show-grid'>
                            <div class='col-md-3 col-sm-12'><?php echo __('Due'); ?></div>
                            <div class='col-md-9 col-sm-12'>
                                <?php echo h($borrower['Borrower']['due']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row show-grid'>
                            <div class='col-md-3 col-sm-12'><?php echo __('Created'); ?></div>
                            <div class='col-md-9 col-sm-12'>
                                <?php echo h($borrower['Borrower']['created']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row show-grid'>
                            <div class='col-md-3 col-sm-12'><?php echo __('Modified'); ?></div>
                            <div class='col-md-9 col-sm-12'>
                                <?php echo h($borrower['Borrower']['modified']); ?>
                                &nbsp;
                            </div>
                        </div>              </div>
                </div>
            </div>
        </div>
    </div>

</div> 
