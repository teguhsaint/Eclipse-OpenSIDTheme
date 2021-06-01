<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view($folder_themes . '/commons/meta') ?>
	<?php $this->load->view($folder_themes . '/commons/source_css') ?>
</head>
<body >

	<?php $this->load->view($folder_themes .'/commons/header') ?>
 <?php $this->load->view($folder_themes .'/partials/newsticker') ?> 
</br>

	<section class="main-wrapper" style="width: 100%; margin: auto;" >
		<main class="contents bg-white"style="width: 98%; padding: 10px; margin: auto;"  >
			<section class="content__article" id="status-idm" style="max-width: 100%!important; margin: auto;" >
				<?php $this->load->view($folder_themes . '/partials/idm.php')?>
			</section>
		</main>
	</section>
	<?php $this->load->view($folder_themes .'/commons/footer') ?>
	<?php $this->load->view($folder_themes . '/commons/source_js') ?>

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