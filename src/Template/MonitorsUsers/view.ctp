<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonitorsUser $monitorsUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Monitors User'), ['action' => 'edit', $monitorsUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Monitors User'), ['action' => 'delete', $monitorsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $monitorsUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Monitors Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Monitors User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Monitors'), ['controller' => 'Monitors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Monitor'), ['controller' => 'Monitors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="monitorsUsers view large-9 medium-8 columns content">
    <h3><?= h($monitorsUser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Monitor') ?></th>
            <td><?= $monitorsUser->has('monitor') ? $this->Html->link($monitorsUser->monitor->name, ['controller' => 'Monitors', 'action' => 'view', $monitorsUser->monitor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $monitorsUser->has('user') ? $this->Html->link($monitorsUser->user->id, ['controller' => 'Users', 'action' => 'view', $monitorsUser->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($monitorsUser->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($monitorsUser->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Time') ?></th>
            <td><?= h($monitorsUser->start_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Time') ?></th>
            <td><?= h($monitorsUser->end_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($monitorsUser->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($monitorsUser->modified) ?></td>
        </tr>
    </table>
</div>
