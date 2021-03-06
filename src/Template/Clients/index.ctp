<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fiscal Data'), ['controller' => 'FiscalData', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fiscal Data'), ['controller' => 'FiscalData', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clients index large-9 medium-8 columns content">
    <h3><?= __('Clients') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('name') ?></th>
            <th scope="col" class="text-center"><?= $this->Paginator->sort('created') ?></th>
            <th scope="col" class="text-center"><?= $this->Paginator->sort('modified') ?></th>
            <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($clients as $client): ?>
            <tr>
                <td><?= h($client->name) ?></td>
                <td class="text-center"><?= h($client->created) ?></td>
                <td class="text-center"><?= h($client->modified) ?></td>
                <td class="actions text-center">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $client->id]) ?>
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
