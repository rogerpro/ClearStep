<?php
//TODO: abstract all total elements
//TODO: move average calculation to Model
?>
<h3><?= __('Today\'s total') ?></h3>
<table class="sessions form large-4 medium-6 small-7">
    <thead>
    <tr>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('duration') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('average') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('amount') ?></th>
    </tr>
    </thead>
    <tbody>
    <tr class="<?= ($total->amount) ? 'billable' : '' ?>">
        <td class="text-center"><?= $this->Formatter->toHumanTime($total->duration) ?></td>
        <td class="text-center"><?= $total->amount ?
                $this->Number->currency($total->amount / $total->duration * 3600) : '' ?></td>
        <td class="text-center"><?= $total->amount ? $this->Number->currency($total->amount) : '' ?></td>
    </tr>
    </tbody>
</table>
