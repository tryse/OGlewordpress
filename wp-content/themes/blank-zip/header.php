<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank.zip
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'blank-zip'); ?></a>
	<nav class="navbar navbar-expand-lg" style="background-color:rgb(0,0,0)">
		<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="http://localhost:8080/OGlewordpress/wp-content/uploads/2019/10/logo.jpg"></a>

		<button class="navbar-toggler collapsed btn-secondary" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon">
			<i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
		</span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
			
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>"> Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="http://localhost:8080/OGlewordpress/about-us/"> About</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" href="http://localhost:8080/OGlewordpress/contact-us/"> Contact Us</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" href="http://localhost:8080/OGlewordpress/cart/"> Cart</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" href="http://localhost:8080/OGlewordpress/shop/"> Shop</a>
				</li>
			</ul>
		</div>

	</nav>
	<div id="page" class="site container">

		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'blank-zip'); ?></a>

		<header id="masthead" class="site-header">

		</header><!-- #masthead -->

		<div id="content" class="site-content row">

		</div>



		<script type="text/javascript">
		jQuery(function($) {
				// ------------------------------------------------------- //
				// Multi Level dropdowns
				// ------------------------------------------------------ //
				$("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
					event.preventDefault();
					event.stopPropagation();

					$(this).siblings().toggleClass("show");


					if (!$(this).next().hasClass('show')) {
						$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
					}
					$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
						$('.dropdown-submenu .show').removeClass("show");
					});

				});
			});
		</script>