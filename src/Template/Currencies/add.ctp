<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<li class="heading"><?= __('Actions') ?></li>
		<li><?= $this->Html->link(__('List Currencies'), ['action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('List Budgets'), ['controller' => 'Budgets', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Budget'), ['controller' => 'Budgets', 'action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?></li>
	</ul>
</nav>
<div class="currencies form large-9 medium-8 columns content">
    <?= $this->Form->create($currency)?>
    <fieldset>
		<legend><?= __('Add Currency') ?></legend>
        <?php
        echo $this->Form->input('iso');
        echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'))?>
    <?= $this->Form->end()?>
</div>
