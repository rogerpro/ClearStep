<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<li class="heading"><?= __('Actions') ?></li>
		<li><?= $this->Html->link(__('New Budget'), ['action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Currencies'), ['controller' => 'Currencies', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Currency'), ['controller' => 'Currencies', 'action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
	</ul>
</nav>
<div class="budgets index large-9 medium-8 columns content">
	<h3><?= __('Budgets') ?></h3>
	<table cellpadding="0" cellspacing="0">
		<thead>
			<tr>
				<th scope="col"><?= $this->Paginator->sort('id') ?></th>
				<th scope="col"><?= $this->Paginator->sort('year') ?></th>
				<th scope="col"><?= $this->Paginator->sort('number') ?></th>
				<th scope="col"><?= $this->Paginator->sort('title') ?></th>
				<th scope="col"><?= $this->Paginator->sort('description') ?></th>
				<th scope="col"><?= $this->Paginator->sort('currency_id') ?></th>
				<th scope="col"><?= $this->Paginator->sort('amount') ?></th>
				<th scope="col"><?= $this->Paginator->sort('rendered') ?></th>
				<th scope="col"><?= $this->Paginator->sort('invoice_id') ?></th>
				<th scope="col"><?= $this->Paginator->sort('created') ?></th>
				<th scope="col"><?= $this->Paginator->sort('modified') ?></th>
				<th scope="col" class="actions"><?= __('Actions') ?></th>
			</tr>
		</thead>
		<tbody>
            <?php foreach ($budgets as $budget): ?>
            <tr>
				<td><?= h($budget->id) ?></td>
				<td><?= h($budget->year) ?></td>
				<td><?= $this->Number->format($budget->number) ?></td>
				<td><?= h($budget->title) ?></td>
				<td><?= h($budget->description) ?></td>
				<td><?= $budget->has('currency') ? $this->Html->link($budget->currency->name, ['controller' => 'Currencies', 'action' => 'view', $budget->currency->id]) : '' ?></td>
				<td><?= $this->Number->format($budget->amount) ?></td>
				<td><?= h($budget->rendered) ?></td>
				<td><?= $budget->has('invoice') ? $this->Html->link($budget->invoice->title, ['controller' => 'Invoices', 'action' => 'view', $budget->invoice->id]) : '' ?></td>
				<td><?= h($budget->created) ?></td>
				<td><?= h($budget->modified) ?></td>
				<td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $budget->id])?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $budget->id])?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $budget->id], ['confirm' => __('Are you sure you want to delete # {0}?', $budget->id)])?>
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
