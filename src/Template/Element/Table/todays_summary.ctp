<h3><?= __('Today\'s summary') ?></h3>
<table cellpadding="0" cellspacing="0">
	<thead>
		<tr>
			<th scope="col"><?= $this->Paginator->sort('project_id') ?></th>
			<th scope="col"><?= $this->Paginator->sort('time') ?></th>
		</tr>
	</thead>
	<tbody>
            <?php foreach ($sessions as $session): ?>
            <tr>
			<td><?= $session->has('project') ? $this->Html->link($session->project->name, ['controller' => 'Projects', 'action' => 'view', $session->project->id]) : '' ?></td>
			<td><?= h($session->time) ?></td>
		</tr>
            <?php endforeach; ?>
        </tbody>
</table>
