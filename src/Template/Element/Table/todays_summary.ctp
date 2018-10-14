<h3><?= __('Today\'s summary') ?></h3>
<table class="sessions form large-6 medium-8 small-12">
    <thead>
    <tr>
        <th scope="col"><?= $this->Paginator->sort('project_id') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('duration') ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($summary_projects as $summary_project): ?>
        <tr class="<?= ($summary_project->project->billable) ? 'billable' : '' ?>">
            <td><?= $summary_project->has('project') ? $this->Html->link($summary_project->project->name,
                    ['controller' => 'Projects', 'action' => 'view', $summary_project->project->id]) : '' ?></td>
            <td class="text-center"><?= $this->Formatter->toHumanTime($summary_project->total_duration) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
