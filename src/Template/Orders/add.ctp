<?= $this->Html->script('scripts') ?>
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
<div class="orders form large-10 medium-9 columns" ng-app="myApp" ng-controller="formCtrl">
    <?= $this->Form->create($order); ?>
    <fieldset>
        <legend><?= __('Add Order') ?></legend>
        <?php
            echo $this->Form->input('customer_id', ['options' => $customers, 'empty' => true]);
            echo $this->Form->input('status', [
                'options' => ['in_progress' => 'In Progress', 'accepted' => 'Payment Accepted', 'waiting' => 'Await for Payment', 'shipped' => 'Shipped'],
                'empty' => true
            ]);
            echo $this->Form->input('carrier_id', ['options' => $carriers, 'empty' => true]);
            echo $this->Form->input('total_products', ['type' => 'decimal', 'label' => ['text' => 'Total Products A$'], 'ng-model' => 'total_products']);
            //echo $this->Form->input('total_shipping', ['options' => $costcarriers, 'empty' => true]);
            echo $this->Form->input('total_shipping', ['type' => 'decimal', 'ng-model' => 'total_shipping']);
            echo $this->Form->input('total_discount', ['type' => 'decimal', 'ng-model' => 'total_discount']);

            //echo "Total: " . "<span ng-bind='total_products'></span>"; ?> <!--<p><input ng-bind='total_products-total_shipping-total_discount'></input></p>--> <?php

            echo $this->Form->hidden('total_paid', ['type' => 'decimal', 'ng-bind' => 'total_products-total_shipping-total_discount']);
            echo $this->Form->input('delivery_date', array('empty' => true, 'default' => ''));
            echo $this->Form->input('invoice_date', array('empty' => true, 'default' => ''));
            echo $this->Form->input('reference');
            echo $this->Form->input('user_id', ['options' => $users, 'empty' => true]);

            /* OrderItems */
        ?>
            <h4><?= __('Add product items') ?></h4>
            <div class="row">
                <?php echo $this->Form->hidden('OrderItems.order_id'); ?>
                <div class="large-4 columns">
                    <?php echo $this->Form->input('OrderItems.product_id', ['options' => $products, 'empty' => true]); ?>
                </div>
                <div class="large-4 columns">
                    <?php echo $this->Form->input('OrderItems.quantity'); ?>
                </div>
                <?php
                /*
                    $this->Html->scriptStart(['block' => true]);
                    echo "alert('I am in the JavaScript')";
                    $this->Html->scriptEnd();
                */
                ?>
                <button type="button" class="add-product"><?= __('Add product') ?></button>
            </div>


    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<table>
    <tbody>
    <?php foreach ($costcarriers as $costcarrier): ?>
        <tr>
            <td><?= h($costcarrier) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
