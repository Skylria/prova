<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Monitor $monitor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Monitors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="monitors form large-9 medium-8 columns content">
    <?= $this->Form->create($monitor) ?>
    <fieldset>
        <legend><?= __('Add Monitor') ?></legend>
        <?php
            echo $this->Form->control('name',['label' => 'Nome']);
            echo $this->Form->control('email',['label' => 'Email']);
            echo $this->Form->control('username',['label' => 'Usuário']);
            echo $this->Form->control('discipline',['label' => 'Disciplina']);
            echo $this->Form->control('role',['label' => 'Monitor']);
            echo $this->Form->control('students._ids', ['options' => $students]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
