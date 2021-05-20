<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $url = site_url('artikel/'.buat_slug($article)) ?>
<?php $abstract = potong_teks(strip_tags($article['isi']), 100) ?>
<?php $image = ($article['gambar'] && is_file(LOKASI_FOTO_ARTIKEL.'kecil_'.$article['gambar'])) ? 
	AmbilFotoArtikel($article['gambar'],'kecil') :
	base_url($this->theme_folder.'/'.$this->theme .'/assets/images/placeholder.png');
?>


<div class="mb-3 grid-show " >
	<!-- calc(30% - -90.667px) -->
<div class="card shadow h-100" style="border-radius: 6px;">
	<a href="<?= $url ?>">
	<img src="<?= $image ?>" alt="<?= $article['judul'] ?>" class="card-img-top" style="object-fit: cover; padding: 10px;border-radius:17px;">
</a>
	<div class="card-body">
 	
	
	<h5 style="text-decoration: none; " class="card-title"><a href="<?= $url ?>"><?= potong_teks(strip_tags($article['judul']), 20)  ?></a></h5>

	<span class=" content__meta__item "><i class="fal fa-calendar content__meta__icon"></i> <?= tgl_indo($article['tgl_upload']) ?></span>
			<span class="content__meta__item "><i class="fal fa-user content__meta__icon"></i> <?= $article['owner'] ?></span>
	<p class="card-text gitem"><?= $abstract ?></p>

	
	</div>
</div>
</div>


   <div class="list-show mb-3">
   	<div class="card shadow h-100" style="border-radius: 6px;">
   		<div class="card-body">
                    <a href="<?= $url ?>">
                     <img src="<?= $image ?>" alt="<?= $article['judul'] ?>" class="img-thumbnail img-list" style="width: 150px; height: 150px; border:none; border-radius:7px; object-fit: cover;	float: left; margin-right: 20px;">
                      <h5 style="text-decoration: none; " class="title-list"><a href="<?= $url ?>"><?= potong_teks(strip_tags($article['judul']), 100)  ?></a></h5></a>
                      	<span class="content__meta__item"><i class="fal fa-calendar content__meta__icon"></i> <?= tgl_indo($article['tgl_upload']) ?></span>
			<span class="content__meta__item"><i class="fal fa-user content__meta__icon"></i> <?= $article['owner'] ?></span>
                     <article><p class="card-text" ><?=potong_teks(strip_tags($article['isi']), 300) ?></p></article>
                     
                 </div></div>
             </div>

