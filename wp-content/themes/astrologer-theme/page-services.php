<?php
/**
 * Template Name: All Services Page
 *
 * @package AstrologerTheme
 */

get_header();
$astro_name     = get_theme_mod( 'astrologer_name', 'Raghu Sharma' );
$astro_phone    = get_theme_mod( 'astrologer_phone', '+61 400 000 000' );
$astro_phone_clean = preg_replace( '/[^0-9+]/', '', $astro_phone );
?>

<!-- SERVICES HERO BANNER -->
<section class="page-hero-section">
	<div class="container text-center" style="max-width: 900px;">
		<div class="breadcrumbs" style="color: var(--primary-gold); font-size: 0.85rem; margin-bottom: 0.75rem; text-transform: uppercase; letter-spacing: 1px;">
			<a href="<?php echo home_url('/'); ?>" style="color: var(--text-muted); text-decoration: none;">Home</a> &nbsp;»&nbsp; <span>Services</span>
		</div>
		<h1 class="font-serif text-gold" style="font-size: 2.8rem; line-height: 1.2; margin-bottom: 1rem;">
			Our Specialised <span class="text-gold">Astrology &amp; Spiritual Services</span>
		</h1>
		<p style="color: var(--text-muted); font-size: 1.1rem; max-width: 780px; margin: 0 auto 1.5rem auto; line-height: 1.7; text-align: justify; text-justify: inter-word;">
			Acharya <?php echo esc_html($astro_name); ?> provides Adelaide’s most authentic Indian Astrology, Vashikaran, Black Magic Removal, and Psychic Reading solutions. Explore our 14 core spiritual remedies designed to eliminate dark energies, align your chakras, and restore love and prosperity.
		</p>

		<!-- METRICS BADGES STRIP -->
		<div style="margin-top: 2rem; display: flex; justify-content: center; gap: 1.2rem; flex-wrap: wrap;">
			<div style="display: flex; align-items: center; gap: 0.6rem; background: rgba(229, 184, 73, 0.08); border: 1px solid rgba(229, 184, 73, 0.25); padding: 0.5rem 1.2rem; border-radius: 50px; font-size: 0.85rem; color: var(--text-gold);">
				<i class="fa-solid fa-gem"></i> <strong>14+</strong> Specialised Services
			</div>
			<div style="display: flex; align-items: center; gap: 0.6rem; background: rgba(229, 184, 73, 0.08); border: 1px solid rgba(229, 184, 73, 0.25); padding: 0.5rem 1.2rem; border-radius: 50px; font-size: 0.85rem; color: var(--text-gold);">
				<i class="fa-solid fa-chart-line"></i> <strong>99.4%</strong> Success Rate
			</div>
			<div style="display: flex; align-items: center; gap: 0.6rem; background: rgba(229, 184, 73, 0.08); border: 1px solid rgba(229, 184, 73, 0.25); padding: 0.5rem 1.2rem; border-radius: 50px; font-size: 0.85rem; color: var(--text-gold);">
				<i class="fa-solid fa-user-shield"></i> <strong>100%</strong> Private & Confidential
			</div>
			<div style="display: flex; align-items: center; gap: 0.6rem; background: rgba(229, 184, 73, 0.08); border: 1px solid rgba(229, 184, 73, 0.25); padding: 0.5rem 1.2rem; border-radius: 50px; font-size: 0.85rem; color: var(--text-gold);">
				<i class="fa-solid fa-clock"></i> <strong>24/7</strong> Immediate Guidance
			</div>
		</div>
	</div>
</section>

<!-- ALL 14 SERVICES GRID SECTION -->
<section class="section" style="padding-top: 1rem;">
	<div class="container">
		<div class="services-grid">

			<!-- SERVICE 1 -->
			<div class="glass-card service-card">
				<div class="service-card-header">
					<div class="service-icon"><i class="fa-solid fa-shield-halved"></i></div>
					<h3 class="font-serif"><a href="<?php echo home_url('/black-magic-removal-adelaide/'); ?>" style="color: var(--text-main); text-decoration: none;">Black Magic Removal Adelaide</a></h3>
				</div>
				<p style="text-align: justify; text-justify: inter-word;">Complete cleansing of dark spells, Kala Jadu, witchcraft, evil eye afflictions, and demonic energies troubling Adelaide families.</p>
				<a href="<?php echo home_url('/contact-us/'); ?>" class="btn btn-outline" style="font-size: 0.85rem; padding: 0.4rem 1rem;"><i class="fa-solid fa-calendar-check text-gold"></i> Book Consultation</a>
			</div>

			<!-- SERVICE 2 -->
			<div class="glass-card service-card">
				<div class="service-card-header">
					<div class="service-icon"><i class="fa-solid fa-heart-circle-bolt"></i></div>
					<h3 class="font-serif"><a href="<?php echo home_url('/get-your-ex-love-back-adelaide/'); ?>" style="color: var(--text-main); text-decoration: none;">Get Your Ex Love Back Adelaide</a></h3>
				</div>
				<p style="text-align: justify; text-justify: inter-word;">Re-ignite lost affection and bring your ex-partner back into your life through customized, non-destructive Vedic attraction rituals.</p>
				<a href="<?php echo home_url('/contact-us/'); ?>" class="btn btn-outline" style="font-size: 0.85rem; padding: 0.4rem 1rem;"><i class="fa-solid fa-calendar-check text-gold"></i> Book Consultation</a>
			</div>

			<!-- SERVICE 3 -->
			<div class="glass-card service-card">
				<div class="service-card-header">
					<div class="service-icon"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
					<h3 class="font-serif"><a href="<?php echo home_url('/negative-energy-removal-adelaide/'); ?>" style="color: var(--text-main); text-decoration: none;">Negative Energy Removal</a></h3>
				</div>
				<p style="text-align: justify; text-justify: inter-word;">Clear toxic environmental vibrations, house hauntings, aura blockages, and unexplained illness to restore peaceful living.</p>
				<a href="<?php echo home_url('/contact-us/'); ?>" class="btn btn-outline" style="font-size: 0.85rem; padding: 0.4rem 1rem;"><i class="fa-solid fa-calendar-check text-gold"></i> Book Consultation</a>
			</div>

			<!-- SERVICE 4 -->
			<div class="glass-card service-card">
				<div class="service-card-header">
					<div class="service-icon"><i class="fa-solid fa-heart-crack"></i></div>
					<h3 class="font-serif"><a href="<?php echo home_url('/love-problem-solution-adelaide/'); ?>" style="color: var(--text-main); text-decoration: none;">Love Problem Solution</a></h3>
				</div>
				<p style="text-align: justify; text-justify: inter-word;">Overcome inter-caste obstacles, parental opposition, communication breakdowns, and trust issues with your loved one.</p>
				<a href="<?php echo home_url('/contact-us/'); ?>" class="btn btn-outline" style="font-size: 0.85rem; padding: 0.4rem 1rem;"><i class="fa-solid fa-calendar-check text-gold"></i> Book Consultation</a>
			</div>

			<!-- SERVICE 5 -->
			<div class="glass-card service-card">
				<div class="service-card-header">
					<div class="service-icon"><i class="fa-solid fa-eye"></i></div>
					<h3 class="font-serif"><a href="<?php echo home_url('/psychic-reading-adelaide/'); ?>" style="color: var(--text-main); text-decoration: none;">Psychic Reading Adelaide</a></h3>
				</div>
				<p style="text-align: justify; text-justify: inter-word;">Highly accurate intuitive psychic insights into your future destiny, uncovering hidden truths regarding love, wealth, and health.</p>
				<a href="<?php echo home_url('/contact-us/'); ?>" class="btn btn-outline" style="font-size: 0.85rem; padding: 0.4rem 1rem;"><i class="fa-solid fa-calendar-check text-gold"></i> Book Consultation</a>
			</div>

			<!-- SERVICE 6 -->
			<div class="glass-card service-card">
				<div class="service-card-header">
					<div class="service-icon"><i class="fa-solid fa-tarot-card"></i></div>
					<h3 class="font-serif"><a href="<?php echo home_url('/tarot-card-reading-adelaide/'); ?>" style="color: var(--text-main); text-decoration: none;">Tarot Card Reading</a></h3>
				</div>
				<p style="text-align: justify; text-justify: inter-word;">Gain immediate clarity on life choices, career direction, and spiritual crossroads through expert ancient Tarot card spreads.</p>
				<a href="<?php echo home_url('/contact-us/'); ?>" class="btn btn-outline" style="font-size: 0.85rem; padding: 0.4rem 1rem;"><i class="fa-solid fa-calendar-check text-gold"></i> Book Consultation</a>
			</div>

			<!-- SERVICE 7 -->
			<div class="glass-card service-card">
				<div class="service-card-header">
					<div class="service-icon"><i class="fa-solid fa-dharmachakra"></i></div>
					<h3 class="font-serif"><a href="<?php echo home_url('/vashikaran-specialist-adelaide/'); ?>" style="color: var(--text-main); text-decoration: none;">Vashikaran Specialist</a></h3>
				</div>
				<p style="text-align: justify; text-justify: inter-word;">Positive, ethical Vashikaran mantras to influence mindsets, resolve marital distance, and attract positive relationship vibes.</p>
				<a href="<?php echo home_url('/contact-us/'); ?>" class="btn btn-outline" style="font-size: 0.85rem; padding: 0.4rem 1rem;"><i class="fa-solid fa-calendar-check text-gold"></i> Book Consultation</a>
			</div>

			<!-- SERVICE 8 -->
			<div class="glass-card service-card">
				<div class="service-card-header">
					<div class="service-icon"><i class="fa-solid fa-ring"></i></div>
					<h3 class="font-serif"><a href="<?php echo home_url('/marriage-relationship-problems-adelaide/'); ?>" style="color: var(--text-main); text-decoration: none;">Marriage & Relationships</a></h3>
				</div>
				<p style="text-align: justify; text-justify: inter-word;">Prevent divorce, resolve in-law friction, and rebuild deep emotional intimacy with tailored matrimonial astrology.</p>
				<a href="<?php echo home_url('/contact-us/'); ?>" class="btn btn-outline" style="font-size: 0.85rem; padding: 0.4rem 1rem;"><i class="fa-solid fa-calendar-check text-gold"></i> Book Consultation</a>
			</div>

			<!-- SERVICE 9 -->
			<div class="glass-card service-card">
				<div class="service-card-header">
					<div class="service-icon"><i class="fa-solid fa-hands-holding-child"></i></div>
					<h3 class="font-serif"><a href="<?php echo home_url('/spiritual-healing-adelaide/'); ?>" style="color: var(--text-main); text-decoration: none;">Spiritual Healing Adelaide</a></h3>
				</div>
				<p style="text-align: justify; text-justify: inter-word;">Deep chakra alignment, energy rebalancing, and emotional healing techniques to eliminate chronic stress and anxiety.</p>
				<a href="<?php echo home_url('/contact-us/'); ?>" class="btn btn-outline" style="font-size: 0.85rem; padding: 0.4rem 1rem;"><i class="fa-solid fa-calendar-check text-gold"></i> Book Consultation</a>
			</div>

			<!-- SERVICE 10 -->
			<div class="glass-card service-card">
				<div class="service-card-header">
					<div class="service-icon"><i class="fa-solid fa-hand"></i></div>
					<h3 class="font-serif"><a href="<?php echo home_url('/palm-reading-adelaide/'); ?>" style="color: var(--text-main); text-decoration: none;">Palm Reading Adelaide</a></h3>
				</div>
				<p style="text-align: justify; text-justify: inter-word;">Detailed palmistry analysis revealing life line longevity, heart line romance indicators, and fate line career prosperity.</p>
				<a href="<?php echo home_url('/contact-us/'); ?>" class="btn btn-outline" style="font-size: 0.85rem; padding: 0.4rem 1rem;"><i class="fa-solid fa-calendar-check text-gold"></i> Book Consultation</a>
			</div>

			<!-- SERVICE 11 -->
			<div class="glass-card service-card">
				<div class="service-card-header">
					<div class="service-icon"><i class="fa-solid fa-sun"></i></div>
					<h3 class="font-serif"><a href="<?php echo home_url('/horoscope-astrology-reading-adelaide/'); ?>" style="color: var(--text-main); text-decoration: none;">Horoscope & Kundli Reading</a></h3>
				</div>
				<p style="text-align: justify; text-justify: inter-word;">In-depth Vedic birth chart analysis, planetary Dasha calculations, and tailored gemstone remedies for maximum success.</p>
				<a href="<?php echo home_url('/contact-us/'); ?>" class="btn btn-outline" style="font-size: 0.85rem; padding: 0.4rem 1rem;"><i class="fa-solid fa-calendar-check text-gold"></i> Book Consultation</a>
			</div>

			<!-- SERVICE 12 -->
			<div class="glass-card service-card">
				<div class="service-card-header">
					<div class="service-icon"><i class="fa-solid fa-fire-flame-curved"></i></div>
					<h3 class="font-serif"><a href="<?php echo home_url('/pooja-spiritual-services-adelaide/'); ?>" style="color: var(--text-main); text-decoration: none;">Pooja & Hawan Services</a></h3>
				</div>
				<p style="text-align: justify; text-justify: inter-word;">Sacred Vedic Yagnas, Maha Mritunjay Hawan, Navgrah Shanti, and Lakshmi Pooja conducted at home or online in Adelaide.</p>
				<a href="<?php echo home_url('/contact-us/'); ?>" class="btn btn-outline" style="font-size: 0.85rem; padding: 0.4rem 1rem;"><i class="fa-solid fa-calendar-check text-gold"></i> Book Consultation</a>
			</div>

			<!-- SERVICE 13 -->
			<div class="glass-card service-card">
				<div class="service-card-header">
					<div class="service-icon"><i class="fa-solid fa-briefcase"></i></div>
					<h3 class="font-serif"><a href="<?php echo home_url('/contact-us/'); ?>" style="color: var(--text-main); text-decoration: none;">Career & Business Guidance</a></h3>
				</div>
				<p style="text-align: justify; text-justify: inter-word;">Overcome career stagnation, job loss, promotion hurdles, and business loss with planetary remedies and auspicious timings.</p>
				<a href="<?php echo home_url('/contact-us/'); ?>" class="btn btn-outline" style="font-size: 0.85rem; padding: 0.4rem 1rem;"><i class="fa-solid fa-calendar-check text-gold"></i> Book Consultation</a>
			</div>

			<!-- SERVICE 14 -->
			<div class="glass-card service-card">
				<div class="service-card-header">
					<div class="service-icon"><i class="fa-solid fa-scale-balanced"></i></div>
					<h3 class="font-serif"><a href="<?php echo home_url('/contact-us/'); ?>" style="color: var(--text-main); text-decoration: none;">Court Case & Dispute Resolution</a></h3>
				</div>
				<p style="text-align: justify; text-justify: inter-word;">Spiritual mantras and astrological rituals to resolve prolonged property disputes, inheritance battles, and legal matters.</p>
				<a href="<?php echo home_url('/contact-us/'); ?>" class="btn btn-outline" style="font-size: 0.85rem; padding: 0.4rem 1rem;"><i class="fa-solid fa-calendar-check text-gold"></i> Book Consultation</a>
			</div>

		</div>
	</div>
</section>

<!-- CALL TO ACTION BANNER -->
<section class="section cta-banner-section" style="padding: 40px 0;">
	<div class="container">
		<div class="cta-banner-card">
			<div class="cta-banner-content">
				<h2 class="cta-banner-title font-serif">
					Need Immediate <span class="text-gold">Spiritual Remedies?</span>
				</h2>
				<p class="cta-banner-desc" style="text-align: justify; text-justify: inter-word;">
					Don't let negativity or heartbreak control your destiny. Speak directly with Acharya <?php echo esc_html($astro_name); ?> for 100% private, confidential consultation in Adelaide.
				</p>
			</div>
			<div class="cta-banner-actions">
				<a href="tel:<?php echo esc_attr( $astro_phone_clean ); ?>" class="btn btn-gold btn-lg">
					<i class="fa-solid fa-phone"></i> Call <?php echo esc_html( $astro_phone ); ?>
				</a>
				<a href="<?php echo home_url('/contact-us/'); ?>" class="btn btn-outline btn-lg">
					<i class="fa-solid fa-calendar-check"></i> Book Consultation
				</a>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
