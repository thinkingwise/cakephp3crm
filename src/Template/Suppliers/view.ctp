<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Supplier'), ['action' => 'edit', $supplier->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Supplier'), ['action' => 'delete', $supplier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supplier->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Suppliers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Supplier'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="suppliers view large-10 medium-9 columns">
    <h2><?= h($supplier->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($supplier->name) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($supplier->email) ?></p>
            <h6 class="subheader"><?= __('Telephone') ?></h6>
            <p><?= h($supplier->telephone) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($supplier->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($supplier->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($supplier->modified) ?></p>
        </div>
    </div>
</div>
