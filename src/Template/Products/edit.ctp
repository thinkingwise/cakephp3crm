<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $product->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Suppliers'), ['controller' => 'Suppliers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Supplier'), ['controller' => 'Suppliers', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="products form large-10 medium-9 columns">
    <?= $this->Form->create($product); ?>
    <fieldset>
        <legend><?= __('Edit Product') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('category_id', ['options' => $categories, 'empty' => true]);
            echo $this->Form->input('sku');
            echo $this->Form->input('supplier_id', ['options' => $suppliers, 'empty' => true]);
            echo $this->Form->input('quantity');
            echo $this->Form->input('price');
            echo $this->Form->input('weight');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
