<h3><?= __('Today\'s detail') ?></h3>
<table>
    <thead>
    <tr>
        <th scope="col"><?= $this->Paginator->sort('project_id') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('begin') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('end') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('duration') ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($sessions as $session): ?>
        <tr>
            <td><?= $session->has('project') ? $this->Html->link($session->project->name,
                    ['controller' => 'Projects', 'action' => 'view', $session->project->id]) : '' ?></td>
            <td class="text-center"><?= h($session->begin) ?></td>
            <td class="text-center"><?= h($session->end) ?></td>
            <td class="text-center"><?= h($session->duration_time) ?></td>
        </tr>
        <tr class="task">
            <?php if ($session->task): ?>
                <td colspan="4"><?= nl2br(h($session->task)) ?></td>
            <?php endif ?>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
