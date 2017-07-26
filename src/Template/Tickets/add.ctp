<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<li class="heading"><?= __('Actions') ?></li>
		<li><?= $this->Html->link(__('List Tickets'), ['action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Sessions'), ['controller' => 'Sessions', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Session'), ['controller' => 'Sessions', 'action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Budgets'), ['controller' => 'Budgets', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Budget'), ['controller' => 'Budgets', 'action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?></li>
	</ul>
</nav>
<div class="tickets form large-9 medium-8 columns content">
    <?= $this->Form->create($ticket)?>
    <fieldset>
		<legend><?= __('Add Ticket') ?></legend>
        <?php
        echo $this->Form->control('project_id', [
            'options' => $projects
        ]);
        echo $this->Form->control('session_id', [
            'options' => $sessions
        ]);
        echo $this->Form->control('invoice_id');
        echo $this->Form->control('state_id', [
            'options' => $states
        ]);
        echo $this->Form->control('budget_id', [
            'options' => $budgets
        ]);
        echo $this->Form->control('min_time', [
            'empty' => true
        ]);
        echo $this->Form->control('max_time', [
            'empty' => true
        ]);
        echo $this->Form->control('deadline', [
            'empty' => true
        ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'))?>
    <?= $this->Form->end()?>
</div>
