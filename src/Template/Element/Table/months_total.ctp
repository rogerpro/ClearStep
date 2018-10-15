<h3><?= __('This month\'s total') ?></h3>
<table class="sessions form large-2 medium-3 small-4">
    <thead>
    <tr>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('duration') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('amount') ?></th>
    </tr>
    </thead>
    <tbody>
    <tr class="<?= ($monthTotal->amount) ? 'billable' : '' ?>">
        <td class="text-center"><?= $this->Formatter->toHumanTime($monthTotal->duration) ?></td>
        <td class="text-center"><?= $monthTotal->amount ? $this->Number->currency($monthTotal->amount) : '' ?></td>
    </tr>
    </tbody>
</table>
