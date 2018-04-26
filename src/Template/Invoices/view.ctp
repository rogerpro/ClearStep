<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Invoice'), ['action' => 'edit', $invoice->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Invoice'), ['action' => 'delete', $invoice->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $invoice->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Invoices'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Currencies'), ['controller' => 'Currencies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Currency'), ['controller' => 'Currencies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transactions'),
                ['controller' => 'Transactions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Budgets'), ['controller' => 'Budgets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Budget'), ['controller' => 'Budgets', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="invoices view large-9 medium-8 columns content">
    <h3><?= h($invoice->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($invoice->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= h($invoice->year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ticket Id') ?></th>
            <td><?= h($invoice->ticket_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($invoice->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Currency') ?></th>
            <td><?= $invoice->has('currency') ? $this->Html->link($invoice->currency->name,
                    ['controller' => 'Currencies', 'action' => 'view', $invoice->currency->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transaction') ?></th>
            <td><?= $invoice->has('transaction') ? $this->Html->link($invoice->transaction->id,
                    ['controller' => 'Transactions', 'action' => 'view', $invoice->transaction->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number') ?></th>
            <td><?= $this->Number->format($invoice->number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= $this->Number->format($invoice->amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($invoice->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($invoice->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rendered') ?></th>
            <td><?= $invoice->rendered ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Tickets') ?></h4>
        <?php if (!empty($invoice->tickets)): ?>
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
                <?php foreach ($invoice->tickets as $tickets): ?>
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
    <div class="related">
        <h4><?= __('Related Budgets') ?></h4>
        <?php if (!empty($invoice->budgets)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Year') ?></th>
                    <th scope="col"><?= __('Number') ?></th>
                    <th scope="col"><?= __('Title') ?></th>
                    <th scope="col"><?= __('Description') ?></th>
                    <th scope="col"><?= __('Currency Id') ?></th>
                    <th scope="col"><?= __('Amount') ?></th>
                    <th scope="col"><?= __('Rendered') ?></th>
                    <th scope="col"><?= __('Invoice Id') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($invoice->budgets as $budgets): ?>
                    <tr>
                        <td><?= h($budgets->id) ?></td>
                        <td><?= h($budgets->year) ?></td>
                        <td><?= h($budgets->number) ?></td>
                        <td><?= h($budgets->title) ?></td>
                        <td><?= h($budgets->description) ?></td>
                        <td><?= h($budgets->currency_id) ?></td>
                        <td><?= h($budgets->amount) ?></td>
                        <td><?= h($budgets->rendered) ?></td>
                        <td><?= h($budgets->invoice_id) ?></td>
                        <td><?= h($budgets->created) ?></td>
                        <td><?= h($budgets->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'),
                                ['controller' => 'Budgets', 'action' => 'view', $budgets->id]) ?>
                            <?= $this->Html->link(__('Edit'),
                                ['controller' => 'Budgets', 'action' => 'edit', $budgets->id]) ?>
                            <?= $this->Form->postLink(__('Delete'),
                                ['controller' => 'Budgets', 'action' => 'delete', $budgets->id],
                                ['confirm' => __('Are you sure you want to delete # {0}?', $budgets->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</div>
