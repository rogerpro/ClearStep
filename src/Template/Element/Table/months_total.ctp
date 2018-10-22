<h3><?= __('This month\'s total') ?></h3>
<table class="sessions form large-4 medium-6 small-7">
    <thead>
    <tr>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('duration') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('average') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('amount') ?></th>
    </tr>
    </thead>
    <tbody>
    <tr class="<?= ($monthTotal->amount) ? 'billable' : '' ?>">
        <td class="text-center"><?= $this->Formatter->toHumanTime($monthTotal->duration) ?></td>
        <td class="text-center"><?= $monthTotal->amount ?
                $this->Number->currency($monthTotal->amount / $monthTotal->duration * 3600) : '' ?></td>
        <td class="text-center"><?= $monthTotal->amount ? $this->Number->currency($monthTotal->amount) : '' ?></td>
    </tr>
    </tbody>
</table>
