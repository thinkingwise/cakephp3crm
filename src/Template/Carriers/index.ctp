<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Carrier'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="carriers index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('cost') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($carriers as $carrier): ?>
        <tr>
            <td><?= $this->Number->format($carrier->id) ?></td>
            <td><?= h($carrier->name) ?></td>
            <td><?= $this->Number->format($carrier->cost) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $carrier->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $carrier->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $carrier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carrier->id)]) ?>
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
