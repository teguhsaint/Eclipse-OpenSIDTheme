<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<style type="text/css">
	.progress-bar span
	{
		position: absolute;
		right: 20px;
	}
</style>
<div class="container-fluid " id="transparansi-footer" style="width: 100%; padding-top: 20px; padding-bottom: 20px;margin-top: 30px;">

	<div class="row">
	<?php foreach ($data_widget as $subdata_name => $subdatas): ?>
		<div class="col-sm-4">
	<div class="card h-100">
		<div class="card-header"><div align="center"><h3><?= ($subdatas['laporan'])?></h3></div></div>
	<div class="card-body">

			
			<div class="mb-2" align="center"><h4>Realisasi | Anggaran</h4></div>
			<?php foreach ($subdatas as $key => $subdata): ?>
				<?php if($subdata['judul'] != NULL and $key != 'laporan' and $subdata['realisasi'] != 0 or $subdata['anggaran'] != 0): ?>
					<div class="progress-group"> 
						<div class="mb-2" style="padding: 5px; border:1px solid lightgrey; border-radius: 5px;">
						<?php

							$juduls = $subdata['judul'];
						 if ($juduls=="PENDAPATAN") {
							echo '<span><i class="fas fa-wallet" style="color:green"></i></span>&nbsp;&nbsp;';

						}elseif ($juduls=="BELANJA") {
							echo '<span><i class="fas fa-coins" style="color:orange"></i></span>&nbsp;&nbsp;';

						}elseif ($juduls=="PEMBIAYAAN") {
							echo '<span><i class="fas fa-money-bill-wave" style="color:blueviolet"></i></span>&nbsp;&nbsp;';
						}   ?>

						<?= $subdata['judul']; ?>
						<br>
						

						
						<b>Rp. <?= number_format($subdata['realisasi']); ?> | Rp. <?= number_format($subdata['anggaran']); ?></b>
						<div class="progress progress-bar-striped bg-dark" align="right" style="border-radius: 1rem ; height: 1rem;" ><small></small>
							<div class="progress-bar progress-bar-striped" role="progressbar" style="height: 1rem; border-radius: 1rem ;width: <?= $subdata['persen']?>%; background: #00c3ff;  /* fallback for old browsers */
background: -webkit-linear-gradient(to left,red, yellow);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, red, yellow); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

" aria-valuenow="<?= $subdata['persen'] ?>" aria-valuemin="0" aria-valuemax="100"><span><?= $subdata['persen'] ?> %</span></div>
						</div>
					</div>
					</div>

				<?php endif; ?>
			<?php endforeach; ?>
			</div>

</div>
		</div>
	<?php endforeach; ?>
</div>
</div><hr>
