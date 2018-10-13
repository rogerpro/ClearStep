<?php

use App\Model\Entity\ElapsedTime;

//TODO: manage hour to seconds conversions in the Entity
?>
<h3><?= __('Monitor') ?></h3>
<table>
    <thead>
    <tr>
        <th scope="col"><?= $this->Paginator->sort('project_id') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('week_sum') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('week_goal') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('week_diff') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('month_sum') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('month_goal') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('month_diff') ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($monitor_projects as $monitor_project): ?>
        <tr>
            <td><?= $this->Html->link($monitor_project->name,
                    ['controller' => 'Projects', 'action' => 'view', $monitor_project->id]) ?></td>
            <td class="text-center"><?= ElapsedTime::format($monitor_project->week_sum) ?></td>
            <td class="text-center"><?= ElapsedTime::format(3600 * $monitor_project->week_goal) ?></td>
            <td class="text-center"><?= ElapsedTime::format($monitor_project->week_diff) ?></td>
            <td class="text-center"><?= ElapsedTime::format($monitor_project->month_sum) ?></td>
            <td class="text-center"><?= ElapsedTime::format(3600 * $monitor_project->month_goal) ?></td>
            <td class="text-center"><?= ElapsedTime::format($monitor_project->month_diff) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
