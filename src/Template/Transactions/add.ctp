<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<li class="heading"><?= __('Actions') ?></li>
		<li><?= $this->Html->link(__('List Transactions'), ['action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?></li>
	</ul>
</nav>
<div class="transactions form large-9 medium-8 columns content">
    <?= $this->Form->create($transaction)?>
    <fieldset>
		<legend><?= __('Add Transaction') ?></legend>
        <?php
        echo $this->Form->input('amount');
        echo $this->Form->input('paypal_details');
        echo $this->Form->input('paypal_result');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'))?>
    <?= $this->Form->end()?>
</div>
