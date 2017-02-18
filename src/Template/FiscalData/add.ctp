<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<li class="heading"><?= __('Actions') ?></li>
		<li><?= $this->Html->link(__('List Fiscal Data'), ['action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
	</ul>
</nav>
<div class="fiscalData form large-9 medium-8 columns content">
    <?= $this->Form->create($fiscalData)?>
    <fieldset>
		<legend><?= __('Add Fiscal Data') ?></legend>
        <?php
        echo $this->Form->input('client_id', [
            'options' => $clients
        ]);
        echo $this->Form->input('name');
        echo $this->Form->input('commercial_name');
        echo $this->Form->input('is_company');
        echo $this->Form->input('is_freelancer');
        echo $this->Form->input('is_roi');
        echo $this->Form->input('address');
        echo $this->Form->input('postal_code');
        echo $this->Form->input('city');
        echo $this->Form->input('country_id', [
            'options' => $countries
        ]);
        echo $this->Form->input('phone');
        echo $this->Form->input('eu_vat_number');
        echo $this->Form->input('tax_num');
        echo $this->Form->input('privacy');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'))?>
    <?= $this->Form->end()?>
</div>
