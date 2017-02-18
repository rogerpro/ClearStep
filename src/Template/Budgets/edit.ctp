<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<li class="heading"><?= __('Actions') ?></li>
		<li><?=$this->Form->postLink(__('Delete'), ['action' => 'delete',$budget->id], ['confirm' => __('Are you sure you want to delete # {0}?', $budget->id)])?></li>
		<li><?= $this->Html->link(__('List Budgets'), ['action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('List Currencies'), ['controller' => 'Currencies', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Currency'), ['controller' => 'Currencies', 'action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
	</ul>
</nav>
<div class="budgets form large-9 medium-8 columns content">
    <?= $this->Form->create($budget)?>
    <fieldset>
		<legend><?= __('Edit Budget') ?></legend>
        <?php
        echo $this->Form->input('year');
        echo $this->Form->input('number');
        echo $this->Form->input('title');
        echo $this->Form->input('description');
        echo $this->Form->input('currency_id', [
            'options' => $currencies
        ]);
        echo $this->Form->input('amount');
        echo $this->Form->input('rendered');
        echo $this->Form->input('invoice_id', [
            'options' => $invoices
        ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'))?>
    <?= $this->Form->end()?>
</div>
