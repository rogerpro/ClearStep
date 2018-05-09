<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fiscal Data'), ['controller' => 'FiscalData', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fiscal Data'), ['controller' => 'FiscalData', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clients view large-9 medium-8 columns content">
    <h3><?= h($client->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($client->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($client->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($client->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($client->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Fiscal Data') ?></h4>
        <?php if (!empty($client->fiscal_data)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Client Id') ?></th>
                    <th scope="col"><?= __('Name') ?></th>
                    <th scope="col"><?= __('Commercial Name') ?></th>
                    <th scope="col"><?= __('Is Company') ?></th>
                    <th scope="col"><?= __('Is Freelancer') ?></th>
                    <th scope="col"><?= __('Is Roi') ?></th>
                    <th scope="col"><?= __('Address') ?></th>
                    <th scope="col"><?= __('Postal Code') ?></th>
                    <th scope="col"><?= __('City') ?></th>
                    <th scope="col"><?= __('Country Id') ?></th>
                    <th scope="col"><?= __('Phone') ?></th>
                    <th scope="col"><?= __('Eu Vat Number') ?></th>
                    <th scope="col"><?= __('Tax Num') ?></th>
                    <th scope="col"><?= __('Privacy') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($client->fiscal_data as $fiscalData): ?>
                    <tr>
                        <td><?= h($fiscalData->id) ?></td>
                        <td><?= h($fiscalData->client_id) ?></td>
                        <td><?= h($fiscalData->name) ?></td>
                        <td><?= h($fiscalData->commercial_name) ?></td>
                        <td><?= h($fiscalData->is_company) ?></td>
                        <td><?= h($fiscalData->is_freelancer) ?></td>
                        <td><?= h($fiscalData->is_roi) ?></td>
                        <td><?= h($fiscalData->address) ?></td>
                        <td><?= h($fiscalData->postal_code) ?></td>
                        <td><?= h($fiscalData->city) ?></td>
                        <td><?= h($fiscalData->country_id) ?></td>
                        <td><?= h($fiscalData->phone) ?></td>
                        <td><?= h($fiscalData->eu_vat_number) ?></td>
                        <td><?= h($fiscalData->tax_num) ?></td>
                        <td><?= h($fiscalData->privacy) ?></td>
                        <td><?= h($fiscalData->created) ?></td>
                        <td><?= h($fiscalData->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'),
                                ['controller' => 'FiscalData', 'action' => 'view', $fiscalData->id]) ?>
                            <?= $this->Html->link(__('Edit'),
                                ['controller' => 'FiscalData', 'action' => 'edit', $fiscalData->id]) ?>
                            <?= $this->Form->postLink(__('Delete'),
                                ['controller' => 'FiscalData', 'action' => 'delete', $fiscalData->id],
                                ['confirm' => __('Are you sure you want to delete # {0}?', $fiscalData->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Projects') ?></h4>
        <?php if (!empty($client->projects)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th scope="col"><?= __('Name') ?></th>
                    <th scope="col" class="text-center"><?= __('Billable') ?></th>
                    <th scope="col" class="text-center"><?= __('Active') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($client->projects as $projects): ?>
                    <tr>
                        <td><?= h($projects->name) ?></td>
                        <td class="text-center"><?= h($projects->billable) ?></td>
                        <td class="text-center"><?= h($projects->active) ?></td>
                        <td class="actions text-center">
                            <?= $this->Html->link(__('View'),
                                ['controller' => 'Projects', 'action' => 'view', $projects->id]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</div>
