<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Monitor[]|\Cake\Collection\CollectionInterface $monitors
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Monitor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="monitors index large-9 medium-8 columns content">
    <h3><?= __('Monitors') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('discipline') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($monitors as $monitor): ?>
            <tr>
                <td><?= $this->Number->format($monitor->id) ?></td>
                <td><?= h($monitor->name) ?></td>
                <td><?= h($monitor->email) ?></td>
                <td><?= h($monitor->username) ?></td>
                <td><?= h($monitor->discipline) ?></td>
                <td><?= h($monitor->role) ?></td>
                <td><?= h($monitor->created) ?></td>
                <td><?= h($monitor->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $monitor->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $monitor->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $monitor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $monitor->id)]) ?>
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
