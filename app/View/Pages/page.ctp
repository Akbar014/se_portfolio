<div class="pages index">
    <div class="page_title">
        <?php //echo $menu['Page']['title']; ?>
        <div class="pagenation">&nbsp;<?php echo $this->Html->link('Home', array('controller' => 'pages', 'action' => 'home'), array('escape' => false)); ?> <i>/</i> <?php //echo $menu['Page']['title']; ?></div>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <?php echo html_entity_decode($menu['Page']['page']); ?>
            </div>
        </div>
    </section>
</div>