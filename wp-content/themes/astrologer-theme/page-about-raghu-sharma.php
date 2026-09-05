<?php
/**
 * Template Name: About Astrologer Page
 *
 * @package AstrologerTheme
 */

get_header();
$astro_name     = get_theme_mod( 'astrologer_name', 'Raghu Sharma' );
$astro_phone    = get_theme_mod( 'astrologer_phone', '+61 400 000 000' );
$astro_wa       = get_theme_mod( 'astrologer_whatsapp', '61400000000' );
$astro_phone_clean = preg_replace( '/[^0-9+]/', '', $astro_phone );
$profile_img    = get_template_directory_uri() . '/assets/images/astrologer-profile.png';
?>

<!-- ABOUT HERO BANNER -->
<section class="page-hero-section section">
	<div class="container" style="text-align: center; max-width: 900px;">
		<div class="breadcrumbs" style="color: var(--text-gold); font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.8rem;">
			<a href="<?php echo home_url('/'); ?>" style="color: var(--text-muted); text-decoration: none;">Home</a> &raquo; <span>About Acharya <?php echo esc_html($astro_name); ?></span>
		</div>
		<h1 class="font-serif" style="font-size: 2.8rem; margin-bottom: 1rem; color: #FFFFFF;">
			About Master <span class="text-gold">Raghu Sharma</span>
		</h1>
		<p style="max-width: 780px; margin: 0 auto; color: var(--text-muted); font-size: 1.1rem; line-height: 1.7; text-align: justify; text-justify: inter-word;">
			Adelaide's leading Indian Vedic Astrologer, Psychic Reader, and Black Magic Removal Specialist with over 25 years of sacred lineage. Empowering thousands of individuals and families across South Australia.
		</p>
	</div>
</section>

<!-- MAIN BIOGRAPHY SECTION -->
<section class="section" style="padding-top: 1rem;">
	<div class="container">
		<div class="about-page-grid">
			
			<!-- LEFT COLUMN: PROFILE CARD & PRIVACY GUARANTEE -->
			<div style="display: flex; flex-direction: column; gap: 1.8rem;">
				<!-- PROFILE CARD -->
				<div class="glass-card" style="padding: 2rem; text-align: center; border: 1px solid var(--border-gold);">
					<div style="width: 140px; height: 140px; border-radius: 50%; border: 3px solid var(--primary-gold); margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; background: rgba(229, 184, 73, 0.1); font-size: 4rem; color: var(--primary-gold);">
						<i class="fa-solid fa-user-astronaut"></i>
					</div>
					<h3 class="font-serif" style="font-size: 1.5rem; margin-bottom: 0.3rem; color: #FFFFFF;">Acharya <?php echo esc_html($astro_name); ?></h3>
					<p style="color: var(--text-gold); font-size: 0.9rem; font-weight: 600; margin-bottom: 1.2rem;">Senior Vedic Astrologer &amp; Spiritual Healer</p>

					<div style="display: flex; flex-direction: column; gap: 0.8rem; text-align: left; background: rgba(7, 6, 20, 0.5); padding: 1.2rem; border-radius: 12px; border: 1px solid rgba(229, 184, 73, 0.2); font-size: 0.88rem;">
						<div><i class="fa-solid fa-award text-gold" style="width: 22px;"></i> <strong>25+ Years</strong> Ancestral Wisdom</div>
						<div><i class="fa-solid fa-users text-gold" style="width: 22px;"></i> <strong>10,000+</strong> Happy Clients Worldwide</div>
						<div><i class="fa-solid fa-location-dot text-gold" style="width: 22px;"></i> <strong>Location:</strong> Adelaide, SA</div>
						<div><i class="fa-solid fa-lock text-gold" style="width: 22px;"></i> <strong>100% Confidential</strong> Consultations</div>
					</div>

					<div style="margin-top: 1.5rem; display: flex; flex-direction: column; gap: 0.8rem;">
						<a href="tel:<?php echo esc_attr( $astro_phone_clean ); ?>" class="btn btn-gold" style="width: 100%; justify-content: center;">
							<i class="fa-solid fa-phone"></i> Call <?php echo esc_html( $astro_phone ); ?>
						</a>
						<a href="<?php echo home_url('/contact-us/'); ?>" class="btn btn-outline" style="width: 100%; justify-content: center;">
							<i class="fa-solid fa-calendar-check text-gold"></i> Book Consultation
						</a>
					</div>
				</div>

				<!-- PRIVACY & CONFIDENTIALITY GUARANTEE CARD -->
				<div class="glass-card" style="padding: 1.8rem; border: 1px solid rgba(229, 184, 73, 0.25);">
					<div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
						<div style="width: 42px; height: 42px; border-radius: 50%; background: rgba(229, 184, 73, 0.12); border: 1px solid var(--primary-gold); display: flex; align-items: center; justify-content: center; color: var(--primary-gold); font-size: 1.2rem; flex-shrink: 0;">
							<i class="fa-solid fa-user-shield"></i>
						</div>
						<h4 class="font-serif" style="font-size: 1.2rem; color: #FFFFFF; margin: 0;">100% Privacy Guarantee</h4>
					</div>
					<p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6; margin-bottom: 1rem; text-align: justify; text-justify: inter-word;">
						Your personal information, birth details, and consultation discussions remain 100% protected, private, and confidential.
					</p>
					<ul style="padding-left: 0; margin: 0; display: flex; flex-direction: column; gap: 0.65rem; font-size: 0.88rem; color: var(--text-main); list-style: none;">
						<li style="display: flex; align-items: center; gap: 0.5rem;"><i class="fa-solid fa-circle-check text-gold"></i> No third-party data sharing</li>
						<li style="display: flex; align-items: center; gap: 0.5rem;"><i class="fa-solid fa-circle-check text-gold"></i> Private 1-on-1 consultations</li>
						<li style="display: flex; align-items: center; gap: 0.5rem;"><i class="fa-solid fa-circle-check text-gold"></i> Discrete spiritual remedies</li>
					</ul>
				</div>
			</div>

			<!-- RIGHT COLUMN: DETAILED BIOGRAPHY -->
			<div class="glass-card" style="padding: 2.5rem; border: 1px solid rgba(229, 184, 73, 0.25);">
				<h2 class="font-serif" style="font-size: 2rem; color: #FFFFFF; margin-bottom: 1rem; border-bottom: 1px solid rgba(229, 184, 73, 0.2); padding-bottom: 0.75rem;">
					Sacred Heritage &amp; Spiritual Mission
				</h2>

				<p style="color: var(--text-main); font-size: 1.05rem; line-height: 1.8; margin-bottom: 1.5rem; text-align: justify; text-justify: inter-word;">
					Acharya <strong><?php echo esc_html($astro_name); ?></strong> comes from a prestigious family line of traditional Indian Vedic scholars, astrologers, and spiritual healers. From early childhood, Master Raghu Sharma underwent rigorous instruction in Jyotish Shastra, Palmistry, Chakra Balancing, and Tantrik Cleansing Rituals under divine guidance.
				</p>

				<p style="color: var(--text-main); font-size: 1.05rem; line-height: 1.8; margin-bottom: 2rem; text-align: justify; text-justify: inter-word;">
					Having settled in Adelaide over two decades ago, Acharya Raghu Sharma has earned a reputation as South Australia’s most trusted spiritual guide. He has successfully assisted people from all walks of life—resolving severe black magic afflictions, restoring alienated lovers, guiding business decisions, and providing clarity through accurate horoscope readings.
				</p>

				<!-- MISSION STATEMENT HIGHLIGHT BOX -->
				<div style="background: rgba(229, 184, 73, 0.08); border-left: 4px solid var(--primary-gold); padding: 1.5rem; border-radius: 0 16px 16px 0; margin-bottom: 2.5rem;">
					<h4 class="font-serif" style="color: var(--primary-gold); font-size: 1.2rem; margin-bottom: 0.5rem;">
						<i class="fa-solid fa-quote-left"></i> Our Divine Pledge to Adelaide Residents
					</h4>
					<p style="font-style: italic; color: var(--text-muted); margin: 0; line-height: 1.6; text-align: justify; text-justify: inter-word;">
						"To eliminate evil influences, heal wounded hearts, and guide every seeker toward lifelong peace, spiritual alignment, and prosperity through harmless, authentic Vedic remedies."
					</p>
				</div>

				<!-- CORE SPECIALISATIONS HIGHLIGHT -->
				<h3 class="font-serif" style="font-size: 1.5rem; color: #FFFFFF; margin-bottom: 1.2rem;">
					Core Specialisations in Adelaide
				</h3>

				<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 1.2rem; margin-bottom: 2rem;">
					
					<div style="background: rgba(7, 6, 20, 0.6); border: 1px solid rgba(229, 184, 73, 0.2); padding: 1.2rem; border-radius: 14px;">
						<h4 style="font-size: 1.05rem; margin-bottom: 0.4rem;">
							<a href="<?php echo home_url('/black-magic-removal-adelaide/'); ?>" class="adelaide-service-link">
								<i class="fa-solid fa-shield-halved text-gold" style="margin-right: 0.4rem;"></i> Black Magic Removal
							</a>
						</h4>
						<p style="color: var(--text-muted); font-size: 0.88rem; margin: 0; text-align: justify; text-justify: inter-word;">Cleansing Kala Jadu, evil eye, and dark entity attachments.</p>
					</div>

					<div style="background: rgba(7, 6, 20, 0.6); border: 1px solid rgba(229, 184, 73, 0.2); padding: 1.2rem; border-radius: 14px;">
						<h4 style="font-size: 1.05rem; margin-bottom: 0.4rem;">
							<a href="<?php echo home_url('/get-your-ex-love-back-adelaide/'); ?>" class="adelaide-service-link">
								<i class="fa-solid fa-heart-circle-bolt text-gold" style="margin-right: 0.4rem;"></i> Get Ex Love Back
							</a>
						</h4>
						<p style="color: var(--text-muted); font-size: 0.88rem; margin: 0; text-align: justify; text-justify: inter-word;">Re-igniting lost intimacy and restoring broken relationships.</p>
					</div>

					<div style="background: rgba(7, 6, 20, 0.6); border: 1px solid rgba(229, 184, 73, 0.2); padding: 1.2rem; border-radius: 14px;">
						<h4 style="font-size: 1.05rem; margin-bottom: 0.4rem;">
							<a href="<?php echo home_url('/vashikaran-specialist-adelaide/'); ?>" class="adelaide-service-link">
								<i class="fa-solid fa-dharmachakra text-gold" style="margin-right: 0.4rem;"></i> Vashikaran Mantras
							</a>
						</h4>
						<p style="color: var(--text-muted); font-size: 0.88rem; margin: 0; text-align: justify; text-justify: inter-word;">Positive, non-harmful mantras for love & marital harmony.</p>
					</div>

					<div style="background: rgba(7, 6, 20, 0.6); border: 1px solid rgba(229, 184, 73, 0.2); padding: 1.2rem; border-radius: 14px;">
						<h4 style="font-size: 1.05rem; margin-bottom: 0.4rem;">
							<a href="<?php echo home_url('/horoscope-astrology-reading-adelaide/'); ?>" class="adelaide-service-link">
								<i class="fa-solid fa-sun text-gold" style="margin-right: 0.4rem;"></i> Kundli &amp; Gemstones
							</a>
						</h4>
						<p style="color: var(--text-muted); font-size: 0.88rem; margin: 0; text-align: justify; text-justify: inter-word;">Comprehensive birth chart analysis and planetary Dasha fixes.</p>
					</div>

				</div>

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
					Consult Master <span class="text-gold"><?php echo esc_html( $astro_name ); ?></span> Today
				</h2>
				<p class="cta-banner-desc" style="text-align: justify; text-justify: inter-word;">
					Get compassionate, confidential advice tailored specifically to your birth chart and life situation. Available across Adelaide CBD, Prospect, Glenelg, Norwood, Salisbury, and all SA suburbs.
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
