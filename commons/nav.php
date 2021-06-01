<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>


<nav class="navbar navbar-expand-lg navbar-dark gradcolor">
  <div class="container-fluid">
  
    <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-light"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mt-auto mb-2 mb-lg-0" >
		<?php if(menu_atas) : ?>
			<li class="nav-item">
				<div class="hiddendesktop mb-4" style="width:100%; margin-top: 20px;">
				<form action="<?= site_url('first') ?>" method="get" >

				<div class="input-group bg-light text-dark " style="border-radius: 5px;">
				<input type="search" class="form-control" placeholder="Cari" name="cari" style="border:none; background-color: transparent !important;">
				<span class="input-group-text bg-success text-dark" style="border:none;background-color: transparent !important;"><i class="fal fa-search" ></i></span>
				</div>
				</form>

				</div>
			</li>

			<li class="nav-item ">
				<a href="<?= site_url('first') ?>" class="nav-link text-light">Beranda</a>
			</li>
			<?php foreach($menu_atas as $menu) : ?>

				<?php if(count($menu['submenu']) < 1) : ?>

				<li class="nav-item">
					<a class="nav-link text-light" href="<?= $menu['link'] ?>" >
						<?= $menu['nama'] ?>
  					</a>
				</li>
			<?php endif ?>
				<li class="nav-item <?php count(menu['submenu']) > 0 and print('dropdown') ?>">
				
					<?php if(count($menu['submenu']) > 0) : ?>

  					<a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<?= $menu['nama'] ?>
  					</a>

						<?php endif ?>
						
						<?php if(count($menu['submenu']) > 0) : ?>
							<ul class="dropdown-menu">
								<?php foreach($menu['submenu'] as $submenu) : ?>
									<li class="dropdown-item"><a href="<?= $submenu['link'] ?>" class="dropdown-link "><i class="fal fa-circle "> </i>&nbsp;&nbsp;&nbsp;<?= $submenu['nama'] ?></a></li>
								<?php endforeach ?>
							</ul>
						<?php endif ?>
			<?php endforeach ?>
		<?php endif ?>
	</li>
	

</ul>
    
    </div>
  </div>


</nav>
