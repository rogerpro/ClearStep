<?php

?>
<h3><?= __('Monitor') ?></h3>
<table>
    <thead>
    <tr>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('project_id') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('week_sum') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('week_goal') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('month_sum') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('month_goal') ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($monitor_projects as $monitor_project): ?>
        <?php
        debug($monitor_project);
        ?>
        <tr>
            <td><?= $this->Html->link($monitor_project->Projects->name,
                    ['controller' => 'Projects', 'action' => 'view', $monitor_project->Projects->id]) ?></td>
            <td class="text-center"><?= h($monitor_project->Projects->week_sum) ?></td>
            <td class="text-center"><?= h($monitor_project->Projects->week_goal) ?></td>
            <td class="text-center"><?= h($monitor_project->Projects->month_sum) ?></td>
            <td class="text-center"><?= h($monitor_project->Projects->month_goal) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
