<div class="employees index">
    <div class="page_title">
        <br>
        <div class="pagenation">
            &nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?>
            <i>/</i> Employee List
        </div>
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
                            <th><?php echo __('Title'); ?></th>
                            <td><?php echo $this->Form->input('nm', array('label' => false)); ?></td>
                            <th><?php echo __('Date from'); ?></th>
                            <td><?php echo $this->Form->input('df', array('label' => false)); ?></td>
                            <th><?php echo __('To'); ?></th>
                            <td><?php echo $this->Form->input('dt', array('label' => false)); ?></td>

                            <td><?php echo $this->Form->button('Search', array('class' => 'btn btn-info', 'name' => 'btnsrc')); ?></td>
                            <td>
                                <div class="text-center">
                                    &nbsp;<?php echo $this->Html->link("<div class='searchadd-btn'>Add New</div> ", array('action' => 'add'), array('escape' => false)); ?></div>
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
                <table class="table table-bordered table-condensed table-hover table-responsive table-striped mrt10">
                    <thead>
                    <tr>
                        <th><?php echo $this->Paginator->sort('image'); ?></th>
                        <th><?php echo $this->Paginator->sort('name', 'Name & Designation'); ?></th>
                        <th><?php echo $this->Paginator->sort('phone', 'Phone & Email'); ?></th>
                        <th><?php echo $this->Paginator->sort('present_address'); ?></th>
                        <th><?php echo $this->Paginator->sort('permanent_address'); ?></th>
                        <th><?php echo $this->Paginator->sort('join_date'); ?></th>
                        <th><?php echo $this->Paginator->sort('education'); ?></th>
                        <th><?php echo $this->Paginator->sort('marital_status'); ?></th>
                        <th><?php echo $this->Paginator->sort('salary'); ?></th>
                        <th><?php echo $this->Paginator->sort('bonus'); ?></th>
                        <th><?php echo $this->Paginator->sort('paid'); ?></th>
                        <th><?php echo $this->Paginator->sort('gain'); ?></th>
                        <th><?php echo $this->Paginator->sort('status'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($employees as $employee): ?>
                        <tr>
                            <td><?php echo $this->Html->image('em/' . $employee['Employee']['id'] . '.png', array('alt' => 'No Image', 'width' => '80')); ?>
                                &nbsp;
                            </td>
                            <td><p><?php echo h($employee['Employee']['name']); ?></p>
                                <p><?php echo h($employee['Employee']['designation']); ?></p>&nbsp;
                            </td>
                            <td><p><?php echo h($employee['Employee']['phone']); ?></p>
                                <p><?php echo h($employee['Employee']['email']); ?></p>&nbsp;
                            </td>
                            <td><?php echo h($employee['Employee']['present_address']); ?>&nbsp;</td>
                            <td><?php echo h($employee['Employee']['permanent_address']); ?>&nbsp;</td>
                            <td><?php echo h($employee['Employee']['join_date']); ?>&nbsp;</td>
                            <td><?php echo h($employee['Employee']['education']); ?>&nbsp;</td>
                            <td><?php echo h($employee['Employee']['marital_status']); ?>&nbsp;</td>
                            <td><?php echo h($employee['Employee']['salary']); ?>&nbsp;</td>
                            <td><?php echo h($employee['Employee']['bonus']); ?>&nbsp;</td>
                            <td><?php echo h($employee['Employee']['paid']); ?>&nbsp;</td>
                            <td><?php echo h($employee['Employee']['gain']); ?>&nbsp;</td>
                            <td><?php echo $status[$employee['Employee']['status']]; ?>&nbsp;</td>

                            <td class="actions">
                                <?php echo $this->Html->link(__("<i style='color:green' class='fa fa-eye'></i>"), array('action' => 'view', $employee['Employee']['id']), array('escape' => false, 'title' => 'View')); ?>
                                <?php echo $this->Html->link(__("<i style='color:black' class='fa fa-edit'></i>"), array('action' => 'edit', $employee['Employee']['id']), array('escape' => false, 'title' => 'Edit')); ?>
                                <?php echo $this->Form->postLink(__("<i style='color:red' class='fa fa-trash-o'></i>"), array('action' => 'delete', $employee['Employee']['id']), array('escape' => false, 'title' => 'Delete', 'confirm' => __('Are you sure you want to delete # %s?', $employee['Employee']['id']))); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<?php
echo $this->Html->css(array('jquery-ui.min'));
echo $this->Html->script(array('jquery.min','jquery-ui.min'));
?>
<script type="text/javascript">
    $( document ).ready(function() {
        $('#SrcDf').datepicker();
        $('#SrcDt').datepicker();

    });
</script>