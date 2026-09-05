<?php
/**
 * Template Name: Contact Us Page
 * Description: Dedicated high-end Contact page template for Astrologer Raghu Sharma
 */

get_header();

$astro_name        = get_theme_mod( 'astrologer_name', 'Raghu Sharma' );
$astro_phone       = get_theme_mod( 'astrologer_phone', '+61 400 000 000' );
$astro_wa          = get_theme_mod( 'astrologer_whatsapp', '61400000000' );
$astro_addr        = get_theme_mod( 'astrologer_address', 'Adelaide CBD, SA 5000' );
$astro_email       = 'info@astrologerraghusharma.com.au';
$astro_phone_clean = preg_replace( '/[^0-9+]/', '', $astro_phone );
?>

<!-- CONTACT PAGE HERO BANNER -->
<section class="page-hero-section section">
	<div class="container" style="text-align: center; max-width: 900px;">
		<div class="breadcrumbs" style="color: var(--text-gold); font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.8rem;">
			<a href="<?php echo home_url('/'); ?>" style="color: var(--text-muted); text-decoration: none;">Home</a> &raquo; 
			<span>Contact Us</span>
		</div>
		<h1 class="font-serif" style="font-size: 2.8rem; margin-bottom: 1rem; color: #FFFFFF;">
			Get in Touch with <span class="text-gold">Astrologer <?php echo esc_html( $astro_name ); ?></span>
		</h1>
		<p style="max-width: 780px; margin: 0 auto; color: var(--text-muted); font-size: 1.1rem; line-height: 1.7; text-align: justify; text-justify: inter-word;">
			Seeking urgent spiritual guidance, black magic removal, or love problem solutions in Adelaide? Reach out today for 100% private, confidential Vedic astrological support.
		</p>
	</div>
</section>

<!-- MAIN CONTACT CONTENT SECTION -->
<section class="section" style="padding: 3rem 0 5rem;">
	<div class="container">

		<!-- 3 QUICK ACTION HIGHLIGHT CARDS -->
		<div class="contact-cards-grid">
			
			<!-- Card 1: Call -->
			<div class="glass-card" style="padding: 2rem; border: 1px solid var(--border-gold); border-radius: 16px; text-align: center; transition: transform 0.3s ease;">
				<div style="width: 60px; height: 60px; border-radius: 50%; background: rgba(229, 184, 73, 0.15); border: 1px solid var(--border-gold); display: flex; align-items: center; justify-content: center; margin: 0 auto 1.25rem;">
					<i class="fa-solid fa-phone" style="color: var(--primary-gold); font-size: 1.5rem;"></i>
				</div>
				<h3 class="font-serif text-gold" style="font-size: 1.25rem; margin-bottom: 0.5rem;">Direct Phone Line</h3>
				<p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1.25rem;">24/7 Available for Urgent Guidance</p>
				<a href="tel:<?php echo esc_attr( $astro_phone_clean ); ?>" class="btn btn-gold" style="width: 100%; justify-content: center;">
					<i class="fa-solid fa-phone-volume"></i> Call <?php echo esc_html( $astro_phone ); ?>
				</a>
			</div>

			<!-- Card 2: WhatsApp -->
			<div class="glass-card" style="padding: 2rem; border: 1px solid rgba(37, 211, 102, 0.4); border-radius: 16px; text-align: center; transition: transform 0.3s ease;">
				<div style="width: 60px; height: 60px; border-radius: 50%; background: rgba(37, 211, 102, 0.15); border: 1px solid rgba(37, 211, 102, 0.4); display: flex; align-items: center; justify-content: center; margin: 0 auto 1.25rem;">
					<i class="fa-brands fa-whatsapp" style="color: #25D366; font-size: 1.8rem;"></i>
				</div>
				<h3 class="font-serif" style="color: #25D366; font-size: 1.25rem; margin-bottom: 0.5rem;">Instant WhatsApp Chat</h3>
				<p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1.25rem;">Fast confidential chat consultation</p>
				<a href="https://wa.me/<?php echo esc_attr( $astro_wa ); ?>" class="btn btn-whatsapp" target="_blank" style="width: 100%; justify-content: center;">
					<i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
				</a>
			</div>

			<!-- Card 3: Location -->
			<div class="glass-card" style="padding: 2rem; border: 1px solid var(--border-gold); border-radius: 16px; text-align: center; transition: transform 0.3s ease;">
				<div style="width: 60px; height: 60px; border-radius: 50%; background: rgba(229, 184, 73, 0.15); border: 1px solid var(--border-gold); display: flex; align-items: center; justify-content: center; margin: 0 auto 1.25rem;">
					<i class="fa-solid fa-location-dot" style="color: var(--primary-gold); font-size: 1.5rem;"></i>
				</div>
				<h3 class="font-serif text-gold" style="font-size: 1.25rem; margin-bottom: 0.5rem;">Adelaide Location</h3>
				<p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1.25rem;"><?php echo esc_html( $astro_addr ); ?></p>
				<a href="https://maps.google.com/?q=Adelaide+CBD+South+Australia" target="_blank" class="btn btn-outline" style="width: 100%; justify-content: center;">
					<i class="fa-solid fa-map-location-dot text-gold"></i> View Adelaide Map
				</a>
			</div>

		</div>

		<!-- MAIN 2-COLUMN GRID (DETAILS + FORM) -->
		<div class="contact-page-grid">
			
			<!-- LEFT COLUMN: CONTACT DETAILS & ASSURANCES -->
			<div style="display: flex; flex-direction: column;">
				<div class="glass-card" style="padding: 2.25rem; border: 1px solid var(--border-gold); border-radius: 20px; height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
					<div>
						<h2 class="font-serif text-gold" style="font-size: 1.6rem; margin-bottom: 1.25rem; display: flex; align-items: center; gap: 0.6rem;">
							<i class="fa-solid fa-headset text-gold"></i> Astrologer Contact Info
						</h2>
						<p style="color: var(--text-muted); line-height: 1.7; margin-bottom: 1.5rem; text-align: justify; text-justify: inter-word;">
							Astrologer <?php echo esc_html( $astro_name ); ?> offers personal, confidential consultations for clients throughout South Australia. Whether you require black magic protection, love reunion, or horoscope readings, help is just a call or message away.
						</p>

						<div style="display: flex; flex-direction: column; gap: 1.25rem; margin-bottom: 1.5rem;">
							
							<div style="display: flex; align-items: flex-start; gap: 1rem;">
								<div style="width: 40px; height: 40px; border-radius: 50%; background: rgba(229, 184, 73, 0.12); border: 1px solid var(--border-gold); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
									<i class="fa-solid fa-clock text-gold"></i>
								</div>
								<div>
									<h4 style="color: #FFFFFF; font-size: 0.95rem; margin-bottom: 0.2rem;">Consultation Hours</h4>
									<p style="color: var(--text-muted); font-size: 0.88rem; margin: 0;">Monday – Sunday: 8:00 AM – 9:00 PM (ACST)</p>
								</div>
							</div>

							<div style="display: flex; align-items: flex-start; gap: 1rem;">
								<div style="width: 40px; height: 40px; border-radius: 50%; background: rgba(229, 184, 73, 0.12); border: 1px solid var(--border-gold); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
									<i class="fa-solid fa-envelope text-gold"></i>
								</div>
								<div>
									<h4 style="color: #FFFFFF; font-size: 0.95rem; margin-bottom: 0.2rem;">Email Support</h4>
									<p style="color: var(--text-muted); font-size: 0.88rem; margin: 0;"><?php echo esc_html( $astro_email ); ?></p>
								</div>
							</div>

							<div style="display: flex; align-items: flex-start; gap: 1rem;">
								<div style="width: 40px; height: 40px; border-radius: 50%; background: rgba(229, 184, 73, 0.12); border: 1px solid var(--border-gold); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
									<i class="fa-solid fa-language text-gold"></i>
								</div>
								<div>
									<h4 style="color: #FFFFFF; font-size: 0.95rem; margin-bottom: 0.2rem;">Languages Spoken</h4>
									<p style="color: var(--text-muted); font-size: 0.88rem; margin: 0;">English, Hindi, Punjabi, Gujarati &amp; South Indian Languages</p>
								</div>
							</div>

							<div style="display: flex; align-items: flex-start; gap: 1rem;">
								<div style="width: 40px; height: 40px; border-radius: 50%; background: rgba(229, 184, 73, 0.12); border: 1px solid var(--border-gold); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
									<i class="fa-solid fa-globe text-gold"></i>
								</div>
								<div>
									<h4 style="color: #FFFFFF; font-size: 0.95rem; margin-bottom: 0.2rem;">Service Locations</h4>
									<p style="color: var(--text-muted); font-size: 0.88rem; margin: 0;">Adelaide CBD, Prospect, Glenelg, Norwood, Salisbury, Marion &amp; all SA Suburbs.</p>
								</div>
							</div>

						</div>
					</div>

					<div style="padding: 1.2rem; background: rgba(229, 184, 73, 0.08); border-radius: 14px; border: 1px solid rgba(229, 184, 73, 0.25); display: flex; align-items: center; gap: 0.8rem; margin-top: auto;">
						<i class="fa-solid fa-shield-halved text-gold" style="font-size: 1.5rem; flex-shrink: 0;"></i>
						<div style="font-size: 0.88rem; color: var(--text-muted);">
							<strong style="color: #FFFFFF;">100% Confidentiality Assured:</strong> All personal details, birth charts, and consultations remain strictly private and protected.
						</div>
					</div>
				</div>
			</div>

			<!-- RIGHT COLUMN: STANDARDIZED CONSULTATION FORM -->
			<div style="display: flex; flex-direction: column;">
				<div class="glass-card" style="padding: 2.25rem; border: 1px solid var(--border-gold); border-radius: 20px; box-shadow: 0 15px 35px rgba(0,0,0,0.5); height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
					<h2 class="font-serif text-gold" style="font-size: 1.6rem; margin-bottom: 0.3rem; text-align: center;">
						<i class="fa-solid fa-paper-plane text-gold" style="margin-right: 0.4rem;"></i> Book Private Consultation
					</h2>
					<p style="font-size: 0.88rem; color: var(--text-muted); text-align: center; margin-bottom: 1.5rem;">
						Fill out the form below to receive personalized guidance from Master <?php echo esc_html( $astro_name ); ?>.
					</p>

					<form id="contactPageForm" class="astrologer-consult-form" action="#" method="POST">
						<div class="form-group">
							<label for="contactFullName"><i class="fa-solid fa-user text-gold"></i> Full Name</label>
							<input type="text" id="contactFullName" name="full_name" class="form-input" placeholder="Your full name" required>
						</div>

						<div class="form-group">
							<label for="contactPhoneNumber"><i class="fa-solid fa-phone text-gold"></i> Phone Number</label>
							<input type="tel" id="contactPhoneNumber" name="phone_number" class="form-input" placeholder="+61 400 000 000" required>
						</div>

						<div class="form-group">
							<label for="contactEmailAddress"><i class="fa-solid fa-envelope text-gold"></i> Email Address</label>
							<input type="email" id="contactEmailAddress" name="email" class="form-input" placeholder="your@email.com" required>
						</div>

						<div class="form-group">
							<label for="contactServiceRequired"><i class="fa-solid fa-wand-magic-sparkles text-gold"></i> Service Required</label>
							<select id="contactServiceRequired" name="service_required" class="form-input" required>
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
							<label for="contactMessage"><i class="fa-solid fa-comment-dots text-gold"></i> Message / Details</label>
							<textarea id="contactMessage" name="message" class="form-input" rows="4" placeholder="Briefly describe your situation or questions..."></textarea>
						</div>

						<button type="submit" class="btn btn-gold" style="width: 100%; justify-content: center; margin-top: 0.75rem; font-size: 1rem; padding: 0.85rem; border-radius: 50px;">
							<i class="fa-solid fa-paper-plane"></i> Submit Consultation Request
						</button>
					</form>
				</div>
			</div>

		</div>

		<!-- FREQUENTLY ASKED QUESTIONS SECTION -->
		<div style="margin-top: 5rem; max-width: 900px; margin-left: auto; margin-right: auto;">
			<div class="section-header" style="text-align: center; margin-bottom: 1.5rem;">
				<h2 class="section-title font-serif" style="font-size: 2rem;">Frequently Asked <span class="text-gold">Contact Questions</span></h2>
				<p class="section-desc" style="color: var(--text-muted); font-size: 0.95rem;">Get clear answers about booking consultations, confidentiality, and appointment availability in Adelaide.</p>
			</div>

			<div class="faq-grid">
				<!-- 1 -->
				<div class="faq-item">
					<details open>
						<summary>
							<span class="faq-q-title"><i class="fa-solid fa-circle-question"></i> How can I book an immediate consultation with Astrologer <?php echo esc_html( $astro_name ); ?> in Adelaide?</span>
							<i class="fa-solid fa-chevron-down faq-arrow"></i>
						</summary>
						<div class="faq-answer">
							You can book an immediate private session by calling <a href="tel:<?php echo esc_attr( $astro_phone_clean ); ?>"><?php echo esc_html( $astro_phone ); ?></a> or messaging directly on <a href="https://wa.me/<?php echo esc_attr( $astro_wa ); ?>" target="_blank">WhatsApp</a>. In-person consultations in Adelaide as well as private phone &amp; video readings are available.
						</div>
					</details>
				</div>

				<!-- 2 -->
				<div class="faq-item">
					<details>
						<summary>
							<span class="faq-q-title"><i class="fa-solid fa-user-lock"></i> Are all consultations 100% private and confidential?</span>
							<i class="fa-solid fa-chevron-down faq-arrow"></i>
						</summary>
						<div class="faq-answer">
							Yes, absolute confidentiality is guaranteed. Your personal details, birth chart information, and consultation discussions are strictly private and never shared under any circumstances.
						</div>
					</details>
				</div>

				<!-- 3 -->
				<div class="faq-item">
					<details>
						<summary>
							<span class="faq-q-title"><i class="fa-solid fa-phone"></i> Are phone or online WhatsApp readings available if I cannot visit in person?</span>
							<i class="fa-solid fa-chevron-down faq-arrow"></i>
						</summary>
						<div class="faq-answer">
							Yes! Master Raghu Sharma provides full phone, video call, and WhatsApp consultations for clients located across South Australia, interstate, or internationally.
						</div>
					</details>
				</div>

				<!-- 4 -->
				<div class="faq-item">
					<details>
						<summary>
							<span class="faq-q-title"><i class="fa-solid fa-clipboard-list"></i> What details should I provide when booking a reading?</span>
							<i class="fa-solid fa-chevron-down faq-arrow"></i>
						</summary>
						<div class="faq-answer">
							Providing your full name, date of birth, exact time of birth, and place of birth allows Master Raghu Sharma to conduct an accurate Vedic Kundli analysis. If birth details are unavailable, palm reading and intuitive psychic readings are also conducted.
						</div>
					</details>
				</div>

				<!-- 5 -->
				<div class="faq-item">
					<details>
						<summary>
							<span class="faq-q-title"><i class="fa-solid fa-map-location-dot"></i> Which Adelaide suburbs are covered for in-person consultations?</span>
							<i class="fa-solid fa-chevron-down faq-arrow"></i>
						</summary>
						<div class="faq-answer">
							We serve clients across Adelaide CBD, Prospect, Glenelg, Salisbury, Norwood, Mawson Lakes, Marion, Port Adelaide, Burnside, Golden Grove, and surrounding South Australia regions.
						</div>
					</details>
				</div>
			</div>
		</div>

	</div>
</section>

<?php
get_footer();
