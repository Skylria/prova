<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Monitor $monitor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $monitor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $monitor->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Monitors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="monitors form large-9 medium-8 columns content">
    <?= $this->Form->create($monitor) ?>
    <fieldset>
        <legend><?= __('Edit Monitor') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('email');
            echo $this->Form->control('username');
            echo $this->Form->control('discipline');
            echo $this->Form->control('role', [
                'options' => ['monitors' => 'Monitors', 'students' => 'Students'] ]);
            echo $this->Form->control('students._ids', ['options' => $students]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
