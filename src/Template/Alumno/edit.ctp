<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="acciones" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Borrar alumno'),
                ['action' => 'delete', $alumno->id_alumno],
               ['confirm' => __('Vas a eliminar el alumno: {0} !!! estas seguro? ', $alumno->nombre)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Volver'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="alumno form large-9 medium-8 columns content">
    <?= $this->Form->create($alumno) ?>
    <fieldset>
        <legend><?= __('Editar Alumno') ?></legend>
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
