<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonitorsStudent $monitorsStudent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Monitors Student'), ['action' => 'edit', $monitorsStudent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Monitors Student'), ['action' => 'delete', $monitorsStudent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $monitorsStudent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Monitors Students'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Monitors Student'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Monitors'), ['controller' => 'Monitors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Monitor'), ['controller' => 'Monitors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="monitorsStudents view large-9 medium-8 columns content">
    <h3><?= h($monitorsStudent->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Monitor') ?></th>
            <td><?= $monitorsStudent->has('monitor') ? $this->Html->link($monitorsStudent->monitor->name, ['controller' => 'Monitors', 'action' => 'view', $monitorsStudent->monitor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Student') ?></th>
            <td><?= $monitorsStudent->has('student') ? $this->Html->link($monitorsStudent->student->name, ['controller' => 'Students', 'action' => 'view', $monitorsStudent->student->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($monitorsStudent->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($monitorsStudent->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($monitorsStudent->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Time') ?></th>
            <td><?= h($monitorsStudent->start_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Time') ?></th>
            <td><?= h($monitorsStudent->end_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($monitorsStudent->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($monitorsStudent->modified) ?></td>
        </tr>
    </table>
</div>
