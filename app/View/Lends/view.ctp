<div class="container">
<div class="lend view">
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-green">
                <div class="panel-heading text-center bold-text">
                    <?php echo __('Loan'); ?>                </div>
                <div class="panel-body"> 

                    	<div class='row show-grid'>
		<div class='col-md-3 col-sm-12'><?php echo __('Id'); ?></div>
		<div class='col-md-9 col-sm-12'>
			<?php echo h($lend['Lend']['id']); ?>
			&nbsp;
		</div>
	</div>	<div class='row show-grid'>
		<div class='col-md-3 col-sm-12'><?php echo __('Borrower'); ?></div>
		<div class='col-md-9 col-sm-12'>
			<?php echo $this->Html->link($lend['Borrower']['name'], array('controller' => 'borrowers', 'action' => 'view', $lend['Borrower']['id'])); ?>
			&nbsp;
		</div>
	</div>	<div class='row show-grid'>
		<div class='col-md-3 col-sm-12'><?php echo __('Date'); ?></div>
		<div class='col-md-9 col-sm-12'>
			<?php echo h($lend['Lend']['date']); ?>
			&nbsp;
		</div>
	</div>	<div class='row show-grid'>
		<div class='col-md-3 col-sm-12'><?php echo __('Amount'); ?></div>
		<div class='col-md-9 col-sm-12'>
			<?php echo h($lend['Lend']['amount']); ?>
			&nbsp;
		</div>
	</div>	<div class='row show-grid'>
		<div class='col-md-3 col-sm-12'><?php echo __('Status'); ?></div>
		<div class='col-md-9 col-sm-12'>
			<?php echo h($lend['Lend']['status']); ?>
			&nbsp;
		</div>
	</div>	<div class='row show-grid'>
		<div class='col-md-3 col-sm-12'><?php echo __('Created'); ?></div>
		<div class='col-md-9 col-sm-12'>
			<?php echo h($lend['Lend']['created']); ?>
			&nbsp;
		</div>
	</div>	<div class='row show-grid'>
		<div class='col-md-3 col-sm-12'><?php echo __('Modified'); ?></div>
		<div class='col-md-9 col-sm-12'>
			<?php echo h($lend['Lend']['modified']); ?>
			&nbsp;
		</div>
	</div>              </div>
            </div>
        </div>
    </div>
</div>

</div>