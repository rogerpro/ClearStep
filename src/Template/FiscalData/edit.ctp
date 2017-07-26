<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<li class="heading"><?= __('Actions') ?></li>
		<li><?=$this->Form->postLink(__('Delete'), ['action' => 'delete',$fiscalData->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fiscalData->id)])?></li>
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
		<legend><?= __('Edit Fiscal Data') ?></legend>
        <?php
        echo $this->Form->control('client_id', [
            'options' => $clients
        ]);
        echo $this->Form->control('name');
        echo $this->Form->control('commercial_name');
        echo $this->Form->control('is_company');
        echo $this->Form->control('is_freelancer');
        echo $this->Form->control('is_roi');
        echo $this->Form->control('address');
        echo $this->Form->control('postal_code');
        echo $this->Form->control('city');
        echo $this->Form->control('country_id', [
            'options' => $countries
        ]);
        echo $this->Form->control('phone');
        echo $this->Form->control('eu_vat_number');
        echo $this->Form->control('tax_num');
        echo $this->Form->control('privacy');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'))?>
    <?= $this->Form->end()?>
</div>
