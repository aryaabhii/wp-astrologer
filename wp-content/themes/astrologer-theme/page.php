<?php
/**
 * Inner Service Page Template
 *
 * @package AstroVeda
 */

get_header();
$theme_uri = get_template_directory_uri();
$astro_name  = get_theme_mod( 'astrologer_name', 'Raghu Sharma' );
$astro_phone = get_theme_mod( 'astrologer_phone', '+61 400 000 000' );
$astro_wa    = get_theme_mod( 'astrologer_whatsapp', '61400000000' );
$astro_phone_clean = preg_replace( '/[^0-9+]/', '', $astro_phone );
?>

<!-- PAGE HERO BANNER -->
<section class="page-hero-section section">
	<div class="container" style="text-align: center; max-width: 900px;">
		<!-- Breadcrumbs -->
		<div class="breadcrumbs" style="color: var(--text-gold); font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.8rem;">
			<a href="<?php echo home_url('/'); ?>" style="color: var(--text-muted); text-decoration: none;">Home</a> &raquo; <span><?php single_post_title(); ?></span>
		</div>

		<h1 class="font-serif" style="font-size: 2.8rem; margin-bottom: 1rem; color: #FFFFFF;">
			<?php single_post_title(); ?>
		</h1>

		<p style="max-width: 780px; margin: 0 auto; color: var(--text-muted); font-size: 1.1rem; line-height: 1.7; text-align: justify; text-justify: inter-word;">
			Trusted Indian Astrologer &amp; Spiritual Specialist Serving Adelaide CBD, Prospect, Glenelg, Norwood &amp; All SA Suburbs.
		</p>
	</div>
</section>

<!-- MAIN 2-COLUMN CONTENT & SIDEBAR -->
<section class="section" style="padding: 3rem 0;">
	<div class="container">
		<div class="page-layout-grid">
			
			<!-- MAIN CONTENT (LEFT) -->
			<main class="page-main-content">
				<?php
				while ( have_posts() ) : the_post();
					?>
					<article class="glass-card" style="padding: 2.5rem; margin-bottom: 2rem;">
						<div class="entry-content" style="color: var(--text-main); line-height: 1.8; font-size: 1.05rem;">
							<?php the_content(); ?>
						</div>
					</article>
				<?php endwhile; ?>

				<!-- ASTROLOGICAL ASSURANCE BANNER -->
				<div class="glass-card" style="background: linear-gradient(135deg, rgba(229,184,73,0.12), rgba(157,78,221,0.15)); border: 1px solid var(--border-gold); padding: 2rem; border-radius: 20px; text-align: center; margin-top: 2rem;">
					<h3 class="font-serif text-gold" style="font-size: 1.6rem; margin-bottom: 0.5rem;">
						Need Immediate Spiritual Help in Adelaide?
					</h3>
					<p style="color: var(--text-muted); margin-bottom: 1.5rem; text-align: justify; text-justify: inter-word;">
						Astrologer <?php echo esc_html( $astro_name ); ?> provides 100% private, fast, and permanent Vedic solutions for all your personal, love, and spiritual challenges.
					</p>
					<div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
						<a href="tel:<?php echo esc_attr( $astro_phone_clean ); ?>" class="btn btn-gold">
							<i class="fa-solid fa-phone"></i> Call Now (<?php echo esc_html( $astro_phone ); ?>)
						</a>
						<a href="https://wa.me/<?php echo esc_attr( $astro_wa ); ?>" class="btn btn-whatsapp" target="_blank">
							<i class="fa-brands fa-whatsapp"></i> WhatsApp Consultation
						</a>
					</div>
				</div>
			</main>

			<!-- SIDEBAR (RIGHT) -->
			<aside class="page-sidebar" style="display: flex; flex-direction: column; gap: 2rem;">
				
				<!-- SIDEBAR QUICK CONSULTATION FORM -->
				<div class="glass-card" style="border: 1px solid var(--border-gold); padding: 1.75rem;">
					<h3 class="font-serif text-gold" style="font-size: 1.3rem; margin-bottom: 0.5rem; text-align: center;">
						<i class="fa-solid fa-calendar-check text-gold" style="margin-right: 0.4rem;"></i> Book Consultation
					</h3>
					<p style="font-size: 0.85rem; color: var(--text-muted); text-align: center; margin-bottom: 1.25rem;">
						Direct private consultation with Astrologer <?php echo esc_html( $astro_name ); ?>
					</p>

					<form id="sidebarConsultForm" class="astrologer-consult-form" action="#" method="POST">
						<div class="form-group">
							<label for="sidebarFullName"><i class="fa-solid fa-user text-gold"></i> Full Name</label>
							<input type="text" id="sidebarFullName" name="full_name" class="form-input" placeholder="Your full name" required>
						</div>

						<div class="form-group">
							<label for="sidebarPhoneNumber"><i class="fa-solid fa-phone text-gold"></i> Phone Number</label>
							<input type="tel" id="sidebarPhoneNumber" name="phone_number" class="form-input" placeholder="+61 400 000 000" required>
						</div>

						<div class="form-group">
							<label for="sidebarEmailAddress"><i class="fa-solid fa-envelope text-gold"></i> Email Address</label>
							<input type="email" id="sidebarEmailAddress" name="email" class="form-input" placeholder="your@email.com" required>
						</div>

						<div class="form-group">
							<label for="sidebarServiceRequired"><i class="fa-solid fa-wand-magic-sparkles text-gold"></i> Service Required</label>
							<select id="sidebarServiceRequired" name="service_required" class="form-input" required>
								<option value="" disabled selected>Select a service</option>
								<option value="Black Magic Removal Adelaide">Black Magic Removal Adelaide</option>
								<option value="Get Your Ex Love Back Adelaide">Get Your Ex Love Back Adelaide</option>
								<option value="Negative Energy Removal">Negative Energy Removal</option>
								<option value="Love Problem Solution">Love Problem Solution</option>
								<option value="Psychic Reading Adelaide">Psychic Reading Adelaide</option>
								<option value="Tarot Card Reading">Tarot Card Reading</option>
								<option value="Vashikaran Specialist Adelaide">Vashikaran Specialist Adelaide</option>
								<option value="Marriage & Relationships">Marriage & Relationships</option>
								<option value="Spiritual Healing Adelaide">Spiritual Healing Adelaide</option>
								<option value="Palm Reading Adelaide">Palm Reading Adelaide</option>
								<option value="Horoscope & Kundli Reading">Horoscope & Kundli Reading</option>
								<option value="Pooja & Hawan Services">Pooja & Hawan Services</option>
								<option value="Career & Business Guidance">Career & Business Guidance</option>
								<option value="Court Case & Dispute Resolution">Court Case & Dispute Resolution</option>
								<option value="General Spiritual Consultation">General Spiritual Consultation</option>
							</select>
						</div>

						<div class="form-group">
							<label for="sidebarMessage"><i class="fa-solid fa-comment-dots text-gold"></i> Message</label>
							<textarea id="sidebarMessage" name="message" class="form-input" rows="3" placeholder="Tell us about your needs..."></textarea>
						</div>

						<button type="submit" class="btn btn-gold" style="width: 100%; justify-content: center; margin-top: 0.5rem; font-size: 0.95rem; border-radius: 50px;">
							<i class="fa-solid fa-paper-plane"></i> Book Consultation
						</button>
					</form>
				</div>

				<!-- ALL SERVICES NAVIGATION -->
				<div class="glass-card" style="padding: 1.75rem;">
					<h3 class="font-serif text-gold" style="font-size: 1.2rem; margin-bottom: 1rem; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 0.5rem;">
						<i class="fa-solid fa-star text-gold" style="margin-right: 0.4rem;"></i> All Adelaide Services
					</h3>
					<ul style="list-style: none; display: flex; flex-direction: column; gap: 0.75rem; padding: 0; margin: 0;">
						<li><a href="<?php echo home_url('/black-magic-removal-adelaide/'); ?>" class="adelaide-service-link" style="font-size: 0.9rem;"><i class="fa-solid fa-chevron-right" style="color: var(--primary-gold); font-size: 0.75rem; margin-right: 0.4rem;"></i> Black Magic Removal</a></li>
						<li><a href="<?php echo home_url('/get-your-ex-love-back-adelaide/'); ?>" class="adelaide-service-link" style="font-size: 0.9rem;"><i class="fa-solid fa-chevron-right" style="color: var(--primary-gold); font-size: 0.75rem; margin-right: 0.4rem;"></i> Get Your Ex Love Back</a></li>
						<li><a href="<?php echo home_url('/negative-energy-removal-adelaide/'); ?>" class="adelaide-service-link" style="font-size: 0.9rem;"><i class="fa-solid fa-chevron-right" style="color: var(--primary-gold); font-size: 0.75rem; margin-right: 0.4rem;"></i> Negative Energy Removal</a></li>
						<li><a href="<?php echo home_url('/love-problem-solution-adelaide/'); ?>" class="adelaide-service-link" style="font-size: 0.9rem;"><i class="fa-solid fa-chevron-right" style="color: var(--primary-gold); font-size: 0.75rem; margin-right: 0.4rem;"></i> Love Problem Solution</a></li>
						<li><a href="<?php echo home_url('/psychic-reading-adelaide/'); ?>" class="adelaide-service-link" style="font-size: 0.9rem;"><i class="fa-solid fa-chevron-right" style="color: var(--primary-gold); font-size: 0.75rem; margin-right: 0.4rem;"></i> Psychic Reading Adelaide</a></li>
						<li><a href="<?php echo home_url('/tarot-card-reading-adelaide/'); ?>" class="adelaide-service-link" style="font-size: 0.9rem;"><i class="fa-solid fa-chevron-right" style="color: var(--primary-gold); font-size: 0.75rem; margin-right: 0.4rem;"></i> Tarot Card Reading</a></li>
						<li><a href="<?php echo home_url('/vashikaran-specialist-adelaide/'); ?>" class="adelaide-service-link" style="font-size: 0.9rem;"><i class="fa-solid fa-chevron-right" style="color: var(--primary-gold); font-size: 0.75rem; margin-right: 0.4rem;"></i> Vashikaran Specialist</a></li>
						<li><a href="<?php echo home_url('/spiritual-healing-adelaide/'); ?>" class="adelaide-service-link" style="font-size: 0.9rem;"><i class="fa-solid fa-chevron-right" style="color: var(--primary-gold); font-size: 0.75rem; margin-right: 0.4rem;"></i> Spiritual Healing</a></li>
						<li><a href="<?php echo home_url('/palm-reading-adelaide/'); ?>" class="adelaide-service-link" style="font-size: 0.9rem;"><i class="fa-solid fa-chevron-right" style="color: var(--primary-gold); font-size: 0.75rem; margin-right: 0.4rem;"></i> Palm Reading Adelaide</a></li>
						<li><a href="<?php echo home_url('/horoscope-astrology-reading-adelaide/'); ?>" class="adelaide-service-link" style="font-size: 0.9rem;"><i class="fa-solid fa-chevron-right" style="color: var(--primary-gold); font-size: 0.75rem; margin-right: 0.4rem;"></i> Horoscope &amp; Astrology</a></li>
						<li><a href="<?php echo home_url('/marriage-relationship-problems-adelaide/'); ?>" class="adelaide-service-link" style="font-size: 0.9rem;"><i class="fa-solid fa-chevron-right" style="color: var(--primary-gold); font-size: 0.75rem; margin-right: 0.4rem;"></i> Marriage Problems</a></li>
						<li><a href="<?php echo home_url('/pooja-spiritual-services-adelaide/'); ?>" class="adelaide-service-link" style="font-size: 0.9rem;"><i class="fa-solid fa-chevron-right" style="color: var(--primary-gold); font-size: 0.75rem; margin-right: 0.4rem;"></i> Pooja &amp; Hawan Services</a></li>
					</ul>
				</div>

				<!-- CONFIDENTIALITY BADGE -->
				<div class="glass-card" style="text-align: center; padding: 1.5rem; border: 1px solid rgba(229,184,73,0.3);">
					<i class="fa-solid fa-lock" style="font-size: 2.2rem; color: var(--primary-gold); margin-bottom: 0.5rem;"></i>
					<h4 class="font-serif text-gold" style="font-size: 1.1rem; margin-bottom: 0.4rem;">100% Privacy Guaranteed</h4>
					<p style="font-size: 0.85rem; color: var(--text-muted); margin: 0; text-align: justify; text-justify: inter-word;">
						Your personal information and consultation details remain completely confidential.
					</p>
				</div>

			</aside>
		</div>
	</div>
</section>

<?php
get_footer();
