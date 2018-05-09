<?php

use Cake\I18n\FrozenTime;

?>
<h3><?= __('Today\'s total') ?></h3>
<table class="sessions form large-1 medium-2 small-3">
    <thead>
    <tr>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('duration') ?></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="text-center"><?= (new FrozenTime($total))->format('G:i:s') ?></td>
    </tr>
    </tbody>
</table>
