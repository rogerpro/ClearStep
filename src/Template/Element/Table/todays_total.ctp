<h3><?= __('Today\'s total') ?></h3>
<table class="sessions form large-1 medium-2 small-3">
    <thead>
    <tr>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('duration') ?></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="text-center"><?= $this->Formatter->toHumanTime($total) ?></td>
    </tr>
    </tbody>
</table>
