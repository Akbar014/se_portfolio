<div class="loanReturns form">
    <div class="page_title">
        <div class="title"><h1>Loan Return</h1></div>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Save Loan Return</div>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <?php echo $this->Form->create('LoanReturn'); ?>
                <fieldset>
                    <legend><?php echo __('Edit Loan Return'); ?></legend>
                    <?php
                    echo $this->Form->input('id');
                    echo $this->Form->input('lender_id');
                    echo $this->Form->input('return_date', array('type' => 'text'));
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

                    <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LoanReturn.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('LoanReturn.id')))); ?></li>
                    <li><?php echo $this->Html->link(__('List Loan Returns'), array('action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('List Loans'), array('controller' => 'loans', 'action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('New Loan'), array('controller' => 'loans', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </section>
</div>
