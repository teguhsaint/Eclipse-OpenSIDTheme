<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php $images = base_url($this->theme_folder.'/'.$this->theme .'/assets/images/bg.jpg');
?>
<?php $images2 = base_url($this->theme_folder.'/'.$this->theme .'/assets/images/opendesa.png');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view($folder_themes .'/commons/meta') ?>
	<?php $this->load->view($folder_themes .'/commons/source_css') ?>
</head>
<body>
	<button class="btn" id="buttontotop" title="Go to top"><i class="fal fa-arrow-up"></i></button>

	<?php if($this->uri->segment(2) == 'kategori' && empty($judul_kategori)) : ?>
		<?php $this->load->view($folder_themes .'/commons/404') ?>
		<?php else : ?>
			<?php $this->load->view($folder_themes .'/commons/header') ?>
		

		<section class="main-wrapper">
				
				<main class="content">
			
					<?php $this->load->view($folder_themes .'/layouts/beranda.tpl.php') ?>
			
				</main>
				<?php $this->load->view($folder_themes .'/partials/sidebar.php') ?>
			</section>

			<style type="text/css">
#buttontotop {
	width: 50px;
	height: 50px;
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #00abffae;
  color: white;
  cursor: pointer;
 
  border-radius: 50px;
}
</style>
	<?php $this->load->view($folder_themes .'/commons/footer') ?>
	<?php endif ?>
	<?php $this->load->view($folder_themes .'/commons/source_js') ?>



	 <script type="text/javascript">



//Get the button
var mybutton = document.getElementById("buttontotop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}


 	$("#buttontotop").click(function() {
    $('html, body').animate({
        scrollTop: $("#divtop").offset().top
    }, 500);
});
 </script>
</body>
</html>