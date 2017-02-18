<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<li class="heading"><?= __('Actions') ?></li>
		<li><?= $this->Html->link(__('New Fiscal Data'), ['action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
	</ul>
</nav>
<div class="fiscalData index large-9 medium-8 columns content">
	<h3><?= __('Fiscal Data') ?></h3>
	<table cellpadding="0" cellspacing="0">
		<thead>
			<tr>
				<th scope="col"><?= $this->Paginator->sort('id') ?></th>
				<th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
				<th scope="col"><?= $this->Paginator->sort('name') ?></th>
				<th scope="col"><?= $this->Paginator->sort('commercial_name') ?></th>
				<th scope="col"><?= $this->Paginator->sort('is_company') ?></th>
				<th scope="col"><?= $this->Paginator->sort('is_freelancer') ?></th>
				<th scope="col"><?= $this->Paginator->sort('is_roi') ?></th>
				<th scope="col"><?= $this->Paginator->sort('address') ?></th>
				<th scope="col"><?= $this->Paginator->sort('postal_code') ?></th>
				<th scope="col"><?= $this->Paginator->sort('city') ?></th>
				<th scope="col"><?= $this->Paginator->sort('country_id') ?></th>
				<th scope="col"><?= $this->Paginator->sort('phone') ?></th>
				<th scope="col"><?= $this->Paginator->sort('eu_vat_number') ?></th>
				<th scope="col"><?= $this->Paginator->sort('tax_num') ?></th>
				<th scope="col"><?= $this->Paginator->sort('privacy') ?></th>
				<th scope="col"><?= $this->Paginator->sort('created') ?></th>
				<th scope="col"><?= $this->Paginator->sort('modified') ?></th>
				<th scope="col" class="actions"><?= __('Actions') ?></th>
			</tr>
		</thead>
		<tbody>
            <?php foreach ($fiscalData as $fiscalData): ?>
            <tr>
				<td><?= h($fiscalData->id) ?></td>
				<td><?= $fiscalData->has('client') ? $this->Html->link($fiscalData->client->name, ['controller' => 'Clients', 'action' => 'view', $fiscalData->client->id]) : '' ?></td>
				<td><?= h($fiscalData->name) ?></td>
				<td><?= h($fiscalData->commercial_name) ?></td>
				<td><?= h($fiscalData->is_company) ?></td>
				<td><?= h($fiscalData->is_freelancer) ?></td>
				<td><?= h($fiscalData->is_roi) ?></td>
				<td><?= h($fiscalData->address) ?></td>
				<td><?= h($fiscalData->postal_code) ?></td>
				<td><?= h($fiscalData->city) ?></td>
				<td><?= $fiscalData->has('country') ? $this->Html->link($fiscalData->country->name, ['controller' => 'Countries', 'action' => 'view', $fiscalData->country->id]) : '' ?></td>
				<td><?= h($fiscalData->phone) ?></td>
				<td><?= h($fiscalData->eu_vat_number) ?></td>
				<td><?= h($fiscalData->tax_num) ?></td>
				<td><?= h($fiscalData->privacy) ?></td>
				<td><?= h($fiscalData->created) ?></td>
				<td><?= h($fiscalData->modified) ?></td>
				<td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fiscalData->id])?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fiscalData->id])?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fiscalData->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fiscalData->id)])?>
                </td>
			</tr>
            <?php endforeach; ?>
        </tbody>
	</table>
	<div class="paginator">
		<ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'))?>
            <?= $this->Paginator->prev('< ' . __('previous'))?>
            <?= $this->Paginator->numbers()?>
            <?= $this->Paginator->next(__('next') . ' >')?>
            <?= $this->Paginator->last(__('last') . ' >>')?>
        </ul>
		<p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
	</div>
</div>
