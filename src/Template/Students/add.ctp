<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Students'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Monitors'), ['controller' => 'Monitors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Monitor'), ['controller' => 'Monitors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="students form large-9 medium-8 columns content">
    <?= $this->Form->create($student) ?>
    <fieldset>
        <legend><?= __('Add Student') ?></legend>
        <?php
            echo $this->Form->control('name',['label' => 'Nome']);
            echo $this->Form->control('email',['label' => 'Email']);
            echo $this->Form->control('username',['label' => 'Usuário']);
            echo $this->Form->control('role',['label' => 'Aluno']);
            echo $this->Form->control('monitors._ids', ['options' => $monitors]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
