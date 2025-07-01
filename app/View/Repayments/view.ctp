
<div class="container">
<div class="repayment view">
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-green">
                <div class="panel-heading text-center bold-text">
                    <?php echo __('Repayment'); ?>                </div>
                <div class="panel-body"> 

                    	<div class='row show-grid'>
		<div class='col-md-3 col-sm-12'><?php echo __('Id'); ?></div>
		<div class='col-md-9 col-sm-12'>
			<?php echo h($repayment['Repayment']['id']); ?>
			&nbsp;
		</div>
	</div>	<div class='row show-grid'>
		<div class='col-md-3 col-sm-12'><?php echo __('Borrower'); ?></div>
		<div class='col-md-9 col-sm-12'>
			<?php echo $this->Html->link($repayment['Borrower']['name'], array('controller' => 'borrowers', 'action' => 'view', $repayment['Borrower']['id'])); ?>
			&nbsp;
		</div>
	</div>	<div class='row show-grid'>
		<div class='col-md-3 col-sm-12'><?php echo __('Pay Amount'); ?></div>
		<div class='col-md-9 col-sm-12'>
			<?php echo h($repayment['Repayment']['pay_amount']); ?>
			&nbsp;
		</div>
	</div>	<div class='row show-grid'>
		<div class='col-md-3 col-sm-12'><?php echo __('Payment Date'); ?></div>
		<div class='col-md-9 col-sm-12'>
			<?php echo h($repayment['Repayment']['payment_date']); ?>
			&nbsp;
		</div>
	</div>	<div class='row show-grid'>
		<div class='col-md-3 col-sm-12'><?php echo __('Status'); ?></div>
		<div class='col-md-9 col-sm-12'>
			<?php echo h($repayment['Repayment']['status']); ?>
			&nbsp;
		</div>
	</div>	<div class='row show-grid'>
		<div class='col-md-3 col-sm-12'><?php echo __('Created'); ?></div>
		<div class='col-md-9 col-sm-12'>
			<?php echo h($repayment['Repayment']['created']); ?>
			&nbsp;
		</div>
	</div>	<div class='row show-grid'>
		<div class='col-md-3 col-sm-12'><?php echo __('Modified'); ?></div>
		<div class='col-md-9 col-sm-12'>
			<?php echo h($repayment['Repayment']['modified']); ?>
			&nbsp;
		</div>
	</div>              </div>
            </div>
        </div>
    </div>
</div>

</div>