<div class="loans form">
    <div class="page_title">
        <div class="title"><h1>Loan</h1></div>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Loan</div>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <?php echo $this->Form->create('Loan'); ?>
                <fieldset>
                    <legend><?php echo __('Add Loan'); ?></legend>
                    <?php
                    echo $this->Form->input('lender_id');
                    echo $this->Form->input('loan_date', array('type' => 'text', 'value' => date('Y-m-d')));
                    echo $this->Form->input('return_date', array('type' => 'text', 'value' => date('Y-m-d')));
                    echo $this->Form->input('amount');
                    echo $this->Form->input('witness');
                    echo $this->Form->input('remark');
                    ?>
                </fieldset>
                <?php echo $this->Form->end(__('Submit')); ?>
            </div>
            <div class="actions">
                <h3><?php echo __('Actions'); ?></h3>
                <ul>

                    <li><?php echo $this->Html->link(__('List Loans'), array('action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('List Lenders'), array('controller' => 'lenders', 'action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('New Lender'), array('controller' => 'lenders', 'action' => 'add')); ?> </li>
                    <li><?php echo $this->Html->link(__('List Loan Returns'), array('controller' => 'loan_returns', 'action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('New Loan Return'), array('controller' => 'loan_returns', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </section>
</div>
