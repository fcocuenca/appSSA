<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Alumno $alumno
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Alumno'), ['action' => 'edit', $alumno->id_alumno]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Alumno'), ['action' => 'delete', $alumno->id_alumno], ['confirm' => __('Are you sure you want to delete # {0}?', $alumno->id_alumno)]) ?> </li>
        <li><?= $this->Html->link(__('List Alumno'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Alumno'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="alumno view large-9 medium-8 columns content">
    <h3><?= h($alumno->id_alumno) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($alumno->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido1') ?></th>
            <td><?= h($alumno->apellido1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido2') ?></th>
            <td><?= h($alumno->apellido2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Alumno') ?></th>
            <td><?= $this->Number->format($alumno->id_alumno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= $this->Number->format($alumno->telefono) ?></td>
        </tr>
    </table>
</div>
