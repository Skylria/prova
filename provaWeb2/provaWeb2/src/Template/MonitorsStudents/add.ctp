<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonitorsStudent $monitorsStudent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Monitors Students'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Monitors'), ['controller' => 'Monitors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Monitor'), ['controller' => 'Monitors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="monitorsStudents form large-9 medium-8 columns content">
    <?= $this->Form->create($monitorsStudent) ?>
    <fieldset>
        <legend><?= __('Add Monitors Student') ?></legend>
        <?php
            echo $this->Form->control('monitor_id', ['options' => $monitors]);
            echo $this->Form->control('student_id', ['options' => $students]);
            echo $this->Form->control('start_time');
            echo $this->Form->control('end_time');
            echo $this->Form->control('status');
            echo $this->Form->control('role');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
