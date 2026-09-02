<?php
/**
 * Main Index Template
 *
 * @package AstrologerTheme
 */

get_header();
$astro_phone       = get_theme_mod( 'astrologer_phone', '+61 400 000 000' );
$astro_wa          = get_theme_mod( 'astrologer_whatsapp', '61400000000' );
$astro_phone_clean = preg_replace( '/[^0-9+]/', '', $astro_phone );
?>

<!-- BLOG ARCHIVE HERO BANNER -->
<section class="page-hero-section">
	<div class="container text-center" style="max-width: 900px;">
		<div class="breadcrumbs" style="color: var(--primary-gold); font-size: 0.85rem; margin-bottom: 0.75rem; text-transform: uppercase; letter-spacing: 1px;">
			<a href="<?php echo home_url('/'); ?>" style="color: var(--text-muted); text-decoration: none;">Home</a> &nbsp;»&nbsp; 
			<span style="color: var(--primary-gold);">Blog</span>
		</div>
		<h1 class="font-serif text-gold" style="font-size: 2.8rem; line-height: 1.2; margin-bottom: 1rem;">
			Astrology <span class="text-gold">Insights &amp; Blog</span>
		</h1>
		<p style="color: var(--text-muted); font-size: 1.1rem; max-width: 780px; margin: 0 auto 1.5rem auto; line-height: 1.7; text-align: justify; text-justify: inter-word;">
			Celestial wisdom, horoscope news, planetary transits, and Vedic remedy guides by Astrologer Raghu Sharma in Adelaide.
		</p>
		<div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
			<a href="tel:<?php echo esc_attr( $astro_phone_clean ); ?>" class="btn btn-gold">
				<i class="fa-solid fa-phone"></i> Call <?php echo esc_html( $astro_phone ); ?>
			</a>
			<a href="https://wa.me/<?php echo esc_attr( $astro_wa ); ?>" class="btn btn-whatsapp" target="_blank">
				<i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
			</a>
		</div>
	</div>
</section>

<div class="container" style="padding-top: 3rem; padding-bottom: 80px;">
	<div class="services-grid">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				?>
				<article <?php post_class( 'glass-card' ); ?>>
					<?php if ( has_post_thumbnail() ) : ?>
						<div style="margin-bottom: 1rem; border-radius: 12px; overflow: hidden;">
							<?php the_post_thumbnail( 'medium_large', array( 'style' => 'width: 100%; height: auto;' ) ); ?>
						</div>
					<?php endif; ?>
					<h2 class="font-serif" style="font-size: 1.4rem; margin-bottom: 0.75rem;">
						<a href="<?php the_permalink(); ?>" class="adelaide-service-link"><?php the_title(); ?></a>
					</h2>
					<div style="font-size: 0.85rem; color: var(--primary-gold); margin-bottom: 1rem;">
						<span><i class="fa-regular fa-calendar"></i> <?php echo get_the_date(); ?></span> | 
						<span><i class="fa-regular fa-user"></i> <?php the_author(); ?></span>
					</div>
					<p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.25rem;">
						<?php echo wp_trim_words( get_the_excerpt(), 20 ); ?>
					</p>
					<a href="<?php the_permalink(); ?>" class="btn btn-outline" style="font-size: 0.85rem; padding: 0.5rem 1.2rem;">Read Post <i class="fa-solid fa-arrow-right"></i></a>
				</article>
				<?php
			endwhile;
		else :
			echo '<p style="text-align: center; color: var(--text-muted);">No posts found.</p>';
		endif;
		?>
	</div>
</div>

<?php
get_footer();
