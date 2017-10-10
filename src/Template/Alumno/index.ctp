<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Alumno[]|\Cake\Collection\CollectionInterface $alumno
 */
?>

<nav class="acciones" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Añadir alumno'), ['action' => 'add']) ?></li>
    </ul>
</nav>


<div class="alumno index large-9 medium-8 columns content">
    <h3><?= __('Alumno') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_alumno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alumno as $alumno): ?>
            <tr>
                <td><?= $this->Number->format($alumno->id_alumno) ?></td>
                <td><?= h($alumno->nombre) ?></td>
                <td><?= h($alumno->apellido1) ?></td>
                <td><?= h($alumno->apellido2) ?></td>
                <td><?= $this->Number->format($alumno->telefono) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $alumno->id_alumno]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $alumno->id_alumno]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $alumno->id_alumno], ['confirm' => __('Vas a eliminar el alumno: {0} !!! estas seguro? ', $alumno->nombre)]) ?>
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
         <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} Alumno en {{count}} total')]) ?></p>
    </div>
</div>
