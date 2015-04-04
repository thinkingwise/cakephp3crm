<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="customers view large-10 medium-9 columns">
    <h2><?= h($customer->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Firstname') ?></h6>
            <p><?= h($customer->firstname) ?></p>
            <h6 class="subheader"><?= __('Lastname') ?></h6>
            <p><?= h($customer->lastname) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($customer->email) ?></p>
            <h6 class="subheader"><?= __('Company') ?></h6>
            <p><?= h($customer->company) ?></p>
            <h6 class="subheader"><?= __('Telephone') ?></h6>
            <p><?= h($customer->telephone) ?></p>
            <h6 class="subheader"><?= __('Address') ?></h6>
            <p><?= h($customer->address) ?></p>
            <h6 class="subheader"><?= __('Delivery Address') ?></h6>
            <p><?= h($customer->delivery_address) ?></p>
            <h6 class="subheader"><?= __('Invoice Address') ?></h6>
            <p><?= h($customer->invoice_address) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($customer->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Birthday') ?></h6>
            <p><?= h($customer->birthday) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($customer->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($customer->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Orders') ?></h4>
    <?php if (!empty($customer->orders)): ?>
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
        <?php foreach ($customer->orders as $orders): ?>
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
