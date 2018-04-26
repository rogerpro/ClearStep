<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fiscal Data'), ['action' => 'edit', $fiscalData->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fiscal Data'), ['action' => 'delete', $fiscalData->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fiscalData->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fiscal Data'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fiscal Data'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fiscalData view large-9 medium-8 columns content">
    <h3><?= h($fiscalData->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($fiscalData->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $fiscalData->has('client') ? $this->Html->link($fiscalData->client->name,
                    ['controller' => 'Clients', 'action' => 'view', $fiscalData->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($fiscalData->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Commercial Name') ?></th>
            <td><?= h($fiscalData->commercial_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($fiscalData->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Postal Code') ?></th>
            <td><?= h($fiscalData->postal_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($fiscalData->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= $fiscalData->has('country') ? $this->Html->link($fiscalData->country->name,
                    ['controller' => 'Countries', 'action' => 'view', $fiscalData->country->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($fiscalData->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Eu Vat Number') ?></th>
            <td><?= h($fiscalData->eu_vat_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tax Num') ?></th>
            <td><?= h($fiscalData->tax_num) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($fiscalData->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($fiscalData->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Company') ?></th>
            <td><?= $fiscalData->is_company ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Freelancer') ?></th>
            <td><?= $fiscalData->is_freelancer ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Roi') ?></th>
            <td><?= $fiscalData->is_roi ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Privacy') ?></th>
            <td><?= $fiscalData->privacy ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
