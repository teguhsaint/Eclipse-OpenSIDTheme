<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="container-fluid">
	<div class="row">
	<?php foreach($data_widget as $subdata_name => $subdatas) : ?>
		<div class="col col-sm-6 mb-3">
			<div class="">
				<div class="">
					<h3 class="panel__heading"><?= ($subdatas['laporan'])?></h3>
				</div>
				<div class="panel__body">
					<?php foreach($subdatas as $key => $subdata) : ?>
						<?php if($subdata['judul'] != NULL and $key != 'laporan' and $subdata['realisasi'] != 0 or $subdata['anggaran'] != 0): ?>
							<div class="progress">
								<label class="progress__title"><?= ucwords(strtolower($subdata['judul'])) ?></label>
								<div class="--flex --justify-between" style="width: 50%">
									<span class="progress__subtitle">Rp<?= number_format($subdata['realisasi']) ?></span>
									<span class="progress__subtitle">Rp<?= number_format($subdata['anggaran']) ?></span>
								</div>
								<div class="progress-bar" style="margin-left: 11%">
									<div class="progress-bar__item" style="width:<?= $subdata['persen'] ?>%">
										<span class="progress-bar__caption"><?= $subdata['persen'] ?>%</span>
									</div>
								</div>
							</div>
						<?php endif ?>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	<?php endforeach ?>
	</div>
</section>