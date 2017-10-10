<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Alumno $alumno
 */
?>
<nav class="acciones" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar alumno'), ['action' => 'edit', $alumno->id_alumno]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar alumno'), ['action' => 'delete', $alumno->id_alumno],  ['confirm' => __('Vas a eliminar el alumno: {0} !!! estas seguro? ', $alumno->nombre)]) ?> </li>
        <li><?= $this->Html->link(__('Volver'), ['action' => 'index']) ?> </li>
    </ul>
</nav>

<div class="alumno view large-9 medium-8 columns content">
    <h3><?= h($alumno->nombre) ?> <?= h($alumno->apellido1) ?></h3>
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
