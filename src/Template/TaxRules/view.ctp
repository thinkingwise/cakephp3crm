<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Tax Rule'), ['action' => 'edit', $taxRule->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tax Rule'), ['action' => 'delete', $taxRule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $taxRule->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tax Rules'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tax Rule'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="taxRules view large-10 medium-9 columns">
    <h2><?= h($taxRule->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($taxRule->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($taxRule->id) ?></p>
            <h6 class="subheader"><?= __('Percent') ?></h6>
            <p><?= $this->Number->format($taxRule->percent) ?></p>
        </div>
    </div>
</div>
