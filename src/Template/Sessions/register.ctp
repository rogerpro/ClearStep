<?php
/**
 * @var \App\View\AppView $this
 */
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
        echo $this->Form->control('section');
        echo $this->Form->control('subsection');
        echo $this->Form->control('task', [
            'type' => 'textarea'
        ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__($button_caption), ['class' => $button_class]) ?>
    <?= $this->Form->end() ?>
    <div><?php echo $this->element('Table/todays_detail'); ?></div>
    <div><?php echo $this->element('Table/todays_summary'); ?></div>
    <div><?php echo $this->element('Table/todays_total'); ?></div>
    <div><?php echo $this->element('Table/last_days'); ?></div>
</div>
