<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="canonical" href="<?php echo esc_url( get_permalink() ); ?>" />

	<?php
	$astro_name     = get_theme_mod( 'astrologer_name', 'Raghu Sharma' );
	$astro_phone    = get_theme_mod( 'astrologer_phone', '+61 400 000 000' );
	$astro_wa       = get_theme_mod( 'astrologer_whatsapp', '61400000000' );
	$astro_addr     = get_theme_mod( 'astrologer_address', 'Adelaide CBD, SA 5000' );
	$astro_phone_clean = preg_replace( '/[^0-9+]/', '', $astro_phone );
	?>

	<!-- Local Business & Service Schema (JSON-LD) for Adelaide, SA -->
	<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "ProfessionalService",
		"name": "<?php echo esc_js( $astro_name ); ?> - Astrologer Adelaide",
		"image": "<?php echo get_template_directory_uri(); ?>/assets/images/astrologer-profile.png",
		"@id": "<?php echo home_url( '/#astrologer' ); ?>",
		"url": "<?php echo home_url( '/' ); ?>",
		"telephone": "<?php echo esc_js( $astro_phone_clean ); ?>",
		"priceRange": "$$",
		"address": {
			"@type": "PostalAddress",
			"streetAddress": "Adelaide CBD",
			"addressLocality": "Adelaide",
			"addressRegion": "SA",
			"postalCode": "5000",
			"addressCountry": "AU"
		},
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": -34.9285,
			"longitude": 138.6007
		},
		"openingHoursSpecification": {
			"@type": "OpeningHoursSpecification",
			"dayOfWeek": [
				"Monday",
				"Tuesday",
				"Wednesday",
				"Thursday",
				"Friday",
				"Saturday",
				"Sunday"
			],
			"opens": "08:00",
			"closes": "21:00"
		},
		"sameAs": [
			"https://wa.me/<?php echo esc_js( $astro_wa ); ?>"
		],
		"description": "Leading Indian Astrologer, Psychic Reader & Spiritual Healer in Adelaide, South Australia. Specialising in Black Magic Removal, Ex Love Back, Vashikaran & Horoscope Readings."
	}
	</script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">


	<div class="container header-container">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
			<span class="font-serif">Raghu<span class="text-gold">Sharma</span></span>
		</a>

		<nav class="main-nav" id="mainNav">
			<?php
			if ( has_nav_menu( 'primary' ) ) {
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'container'      => false,
					'menu_class'     => 'nav-menu',
					'fallback_cb'    => false,
				) );
			} else {
				?>
				<ul class="nav-menu">
					<li><a href="<?php echo home_url('/'); ?>">Home</a></li>
					<li><a href="<?php echo home_url('/about-raghu-sharma/'); ?>">About</a></li>
					<li><a href="<?php echo home_url('/black-magic-removal-adelaide/'); ?>">Black Magic Removal</a></li>
					<li><a href="<?php echo home_url('/get-your-ex-love-back-adelaide/'); ?>">Get Ex Back</a></li>
					<li><a href="<?php echo home_url('/psychic-reading-adelaide/'); ?>">Psychic Reading</a></li>
					<li><a href="<?php echo home_url('/contact-us/'); ?>">Contact</a></li>
				</ul>
				<?php
			}
			?>
		</nav>

		<div class="header-actions">
			<a href="tel:<?php echo esc_attr( $astro_phone_clean ); ?>" class="btn btn-gold header-cta-btn">
				<i class="fa-solid fa-phone"></i> Call Now
			</a>
			<button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle navigation">
				<i class="fa-solid fa-bars"></i>
			</button>
		</div>
	</div>
</header>
