<?php
/**
 * Single Post Template
 *
 * @package AstroVeda
 */

get_header();
?>

<div class="container" style="padding-top: 140px; padding-bottom: 80px; max-width: 900px;">
	<?php
	while ( have_posts() ) : the_post();
		?>
		<article class="glass-card" style="padding: 3rem;">
			<h1 class="font-serif text-gold" style="font-size: 2.5rem; margin-bottom: 1rem;"><?php the_title(); ?></h1>
			<div style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 2rem; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 1rem;">
				<span><i class="fa-regular fa-calendar"></i> <?php echo get_the_date(); ?></span> &bull; 
				<span><i class="fa-regular fa-user"></i> By <?php the_author(); ?></span>
			</div>

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
