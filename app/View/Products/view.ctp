<div class="projects view">
    <div class="page_title">
        <br>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?> <i>/</i> Product Details</div>
        <br>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-condensed table-hover table-responsive table-striped">
                    <tbody>
                        <tr>
                            <td><?php echo __('Category'); ?></td>
                            <td>
                                <?php echo $this->Html->link($product['Category']['name'], array('controller' => 'categories', 'action' => 'view', $product['Category']['id'])); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Name'); ?></td>
                            <td>
                                <?php echo h($product['Product']['name']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Description'); ?></td>
                            <td>
                                <?php echo nl2br($product['Product']['description']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Feature'); ?></td>
                            <td>
                                <?php echo nl2br($product['Product']['feature']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Demo'); ?></td>
                            <td>
                                <?php echo h($product['Product']['demo']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Credential'); ?></td>
                            <td>
                                <?php echo h($product['Product']['credential']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Price'); ?></td>
                            <td>
                                <?php echo h($product['Product']['price']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Seq'); ?></td>
                            <td>
                                <?php echo h($product['Product']['seq']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Status'); ?></td>
                            <td>
                                <?php echo $status[$product['Product']['status']]; ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Is Public'); ?></td>
                            <td>
                                <?php echo $status[$product['Product']['is_public']]; ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Created'); ?></td>
                            <td>
                                <?php echo h($product['Product']['created']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo __('Modified'); ?></td>
                            <td>
                                <?php echo h($product['Product']['modified']); ?>
                                &nbsp;
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<div class="related">
    <?php if (!empty($product['Project'])): ?>
        <h3><?php echo __('Related Projects'); ?></h3>
        <table class="table table-bordered table-condensed table-hover table-responsive table-striped">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Name'); ?></th>
                <th><?php echo __('Price'); ?></th>
                <th><?php echo __('Advance'); ?></th>
                <th><?php echo __('Paid'); ?></th>
                <th><?php echo __('Status'); ?></th>
                <th><?php echo __('Created'); ?></th>
            </tr>
            <?php foreach ($product['Project'] as $project): ?>
                <tr>
                    <td><?php echo $project['id']; ?></td>
                    <td><?php echo $project['name']; ?></td>
                    <td><?php echo $project['price']; ?></td>
                    <td><?php echo $project['advance']; ?></td>
                    <td><?php echo $project['paid']; ?></td>
                    <td><?php echo $project['status']; ?></td>
                    <td><?php echo $project['created']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

</div>
