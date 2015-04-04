<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?></li>
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
<div class="orders index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('customer_id') ?></th>
            <th><?= $this->Paginator->sort('status') ?></th>
            <th><?= $this->Paginator->sort('carrier_id') ?></th>
            <th><?= $this->Paginator->sort('total_products') ?></th>
            <th><?= $this->Paginator->sort('total_shipping') ?></th>
            <th><?= $this->Paginator->sort('total_discount') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($orders as $order): ?>
        <tr>
            <td><?= $this->Number->format($order->id) ?></td>
            <td>
                <?= $order->has('customer') ? $this->Html->link($order->customer->id, ['controller' => 'Customers', 'action' => 'view', $order->customer->id]) : '' ?>
            </td>
            <td><?= h($order->status) ?></td>
            <td>
                <?= $order->has('carrier') ? $this->Html->link($order->carrier->name, ['controller' => 'Carriers', 'action' => 'view', $order->carrier->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($order->total_products) ?></td>
            <td><?= $this->Number->format($order->total_shipping) ?></td>
            <td><?= $this->Number->format($order->total_discount) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $order->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
