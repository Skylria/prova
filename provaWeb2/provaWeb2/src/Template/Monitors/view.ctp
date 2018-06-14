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
</div>
