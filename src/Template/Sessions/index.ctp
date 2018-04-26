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
            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('project_id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('begin') ?></th>
            <th scope="col"><?= $this->Paginator->sort('end') ?></th>
            <th scope="col"><?= $this->Paginator->sort('duration') ?></th>
            <th scope="col"><?= $this->Paginator->sort('section') ?></th>
            <th scope="col"><?= $this->Paginator->sort('subsection') ?></th>
            <th scope="col"><?= $this->Paginator->sort('task') ?></th>
            <th scope="col"><?= $this->Paginator->sort('expected_hours') ?></th>
            <th scope="col"><?= $this->Paginator->sort('created') ?></th>
            <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($sessions as $session): ?>
            <tr>
                <td><?= h($session->id) ?></td>
                <td><?= $session->has('project') ? $this->Html->link($session->project->name,
                        ['controller' => 'Projects', 'action' => 'view', $session->project->id]) : '' ?></td>
                <td><?= h($session->begin) ?></td>
                <td><?= h($session->end) ?></td>
                <td><?= h($session->duration_time) ?></td>
                <td><?= $this->Number->format($session->section) ?></td>
                <td><?= $this->Number->format($session->subsection) ?></td>
                <td><?= h($session->task) ?></td>
                <td><?= $this->Number->format($session->expected_hours) ?></td>
                <td><?= h($session->created) ?></td>
                <td><?= h($session->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $session->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $session->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $session->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $session->id)]) ?>
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
