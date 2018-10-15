<h3><?= __('This week\'s total') ?></h3>
<table class="sessions form large-2 medium-3 small-4">
    <thead>
    <tr>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('duration') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('amount') ?></th>
    </tr>
    </thead>
    <tbody>
    <tr class="<?= ($weekTotal->amount) ? 'billable' : '' ?>">
        <td class="text-center"><?= $this->Formatter->toHumanTime($weekTotal->duration) ?></td>
        <td class="text-center"><?= $weekTotal->amount ? $this->Number->currency($weekTotal->amount) : '' ?></td>
    </tr>
    </tbody>
</table>
