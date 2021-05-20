<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $article = $single_artikel ?>
<h2 class="content__heading"><?= $article['judul'] ?></h2>
<div class="content__meta">
	<span class="content__meta__item"><i class="fal fa-calendar content__meta__icon"></i> <?= tgl_indo($article['tgl_upload']) ?></span>
	<span class="content__meta__item"><i class="fal fa-user content__meta__icon"></i> <?= $article['owner'] ?></span>
	<?php if($article['kategori']) : ?>
		<span class="content__meta__item"><i class="fal fa-tags content__meta__icon"></i> <a href="<?= site_url('first/kategori/'.$article['kat_slug']) ?>" class="content__link"><?= $article['kategori'] ?></a></span>
	<?php endif ?>
	<span class="content__meta__item"><i class="fal fa-bookmark content__meta__icon"></i> Dibaca <?= hit($article['hit']) ?></span>
</div>
<hr class="--mt-2 --mb-2">
<?php if($article['gambar'] && is_file(LOKASI_FOTO_ARTIKEL.'sedang_'.$article['gambar'])) : ?>
	<img src="<?= AmbilFotoArtikel($article['gambar'],'sedang') ?>" alt="<?= $article['judul'] ?>" class="content__image --mb-4">
<?php endif ?>
<article class="content__article">
	<?= $article['isi'] ?>
	<?php for($i = 1; $i <= 3; $i++) : ?>
		<?php if($article['gambar'.$i] && is_file(LOKASI_FOTO_ARTIKEL.'sedang_'.$article['gambar'.$i])) : ?>
			<img src="<?= AmbilFotoArtikel($article['gambar'.$i],'sedang') ?>" alt="<?= $article['nama'] ?>" title="<?= $article['nama'] ?>" class="content__image">
		<?php endif ?>
	<?php endfor ?>
	<?php if($article['dokumen']) : ?>
		<div class="content__attachment --mt-4">
			<strong>Dokumen Lampiran</strong>
			<a href="<?= base_url(LOKASI_DOKUMEN.$article['dokumen']) ?>" class="content__attachment__link">
				<i class="fab fa-cloud-download content__attachment__icon"></i>
				<span><?= $article['link_dokumen'] ?></span>
			</a>
		</div>
	<?php endif ?>
</article>
<div class="--mb-10 --mt-10">
	<span>Bagikan artikel ini:</span>
	<ul class="social-media">
		<li class="social-media__item social-media--facebook">
			<a href="http://www.facebook.com/sharer.php?u=<?= site_url('artikel/'.buat_slug($article))?>" target="_blank" class="social-media__link"><i class="fab fa-facebook"></i></a>
		</li>
		<li class="social-media__item social-media--twitter">
			<a href="http://twitter.com/share?url=<?= site_url('artikel/'.buat_slug($article)) ?>" target="_blank" class="social-media__link"><i class="fab fa-twitter"></i></a>
		</li>
		<li class="social-media__item social-media--telegram">
			<a href="https://telegram.me/share/url?url=<?= site_url('artikel/'.buat_slug($article))?>&text=<?= $article["judul"]; ?>" target="_blank" class="social-media__link"><i class="fab fa-telegram"></i></a>
		</li>
		<li class="social-media__item social-media--whatsapp">
			<a href="https://api.whatsapp.com/send?text=<?= site_url('artikel/'.buat_slug($article))?>" target="_blank" class="social-media__link"><i class="fab fa-whatsapp"></i></a>
		</li>
	</ul>
</div>
<h5 class="content__title">Komentar</h5>

<?php if($article['boleh_komentar'] == 1) : ?>
	<div class="">
	<div style="color:red;" class="fb-comments" data-href="https://kaptenmods.com" data-width="100%" data-numposts="5"></div>
	

	</div>
	

<?php endif ?>
