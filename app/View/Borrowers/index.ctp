
<div class="banks index">
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading text-center bold-text">Search</div>
                <div class="panel-body">
                    <?php echo $this->Form->create('Src'); ?>
                    <table class="table table-condensed table-striped table-bordered table-hover">
                        <tr>
                            <th><?php echo __('Title'); ?></th>
                            <td><?php echo $this->Form->input('nm', array('label' => false)); ?></td>
                            <th><?php echo __('Date from'); ?></th>
                            <td><?php echo $this->Form->input('df', array('class' => 'datepicker', 'label' => false)); ?></td>
                            <th><?php echo __('To'); ?></th>
                            <td><?php echo $this->Form->input('dt', array('class' => 'datepicker', 'label' => false)); ?></td>

                            <td><?php echo $this->Form->button('Search', array('class' => 'btn btn-info', 'name' => 'btnsrc')); ?></td>
                        </tr>
                    </table>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="panel panel-green">
                <div class="panel-heading text-center bold-text">
                    <div class="pull-left"><h4><?php echo __('Borrowers'); ?></h4></div>
                    <div class="pull-right">&nbsp;<?php echo $this->Html->link("<i class='glyphicon glyphicon-plus-sign' title='Add New'></i>", array('action' => 'add'), array('escape' => false)); ?></div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?php echo $this->Paginator->sort('id'); ?></th>
                                <th><?php echo $this->Paginator->sort('name'); ?></th>
                                <th><?php echo $this->Paginator->sort('id', 'Photo'); ?></th>
                                <th><?php echo $this->Paginator->sort('phone'); ?></th>
                                <th><?php echo $this->Paginator->sort('email'); ?></th>
                                <th><?php echo $this->Paginator->sort('district_id'); ?></th>
                                <th><?php echo $this->Paginator->sort('upazila_id'); ?></th>
                                <th><?php echo $this->Paginator->sort('address'); ?></th>
                                <th><?php echo $this->Paginator->sort('amount'); ?></th>
                                <th><?php echo $this->Paginator->sort('paid'); ?></th>
                                <th><?php echo $this->Paginator->sort('due'); ?></th>
                                <th class="actions"><?php echo __('Actions'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($borrowers as $borrower): ?>
                                <tr>
                                    <td><?php echo h($borrower['Borrower']['id']); ?></td>
                                    <td><?php echo h($borrower['Borrower']['name']); ?></td>
                                    <td>
                                        <?php
                                        $files = IMAGES . 'b/' . $borrower['Borrower']['id'] . '.png';
                                        if (is_file($files)) {
                                            echo $this->Html->image('b/' . $borrower['Borrower']['id'] . '.png', array('alt' => 'No Image', 'width' => '40', 'class' => ' '));
                                        } else {
                                            echo $this->Html->image('user.jpg', array('alt' => 'No Image', 'width' => '40', 'class' => ' '));
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo h($borrower['Borrower']['phone']); ?></td>
                                    <td><?php echo h($borrower['Borrower']['email']); ?></td>
                                    <td><?php echo h($borrower['District']['name']); ?></td>
                                    <td><?php echo h($borrower['Upazila']['name']); ?></td>
                                    <td><?php echo h($borrower['Borrower']['address']); ?></td>
                                    <td><?php echo h($borrower['Borrower']['amount']); ?></td>
                                    <td><?php echo h($borrower['Borrower']['paid']); ?></td>
                                    <td><?php
                                        echo $borrower['Borrower']['amount'] - $borrower['Borrower']['paid'];
                                        ?></td>
                                    <td class="actions">
                                        <?php echo $this->Html->link(__('<i style="color:green" class="glyphicon glyphicon-unchecked" title="View"></i>'), array('action' => 'view', $borrower['Borrower']['id']), array('escape' => false, 'target' => '_blank')); ?>
                                        <?php echo $this->Html->link(__('<i style="color:black" class="glyphicon glyphicon-edit" title="Edit"></i>'), array('action' => 'edit', $borrower['Borrower']['id']), array('escape' => false)); ?>
                                        <?php echo $this->Form->postLink(__('<i style="color:red" class="glyphicon glyphicon-trash" title="Delete"></i>'), array('action' => 'delete', $borrower['Borrower']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $borrower['Borrower']['id']), 'escape' => false)); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>


                    <p class="paginginfo">
                        <?php
                        echo $this->Paginator->counter(array(
                            'format' => __('Showing {:start} to {:end} of {:count} records')
                        ));
                        ?>                    </p>
                    <div class="paging">
                        <?php
                        echo $this->Paginator->first();
                        echo $this->Paginator->prev();
                        echo $this->Paginator->numbers();
                        echo $this->Paginator->next();
                        echo $this->Paginator->last();
                        ?>
                    </div>    
                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </div>
</div>



