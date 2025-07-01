<div class="cars index">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Car List</div>
        <br>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading">Search</div>
                <div class="panel-body">
                    <?php echo $this->Form->create('Src', array('class' => 'form-horizontal')); ?>
                    <table class="table table-condensed table-striped table-bordered table-hover">
                        <tr>
                            <th><?php echo __('Car Name'); ?></th>
                            <td><?php echo $this->Form->input('car_name', array('label' => false)); ?></td>
                            <th><?php echo __('Model Year'); ?></th>
                            <td><?php echo $this->Form->input('model_year', array('label' => false)); ?></td>
                            <th><?php echo __('Engine CC'); ?></th>
                            <td><?php echo $this->Form->input('engine_cc', array('label' => false)); ?></td>

                            <td><?php echo $this->Form->button('Search', array('class' => 'btn btn-info', 'name' => 'btnsrc')); ?></td>
                            <td>
                                <div class="text-center">&nbsp;<?php echo $this->Html->link("<div class='searchadd-btn'>Add New</div> ", array('action' => 'add'), array('escape' => false)); ?></div>
                            </td>
                        </tr>
                    </table>

                    <p class="paginginfo">
                        <?php
                        echo $this->Paginator->counter(array(
                            'format' => __('Showing {:start} to {:end} of {:count} records')
                        ));
                        ?>
                    </p>
                    <ul class="pagination">
                        <?php
                        echo $this->Paginator->first();
                        echo $this->Paginator->prev();
                        echo $this->Paginator->numbers();
                        echo $this->Paginator->next();
                        echo $this->Paginator->last();
                        ?>
                    </ul>

                    <?php echo $this->Form->end(); ?>
                </div>


            </div>
        </div>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-condensed table-hover table-responsive table-striped">
                    <thead>
                        <tr>
                            <th><?php echo $this->Paginator->sort('id'); ?></th>
                            <th><?php echo $this->Paginator->sort('showroom'); ?></th>
                            <th><?php echo $this->Paginator->sort('car_name'); ?></th>
                            <th><?php echo $this->Paginator->sort('model_year'); ?></th>
                            <th><?php echo $this->Paginator->sort('registration_year'); ?></th>
                            <th><?php echo $this->Paginator->sort('color'); ?></th>
                            <th><?php echo $this->Paginator->sort('engine_cc'); ?></th>
                            <th><?php echo $this->Paginator->sort('lpg_cng'); ?></th>
                            <th><?php echo $this->Paginator->sort('capacity'); ?></th>
                            <th><?php echo $this->Paginator->sort('price'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cars as $car) : ?>
                            <tr>
                                <td><?php echo h($car['Car']['id']); ?>&nbsp;</td>
                                <td><?php echo h($car['Car']['showroom']); ?>&nbsp;</td>
                                <td><?php echo h($car['Car']['car_name']); ?>&nbsp;</td>
                                <td><?php echo h($car['Car']['model_year']); ?>&nbsp;</td>
                                <td><?php echo h($car['Car']['registration_year']); ?>&nbsp;</td>
                                <td><?php echo h($car['Car']['color']); ?>&nbsp;</td>
                                <td><?php echo h($car['Car']['engine_cc']); ?>&nbsp;</td>
                                <td><?php echo h($car['Car']['lpg_cng']); ?>&nbsp;</td>
                                <td><?php echo h($car['Car']['capacity']); ?>&nbsp;</td>
                                <td><?php echo h($car['Car']['price']); ?>&nbsp;</td>
                                <td class="actions">
                                    <?php echo $this->Html->link(__("<i style='color:green' class='fa fa-eye'></i>"), array('action' => 'view', $car['Car']['id']), array('escape' => false, 'title' => 'View')); ?>
                                    <?php echo $this->Html->link(__("<i style='color:black' class='fa fa-edit'></i>"), array('action' => 'edit', $car['Car']['id']), array('escape' => false, 'title' => 'Edit')); ?>
                                    <?php echo $this->Form->postLink(__("<i style='color:red' class='fa fa-trash-o'></i>"), array('action' => 'delete', $car['Car']['id']), array('escape' => false, 'title' => 'Delete', 'confirm' => __('Are you sure you want to delete # %s?', $car['Car']['id']))); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>