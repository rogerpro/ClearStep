<h3><?= __('This week\'s total') ?></h3>
<table class="sessions form large-4 medium-6 small-7">
    <thead>
    <tr>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('duration') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('amount') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('average') ?></th>
    </tr>
    </thead>
    <tbody>
    <tr class="<?= ($weekTotal->amount) ? 'billable' : '' ?>">
        <td class="text-center"><?= $this->Formatter->toHumanTime($weekTotal->duration) ?></td>
        <td class="text-center"><?= $weekTotal->amount ? $this->Number->currency($weekTotal->amount) : '' ?></td>
        <td class="text-center"><?= $weekTotal->amount ?
                $this->Number->currency($weekTotal->amount / $weekTotal->duration * 3600) : '' ?></td>
    </tr>
    </tbody>
</table>
