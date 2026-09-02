<?php
$astro_name     = get_theme_mod( 'astrologer_name', 'Raghu Sharma' );
$astro_phone    = get_theme_mod( 'astrologer_phone', '+61 400 000 000' );
$astro_wa       = get_theme_mod( 'astrologer_whatsapp', '61400000000' );
$astro_addr     = get_theme_mod( 'astrologer_address', 'Adelaide CBD & All Suburbs, SA 5000' );
$astro_email    = get_theme_mod( 'astrologer_email', 'info@astrologerraghusharma.com.au' );
$astro_phone_clean = preg_replace( '/[^0-9+]/', '', $astro_phone );
?>
<footer class="site-footer">
	<div class="container">
		<div class="footer-grid">
			<!-- BRAND COLUMN -->
			<div class="footer-brand">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo">
					<i class="fa-solid fa-om text-gold" style="font-size: 1.6rem;"></i>
					<span class="font-serif">Raghu<span class="text-gold">Sharma</span></span>
				</a>
				<p class="footer-desc">
					Adelaide’s premier Indian Astrologer, Psychic Reader & Spiritual Healer. Acharya <?php echo esc_html( $astro_name ); ?> brings decades of sacred Vedic lineage to resolve love challenges, eliminate negative energies, and guide you towards lasting prosperity across South Australia.
				</p>
				<div class="footer-social-strip">
					<a href="tel:<?php echo esc_attr( $astro_phone_clean ); ?>" class="f-social-btn" title="Call Us"><i class="fa-solid fa-phone"></i></a>
					<a href="https://wa.me/<?php echo esc_attr( $astro_wa ); ?>" class="f-social-btn f-wa" title="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
					<a href="<?php echo home_url('/contact-us/'); ?>" class="f-social-btn" title="Location"><i class="fa-solid fa-location-dot"></i></a>
					<a href="mailto:<?php echo esc_attr( $astro_email ); ?>" class="f-social-btn" title="Email Us"><i class="fa-solid fa-envelope"></i></a>
				</div>
			</div>

			<!-- COLUMN 1: SERVICES -->
			<div class="footer-col">
				<h4 class="footer-heading font-serif">Key Services Adelaide</h4>
				<ul class="footer-links">
					<li><a href="<?php echo home_url('/black-magic-removal-adelaide/'); ?>"><i class="fa-solid fa-chevron-right f-arrow"></i> Black Magic Removal</a></li>
					<li><a href="<?php echo home_url('/negative-energy-removal-adelaide/'); ?>"><i class="fa-solid fa-chevron-right f-arrow"></i> Negative Energy Removal</a></li>
					<li><a href="<?php echo home_url('/get-your-ex-love-back-adelaide/'); ?>"><i class="fa-solid fa-chevron-right f-arrow"></i> Get Your Ex Love Back</a></li>
					<li><a href="<?php echo home_url('/love-problem-solution-adelaide/'); ?>"><i class="fa-solid fa-chevron-right f-arrow"></i> Love Problem Solution</a></li>
					<li><a href="<?php echo home_url('/vashikaran-specialist-adelaide/'); ?>"><i class="fa-solid fa-chevron-right f-arrow"></i> Vashikaran Specialist</a></li>
					<li><a href="<?php echo home_url('/marriage-relationship-problems-adelaide/'); ?>"><i class="fa-solid fa-chevron-right f-arrow"></i> Marriage Problems</a></li>
				</ul>
			</div>

			<!-- COLUMN 2: READINGS -->
			<div class="footer-col">
				<h4 class="footer-heading font-serif">Spiritual Readings</h4>
				<ul class="footer-links">
					<li><a href="<?php echo home_url('/psychic-reading-adelaide/'); ?>"><i class="fa-solid fa-chevron-right f-arrow"></i> Psychic Reading</a></li>
					<li><a href="<?php echo home_url('/tarot-card-reading-adelaide/'); ?>"><i class="fa-solid fa-chevron-right f-arrow"></i> Tarot Card Reading</a></li>
					<li><a href="<?php echo home_url('/palm-reading-adelaide/'); ?>"><i class="fa-solid fa-chevron-right f-arrow"></i> Palm Reading</a></li>
					<li><a href="<?php echo home_url('/horoscope-astrology-reading-adelaide/'); ?>"><i class="fa-solid fa-chevron-right f-arrow"></i> Horoscope & Astrology</a></li>
					<li><a href="<?php echo home_url('/spiritual-healing-adelaide/'); ?>"><i class="fa-solid fa-chevron-right f-arrow"></i> Spiritual Healing</a></li>
					<li><a href="<?php echo home_url('/pooja-spiritual-services-adelaide/'); ?>"><i class="fa-solid fa-chevron-right f-arrow"></i> Pooja & Hawan Services</a></li>
				</ul>
			</div>

			<!-- COLUMN 3: CONTACT -->
			<div class="footer-col">
				<h4 class="footer-heading font-serif">Adelaide Sanctuary</h4>
				<div class="footer-contact-info">
					<p class="f-contact-item">
						<i class="fa-solid fa-location-dot text-gold"></i>
						<span><?php echo esc_html( $astro_addr ); ?></span>
					</p>
					<p class="f-contact-item">
						<i class="fa-solid fa-phone text-gold"></i>
						<a href="tel:<?php echo esc_attr( $astro_phone_clean ); ?>"><?php echo esc_html( $astro_phone ); ?></a>
					</p>
					<p class="f-contact-item">
						<i class="fa-brands fa-whatsapp text-whatsapp"></i>
						<a href="https://wa.me/<?php echo esc_attr( $astro_wa ); ?>" class="text-whatsapp">Chat on WhatsApp</a>
					</p>
				</div>
				<a href="tel:<?php echo esc_attr( $astro_phone_clean ); ?>" class="btn btn-gold f-cta-btn">
					<i class="fa-solid fa-phone"></i> Call <?php echo esc_html( $astro_name ); ?>
				</a>
			</div>
		</div>

		<div class="footer-bottom">
			<p>&copy; <?php echo date('Y'); ?> <?php echo esc_html( $astro_name ); ?> - Astrologer Adelaide. All Rights Reserved.</p>
			<div class="footer-bottom-links">
				<a href="<?php echo home_url('/privacy-policy/'); ?>">Privacy Policy</a>
				<span class="f-sep">|</span>
				<a href="<?php echo home_url('/terms-and-conditions/'); ?>">Terms &amp; Conditions</a>
				<span class="f-sep">|</span>
				<a href="<?php echo home_url('/disclaimer/'); ?>">Disclaimer</a>
			</div>
		</div>
	</div>
</footer>

<!-- Sticky Mobile Call / WhatsApp Bar -->
<div class="sticky-mobile-bar">
	<a href="tel:<?php echo esc_attr( $astro_phone_clean ); ?>" class="sticky-btn sticky-call">
		<i class="fa-solid fa-phone"></i> Call Now
	</a>
	<a href="https://wa.me/<?php echo esc_attr( $astro_wa ); ?>" class="sticky-btn sticky-whatsapp">
		<i class="fa-brands fa-whatsapp"></i> WhatsApp
	</a>
</div>

<!-- GLOBAL BOOK CONSULTATION MODAL -->
<div id="bookingModal" class="booking-modal-overlay" aria-hidden="true">
	<div class="booking-modal-dialog">
		<button type="button" class="booking-modal-close" id="closeBookingModal" aria-label="Close modal">&times;</button>
		
		<div class="booking-modal-header">
			<h3 class="font-serif modal-title">CONNECT WITH ASTROLOGER</h3>
			<p class="modal-subtitle">Fill out the form below to get personalized astrological guidance from our experts.</p>
		</div>

		<form id="bookingConsultationForm" class="booking-modal-form astrologer-consult-form" action="#" method="POST">
			<div class="form-group">
				<label for="modalFullName"><i class="fa-solid fa-user text-gold"></i> Full Name</label>
				<input type="text" id="modalFullName" name="full_name" class="form-input" placeholder="Your full name" required>
			</div>

			<div class="form-group">
				<label for="modalPhoneNumber"><i class="fa-solid fa-phone text-gold"></i> Phone Number</label>
				<input type="tel" id="modalPhoneNumber" name="phone_number" class="form-input" placeholder="+61 400 000 000" required>
			</div>

			<div class="form-group">
				<label for="modalEmailAddress"><i class="fa-solid fa-envelope text-gold"></i> Email Address</label>
				<input type="email" id="modalEmailAddress" name="email" class="form-input" placeholder="your@email.com" required>
			</div>

			<div class="form-group">
				<label for="modalServiceRequired"><i class="fa-solid fa-wand-magic-sparkles text-gold"></i> Service Required</label>
				<select id="modalServiceRequired" name="service_required" class="form-input" required>
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
				<label for="modalMessage"><i class="fa-solid fa-comment-dots text-gold"></i> Message</label>
				<textarea id="modalMessage" name="message" class="form-input" rows="3" placeholder="Tell us about your needs..."></textarea>
			</div>

			<button type="submit" class="btn btn-gold modal-submit-btn">
				<i class="fa-solid fa-paper-plane"></i> Submit Enquiry
			</button>
		</form>
	</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
	document.querySelectorAll('.faq-item summary').forEach(function(summary) {
		summary.addEventListener('click', function(e) {
			e.preventDefault();
			var details = summary.parentElement;
			var answer = details.querySelector('.faq-answer');
			
			if (details.dataset.animating === 'true') return;
			details.dataset.animating = 'true';
			
			if (details.hasAttribute('open')) {
				// --- SMOOTH CLOSE ANIMATION ---
				var currentHeight = answer.scrollHeight;
				answer.style.height = currentHeight + 'px';
				answer.style.opacity = '1';
				answer.style.overflow = 'hidden';
				answer.style.transition = 'height 0.38s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.3s ease, padding 0.35s ease';
				
				answer.getBoundingClientRect(); // Force reflow
				
				answer.style.height = '0px';
				answer.style.opacity = '0';
				answer.style.paddingTop = '0px';
				answer.style.paddingBottom = '0px';
				
				setTimeout(function() {
					details.removeAttribute('open');
					answer.style.removeProperty('height');
					answer.style.removeProperty('opacity');
					answer.style.removeProperty('overflow');
					answer.style.removeProperty('transition');
					answer.style.removeProperty('padding-top');
					answer.style.removeProperty('padding-bottom');
					delete details.dataset.animating;
				}, 380);
			} else {
				// --- SMOOTH OPEN ANIMATION ---
				details.setAttribute('open', '');
				
				answer.style.height = 'auto';
				answer.style.paddingTop = '1.3rem';
				answer.style.paddingBottom = '1.3rem';
				var targetHeight = answer.scrollHeight;
				
				answer.style.height = '0px';
				answer.style.opacity = '0';
				answer.style.paddingTop = '0px';
				answer.style.paddingBottom = '0px';
				answer.style.overflow = 'hidden';
				answer.style.transition = 'height 0.38s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.35s ease, padding 0.35s ease';
				
				answer.getBoundingClientRect(); // Force reflow so 0px is registered
				
				answer.style.height = targetHeight + 'px';
				answer.style.opacity = '1';
				answer.style.paddingTop = '1.3rem';
				answer.style.paddingBottom = '1.3rem';
				
				setTimeout(function() {
					answer.style.removeProperty('height');
					answer.style.removeProperty('opacity');
					answer.style.removeProperty('overflow');
					answer.style.removeProperty('transition');
					answer.style.removeProperty('padding-top');
					answer.style.removeProperty('padding-bottom');
					delete details.dataset.animating;
				}, 380);
			}
		});
	});
});
</script>

<?php wp_footer(); ?>
</body>
</html>
