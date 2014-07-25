<html>
	<head>
		<?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Raleway:200,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/huge/style1.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/huge/normalize.css"> -->
	</head>
	<body>

	<?php 
		$_SESSION['wordpress_page'] = true;
		$_SESSION['spettacoli'] = false;
		$_SESSION['corsi'] = false; 
		get_template_part( 'navbar' ); 
	?> 