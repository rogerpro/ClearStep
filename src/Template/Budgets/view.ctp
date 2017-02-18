<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<li class="heading"><?= __('Actions') ?></li>
		<li><?= $this->Html->link(__('Edit Budget'), ['action' => 'edit', $budget->id]) ?> </li>
		<li><?= $this->Form->postLink(__('Delete Budget'), ['action' => 'delete', $budget->id], ['confirm' => __('Are you sure you want to delete # {0}?', $budget->id)]) ?> </li>
		<li><?= $this->Html->link(__('List Budgets'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Budget'), ['action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Currencies'), ['controller' => 'Currencies', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Currency'), ['controller' => 'Currencies', 'action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
	</ul>
</nav>
<div class="budgets view large-9 medium-8 columns content">
	<h3><?= h($budget->title) ?></h3>
	<table class="vertical-table">
		<tr>
			<th scope="row"><?= __('Id') ?></th>
			<td><?= h($budget->id) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Year') ?></th>
			<td><?= h($budget->year) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Title') ?></th>
			<td><?= h($budget->title) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Description') ?></th>
			<td><?= h($budget->description) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Currency') ?></th>
			<td><?= $budget->has('currency') ? $this->Html->link($budget->currency->name, ['controller' => 'Currencies', 'action' => 'view', $budget->currency->id]) : '' ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Invoice') ?></th>
			<td><?= $budget->has('invoice') ? $this->Html->link($budget->invoice->title, ['controller' => 'Invoices', 'action' => 'view', $budget->invoice->id]) : '' ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Number') ?></th>
			<td><?= $this->Number->format($budget->number) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Amount') ?></th>
			<td><?= $this->Number->format($budget->amount) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Created') ?></th>
			<td><?= h($budget->created) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Modified') ?></th>
			<td><?= h($budget->modified) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Rendered') ?></th>
			<td><?= $budget->rendered ? __('Yes') : __('No'); ?></td>
		</tr>
	</table>
	<div class="related">
		<h4><?= __('Related Tickets') ?></h4>
        <?php if (!empty($budget->tickets)): ?>
        <table cellpadding="0" cellspacing="0">
			<tr>
				<th scope="col"><?= __('Id') ?></th>
				<th scope="col"><?= __('Project Id') ?></th>
				<th scope="col"><?= __('Session Id') ?></th>
				<th scope="col"><?= __('Invoice Id') ?></th>
				<th scope="col"><?= __('State Id') ?></th>
				<th scope="col"><?= __('Budget Id') ?></th>
				<th scope="col"><?= __('Min Time') ?></th>
				<th scope="col"><?= __('Max Time') ?></th>
				<th scope="col"><?= __('Deadline') ?></th>
				<th scope="col"><?= __('Created') ?></th>
				<th scope="col"><?= __('Modified') ?></th>
				<th scope="col" class="actions"><?= __('Actions') ?></th>
			</tr>
            <?php foreach ($budget->tickets as $tickets): ?>
            <tr>
				<td><?= h($tickets->id) ?></td>
				<td><?= h($tickets->project_id) ?></td>
				<td><?= h($tickets->session_id) ?></td>
				<td><?= h($tickets->invoice_id) ?></td>
				<td><?= h($tickets->state_id) ?></td>
				<td><?= h($tickets->budget_id) ?></td>
				<td><?= h($tickets->min_time) ?></td>
				<td><?= h($tickets->max_time) ?></td>
				<td><?= h($tickets->deadline) ?></td>
				<td><?= h($tickets->created) ?></td>
				<td><?= h($tickets->modified) ?></td>
				<td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tickets', 'action' => 'view', $tickets->id])?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tickets', 'action' => 'edit', $tickets->id])?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tickets', 'action' => 'delete', $tickets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tickets->id)])?>
                </td>
			</tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
