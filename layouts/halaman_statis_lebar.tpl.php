<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view($folder_themes . '/commons/meta') ?>
	<?php $this->load->view($folder_themes . '/commons/source_css') ?>
</head>
<body>

	<?php $this->load->view($folder_themes .'/commons/header') ?>
 <?php $this->load->view($folder_themes .'/partials/newsticker') ?> 
	<section class="main-wrapper">
		<main class="contents container" style="width: 100%">
			<section class="content__article" id="status-idm">
				<?php $this->load->view($halaman_statis); ?>
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