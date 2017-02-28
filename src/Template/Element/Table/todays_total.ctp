<h3><?= __('Today\'s total') ?></h3>
<table cellpadding="0" cellspacing="0">
	<thead>
		<tr>
			<th scope="col"><?= $this->Paginator->sort('time') ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?= h($session->time) ?></td>
		</tr>
	</tbody>
</table>
