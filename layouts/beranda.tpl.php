<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php
	$title = (!empty($judul_kategori))? $judul_kategori: 'Artikel Terkini';
	if(is_array($title)){
		foreach($title as $item){
			$title = $item;
		}
	}
?>




<section id="news-list" >

<div class="container" style="margin-top: -16px;">
	
<div class="row ">
<div class="col">

<?php
		$this->load->view($folder_themes .'/partials/slider');
	
?>

</div>
</div>
	</div>	

<div class="container">
<div class="row mb-2" >
<div class="col colmobile">
<h3 class="content__heading  <?php empty($this->input->get('cari')) AND $headline AND $this->uri->segment(2) != 'kategori' AND print('--mt-5') ?>"  style="padding-left: 0px;"><i class="fal fa-newspaper-o"></i> <?= $title ?></h3></div>

<div class="col-sm-4 colmobile">
<button id="jenistampilan" value="hidegrid" class="hidegrid btn btn-light" style="float: right; color: #535573"><i class="fas fa-list"></i></button>
<button id="jenistampilan2" value="hidelist" class="hidelist btn btn-light" style="float: right; color: #535573"><i class="fas fa-grid"></i></button></div>

</div>

<script>

$(document).ready(function(){
	 
var JenisTampil = localStorage.getItem('Text');

if(JenisTampil == 'hidegrid') {
listmuncul();
}
else {
gridmuncul();
}

$(".hidegrid").click(function(){
	listmuncul();
	var storage = document.getElementById('jenistampilan').value;
	localStorage.setItem('Text',storage);
  });
  $(".hidelist").click(function(){
	
	gridmuncul();	
	var storage = document.getElementById('jenistampilan2').value;
	localStorage.setItem('Text',storage);
  });


function gridmuncul(){
	$(".grid-show").show();
	$(".list-show").hide();
	$("#jenistampilan").show();
	$("#jenistampilan2").hide();
}

function listmuncul(){
	$(".grid-show").hide();
	$(".list-show").show();
	$("#jenistampilan").hide();
	$("#jenistampilan2").show();
}


});



</script>
<div class="row rowmobile">

  	<?php if($artikel) : ?>
				<?php foreach($artikel as $article) : ?>
					<?php $data['article'] = $article ?>
					<?php $this->load->view($folder_themes .'/partials/article_list', $data) ?>
				<?php endforeach ?>
				<?php else : ?>
					<?php $data['title'] = $title ?>
					<?php $this->load->view($folder_themes .'/partials/empty_article', $data) ?>
			<?php endif ?>

</div>
</div>
		
		<?php $this->load->view($folder_themes .'/commons/paging') ?>

<div class="row ">
<div class="col">

		<?php
		$this->load->view($folder_themes .'/widgets/keuangan.php');
	
?>

</div>
</div>
	</section>

