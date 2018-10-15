<h3><?= __('Today\'s total') ?></h3>
<table class="sessions form large-2 medium-3 small-4">
    <thead>
    <tr>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('duration') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('amount') ?></th>
    </tr>
    </thead>
    <tbody>
    <tr class="<?= ($total->amount) ? 'billable' : '' ?>">
        <td class="text-center"><?= $this->Formatter->toHumanTime($total->duration) ?></td>
        <td class="text-center"><?= $total->amount ? $this->Number->currency($total->amount) : '' ?></td>
    </tr>
    </tbody>
</table>
