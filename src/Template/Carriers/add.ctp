<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Carriers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="carriers form large-10 medium-9 columns">
    <?= $this->Form->create($carrier); ?>
    <fieldset>
        <legend><?= __('Add Carrier') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('cost');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
