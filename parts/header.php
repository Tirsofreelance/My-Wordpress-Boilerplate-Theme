<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lte-ie9 lte-ie8 lte-ie7 lte-ie6 ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]><html class="lte-ie9 lte-ie8 lte-ie7 ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]><html class="lte-ie9 lte-ie8 ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]><html class="ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	
	<script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
		
	<?php wp_head() ?>
</head>

<body <?php body_class() ?>>
