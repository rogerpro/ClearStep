<?php

use Cake\I18n\FrozenTime;

?>
<h3><?= __('Last days totals') ?></h3>
<table class="sessions form large-2 medium-4 small-6">
    <thead>
    <tr>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('day') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('duration') ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($last_days as $day): ?>
        <tr>
            <td class="text-center"><?= h($day->day) ?></td>
            <td class="text-center"><?= $day->duration ? (new FrozenTime($day->duration))->format('G:i:s') : '' ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
