<div class="box box-primary box-solid">
	<div class="box-header">
		<h3 class="box-title"><i class="fal fa-tags"></i> Kategori</h3>
	</div>
	<div class="box-body">
		
			
			<?php foreach($menu_kiri as $data): ?>
				
<div >
				<a style="width: 100%; display: block" href="<?= site_url("artikel/kategori/$data[slug]"); ?>"><?= $data['kategori']; ?> <i class="fal fa-bookmark" style="float: right" ></i> </a>
					<?php if(count($data['submenu']) > 0): ?>
						
							<?php foreach($data['submenu'] as $submenu): ?>
								
								<div><i class="fal fa-tags"></i> <a href="<?= site_url("artikel/kategori/$submenu[slug]"); ?>"><?= $submenu['kategori']?></a></div>

							<?php endforeach; ?>
					
					<?php endif; ?>
					</div>
			<?php endforeach; ?>
		
	</div>
</div>
