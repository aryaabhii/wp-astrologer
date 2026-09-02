<?php
/**
 * Main Index Template
 *
 * @package AstroVeda
 */

get_header();
?>

<div class="container" style="padding-top: 140px; padding-bottom: 80px;">
	<div class="section-header">
		<h1 class="section-title font-serif">Astrology <span class="text-gold">Insights & Blog</span></h1>
		<p class="section-desc">Celestial wisdom, horoscope news, planetary transits, and Vedic remedy guides.</p>
	</div>

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
						<a href="<?php the_permalink(); ?>" style="color: var(--text-main); text-decoration: none;"><?php the_title(); ?></a>
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
