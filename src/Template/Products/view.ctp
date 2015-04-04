<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Suppliers'), ['controller' => 'Suppliers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Supplier'), ['controller' => 'Suppliers', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="products view large-10 medium-9 columns">
    <h2><?= h($product->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($product->name) ?></p>
            <h6 class="subheader"><?= __('Category') ?></h6>
            <p><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Sku') ?></h6>
            <p><?= h($product->sku) ?></p>
            <h6 class="subheader"><?= __('Supplier') ?></h6>
            <p><?= $product->has('supplier') ? $this->Html->link($product->supplier->name, ['controller' => 'Suppliers', 'action' => 'view', $product->supplier->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($product->id) ?></p>
            <h6 class="subheader"><?= __('Quantity') ?></h6>
            <p><?= $this->Number->format($product->quantity) ?></p>
            <h6 class="subheader"><?= __('Price') ?></h6>
            <p><?= $this->Number->format($product->price) ?></p>
            <h6 class="subheader"><?= __('Weight') ?></h6>
            <p><?= $this->Number->format($product->weight) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($product->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($product->modified) ?></p>
        </div>
    </div>
</div>
