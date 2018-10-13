<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Project'), ['action' => 'edit', $project->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Project'), ['action' => 'delete', $project->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sessions'), ['controller' => 'Sessions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Session'), ['controller' => 'Sessions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projects view large-9 medium-8 columns content">
    <h3><?= h($project->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($project->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $project->has('client') ? $this->Html->link($project->client->name,
                    ['controller' => 'Clients', 'action' => 'view', $project->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($project->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($project->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hourly Price') ?></th>
            <td><?= $this->Number->format($project->hourly_price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Expected Hours') ?></th>
            <td><?= $this->Number->format($project->expected_hours) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Week Goal') ?></th>
            <td><?= $this->Number->format($project->week_goal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Month Goal') ?></th>
            <td><?= $this->Number->format($project->month_goal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($project->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($project->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Billable') ?></th>
            <td><?= $project->billable ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $project->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Sessions') ?></h4>
        <?php if (!empty($project->sessions)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th scope="col" class="text-center"><?= __('Begin') ?></th>
                    <th scope="col" class="text-center"><?= __('End') ?></th>
                    <th scope="col" class="text-center"><?= __('Duration') ?></th>
                    <th scope="col" class="text-center"><?= __('Section') ?></th>
                    <th scope="col" class="text-center"><?= __('Subsection') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($project->sessions as $sessions): ?>
                    <tr>
                        <td class="text-center"><?= h($sessions->begin) ?></td>
                        <td class="text-center"><?= h($sessions->end) ?></td>
                        <td class="text-center"><?= $this->Formatter->toHumanTime($sessions->duration) ?></td>
                        <td class="text-center"><?= h($sessions->section) ?></td>
                        <td class="text-center"><?= h($sessions->subsection) ?></td>
                        <td class="actions text-center">
                            <?= $this->Html->link(__('Edit'),
                                ['controller' => 'Sessions', 'action' => 'edit', $sessions->id]) ?>
                        </td>
                    </tr>
                    <tr class="task">
                        <?php if ($sessions->task): ?>
                            <td colspan="6"><?= nl2br(h($sessions->task)) ?></td>
                        <?php endif ?>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tickets') ?></h4>
        <?php if (!empty($project->tickets)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Project Id') ?></th>
                    <th scope="col"><?= __('Session Id') ?></th>
                    <th scope="col"><?= __('Invoice Id') ?></th>
                    <th scope="col"><?= __('State Id') ?></th>
                    <th scope="col"><?= __('Budget Id') ?></th>
                    <th scope="col"><?= __('Min Time') ?></th>
                    <th scope="col"><?= __('Max Time') ?></th>
                    <th scope="col"><?= __('Deadline') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($project->tickets as $tickets): ?>
                    <tr>
                        <td><?= h($tickets->id) ?></td>
                        <td><?= h($tickets->project_id) ?></td>
                        <td><?= h($tickets->session_id) ?></td>
                        <td><?= h($tickets->invoice_id) ?></td>
                        <td><?= h($tickets->state_id) ?></td>
                        <td><?= h($tickets->budget_id) ?></td>
                        <td><?= h($tickets->min_time) ?></td>
                        <td><?= h($tickets->max_time) ?></td>
                        <td><?= h($tickets->deadline) ?></td>
                        <td><?= h($tickets->created) ?></td>
                        <td><?= h($tickets->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'),
                                ['controller' => 'Tickets', 'action' => 'view', $tickets->id]) ?>
                            <?= $this->Html->link(__('Edit'),
                                ['controller' => 'Tickets', 'action' => 'edit', $tickets->id]) ?>
                            <?= $this->Form->postLink(__('Delete'),
                                ['controller' => 'Tickets', 'action' => 'delete', $tickets->id],
                                ['confirm' => __('Are you sure you want to delete # {0}?', $tickets->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</div>
