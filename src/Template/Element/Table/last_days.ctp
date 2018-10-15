<h3><?= __('Last days totals') ?></h3>
<table class="sessions form large-4 medium-4 small-8">
    <thead>
    <tr>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('day') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('duration') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('amount') ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($last_days as $day): ?>
        <tr class="<?= ($day->amount) ? 'billable' : '' ?>">
            <td class="text-center"><?= h($day->day) ?></td>
            <td class="text-center"><?= $this->Formatter->toHumanTime($day->duration) ?></td>
            <td class="text-center"><?= $day->amount ? $this->Number->currency($day->amount) : '' ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
