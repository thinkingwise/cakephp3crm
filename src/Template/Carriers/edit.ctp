<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $carrier->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $carrier->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Carriers'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="carriers form large-10 medium-9 columns">
    <?= $this->Form->create($carrier); ?>
    <fieldset>
        <legend><?= __('Edit Carrier') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('cost');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
