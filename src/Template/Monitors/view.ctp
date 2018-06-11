<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Monitor $monitor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Monitor'), ['action' => 'edit', $monitor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Monitor'), ['action' => 'delete', $monitor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $monitor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Monitors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Monitor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="monitors view large-9 medium-8 columns content">
    <h3><?= h($monitor->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($monitor->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($monitor->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($monitor->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discipline') ?></th>
            <td><?= h($monitor->discipline) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($monitor->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($monitor->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($monitor->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($monitor->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Students') ?></h4>
        <?php if (!empty($monitor->students)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('Role') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($monitor->students as $students): ?>
            <tr>
                <td><?= h($students->id) ?></td>
                <td><?= h($students->name) ?></td>
                <td><?= h($students->email) ?></td>
                <td><?= h($students->username) ?></td>
                <td><?= h($students->role) ?></td>
                <td><?= h($students->created) ?></td>
                <td><?= h($students->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Students', 'action' => 'view', $students->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Students', 'action' => 'edit', $students->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Students', 'action' => 'delete', $students->id], ['confirm' => __('Are you sure you want to delete # {0}?', $students->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
