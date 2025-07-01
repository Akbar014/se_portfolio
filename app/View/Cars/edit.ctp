<div class="cars form">
	<div class="page_title">
		<div class="title">
			<h1>Car</h1>
		</div>
		<div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Car</div>
	</div>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<?php echo $this->Form->create('Car'); ?>
				<fieldset>
					<legend><?php echo __('Edit Car'); ?></legend>
					<?php
					echo $this->Form->input('id');
					echo $this->Form->input('showroom');
					echo $this->Form->input('car_name');
					echo $this->Form->input('model_year');
					echo $this->Form->input('registration_year');
					echo $this->Form->input('color');
					echo $this->Form->input('engine_cc');
					echo $this->Form->input('ac_condition');
					echo $this->Form->input('door_power');
					echo $this->Form->input('headlight_condition');
					echo $this->Form->input('wheel_condition');
					echo $this->Form->input('lpg_cng', array('label' => 'lpg/cng'));
					echo $this->Form->input('capacity', array('label' => 'lpg/cng tank capacity'));
					echo $this->Form->input('price');
					echo $this->Form->input('fixed_price', array('type' => 'checkbox', 'value' => '1'));
					echo $this->Form->input('engine_replace', array('type' => 'checkbox', 'value' => '1'));
					echo $this->Form->input('body_kit', array('type' => 'checkbox', 'value' => '1'));
					echo $this->Form->input('spoiler', array('type' => 'checkbox', 'value' => '1'));
					echo $this->Form->input('alloy_wheel', array('type' => 'checkbox', 'value' => '1'));
					echo $this->Form->input('original_glasses', array('type' => 'checkbox', 'value' => '1'));
					?>
				</fieldset>
				<?php echo $this->Form->end(__('Submit')); ?>
				<br />
				<br />
				<br />
				<br />
			</div>
		</div>
	</section>
</div>