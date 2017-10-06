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
                ['action' => 'delete', $profesor->id_profesor],
                ['confirm' => __('Are you sure you want to delete # {0}?', $profesor->id_profesor)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Profesor'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="profesor form large-9 medium-8 columns content">
    <?= $this->Form->create($profesor) ?>
    <fieldset>
        <legend><?= __('Edit Profesor') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('apellido1');
            echo $this->Form->control('apellido2');
            echo $this->Form->control('telefono');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
