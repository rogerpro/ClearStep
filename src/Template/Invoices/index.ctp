<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<li class="heading"><?= __('Actions') ?></li>
		<li><?= $this->Html->link(__('New Invoice'), ['action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Currencies'), ['controller' => 'Currencies', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Currency'), ['controller' => 'Currencies', 'action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Budgets'), ['controller' => 'Budgets', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Budget'), ['controller' => 'Budgets', 'action' => 'add']) ?></li>
	</ul>
</nav>
<div class="invoices index large-9 medium-8 columns content">
	<h3><?= __('Invoices') ?></h3>
	<table cellpadding="0" cellspacing="0">
		<thead>
			<tr>
				<th scope="col"><?= $this->Paginator->sort('id') ?></th>
				<th scope="col"><?= $this->Paginator->sort('year') ?></th>
				<th scope="col"><?= $this->Paginator->sort('number') ?></th>
				<th scope="col"><?= $this->Paginator->sort('ticket_id') ?></th>
				<th scope="col"><?= $this->Paginator->sort('title') ?></th>
				<th scope="col"><?= $this->Paginator->sort('currency_id') ?></th>
				<th scope="col"><?= $this->Paginator->sort('amount') ?></th>
				<th scope="col"><?= $this->Paginator->sort('rendered') ?></th>
				<th scope="col"><?= $this->Paginator->sort('transaction_id') ?></th>
				<th scope="col"><?= $this->Paginator->sort('created') ?></th>
				<th scope="col"><?= $this->Paginator->sort('modified') ?></th>
				<th scope="col" class="actions"><?= __('Actions') ?></th>
			</tr>
		</thead>
		<tbody>
            <?php foreach ($invoices as $invoice): ?>
            <tr>
				<td><?= h($invoice->id) ?></td>
				<td><?= h($invoice->year) ?></td>
				<td><?= $this->Number->format($invoice->number) ?></td>
				<td><?= h($invoice->ticket_id) ?></td>
				<td><?= h($invoice->title) ?></td>
				<td><?= $invoice->has('currency') ? $this->Html->link($invoice->currency->name, ['controller' => 'Currencies', 'action' => 'view', $invoice->currency->id]) : '' ?></td>
				<td><?= $this->Number->format($invoice->amount) ?></td>
				<td><?= h($invoice->rendered) ?></td>
				<td><?= $invoice->has('transaction') ? $this->Html->link($invoice->transaction->id, ['controller' => 'Transactions', 'action' => 'view', $invoice->transaction->id]) : '' ?></td>
				<td><?= h($invoice->created) ?></td>
				<td><?= h($invoice->modified) ?></td>
				<td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $invoice->id])?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $invoice->id])?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $invoice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoice->id)])?>
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
