<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<li class="heading"><?= __('Actions') ?></li>
		<li><?= $this->Html->link(__('List Countries'), ['action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('List Fiscal Data'), ['controller' => 'FiscalData', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Fiscal Data'), ['controller' => 'FiscalData', 'action' => 'add']) ?></li>
	</ul>
</nav>
<div class="countries form large-9 medium-8 columns content">
    <?= $this->Form->create($country)?>
    <fieldset>
		<legend><?= __('Add Country') ?></legend>
        <?php
        echo $this->Form->control('iso2');
        echo $this->Form->control('iso3');
        echo $this->Form->control('is_eu');
        echo $this->Form->control('name');
        echo $this->Form->control('spa');
        echo $this->Form->control('cat');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'))?>
    <?= $this->Form->end()?>
</div>
