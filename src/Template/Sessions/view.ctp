<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<li class="heading"><?= __('Actions') ?></li>
		<li><?= $this->Html->link(__('Edit Session'), ['action' => 'edit', $session->id]) ?> </li>
		<li><?= $this->Form->postLink(__('Delete Session'), ['action' => 'delete', $session->id], ['confirm' => __('Are you sure you want to delete # {0}?', $session->id)]) ?> </li>
		<li><?= $this->Html->link(__('List Sessions'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Session'), ['action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
	</ul>
</nav>
<div class="sessions view large-9 medium-8 columns content">
	<h3><?= h($session->id) ?></h3>
	<table class="vertical-table">
		<tr>
			<th scope="row"><?= __('Id') ?></th>
			<td><?= h($session->id) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Project') ?></th>
			<td><?= $session->has('project') ? $this->Html->link($session->project->name, ['controller' => 'Projects', 'action' => 'view', $session->project->id]) : '' ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Task') ?></th>
			<td><?= h($session->task) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Section') ?></th>
			<td><?= $this->Number->format($session->section) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Subsection') ?></th>
			<td><?= $this->Number->format($session->subsection) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Expected Hours') ?></th>
			<td><?= $this->Number->format($session->expected_hours) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Begin') ?></th>
			<td><?= h($session->begin) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('End') ?></th>
			<td><?= h($session->end) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Time') ?></th>
			<td><?= h($session->time) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Created') ?></th>
			<td><?= h($session->created) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Modified') ?></th>
			<td><?= h($session->modified) ?></td>
		</tr>
	</table>
	<div class="related">
		<h4><?= __('Related Tickets') ?></h4>
        <?php if (!empty($session->tickets)): ?>
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
            <?php foreach ($session->tickets as $tickets): ?>
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
