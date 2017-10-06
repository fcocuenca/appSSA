<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profesor[]|\Cake\Collection\CollectionInterface $profesor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Profesor'), ['action' => 'add']) ?></li>
    </ul>
</nav>
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
                <th scope="col" class="actions"><?= __('Actions') ?></th>
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
                    <?= $this->Html->link(__('View'), ['action' => 'view', $profesor->id_profesor]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $profesor->id_profesor]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $profesor->id_profesor], ['confirm' => __('Are you sure you want to delete # {0}?', $profesor->id_profesor)]) ?>
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
