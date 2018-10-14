<h3><?= __('Monitor') ?></h3>
<table>
    <thead>
    <tr>
        <th scope="col"><?= $this->Paginator->sort('project_id') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('week_sum') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('weekly_goal') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('week_diff') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('week_percentage') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('month_sum') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('monthly_goal') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('month_diff') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('month_percentage') ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($monitor_projects as $monitor_project): ?>
        <tr>
            <td><?= $this->Html->link($monitor_project->name,
                    ['controller' => 'Projects', 'action' => 'view', $monitor_project->id]) ?></td>
            <td class="text-center">
                <?=
                ($monitor_project->weekly_goal) ? $this->Formatter->toHumanTime($monitor_project->week_sum) : ''
                ?>
            </td>
            <td class="text-center"><?= $this->Formatter->toHumanTime(3600 * $monitor_project->weekly_goal) ?></td>
            <td class="text-center diff">
                <?=
                ($monitor_project->week_diff > 0) ? $this->Formatter->toHumanTime($monitor_project->week_diff) : ''
                ?>
            </td>
            <td class="text-center">
                <?=
                ($monitor_project->week_percentage < 100) ? $this->Formatter->toPercentage($monitor_project->week_percentage) : ''
                ?>
            </td>
            <td class="text-center">
                <?=
                ($monitor_project->monthly_goal) ? $this->Formatter->toHumanTime($monitor_project->month_sum) : ''
                ?>
            </td>
            <td class="text-center"><?= $this->Formatter->toHumanTime(3600 * $monitor_project->monthly_goal) ?></td>
            <td class="text-center diff">
                <?=
                ($monitor_project->month_diff > 0) ? $this->Formatter->toHumanTime($monitor_project->month_diff) : ''
                ?>
            </td>
            <td class="text-center">
                <?=
                ($monitor_project->month_percentage < 100) ? $this->Formatter->toPercentage($monitor_project->month_percentage) : ''
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
