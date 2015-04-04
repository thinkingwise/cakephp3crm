<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $orderItem->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $orderItem->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Order Items'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="orderItems form large-10 medium-9 columns">
    <?= $this->Form->create($orderItem); ?>
    <fieldset>
        <legend><?= __('Edit Order Item') ?></legend>
        <?php
            echo $this->Form->input('order_id', ['options' => $orders, 'empty' => true]);
            echo $this->Form->input('product_id', ['options' => $products, 'empty' => true]);
            echo $this->Form->input('quantity');
            echo $this->Form->input('total_products');
            echo $this->Form->input('total_discount');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
