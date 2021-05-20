<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php if($transparansi) $this->load->view($folder_themes .'/partials/apbdesa.php', $transparansi) ?>

<!-- MOHON TIDAK MEMODIFIKASI TAUTAN PENGEMBANG DI BAWAH INI SEBAGAI BENTUK PENGHARGAAN HAK CIPTA. -->
<footer class="footer">
	<div class="footer__content">
		<div class="footer__copyright">
			<span>Hak cipta &copy; <?= date('Y') ?> - <a href="https://kaptenmods.com" target="_blank"><strong>eclipse <?= THEME_VERSION ?></strong></a> | <a href="https://github.com/opensid/opensid/"><strong>OpenSID <?= ambilVersi() ?></strong></a></span>
		</div>
		
	</div>
</footer>