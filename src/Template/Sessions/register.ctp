<?php
/**
 * @var \App\View\AppView $this
 */
$button_caption = ($ongoing) ? 'End' : 'Begin';
$button_class = ($ongoing) ? 'end' : 'begin';
?>
<nav class="large-1 medium-12 columns" id="actions-sidebar">
	<ul class="side-nav">
		<li class="heading"><?= __('Actions') ?></li>
		<li><?= $this->Html->link(__('List Sessions'), ['action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
	</ul>
</nav>
<div class="sessions form large-11 medium-12 columns content">
	<div><?php echo $this->element('Table/todays_detail'); ?></div>
    <?= $this->Form->create($session)?>
    <fieldset>
		<legend><?= __('Add Session') ?></legend>
        <?php
        echo $this->Form->input('project_id');
        echo $this->Form->input('section');
        echo $this->Form->input('subsection');
        echo $this->Form->input('task', [
            'type' => 'textarea'
        ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__($button_caption), ['class' => $button_class])?>
    <?= $this->Form->end()?>
	<div><?php echo $this->element('Table/todays_summary'); ?></div>
	<div><?php echo $this->element('Table/todays_total'); ?></div>
</div>
