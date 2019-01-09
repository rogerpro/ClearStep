<?php
/**
 * @var \App\View\AppView $this
 */
$this->assign('title', 'Dashboard');
?>
<div class="sessions form large-12 medium-12 columns content">
    <div><?php echo $this->element('Table/weeks_total'); ?></div>
    <div><?php echo $this->element('Table/months_total'); ?></div>
    <div><?php echo $this->element('Table/last_days'); ?></div>
</div>
