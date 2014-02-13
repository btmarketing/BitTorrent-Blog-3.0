<?php global $bt_options ?>
<?php if ( $bt_options['breadcrumb'] == 1) { ?>
		<?php if ( function_exists('custom_breadcrumb') ) { custom_breadcrumb(); } ?>
<?php } ?>