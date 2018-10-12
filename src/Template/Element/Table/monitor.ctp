<?php

use Cake\I18n\FrozenTime;

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
            <td class="text-center"><?= $monitor_project->week_sum ? (new FrozenTime($monitor_project->week_sum))->format('G:i:s') : '' ?></td>
            <td class="text-center"><?= $monitor_project->week_goal ? (new FrozenTime(3600 * $monitor_project->week_goal))->format('G:i:s') : '' ?></td>
            <td class="text-center"><?= $monitor_project->week_diff ? (new FrozenTime($monitor_project->week_diff))->format('G:i:s') : '' ?></td>
            <td class="text-center"><?= $monitor_project->month_sum ? (new FrozenTime($monitor_project->month_sum))->format('G:i:s') : '' ?></td>
            <td class="text-center"><?= $monitor_project->month_goal ? (new FrozenTime(3600 * $monitor_project->month_goal))->format('G:i:s') : '' ?></td>
            <td class="text-center"><?= $monitor_project->month_diff ? (new FrozenTime($monitor_project->month_diff))->format('G:i:s') : '' ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
