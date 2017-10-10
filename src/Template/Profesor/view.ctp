<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profesor $profesor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar profesor'), ['action' => 'edit', $profesor->id_profesor]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar profesor'), ['action' => 'delete', $profesor->id_profesor], ['confirm' => __('Vas a eliminar el profesor: {0} !!! estas seguro? ', $profesor->nombre)]) ?> </li>
        <li><?= $this->Html->link(__('Volver'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="profesor view large-9 medium-8 columns content">
    <h3><?= h($profesor->id_profesor) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($profesor->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido1') ?></th>
            <td><?= h($profesor->apellido1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido2') ?></th>
            <td><?= h($profesor->apellido2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Profesor') ?></th>
            <td><?= $this->Number->format($profesor->id_profesor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= $this->Number->format($profesor->telefono) ?></td>
        </tr>
    </table>
</div>

 ['confirm' => __('Vas a eliminar el profesor: {0} !!! estas seguro? ', $profesor->nombre)]