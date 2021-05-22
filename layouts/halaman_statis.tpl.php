<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view($folder_themes .'/commons/meta') ?>
	<?php $this->load->view($folder_themes .'/commons/source_css') ?>
</head>
<body>

	<?php $this->load->view($folder_themes .'/commons/header') ?>
	<?php $this->load->view($folder_themes .'/partials/newsticker') ?>
	<section class="main-wrapper">
		<main class="">
			<section class="">
				<?php $this->load->view($halaman_statis); ?>
			</section>
		</main>
		<?php $this->load->view($folder_themes .'/partials/sidebar.php') ?>
	</section>
	<?php $this->load->view($folder_themes .'/commons/footer') ?>
	<?php $this->load->view($folder_themes . '/commons/source_js') ?>

</body>
</html>