<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="acciones" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Volver'), ['action' => 'index']) ?></li>
    </ul>
</nav>

<div class="profesor form large-9 medium-8 columns content">
    <?= $this->Form->create($profesor) ?>
    <fieldset>
        <legend><?= __('Añadir profesor') ?></legend>
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
