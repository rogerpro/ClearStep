<?php
use Cake\I18n\FrozenTime;
?>
<h3><?= __('Today\'s detail') ?></h3>
<table cellpadding="0" cellspacing="0">
	<thead>
		<tr>
			<th scope="col"><?= $this->Paginator->sort('project_id') ?></th>
			<th scope="col"><?= $this->Paginator->sort('begin') ?></th>
			<th scope="col"><?= $this->Paginator->sort('end') ?></th>
			<th scope="col"><?= $this->Paginator->sort('duration') ?></th>
			<th scope="col"><?= $this->Paginator->sort('task') ?></th>
		</tr>
	</thead>
	<tbody>
            <?php foreach ($sessions as $session): ?>
		<tr>
			<td><?= $session->has('project') ? $this->Html->link($session->project->name, ['controller' => 'Projects', 'action' => 'view', $session->project->id]) : '' ?></td>
			<td><?= h($session->begin) ?></td>
			<td><?= h($session->end) ?></td>
			<td><?= h($session->duration_time) ?></td>
			<td><?= h($session->task) ?></td>
		</tr>
            <?php endforeach; ?>
        </tbody>
</table>
