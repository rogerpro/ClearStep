<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<li class="heading"><?= __('Actions') ?></li>
		<li><?=$this->Form->postLink(__('Delete'), ['action' => 'delete',$state->id], ['confirm' => __('Are you sure you want to delete # {0}?', $state->id)])?></li>
		<li><?= $this->Html->link(__('List States'), ['action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
	</ul>
</nav>
<div class="states form large-9 medium-8 columns content">
    <?= $this->Form->create($state)?>
    <fieldset>
		<legend><?= __('Edit State') ?></legend>
        <?php
        echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'))?>
    <?= $this->Form->end()?>
</div>
