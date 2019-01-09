<?php
/**
 * @var \App\View\AppView $this
 */
$this->assign('title', 'Dashboard');
$button_caption = ($ongoing) ? __('End') : __('Begin');
$button_class = ($ongoing) ? 'end' : 'begin';
?>
<div class="sessions form large-12 medium-12 columns content">
    <?= $this->Form->create($session) ?>
    <fieldset>
        <?php
        echo $this->Form->control('project_id', [
            'default' => $last_project
        ]);
        // echo $this->Form->control('section');
        // echo $this->Form->control('subsection');
        echo $this->Form->control('task', [
            'type' => 'textarea'
        ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__($button_caption), ['class' => $button_class]) ?>
    <?= $this->Form->end() ?>
    <div><?php echo $this->element('Table/monitor'); ?></div>
    <div><?php echo $this->element('Table/todays_detail'); ?></div>
    <div class="larger"><?php echo $this->element('Table/todays_summary'); ?></div>
    <div class="larger"><?php echo $this->element('Table/todays_total'); ?></div>
    <div><?php echo $this->element('Table/weeks_total'); ?></div>
    <div><?php echo $this->element('Table/months_total'); ?></div>
    <div class="smaller"><?php echo $this->element('Table/last_days'); ?></div>
    <?= $this->Html->link(
        __('See more stats'),
        ['action' => 'stats']
    ); ?>
    <p>&nbsp;</p>
</div>
