<?= $this->extend('components/layout') ?>
<?= $this->section('content') ?>

<div class="pagetitle">
	<h1>Transaksi</h1>
</div>
<table class="table datatable">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">ID Transaksi</th>
			<th scope="col">Username</th>
			<th scope="col">Total Harga</th>
			<th scope="col">Status</th>
			<th scope="col">Tanggal</th>
			<th scope="col">Process</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($transactions as $index => $transaction): ?>
			<tr>
				<th scope="row">
					<?php echo $index + 1 ?>
				</th>
				<td>
					<?php echo $transaction['id'] ?>
				</td>
				<td>
					<?php echo $transaction['username'] ?>
				</td>
				<td>
					<?php echo $transaction['total_harga'] ?>
				</td>
				<?php if ($transaction['status'] == "1") { ?>
					<td class="status-1">Selesai</td>
				<?php } else { ?>
					<td class="status-0" >Belum Selesai</td>
				<?php } ?>
				<td>
					<?php echo $transaction['created_date'] ?>
				</td>
				<td>
					<?php if($transaction['status'] != 1){?>
						<form method="POST" action="<?= base_url();?>transaksi">
							<input type="hidden" name="id" value="<?= $transaction['id'] ?>">
							<input type="hidden" name="new_status" value="1">
							<button type="submit" class="btn btn-success">Selesai</button>
						</form>
					<?php } else { ?>
						<p style="color:green;" >Pesanan Selesai</p>
					<?php } ?>	
					
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>




<?= $this->endSection() ?>