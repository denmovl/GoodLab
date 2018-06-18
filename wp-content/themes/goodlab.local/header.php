<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GoodLab</title>
    <link rel="shortcut icon" href="<?php bloginfo("template_directory") ?>/favicon.ico" />
	<?php wp_head(); ?>
</head>
<body>
<header>
    <div class="contentHeader">
        <div class="center">
            <div class="topBar">
                <div class="logo"><a href="<?php echo home_url();?>">GoodLab</a></div>
                <nav class="menu">
                    <?php wp_nav_menu(
	                        array(
		                        'theme_location'  => '',
		                        'menu'            => 'header_menu',
		                        'container'       => 'nav',
		                        'container_class' => '',
		                        'container_id'    => '',
		                        'menu_class'      => 'menu',
		                        'menu_id'         => '',
		                        'echo'            => true,
		                        'fallback_cb'     => 'wp_page_menu',
		                        'before'          => '',
		                        'after'           => '',
		                        'link_before'     => '',
		                        'link_after'      => '',
		                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		                        'depth'           => 0,
		                        'walker'          => '',
                            )
                    ) ?>
                </nav>
            </div>
        </div>
    </div>
</header>