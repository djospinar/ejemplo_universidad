<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sesione'), ['action' => 'edit', $sesione->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sesione'), ['action' => 'delete', $sesione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sesione->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sesiones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sesione'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sesiones view large-9 medium-8 columns content">
    <h3><?= h($sesione->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Administrador') ?></th>
            <td><?= h($sesione->administrador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cliente') ?></th>
            <td><?= h($sesione->cliente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sesione->id) ?></td>
        </tr>
    </table>
</div>
