<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<li class="heading"><?= __('Actions') ?></li>
		<li><?= $this->Html->link(__('List Sessions'), ['action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
	</ul>
</nav>
<div class="sessions form large-9 medium-8 columns content">
    <?= $this->Form->create($session)?>
    <fieldset>
		<legend><?= __('Add Session') ?></legend>
        <?php
        echo $this->Form->input('project_id', [
            'options' => $projects
        ]);
        echo $this->Form->input('begin');
        echo $this->Form->input('end');
        echo $this->Form->input('time', [
            'empty' => true
        ]);
        echo $this->Form->input('section');
        echo $this->Form->input('subsection');
        echo $this->Form->input('task');
        echo $this->Form->input('expected_hours');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'))?>
    <?= $this->Form->end()?>
</div>
