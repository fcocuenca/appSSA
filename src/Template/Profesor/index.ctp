<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profesor[]|\Cake\Collection\CollectionInterface $profesor
 */
?>
<!--BARRA-->
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Añadir profesor'), ['action' => 'add']) ?></li>
    </ul>
</nav>

<!--TABLA DE CONTENIDO-->
<div class="profesor index large-9 medium-8 columns content">
    <h3><?= __('Profesor') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_profesor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($profesor as $profesor): ?>
            <tr>
                <td><?= $this->Number->format($profesor->id_profesor) ?></td>
                <td><?= h($profesor->nombre) ?></td>
                <td><?= h($profesor->apellido1) ?></td>
                <td><?= h($profesor->apellido2) ?></td>
                <td><?= $this->Number->format($profesor->telefono) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $profesor->id_profesor]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $profesor->id_profesor]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $profesor->id_profesor], ['confirm' => __('Vas a eliminar el profesor: {0} !!! estas seguro? ', $profesor->nombre)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    <!--PÁGINA -->
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primero')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} Profesor en {{count}} total')]) ?></p>
    </div>
</div>
