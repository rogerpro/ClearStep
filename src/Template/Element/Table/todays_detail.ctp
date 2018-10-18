<h3><?= __('Today\'s detail') ?></h3>
<table>
    <thead>
    <tr>
        <th scope="col"><?= $this->Paginator->sort('project_id') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('begin') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('end') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('duration') ?></th>
        <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($sessions as $session): ?>
        <tr class="<?= ($session->project->billable) ? 'billable' : '' ?>">
            <td><?= $session->has('project') ? $this->Html->link($session->project->name,
                    ['controller' => 'Projects', 'action' => 'view', $session->project->id]) : '' ?></td>
            <td class="text-center"><?= $session->begin->toTimeString() ?></td>
            <td class="text-center"><?= $session->end->toTimeString() ?></td>
            <td class="text-center"><?= $this->Formatter->toHumanTime($session->duration) ?></td>
            <td class="actions text-center">
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $session->id]) ?>
            </td>
        </tr>
        <?php if ($session->task): ?>
            <tr class="task">
                <td colspan="5"><?= nl2br(h($session->task)) ?></td>
            </tr>
        <?php endif ?>
    <?php endforeach; ?>
    </tbody>
</table>
