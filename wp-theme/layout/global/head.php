<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php

		if (is_404()) {
			echo 'Ошибка 404';
		} else {
			echo 'EZOTOUCH';
		}

		?>
	</title>
	<link rel="apple-touch-icon" sizes="180x180"
		href="<?php bloginfo('template_directory'); ?>/assets/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32"
		href="<?php bloginfo('template_directory'); ?>/assets/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16"
		href="<?php bloginfo('template_directory'); ?>/assets/images/favicon-16x16.png">

	<?php wp_head(); ?>

</head>