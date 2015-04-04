<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Carrier'), ['action' => 'edit', $carrier->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Carrier'), ['action' => 'delete', $carrier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carrier->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Carriers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Carrier'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="carriers view large-10 medium-9 columns">
    <h2><?= h($carrier->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($carrier->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($carrier->id) ?></p>
            <h6 class="subheader"><?= __('Cost') ?></h6>
            <p><?= $this->Number->format($carrier->cost) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Orders') ?></h4>
    <?php if (!empty($carrier->orders)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Customer Id') ?></th>
            <th><?= __('Status') ?></th>
            <th><?= __('Carrier Id') ?></th>
            <th><?= __('Total Products') ?></th>
            <th><?= __('Total Shipping') ?></th>
            <th><?= __('Total Discount') ?></th>
            <th><?= __('Total Paid') ?></th>
            <th><?= __('Delivery Date') ?></th>
            <th><?= __('Invoice Date') ?></th>
            <th><?= __('Reference') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($carrier->orders as $orders): ?>
        <tr>
            <td><?= h($orders->id) ?></td>
            <td><?= h($orders->customer_id) ?></td>
            <td><?= h($orders->status) ?></td>
            <td><?= h($orders->carrier_id) ?></td>
            <td><?= h($orders->total_products) ?></td>
            <td><?= h($orders->total_shipping) ?></td>
            <td><?= h($orders->total_discount) ?></td>
            <td><?= h($orders->total_paid) ?></td>
            <td><?= h($orders->delivery_date) ?></td>
            <td><?= h($orders->invoice_date) ?></td>
            <td><?= h($orders->reference) ?></td>
            <td><?= h($orders->user_id) ?></td>
            <td><?= h($orders->created) ?></td>
            <td><?= h($orders->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $orders->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $orders->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $orders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orders->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
