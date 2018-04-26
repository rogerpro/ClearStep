<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Country'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fiscal Data'), ['controller' => 'FiscalData', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fiscal Data'), ['controller' => 'FiscalData', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="countries index large-9 medium-8 columns content">
    <h3><?= __('Countries') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('iso2') ?></th>
            <th scope="col"><?= $this->Paginator->sort('iso3') ?></th>
            <th scope="col"><?= $this->Paginator->sort('is_eu') ?></th>
            <th scope="col"><?= $this->Paginator->sort('name') ?></th>
            <th scope="col"><?= $this->Paginator->sort('spa') ?></th>
            <th scope="col"><?= $this->Paginator->sort('cat') ?></th>
            <th scope="col"><?= $this->Paginator->sort('created') ?></th>
            <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($countries as $country): ?>
            <tr>
                <td><?= h($country->id) ?></td>
                <td><?= h($country->iso2) ?></td>
                <td><?= h($country->iso3) ?></td>
                <td><?= h($country->is_eu) ?></td>
                <td><?= h($country->name) ?></td>
                <td><?= h($country->spa) ?></td>
                <td><?= h($country->cat) ?></td>
                <td><?= h($country->created) ?></td>
                <td><?= h($country->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $country->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $country->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $country->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $country->id)]) ?>
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
