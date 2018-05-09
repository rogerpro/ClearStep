<?php

/**
 *
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Session'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sessions index large-9 medium-8 columns content">
    <h3><?= __('Sessions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('project_id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('begin') ?></th>
            <th scope="col"><?= $this->Paginator->sort('end') ?></th>
            <th scope="col"><?= $this->Paginator->sort('duration') ?></th>
            <th scope="col"><?= $this->Paginator->sort('task') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($sessions as $session): ?>
            <tr>
                <td><?= $session->has('project') ? $this->Html->link($session->project->name,
                        ['controller' => 'Projects', 'action' => 'view', $session->project->id]) : '' ?></td>
                <td><?= h($session->begin) ?></td>
                <td><?= h($session->end) ?></td>
                <td><?= h($session->duration_time) ?></td>
                <td><?= h($session->task) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $session->id]) ?>
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
