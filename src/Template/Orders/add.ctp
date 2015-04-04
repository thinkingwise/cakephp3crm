<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Carriers'), ['controller' => 'Carriers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Carrier'), ['controller' => 'Carriers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Order Items'), ['controller' => 'OrderItems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Item'), ['controller' => 'OrderItems', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="orders form large-10 medium-9 columns">
    <?= $this->Form->create($order); ?>
    <fieldset>
        <legend><?= __('Add Order') ?></legend>
        <?php
            echo $this->Form->input('customer_id', ['options' => $customers, 'empty' => true]);
            echo $this->Form->input('status');
            echo $this->Form->input('carrier_id', ['options' => $carriers, 'empty' => true]);
            echo $this->Form->input('total_products');
            echo $this->Form->input('total_shipping');
            echo $this->Form->input('total_discount');
            echo $this->Form->input('total_paid');
            echo $this->Form->input('delivery_date', array('empty' => true, 'default' => ''));
            echo $this->Form->input('invoice_date', array('empty' => true, 'default' => ''));
            echo $this->Form->input('reference');
            echo $this->Form->input('user_id', ['options' => $users, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
