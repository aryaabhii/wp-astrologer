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
		<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-bottom: 3.5rem;">
			
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
		<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: start;">
			
			<!-- LEFT COLUMN: CONTACT DETAILS & ASSURANCES -->
			<div>
				<div class="glass-card" style="padding: 2.25rem; border: 1px solid var(--border-gold); border-radius: 20px; margin-bottom: 2rem;">
					<h2 class="font-serif text-gold" style="font-size: 1.6rem; margin-bottom: 1.25rem; display: flex; align-items: center; gap: 0.6rem;">
						<i class="fa-solid fa-headset text-gold"></i> Astrologer Contact Info
					</h2>
					<p style="color: var(--text-muted); line-height: 1.7; margin-bottom: 1.5rem; text-align: justify; text-justify: inter-word;">
						Astrologer <?php echo esc_html( $astro_name ); ?> offers personal, confidential consultations for clients throughout South Australia. Whether you require black magic protection, love reunion, or horoscope readings, help is just a call or message away.
					</p>

					<div style="display: flex; flex-direction: column; gap: 1.2rem;">
						
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
								<i class="fa-solid fa-globe text-gold"></i>
							</div>
							<div>
								<h4 style="color: #FFFFFF; font-size: 0.95rem; margin-bottom: 0.2rem;">Service Locations</h4>
								<p style="color: var(--text-muted); font-size: 0.88rem; margin: 0;">Adelaide CBD, Prospect, Glenelg, Norwood, Salisbury, Marion, Mawson Lakes &amp; all SA Suburbs.</p>
							</div>
						</div>

					</div>

					<div style="margin-top: 1.75rem; padding: 1.2rem; background: rgba(229, 184, 73, 0.08); border-radius: 14px; border: 1px solid rgba(229, 184, 73, 0.25); display: flex; align-items: center; gap: 0.8rem;">
						<i class="fa-solid fa-shield-halved text-gold" style="font-size: 1.5rem; flex-shrink: 0;"></i>
						<div style="font-size: 0.88rem; color: var(--text-muted);">
							<strong style="color: #FFFFFF;">100% Confidentiality Assured:</strong> All personal details, birth charts, and consultations remain strictly private and protected.
						</div>
					</div>
				</div>

				<!-- SUBURBS LIST BADGES CARD -->
				<div class="glass-card" style="padding: 1.75rem; border-radius: 20px;">
					<h3 class="font-serif text-gold" style="font-size: 1.15rem; margin-bottom: 0.8rem;">
						<i class="fa-solid fa-map-pin text-gold" style="margin-right: 0.4rem;"></i> Serving All South Australia Suburbs
					</h3>
					<div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
						<span style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12); padding: 0.35rem 0.75rem; border-radius: 20px; font-size: 0.8rem; color: var(--text-muted);">Adelaide CBD</span>
						<span style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12); padding: 0.35rem 0.75rem; border-radius: 20px; font-size: 0.8rem; color: var(--text-muted);">Prospect</span>
						<span style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12); padding: 0.35rem 0.75rem; border-radius: 20px; font-size: 0.8rem; color: var(--text-muted);">Glenelg</span>
						<span style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12); padding: 0.35rem 0.75rem; border-radius: 20px; font-size: 0.8rem; color: var(--text-muted);">Norwood</span>
						<span style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12); padding: 0.35rem 0.75rem; border-radius: 20px; font-size: 0.8rem; color: var(--text-muted);">Salisbury</span>
						<span style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12); padding: 0.35rem 0.75rem; border-radius: 20px; font-size: 0.8rem; color: var(--text-muted);">Marion</span>
						<span style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12); padding: 0.35rem 0.75rem; border-radius: 20px; font-size: 0.8rem; color: var(--text-muted);">Mawson Lakes</span>
						<span style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12); padding: 0.35rem 0.75rem; border-radius: 20px; font-size: 0.8rem; color: var(--text-muted);">Port Adelaide</span>
						<span style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12); padding: 0.35rem 0.75rem; border-radius: 20px; font-size: 0.8rem; color: var(--text-muted);">Burnside</span>
						<span style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12); padding: 0.35rem 0.75rem; border-radius: 20px; font-size: 0.8rem; color: var(--text-muted);">Golden Grove</span>
						<span style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12); padding: 0.35rem 0.75rem; border-radius: 20px; font-size: 0.8rem; color: var(--text-muted);">Tea Tree Gully</span>
					</div>
				</div>
			</div>

			<!-- RIGHT COLUMN: STANDARDIZED CONSULTATION FORM -->
			<div>
				<div class="glass-card" style="padding: 2.25rem; border: 1px solid var(--border-gold); border-radius: 20px; box-shadow: 0 15px 35px rgba(0,0,0,0.5);">
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
		<div style="margin-top: 5rem;">
			<div style="text-align: center; max-width: 700px; margin: 0 auto 2.5rem;">
				<h2 class="font-serif text-gold" style="font-size: 2rem; margin-bottom: 0.5rem;">
					Frequently Asked <span class="text-gold">Contact Questions</span>
				</h2>
				<p style="color: var(--text-muted); font-size: 0.95rem;">Everything you need to know before booking your astrological reading.</p>
			</div>

			<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 1.5rem;">
				
				<div class="glass-card" style="padding: 1.75rem; border-radius: 16px;">
					<h4 class="font-serif text-gold" style="font-size: 1.1rem; margin-bottom: 0.5rem;">
						<i class="fa-solid fa-lock text-gold" style="margin-right: 0.4rem;"></i> Is my consultation 100% private?
					</h4>
					<p style="color: var(--text-muted); font-size: 0.9rem; margin: 0; line-height: 1.6; text-align: justify; text-justify: inter-word;">
						Yes. Astrologer Raghu Sharma strictly adheres to a 100% client privacy pledge. Your personal information, birth details, and issues are never shared with any third party.
					</p>
				</div>

				<div class="glass-card" style="padding: 1.75rem; border-radius: 16px;">
					<h4 class="font-serif text-gold" style="font-size: 1.1rem; margin-bottom: 0.5rem;">
						<i class="fa-solid fa-phone text-gold" style="margin-right: 0.4rem;"></i> Are phone or online readings available?
					</h4>
					<p style="color: var(--text-muted); font-size: 0.9rem; margin: 0; line-height: 1.6; text-align: justify; text-justify: inter-word;">
						Yes! Phone, WhatsApp, and virtual readings are fully available for interstate and international clients who cannot visit our Adelaide office in person.
					</p>
				</div>

				<div class="glass-card" style="padding: 1.75rem; border-radius: 16px;">
					<h4 class="font-serif text-gold" style="font-size: 1.1rem; margin-bottom: 0.5rem;">
						<i class="fa-solid fa-bolt text-gold" style="margin-right: 0.4rem;"></i> How quickly can I get an appointment?
					</h4>
					<p style="color: var(--text-muted); font-size: 0.9rem; margin: 0; line-height: 1.6; text-align: justify; text-justify: inter-word;">
						Same-day emergency consultations are available for urgent spiritual issues like severe black magic effects or sudden relationship breakdowns.
					</p>
				</div>

			</div>
		</div>

	</div>
</section>

<?php
get_footer();
