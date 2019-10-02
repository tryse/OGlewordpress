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
	<nav class="navbar navbar-expand-lg" stle="background-color:rgb(0,0,0)">
		<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="http://localhost:8080/OGlewordpress/wp-content/uploads/2019/10/logo.jpg"></a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a id="dropdownMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
					<ul aria-labelledby="dropdownMenu1" class="dropdown-menu border-0 shadow">
						<li><a href="#" class="dropdown-item"> BAGS</a></li>
						<li><a href="#" class="dropdown-item"> POLO</a></li>
						<li><a href="#" class="dropdown-item"> WRIST WATCH</a></li>
						<li><a href="#" class="dropdown-item"> T-ShIRTS</a></li>

						<li class="dropdown-divider"></li>

						<!-- Level two dropdown-->
						<li class="dropdown-submenu">
							<a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
							<ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
								<li>
									<a tabindex="-1" href="#" class="dropdown-item">level 2</a>
								</li>

								<!-- Level three dropdown-->
								<li class="dropdown-submenu">
									<a id="dropdownMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
									<ul aria-labelledby="dropdownMenu3" class="dropdown-menu border-0 shadow">
										<li><a href="#" class="dropdown-item"></a></li>
										<li><a href="#" class="dropdown-item"></a></li>
									</ul>
								</li>
								<!-- End Level three -->

								<li><a href="#" class="dropdown-item">level 2</a></li>
								<li><a href="#" class="dropdown-item">level 2</a></li>
							</ul>
						</li>
						<!-- End Level two -->
					</ul>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>"> Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="http://localhost:8080/OGlewordpress/about-us/"> About Us</a>
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