<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sesione->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sesione->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sesiones'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="sesiones form large-9 medium-8 columns content">
    <?= $this->Form->create($sesione) ?>
    <fieldset>
        <legend><?= __('Edit Sesione') ?></legend>
        <?php
            echo $this->Form->control('administrador');
            echo $this->Form->control('cliente');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
