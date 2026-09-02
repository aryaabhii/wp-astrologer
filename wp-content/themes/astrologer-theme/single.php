<?php
/**
 * Single Post Template
 *
 * @package AstrologerTheme
 */

get_header();
$astro_phone       = get_theme_mod( 'astrologer_phone', '+61 400 000 000' );
$astro_wa          = get_theme_mod( 'astrologer_whatsapp', '61400000000' );
$astro_phone_clean = preg_replace( '/[^0-9+]/', '', $astro_phone );
?>

<!-- SINGLE POST HERO BANNER -->
<section class="page-hero-section">
	<div class="container text-center" style="max-width: 900px;">
		<div class="breadcrumbs" style="color: var(--primary-gold); font-size: 0.85rem; margin-bottom: 0.75rem; text-transform: uppercase; letter-spacing: 1px;">
			<a href="<?php echo home_url('/'); ?>" style="color: var(--text-muted); text-decoration: none;">Home</a> &nbsp;»&nbsp; 
			<a href="<?php echo home_url('/blog/'); ?>" style="color: var(--text-muted); text-decoration: none;">Blog</a> &nbsp;»&nbsp; 
			<span style="color: var(--primary-gold);"><?php single_post_title(); ?></span>
		</div>
		<h1 class="font-serif text-gold" style="font-size: 2.6rem; line-height: 1.2; margin-bottom: 1rem;">
			<?php single_post_title(); ?>
		</h1>
		<div style="font-size: 0.9rem; color: var(--text-muted);">
			<span><i class="fa-regular fa-calendar text-gold"></i> <?php echo get_the_date(); ?></span> &nbsp;&bull;&nbsp; 
			<span><i class="fa-regular fa-user text-gold"></i> By <?php the_author(); ?></span>
		</div>
	</div>
</section>

<div class="container" style="padding-top: 3rem; padding-bottom: 80px; max-width: 900px;">
	<?php
	while ( have_posts() ) : the_post();
		?>
		<article class="glass-card" style="padding: 2.5rem;">
			<?php if ( has_post_thumbnail() ) : ?>
				<div style="margin-bottom: 2rem; border-radius: 16px; overflow: hidden; border: 1px solid var(--border-gold);">
					<?php the_post_thumbnail( 'full', array( 'style' => 'width: 100%; height: auto;' ) ); ?>
				</div>
			<?php endif; ?>

			<div style="color: var(--text-main); line-height: 1.8; font-size: 1.05rem;">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile; ?>
</div>

<?php
get_footer();
