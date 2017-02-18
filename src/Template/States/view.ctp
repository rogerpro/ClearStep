<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<li class="heading"><?= __('Actions') ?></li>
		<li><?= $this->Html->link(__('Edit State'), ['action' => 'edit', $state->id]) ?> </li>
		<li><?= $this->Form->postLink(__('Delete State'), ['action' => 'delete', $state->id], ['confirm' => __('Are you sure you want to delete # {0}?', $state->id)]) ?> </li>
		<li><?= $this->Html->link(__('List States'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New State'), ['action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
	</ul>
</nav>
<div class="states view large-9 medium-8 columns content">
	<h3><?= h($state->name) ?></h3>
	<table class="vertical-table">
		<tr>
			<th scope="row"><?= __('Id') ?></th>
			<td><?= h($state->id) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Name') ?></th>
			<td><?= h($state->name) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Created') ?></th>
			<td><?= h($state->created) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Modified') ?></th>
			<td><?= h($state->modified) ?></td>
		</tr>
	</table>
	<div class="related">
		<h4><?= __('Related Tickets') ?></h4>
        <?php if (!empty($state->tickets)): ?>
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
            <?php foreach ($state->tickets as $tickets): ?>
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
