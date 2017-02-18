<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<li class="heading"><?= __('Actions') ?></li>
		<li><?= $this->Html->link(__('New Project'), ['action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Sessions'), ['controller' => 'Sessions', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Session'), ['controller' => 'Sessions', 'action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
	</ul>
</nav>
<div class="projects index large-9 medium-8 columns content">
	<h3><?= __('Projects') ?></h3>
	<table cellpadding="0" cellspacing="0">
		<thead>
			<tr>
				<th scope="col"><?= $this->Paginator->sort('id') ?></th>
				<th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
				<th scope="col"><?= $this->Paginator->sort('name') ?></th>
				<th scope="col"><?= $this->Paginator->sort('description') ?></th>
				<th scope="col"><?= $this->Paginator->sort('billable') ?></th>
				<th scope="col"><?= $this->Paginator->sort('hourly_price') ?></th>
				<th scope="col"><?= $this->Paginator->sort('expected_hours') ?></th>
				<th scope="col"><?= $this->Paginator->sort('active') ?></th>
				<th scope="col"><?= $this->Paginator->sort('created') ?></th>
				<th scope="col"><?= $this->Paginator->sort('modified') ?></th>
				<th scope="col" class="actions"><?= __('Actions') ?></th>
			</tr>
		</thead>
		<tbody>
            <?php foreach ($projects as $project): ?>
            <tr>
				<td><?= h($project->id) ?></td>
				<td><?= $project->has('client') ? $this->Html->link($project->client->name, ['controller' => 'Clients', 'action' => 'view', $project->client->id]) : '' ?></td>
				<td><?= h($project->name) ?></td>
				<td><?= h($project->description) ?></td>
				<td><?= h($project->billable) ?></td>
				<td><?= $this->Number->format($project->hourly_price) ?></td>
				<td><?= $this->Number->format($project->expected_hours) ?></td>
				<td><?= h($project->active) ?></td>
				<td><?= h($project->created) ?></td>
				<td><?= h($project->modified) ?></td>
				<td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $project->id])?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $project->id])?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)])?>
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
