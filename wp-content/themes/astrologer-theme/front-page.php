<?php
/**
 * Template Name: Front Page Astrologer Adelaide
 *
 * @package AstroVeda
 */

get_header();
$theme_uri = get_template_directory_uri();
$astro_name     = get_theme_mod( 'astrologer_name', 'Raghu Sharma' );
$astro_phone    = get_theme_mod( 'astrologer_phone', '+61 400 000 000' );
$astro_wa       = get_theme_mod( 'astrologer_whatsapp', '61400000000' );
$astro_video    = get_theme_mod( 'astrologer_video_url', 'https://www.youtube-nocookie.com/embed/dQw4w9WgXcQ?rel=0' );
$astro_phone_clean = preg_replace( '/[^0-9+]/', '', $astro_phone );
?>

<!-- HERO SECTION -->
<section id="home" class="hero-section">
	<div class="nebula-glow nebula-1"></div>
	<div class="nebula-glow nebula-2"></div>
	<div class="nebula-glow nebula-3"></div>
	<div class="galaxy-stars"></div>

	<div class="shooting-star star-1"></div>
	<div class="shooting-star star-2"></div>

	<div class="hero-overlay"></div>

	<div class="container hero-content">
		<div class="hero-text">
			<div class="hero-badge">
				<i class="fa-solid fa-wand-magic-sparkles"></i> #1 Indian Astrologer in Adelaide, South Australia
			</div>
			<h1 class="hero-title font-serif">
				Astrologer <span class="text-gold"><?php echo esc_html( $astro_name ); ?></span> – Adelaide
			</h1>
			<p class="hero-subtitle">
				Specialised in <strong>Black Magic Removal</strong>, <strong>Get Your Ex Love Back</strong>, <strong>Psychic Reading</strong> &amp; <strong>Vashikaran</strong> across Adelaide CBD, Prospect, Glenelg, Salisbury, and all SA suburbs.
			</p>

			<div class="hero-cta">
				<a href="tel:<?php echo esc_attr( $astro_phone_clean ); ?>" class="btn btn-gold">
					<i class="fa-solid fa-phone"></i> Call <?php echo esc_html( $astro_phone ); ?>
				</a>
				<a href="https://wa.me/<?php echo esc_attr( $astro_wa ); ?>" class="btn btn-whatsapp" target="_blank">
					<i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
				</a>
			</div>

			<div class="hero-stats">
				<div class="stat-item">
					<div class="stat-num">25+</div>
					<div class="stat-label">Years Experience</div>
				</div>
				<div class="stat-item">
					<div class="stat-num">15K+</div>
					<div class="stat-label">Adelaide Clients</div>
				</div>
				<div class="stat-item">
					<div class="stat-num">100%</div>
					<div class="stat-label">Private & Safe</div>
				</div>
			</div>
		</div>

		<div class="hero-visual">
			<img src="<?php echo $theme_uri; ?>/assets/images/hero-bg.png" alt="Rotating Horoscope Wheel Adelaide" class="rotating-horoscope-wheel">
		</div>
	</div>
</section>

<!-- ABOUT ASTROLOGER SECTION -->
<section id="about" class="section" style="background: rgba(13, 10, 29, 0.5);">
	<div class="container">
		<div class="about-grid">
			<div class="about-img-wrapper">
				<img src="<?php echo $theme_uri; ?>/assets/images/astrologer-profile.png" alt="Astrologer Raghu Sharma Adelaide">
				<div class="experience-badge">
					<div class="num">25+</div>
					<div class="text">Years Wisdom</div>
				</div>
			</div>

			<div class="about-info">
				<h2 class="section-title font-serif">About Astrologer <span class="text-gold"><?php echo esc_html( $astro_name ); ?></span></h2>
				<p style="color: var(--text-gold); font-weight: 600; font-size: 1.1rem; margin-bottom: 1rem;">
					Adelaide’s Most Renowned Indian Astrologer & Psychic Reader
				</p>
				<p style="color: var(--text-muted); margin-bottom: 1.5rem; font-size: 1.05rem;">
					Master <?php echo esc_html( $astro_name ); ?> has helped thousands of families and individuals across Adelaide, South Australia over the past 25 years. Combining ancestral Vedic astrology, psychic intuition, and sacred mantra energization, he delivers fast, permanent solutions for love, health, and negative energy problems.
				</p>

				<ul class="feature-list">
					<li><i class="fa-solid fa-check"></i> 100% Confidential Consultations</li>
					<li><i class="fa-solid fa-check"></i> Safe Vedic Rituals & Mantras</li>
					<li><i class="fa-solid fa-check"></i> Serving All Adelaide Suburbs</li>
					<li><i class="fa-solid fa-check"></i> Instant Phone & WhatsApp Support</li>
				</ul>

				<a href="<?php echo home_url('/about-raghu-sharma/'); ?>" class="btn btn-gold">
					<i class="fa-solid fa-user"></i> Read Full Bio
				</a>
			</div>
		</div>

		<!-- ABOUT SECTION METRICS STRIP -->
		<div class="section-metrics-strip" style="margin-top: 3rem; display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 1.5rem; text-align: center;">
			<div class="glass-card metric-box" style="padding: 1.2rem; border-color: rgba(229, 184, 73, 0.25);">
				<div style="font-size: 1.8rem; font-weight: 700; color: var(--primary-gold);" class="font-serif">25+</div>
				<div style="font-size: 0.8rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px;">Years Master Wisdom</div>
			</div>
			<div class="glass-card metric-box" style="padding: 1.2rem; border-color: rgba(229, 184, 73, 0.25);">
				<div style="font-size: 1.8rem; font-weight: 700; color: var(--primary-gold);" class="font-serif">15,000+</div>
				<div style="font-size: 0.8rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px;">Happy Families Restored</div>
			</div>
			<div class="glass-card metric-box" style="padding: 1.2rem; border-color: rgba(229, 184, 73, 0.25);">
				<div style="font-size: 1.8rem; font-weight: 700; color: var(--primary-gold);" class="font-serif">100%</div>
				<div style="font-size: 0.8rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px;">Safe Vedic Rituals</div>
			</div>
			<div class="glass-card metric-box" style="padding: 1.2rem; border-color: rgba(229, 184, 73, 0.25);">
				<div style="font-size: 1.8rem; font-weight: 700; color: var(--primary-gold);" class="font-serif">24/7</div>
				<div style="font-size: 0.8rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px;">Emergency Guidance</div>
			</div>
		</div>
	</div>
</section>

<!-- 14 SERVICES GRID SECTION -->
<section id="services" class="section">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title font-serif">Our Specialized <span class="text-gold">Adelaide Services</span></h2>
			<p class="section-desc">Tailored spiritual consultations designed to eliminate dark energies, restore love, and clear life blockages.</p>
		</div>

		<!-- SERVICES METRICS STRIP -->
		<div class="section-metrics-strip" style="margin-bottom: 2.5rem; display: flex; justify-content: center; gap: 1.5rem; flex-wrap: wrap;">
			<div style="display: flex; align-items: center; gap: 0.6rem; background: rgba(229, 184, 73, 0.08); border: 1px solid rgba(229, 184, 73, 0.25); padding: 0.5rem 1.2rem; border-radius: 50px; font-size: 0.85rem; color: var(--text-gold);">
				<i class="fa-solid fa-gem"></i> <strong>14+</strong> Specialized Services
			</div>
			<div style="display: flex; align-items: center; gap: 0.6rem; background: rgba(229, 184, 73, 0.08); border: 1px solid rgba(229, 184, 73, 0.25); padding: 0.5rem 1.2rem; border-radius: 50px; font-size: 0.85rem; color: var(--text-gold);">
				<i class="fa-solid fa-chart-line"></i> <strong>99.4%</strong> Success Rate
			</div>
			<div style="display: flex; align-items: center; gap: 0.6rem; background: rgba(229, 184, 73, 0.08); border: 1px solid rgba(229, 184, 73, 0.25); padding: 0.5rem 1.2rem; border-radius: 50px; font-size: 0.85rem; color: var(--text-gold);">
				<i class="fa-solid fa-location-dot"></i> <strong>50+</strong> SA Suburbs Covered
			</div>
			<div style="display: flex; align-items: center; gap: 0.6rem; background: rgba(229, 184, 73, 0.08); border: 1px solid rgba(229, 184, 73, 0.25); padding: 0.5rem 1.2rem; border-radius: 50px; font-size: 0.85rem; color: var(--text-gold);">
				<i class="fa-solid fa-shield-cat"></i> <strong>100%</strong> Non-Destructive Mantras
			</div>
		</div>

		<div class="services-grid">
			<!-- 1 -->
			<div class="glass-card service-card">
				<div class="service-card-header">
					<div class="service-icon"><i class="fa-solid fa-shield-halved"></i></div>
					<h3 class="font-serif"><a href="<?php echo home_url('/black-magic-removal-adelaide/'); ?>" style="color: var(--text-main); text-decoration: none;">Black Magic Removal Adelaide</a></h3>
				</div>
				<p>Complete cleansing of dark spells, Kala Jadu, witchcraft, and evil eye afflictions in Adelaide homes.</p>
				<a href="<?php echo home_url('/contact-us/'); ?>" class="btn btn-outline" style="font-size: 0.85rem; padding: 0.4rem 1rem;"><i class="fa-solid fa-calendar-check text-gold"></i> Book Consultation</a>
			</div>

			<!-- 2 -->
			<div class="glass-card service-card">
				<div class="service-card-header">
					<div class="service-icon"><i class="fa-solid fa-heart-circle-bolt"></i></div>
					<h3 class="font-serif"><a href="<?php echo home_url('/get-your-ex-love-back-adelaide/'); ?>" style="color: var(--text-main); text-decoration: none;">Get Your Ex Love Back Adelaide</a></h3>
				</div>
				<p>Re-ignite lost affection and bring your ex-partner back into your life with powerful astrological remedies.</p>
				<a href="<?php echo home_url('/contact-us/'); ?>" class="btn btn-outline" style="font-size: 0.85rem; padding: 0.4rem 1rem;"><i class="fa-solid fa-calendar-check text-gold"></i> Book Consultation</a>
			</div>

			<!-- 3 -->
			<div class="glass-card service-card">
				<div class="service-card-header">
					<div class="service-icon"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
					<h3 class="font-serif"><a href="<?php echo home_url('/negative-energy-removal-adelaide/'); ?>" style="color: var(--text-main); text-decoration: none;">Negative Energy Removal</a></h3>
				</div>
				<p>Clear toxic vibrations, aura blockages, and home negativity to restore peace and prosperity.</p>
				<a href="<?php echo home_url('/contact-us/'); ?>" class="btn btn-outline" style="font-size: 0.85rem; padding: 0.4rem 1rem;"><i class="fa-solid fa-calendar-check text-gold"></i> Book Consultation</a>
			</div>

			<!-- 4 -->
			<div class="glass-card service-card">
				<div class="service-card-header">
					<div class="service-icon"><i class="fa-solid fa-eye"></i></div>
					<h3 class="font-serif"><a href="<?php echo home_url('/psychic-reading-adelaide/'); ?>" style="color: var(--text-main); text-decoration: none;">Psychic Reading Adelaide</a></h3>
				</div>
				<p>Accurate intuitive psychic readings to reveal your future path in career, love, and health.</p>
				<a href="<?php echo home_url('/contact-us/'); ?>" class="btn btn-outline" style="font-size: 0.85rem; padding: 0.4rem 1rem;"><i class="fa-solid fa-calendar-check text-gold"></i> Book Consultation</a>
			</div>

			<!-- 5 -->
			<div class="glass-card service-card">
				<div class="service-card-header">
					<div class="service-icon"><i class="fa-solid fa-dharmachakra"></i></div>
					<h3 class="font-serif"><a href="<?php echo home_url('/vashikaran-specialist-adelaide/'); ?>" style="color: var(--text-main); text-decoration: none;">Vashikaran Specialist Adelaide</a></h3>
				</div>
				<p>Positive, ethical Vashikaran mantras to harmonize relationship conflicts and love attraction.</p>
				<a href="<?php echo home_url('/contact-us/'); ?>" class="btn btn-outline" style="font-size: 0.85rem; padding: 0.4rem 1rem;"><i class="fa-solid fa-calendar-check text-gold"></i> Book Consultation</a>
			</div>

			<!-- 6 -->
			<div class="glass-card service-card">
				<div class="service-card-header">
					<div class="service-icon"><i class="fa-solid fa-hands-holding-child"></i></div>
					<h3 class="font-serif"><a href="<?php echo home_url('/spiritual-healing-adelaide/'); ?>" style="color: var(--text-main); text-decoration: none;">Spiritual Healing Adelaide</a></h3>
				</div>
				<p>Deep chakra alignment and emotional healing techniques to eliminate stress and anxiety.</p>
				<a href="<?php echo home_url('/contact-us/'); ?>" class="btn btn-outline" style="font-size: 0.85rem; padding: 0.4rem 1rem;"><i class="fa-solid fa-calendar-check text-gold"></i> Book Consultation</a>
			</div>
		</div>

		<div style="text-align: center; margin-top: 2rem;">
			<a href="<?php echo home_url('/services/'); ?>" class="btn btn-gold" style="padding: 0.55rem 1.4rem; font-size: 0.88rem;">
				<i class="fa-solid fa-list-check"></i> View All 14 Specialised Services
			</a>
		</div>
	</div>
</section>

<!-- HIGH CONVERSION CTA BANNER SECTION -->
<section id="consultation" class="section cta-banner-section" style="padding: 20px 0;">
	<div class="container">
		<div class="cta-banner-card">
			<div class="cta-banner-content">
				<h2 class="cta-banner-title font-serif">
					Speak to Master <span class="text-gold"><?php echo esc_html( $astro_name ); ?></span> — Free Consultation
				</h2>
				<p class="cta-banner-desc">
					Black magic removal, negative energy cleansing, love & relationship solutions — confidential support across <strong>Adelaide CBD</strong>, <strong>Prospect</strong>, <strong>Glenelg</strong>, <strong>Salisbury</strong>, and all of South Australia.
				</p>
			</div>

			<div class="cta-banner-actions">
				<a href="tel:<?php echo esc_attr( $astro_phone_clean ); ?>" class="btn cta-btn-phone">
					<i class="fa-solid fa-phone"></i> Call Now <?php echo esc_html( $astro_phone ); ?>
				</a>
				<a href="https://wa.me/<?php echo esc_attr( $astro_wa ); ?>" class="btn cta-btn-whatsapp" target="_blank">
					<i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
				</a>
				<a href="<?php echo home_url('/contact-us/'); ?>" class="btn cta-btn-services">
					<i class="fa-solid fa-calendar-check"></i> Book Consultation
				</a>
			</div>
		</div>
	</div>
</section>

<!-- VIDEO TESTIMONIAL SECTION -->
<section id="video-testimonial" class="section video-grid-section">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title font-serif">What Our <span class="text-gold">Clients Say</span></h2>
			<p class="section-desc">Watch real video testimonials from clients across Adelaide sharing their success stories.</p>
		</div>

		<div class="video-grid">
			<!-- Video Card 1 -->
			<div class="video-card">
				<div class="v-card-frame">
					<iframe src="<?php echo esc_url( $astro_video ); ?>" title="Client Video Testimonial 1 - Astrologer Raghu Sharma" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="v-card-body">
					<div class="v-card-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
					<h3 class="v-card-name font-serif">Manpreet Singh</h3>
					<div class="v-card-meta">
						<span><i class="fa-solid fa-shield-halved text-gold"></i> Black Magic Cleansing</span>
						<span><i class="fa-solid fa-location-dot text-gold"></i> Prospect, SA</span>
					</div>
				</div>
			</div>

			<!-- Video Card 2 -->
			<div class="video-card">
				<div class="v-card-frame">
					<iframe src="<?php echo esc_url( $astro_video ); ?>" title="Client Video Testimonial 2 - Astrologer Raghu Sharma" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="v-card-body">
					<div class="v-card-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
					<h3 class="v-card-name font-serif">Sarah & Liam</h3>
					<div class="v-card-meta">
						<span><i class="fa-solid fa-heart text-gold"></i> Love Reconciliation</span>
						<span><i class="fa-solid fa-location-dot text-gold"></i> Glenelg, SA</span>
					</div>
				</div>
			</div>

			<!-- Video Card 3 -->
			<div class="video-card">
				<div class="v-card-frame">
					<iframe src="<?php echo esc_url( $astro_video ); ?>" title="Client Video Testimonial 3 - Astrologer Raghu Sharma" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="v-card-body">
					<div class="v-card-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
					<h3 class="v-card-name font-serif">Amit Patel</h3>
					<div class="v-card-meta">
						<span><i class="fa-solid fa-passport text-gold"></i> Career & Visa Solutions</span>
						<span><i class="fa-solid fa-location-dot text-gold"></i> Adelaide CBD</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- CLIENT REVIEWS / TESTIMONIALS SECTION -->
<section id="testimonials" class="section">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title font-serif">Trusted by <span class="text-gold">Adelaide Families</span></h2>
			<p class="section-desc">Real stories of transformation, peace, and love from verified clients across South Australia.</p>
		</div>

		<!-- CAROUSEL SLIDER WRAPPER -->
		<div class="testimonial-carousel-wrapper">
			<button class="carousel-btn prev-btn" id="testimonialPrev" aria-label="Previous Reviews">
				<i class="fa-solid fa-chevron-left"></i>
			</button>

			<div class="testimonial-carousel-container">
				<div class="testimonial-track" id="testimonialTrack">
					<!-- 1 -->
					<div class="testimonial-card-v2">
						<i class="fa-solid fa-quote-right quote-icon"></i>
						<div>
							<div class="t-header-top">
								<span class="service-badge-tag"><i class="fa-solid fa-shield-halved"></i> Black Magic Cleansing</span>
							</div>
							<div class="t-stars-row">
								<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
							</div>
							<p class="t-text">
								"Astrologer Raghu Sharma removed black magic from our Prospect home within 3 days. My family feels safe, peaceful, and healthy again after months of terrifying disturbances!"
							</p>
						</div>
						<div class="t-client-row">
							<div class="t-avatar">MS</div>
							<div class="t-client-details">
								<h4 class="font-serif">Manpreet Singh</h4>
								<span><i class="fa-solid fa-location-dot text-gold"></i> Prospect, Adelaide</span>
							</div>
						</div>
					</div>

					<!-- 2 -->
					<div class="testimonial-card-v2">
						<i class="fa-solid fa-quote-right quote-icon"></i>
						<div>
							<div class="t-header-top">
								<span class="service-badge-tag"><i class="fa-solid fa-heart"></i> Love Reconciliation</span>
							</div>
							<div class="t-stars-row">
								<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
							</div>
							<p class="t-text">
								"My partner and I reconciled after a painful separation in Glenelg thanks to Raghu Sharma ji's sacred love attraction remedies. Highly recommended master in South Australia!"
							</p>
						</div>
						<div class="t-client-row">
							<div class="t-avatar">SL</div>
							<div class="t-client-details">
								<h4 class="font-serif">Sarah & Liam</h4>
								<span><i class="fa-solid fa-location-dot text-gold"></i> Glenelg, SA</span>
							</div>
						</div>
					</div>

					<!-- 3 -->
					<div class="testimonial-card-v2">
						<i class="fa-solid fa-quote-right quote-icon"></i>
						<div>
							<div class="t-header-top">
								<span class="service-badge-tag"><i class="fa-solid fa-passport"></i> Career & Visa Fortune</span>
							</div>
							<div class="t-stars-row">
								<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
							</div>
							<p class="t-text">
								"The psychic reading gave me exact dates regarding my permanent residency visa approval and promotion in Adelaide CBD. Truly accurate and genuine astrologer."
							</p>
						</div>
						<div class="t-client-row">
							<div class="t-avatar">AP</div>
							<div class="t-client-details">
								<h4 class="font-serif">Amit Patel</h4>
								<span><i class="fa-solid fa-location-dot text-gold"></i> Adelaide CBD</span>
							</div>
						</div>
					</div>

					<!-- 4 -->
					<div class="testimonial-card-v2">
						<i class="fa-solid fa-quote-right quote-icon"></i>
						<div>
							<div class="t-header-top">
								<span class="service-badge-tag"><i class="fa-solid fa-hands-praying"></i> Evil Eye Removal</span>
							</div>
							<div class="t-stars-row">
								<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
							</div>
							<p class="t-text">
								"Acharya Sharma performed an auspicious Vedic puja for our family in Mawson Lakes. Persistent financial losses and health issues vanished completely within weeks!"
							</p>
						</div>
						<div class="t-client-row">
							<div class="t-avatar">RS</div>
							<div class="t-client-details">
								<h4 class="font-serif">Rajesh Sharma</h4>
								<span><i class="fa-solid fa-location-dot text-gold"></i> Mawson Lakes, SA</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<button class="carousel-btn next-btn" id="testimonialNext" aria-label="Next Reviews">
				<i class="fa-solid fa-chevron-right"></i>
			</button>
		</div>

		<div class="carousel-dots" id="testimonialDots"></div>
	</div>
</section>

<!-- LOCAL FAQ SECTION -->
<section id="faq" class="section">
	<div class="container" style="max-width: 900px;">
		<div class="section-header">
			<h2 class="section-title font-serif">Frequently Asked <span class="text-gold">Questions</span></h2>
			<p class="section-desc">Get clear answers about our astrological consultations, remedies, and confidentiality in Adelaide.</p>
		</div>

		<div class="faq-grid">
			<!-- 1 -->
			<div class="faq-item">
				<details open>
					<summary>
						<span class="faq-q-title"><i class="fa-solid fa-circle-question"></i> How can I book a consultation with Astrologer <?php echo esc_html( $astro_name ); ?> in Adelaide?</span>
						<i class="fa-solid fa-chevron-down faq-arrow"></i>
					</summary>
					<div class="faq-answer">
						You can book an immediate session by calling <a href="tel:<?php echo esc_attr( $astro_phone_clean ); ?>"><?php echo esc_html( $astro_phone ); ?></a> or messaging directly on <a href="https://wa.me/<?php echo esc_attr( $astro_wa ); ?>">WhatsApp</a>. In-person consultations in Adelaide as well as private phone & video readings are available.
					</div>
				</details>
			</div>

			<!-- 2 -->
			<div class="faq-item">
				<details>
					<summary>
						<span class="faq-q-title"><i class="fa-solid fa-shield-halved"></i> How long does Black Magic & Negative Energy Removal take?</span>
						<i class="fa-solid fa-chevron-down faq-arrow"></i>
					</summary>
					<div class="faq-answer">
						Most clients in Adelaide experience noticeable relief within 48 to 72 hours following the completion of Master Raghu Sharma's sacred Vedic cleansing rituals and energised protection charms.
					</div>
				</details>
			</div>

			<!-- 3 -->
			<div class="faq-item">
				<details>
					<summary>
						<span class="faq-q-title"><i class="fa-solid fa-user-lock"></i> Are all consultations 100% private and confidential?</span>
						<i class="fa-solid fa-chevron-down faq-arrow"></i>
					</summary>
					<div class="faq-answer">
						Yes, absolute confidentiality is guaranteed. Your personal details, birth chart details, and consultation discussions are never shared under any circumstances.
					</div>
				</details>
			</div>

			<!-- 4 -->
			<div class="faq-item">
				<details>
					<summary>
						<span class="faq-q-title"><i class="fa-solid fa-heart-pulse"></i> Can Astrologer Raghu Sharma help bring back an ex-partner?</span>
						<i class="fa-solid fa-chevron-down faq-arrow"></i>
					</summary>
					<div class="faq-answer">
						Yes, utilizing positive, non-harmful Vashikaran and love attraction mantras, Master Raghu Sharma resolves relationship misunderstandings and restores mutual affection between partners.
					</div>
				</details>
			</div>

			<!-- 5 -->
			<div class="faq-item">
				<details>
					<summary>
						<span class="faq-q-title"><i class="fa-solid fa-map-location-dot"></i> Which Adelaide suburbs are covered for in-person visits?</span>
						<i class="fa-solid fa-chevron-down faq-arrow"></i>
					</summary>
					<div class="faq-answer">
						We serve all clients across Adelaide CBD, Prospect, Glenelg, Salisbury, Norwood, Mawson Lakes, Marion, Port Adelaide, and surrounding South Australia regions.
					</div>
				</details>
			</div>
		</div>

		<!-- FAQ NEED HELP CTA -->
		<div style="text-align: center; margin-top: 3rem; background: rgba(229, 184, 73, 0.05); border: 1px solid rgba(229, 184, 73, 0.2); padding: 1.8rem; border-radius: 20px;">
			<h3 class="font-serif" style="font-size: 1.25rem; color: var(--text-main); margin-bottom: 0.5rem;">Still Have Questions?</h3>
			<p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.2rem;">Speak directly with Master <?php echo esc_html( $astro_name ); ?> for personalized clarity.</p>
			<div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
				<a href="tel:<?php echo esc_attr( $astro_phone_clean ); ?>" class="btn btn-gold" style="padding: 0.7rem 1.8rem;">
					<i class="fa-solid fa-phone"></i> Call <?php echo esc_html( $astro_phone ); ?>
				</a>
				<a href="https://wa.me/<?php echo esc_attr( $astro_wa ); ?>" class="btn btn-whatsapp" style="padding: 0.7rem 1.8rem;">
					<i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
				</a>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
