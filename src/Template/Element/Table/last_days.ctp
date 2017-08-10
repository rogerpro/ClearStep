<?php
use Cake\I18n\FrozenTime;
?>
<h3><?= __('Last day\'s total summary') ?></h3>
<table cellpadding="0" cellspacing="0">
	<thead>
		<tr>
			<th scope="col"><?= $this->Paginator->sort('day') ?></th>
			<th scope="col"><?= $this->Paginator->sort('duration') ?></th>
		</tr>
	</thead>
	<tbody>
            <?php foreach ($last_days as $day): ?>
		<tr>
			<td><?= h($day->day) ?></td>
			<td><?= $day->duration ? (new FrozenTime($day->duration))->format('G:i:s') : '' ?></td>
		</tr>
            <?php endforeach; ?>
        </tbody>
</table>
