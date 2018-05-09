<?php

use Cake\I18n\FrozenTime;

?>
<h3><?= __('Today\'s total') ?></h3>
<table>
    <thead>
    <tr>
        <th scope="col"><?= $this->Paginator->sort('duration') ?></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?= (new FrozenTime($total))->format('G:i:s') ?></td>
    </tr>
    </tbody>
</table>
