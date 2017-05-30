<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sesione'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sesiones index large-9 medium-8 columns content">
    <h3><?= __('Sesiones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('administrador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cliente') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sesiones as $sesione): ?>
            <tr>
                <td><?= $this->Number->format($sesione->id) ?></td>
                <td><?= h($sesione->administrador) ?></td>
                <td><?= h($sesione->cliente) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sesione->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sesione->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sesione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sesione->id)]) ?>
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
