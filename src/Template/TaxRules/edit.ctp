<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $taxRule->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $taxRule->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tax Rules'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="taxRules form large-10 medium-9 columns">
    <?= $this->Form->create($taxRule); ?>
    <fieldset>
        <legend><?= __('Edit Tax Rule') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('percent');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
