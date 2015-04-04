<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?> </li>
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
<div class="orders view large-10 medium-9 columns">
    <h2><?= h($order->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Customer') ?></h6>
            <p><?= $order->has('customer') ? $this->Html->link($order->customer->id, ['controller' => 'Customers', 'action' => 'view', $order->customer->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= h($order->status) ?></p>
            <h6 class="subheader"><?= __('Carrier') ?></h6>
            <p><?= $order->has('carrier') ? $this->Html->link($order->carrier->name, ['controller' => 'Carriers', 'action' => 'view', $order->carrier->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Reference') ?></h6>
            <p><?= h($order->reference) ?></p>
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $order->has('user') ? $this->Html->link($order->user->id, ['controller' => 'Users', 'action' => 'view', $order->user->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($order->id) ?></p>
            <h6 class="subheader"><?= __('Total Products') ?></h6>
            <p><?= $this->Number->format($order->total_products) ?></p>
            <h6 class="subheader"><?= __('Total Shipping') ?></h6>
            <p><?= $this->Number->format($order->total_shipping) ?></p>
            <h6 class="subheader"><?= __('Total Discount') ?></h6>
            <p><?= $this->Number->format($order->total_discount) ?></p>
            <h6 class="subheader"><?= __('Total Paid') ?></h6>
            <p><?= $this->Number->format($order->total_paid) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Delivery Date') ?></h6>
            <p><?= h($order->delivery_date) ?></p>
            <h6 class="subheader"><?= __('Invoice Date') ?></h6>
            <p><?= h($order->invoice_date) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($order->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($order->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related OrderItems') ?></h4>
    <?php if (!empty($order->order_items)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Order Id') ?></th>
            <th><?= __('Product Id') ?></th>
            <th><?= __('Quantity') ?></th>
            <th><?= __('Total Products') ?></th>
            <th><?= __('Total Discount') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($order->order_items as $orderItems): ?>
        <tr>
            <td><?= h($orderItems->id) ?></td>
            <td><?= h($orderItems->order_id) ?></td>
            <td><?= h($orderItems->product_id) ?></td>
            <td><?= h($orderItems->quantity) ?></td>
            <td><?= h($orderItems->total_products) ?></td>
            <td><?= h($orderItems->total_discount) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'OrderItems', 'action' => 'view', $orderItems->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'OrderItems', 'action' => 'edit', $orderItems->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'OrderItems', 'action' => 'delete', $orderItems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderItems->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
