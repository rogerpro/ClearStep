<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<li class="heading"><?= __('Actions') ?></li>
		<li><?=$this->Form->postLink(__('Delete'), ['action' => 'delete',$session->id], ['confirm' => __('Are you sure you want to delete # {0}?', $session->id)])?></li>
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
		<legend><?= __('Edit Session') ?></legend>
        <?php
        echo $this->Form->control('project_id', [
            'options' => $projects
        ]);
        echo $this->Form->control('begin');
        echo $this->Form->control('end');
        echo $this->Form->control('section');
        echo $this->Form->control('subsection');
        echo $this->Form->control('task', [
            'type' => 'textarea'
        ]);
        echo $this->Form->control('expected_hours');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'))?>
    <?= $this->Form->end()?>
</div>
