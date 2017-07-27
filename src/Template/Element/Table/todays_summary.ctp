<?php
use Cake\I18n\FrozenTime;
?>
<h3><?= __('Today\'s summary') ?></h3>
<table cellpadding="0" cellspacing="0">
	<thead>
		<tr>
			<th scope="col"><?= $this->Paginator->sort('project_id') ?></th>
			<th scope="col"><?= $this->Paginator->sort('duration') ?></th>
		</tr>
	</thead>
	<tbody>
            <?php foreach ($summary_projects as $summary_project): ?>
		<tr>
			<td><?= $summary_project->has('project') ? $this->Html->link($summary_project->project->name, ['controller' => 'Projects', 'action' => 'view', $summary_project->project->id]) : '' ?></td>
			<td><?= $summary_project->total_duration ? (new FrozenTime($summary_project->total_duration))->format('G:i:s') : '' ?></td>
		</tr>
            <?php endforeach; ?>
        </tbody>
</table>
