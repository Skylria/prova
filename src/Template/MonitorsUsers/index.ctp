<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonitorsUser[]|\Cake\Collection\CollectionInterface $monitorsUsers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Monitors User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Monitors'), ['controller' => 'Monitors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Monitor'), ['controller' => 'Monitors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="monitorsUsers index large-9 medium-8 columns content">
    <h3><?= __('Monitors Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('monitor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($monitorsUsers as $monitorsUser): ?>
            <tr>
                <td><?= $this->Number->format($monitorsUser->id) ?></td>
                <td><?= $monitorsUser->has('monitor') ? $this->Html->link($monitorsUser->monitor->name, ['controller' => 'Monitors', 'action' => 'view', $monitorsUser->monitor->id]) : '' ?></td>
                <td><?= $monitorsUser->has('user') ? $this->Html->link($monitorsUser->user->id, ['controller' => 'Users', 'action' => 'view', $monitorsUser->user->id]) : '' ?></td>
                <td><?= h($monitorsUser->start_time) ?></td>
                <td><?= h($monitorsUser->end_time) ?></td>
                <td><?= h($monitorsUser->status) ?></td>
                <td><?= h($monitorsUser->created) ?></td>
                <td><?= h($monitorsUser->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $monitorsUser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $monitorsUser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $monitorsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $monitorsUser->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
