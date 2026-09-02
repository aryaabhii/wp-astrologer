document.addEventListener('DOMContentLoaded', function() {
  
  /* -------------------------------------------------------------
   * 1. Header Sticky Scroll Effect & Mobile Menu Toggle & Active Link Highlighting
   * ------------------------------------------------------------- */
  const header = document.querySelector('.site-header');
  window.addEventListener('scroll', function() {
    if (window.scrollY > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });

  const mobileToggle = document.getElementById('mobileMenuToggle');
  const mainNav = document.getElementById('mainNav');

  if (mobileToggle && mainNav) {
    mobileToggle.addEventListener('click', function(e) {
      e.stopPropagation();
      mainNav.classList.toggle('active');
      const icon = mobileToggle.querySelector('i');
      if (icon) {
        if (mainNav.classList.contains('active')) {
          icon.className = 'fa-solid fa-xmark';
        } else {
          icon.className = 'fa-solid fa-bars';
        }
      }
    });

    // Close menu when clicking nav link
    const navLinks = mainNav.querySelectorAll('a');
    navLinks.forEach(link => {
      link.addEventListener('click', function() {
        mainNav.classList.remove('active');
        const icon = mobileToggle.querySelector('i');
        if (icon) icon.className = 'fa-solid fa-bars';
      });
    });

    // Close menu when clicking outside
    document.addEventListener('click', function(e) {
      if (!mainNav.contains(e.target) && !mobileToggle.contains(e.target)) {
        mainNav.classList.remove('active');
        const icon = mobileToggle.querySelector('i');
        if (icon) icon.className = 'fa-solid fa-bars';
      }
    });
  }

  // Highlight Active Nav Link based on Current URL Path
  const currentPath = window.location.pathname.replace(/\/$/, "");
  const allNavLinks = document.querySelectorAll('.nav-menu a');

  allNavLinks.forEach(link => {
    try {
      const rawHref = link.getAttribute('href') || "";
      // Ignore in-page hash anchor links (e.g. #services, #readings)
      if (rawHref.startsWith('#') || rawHref === 'javascript:void(0);' || rawHref === '') {
        link.classList.remove('active');
        if (link.parentElement) {
          link.parentElement.classList.remove('active');
        }
        return;
      }

      const linkUrl = new URL(link.href, window.location.origin);
      const linkPath = linkUrl.pathname.replace(/\/$/, "");
      
      const isMatch = (currentPath === "" && linkPath === "") || 
                      (linkPath !== "" && currentPath === linkPath);
      
      if (isMatch) {
        link.classList.add('active');
        if (link.parentElement) {
          link.parentElement.classList.add('active');
        }
      } else {
        link.classList.remove('active');
        if (link.parentElement) {
          link.parentElement.classList.remove('active');
        }
      }
    } catch(e) {}
  });


  /* -------------------------------------------------------------
   * 2. Interactive Daily Horoscope Zodiac Selector
   * ------------------------------------------------------------- */
  const zodiacCards = document.querySelectorAll('.zodiac-card');
  const predictionMetaIcon = document.getElementById('selectedZodiacIcon');
  const predictionMetaName = document.getElementById('selectedZodiacName');
  const predictionElement = document.getElementById('selectedElement');
  const predictionPlanet = document.getElementById('selectedPlanet');
  const predictionNumber = document.getElementById('selectedNumber');
  const predictionColor = document.getElementById('selectedColor');
  const predictionTitle = document.getElementById('predictionTitle');
  const predictionText = document.getElementById('predictionText');

  const horoscopes = {
    aries: {
      icon: '♈',
      name: 'Aries (Mesh)',
      element: 'Fire',
      planet: 'Mars',
      number: '9, 18, 27',
      color: 'Crimson Red',
      title: 'Celestial Leadership & Financial Breakthrough',
      text: 'Mars aligns powerfully in your 10th house of career today. Bold decisions will yield unexpected financial gains. Trust your instinct when navigating new business proposals. A harmonious cosmic aura surrounds your relationship.'
    },
    taurus: {
      icon: '♉',
      name: 'Taurus (Vrishabha)',
      element: 'Earth',
      planet: 'Venus',
      number: '6, 15, 24',
      color: 'Emerald Green',
      title: 'Harmonious Bonds & Inner Wisdom',
      text: 'Venus blesses your ascendant with tranquil energy. Today is ideal for resolving past disputes and deepening spiritual practices. Financial stability is assured, and a long-awaited news regarding property or family will bring joy.'
    },
    gemini: {
      icon: '♊',
      name: 'Gemini (Mithun)',
      element: 'Air',
      planet: 'Mercury',
      number: '5, 14, 23',
      color: 'Bright Yellow',
      title: 'Intellectual Brilliance & Creative Success',
      text: 'Mercury activates your 3rd house of expression. Communication flows effortlessly today. Writers, traders, and students will experience peak creativity. Stay open to spontaneous travel or networking opportunities.'
    },
    cancer: {
      icon: '♋',
      name: 'Cancer (Kark)',
      element: 'Water',
      planet: 'Moon',
      number: '2, 11, 20',
      color: 'Pearl White',
      title: 'Intuitive Growth & Family Prosperity',
      text: 'The Moon fills your emotional sphere with deep clarity. You will feel highly intuitive today—pay attention to vivid dreams and subtle omens. A spiritual remedy or meditation will bring profound mental peace.'
    },
    leo: {
      icon: '♌',
      name: 'Leo (Simha)',
      element: 'Fire',
      planet: 'Sun',
      number: '1, 10, 19',
      color: 'Royal Gold',
      title: 'Solar Energy & Recognition',
      text: 'The Sun shines brightly on your 1st house! Authority, charisma, and respect soar today. Subordinates and leaders alike look to you for direction. Excellent day for starting new endeavors or wearing gold gemstone remedies.'
    },
    virgo: {
      icon: '♍',
      name: 'Virgo (Kanya)',
      element: 'Earth',
      planet: 'Mercury',
      number: '5, 14, 32',
      color: 'Navy Blue',
      title: 'Analytical Perfection & Health Renewal',
      text: 'Virgo energy demands order and spiritual alignment today. Health issues begin to dissipate under planetary grace. A favorable financial opportunity will arise through an old colleague or mentor.'
    },
    libra: {
      icon: '♎',
      name: 'Libra (Tula)',
      element: 'Air',
      planet: 'Venus',
      number: '7, 16, 25',
      color: 'Rose Pink',
      title: 'Divine Romance & Balanced Wealth',
      text: 'Venus weaves harmony in your house of partnership. Romance and business partnerships flourish today. You may receive an unexpected gift or appreciation. Balance your time between work and sacred self-care.'
    },
    scorpio: {
      icon: '♏',
      name: 'Scorpio (Vrishchik)',
      element: 'Water',
      planet: 'Mars & Pluto',
      number: '4, 13, 22',
      color: 'Deep Violet',
      title: 'Mystic Transformation & Wealth Accumulation',
      text: 'Scorpio energy unleashes hidden spiritual insights. Secrets regarding career advancement will come to light in your favor. Meditation or occult studies today will yield high spiritual revelation.'
    },
    sagittarius: {
      icon: '♐',
      name: 'Sagittarius (Dhanu)',
      element: 'Fire',
      planet: 'Jupiter',
      number: '3, 12, 21',
      color: 'Saffron Gold',
      title: 'Jupiter Grace & Philosophical Expansion',
      text: 'Jupiter bestows divine blessings on your 9th house of fortune! Higher education, spiritual pilgrimages, and legal matters favor you completely. Fortune smiles on investments made today.'
    },
    capricorn: {
      icon: '♑',
      name: 'Capricorn (Makar)',
      element: 'Earth',
      planet: 'Saturn',
      number: '8, 17, 26',
      color: 'Charcoal Grey',
      title: 'Saturn Discipline & Long-term Rewards',
      text: 'Saturn rewards your dedication and perseverance. High recognition at work is imminent. Stay patient with family elders. Wearing blue sapphire or chanting Saturn mantras will eliminate obstacles.'
    },
    aquarius: {
      icon: '♒',
      name: 'Aquarius (Kumbh)',
      element: 'Air',
      planet: 'Saturn & Uranus',
      number: '4, 8, 13',
      color: 'Electric Cyan',
      title: 'Visionary Innovations & Divine Connections',
      text: 'Aquarius energy sparks revolutionary thoughts. Networking with high-profile individuals will open lucrative doors. Spiritual clarity helps resolve long-standing personal dilemmas.'
    },
    pisces: {
      icon: '♓',
      name: 'Pisces (Meen)',
      element: 'Water',
      planet: 'Jupiter & Neptune',
      number: '3, 7, 12',
      color: 'Seafoam Green',
      title: 'Spiritual Bliss & Intuitive Healing',
      text: 'Pisces shines in the mystical 12th house of cosmic union. Your compassionate energy draws positive karma and healing. Excellent time for yoga, gemstone consultation, and artistic creation.'
    }
  };

  zodiacCards.forEach(card => {
    card.addEventListener('click', function() {
      zodiacCards.forEach(c => c.classList.remove('active'));
      this.classList.add('active');
      
      const key = this.getAttribute('data-zodiac');
      const data = horoscopes[key];
      
      if (data) {
        predictionMetaIcon.textContent = data.icon;
        predictionMetaName.textContent = data.name;
        predictionElement.textContent = data.element;
        predictionPlanet.textContent = data.planet;
        predictionNumber.textContent = data.number;
        predictionColor.textContent = data.color;
        predictionTitle.textContent = data.title;
        predictionText.textContent = data.text;
      }
    });
  });

  /* -------------------------------------------------------------
   * 3. Interactive 3-Card Tarot Reader
   * ------------------------------------------------------------- */
  const tarotItems = document.querySelectorAll('.tarot-card-item');
  tarotItems.forEach(item => {
    item.addEventListener('click', function() {
      this.classList.toggle('flipped');
    });
  });

  /* -------------------------------------------------------------
   * 4. Interactive Kundli Form Calculator Preview
   * ------------------------------------------------------------- */
  const kundliForm = document.getElementById('kundliForm');
  const kundliResult = document.getElementById('kundliResult');
  
  if (kundliForm) {
    kundliForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      const name = document.getElementById('k_name').value;
      const dob = document.getElementById('k_dob').value;
      const tob = document.getElementById('k_tob').value;
      const pob = document.getElementById('k_pob').value;
      const consult = document.getElementById('k_consult').value;

      kundliResult.innerHTML = `
        <div style="background: rgba(229, 184, 73, 0.1); border: 1px solid var(--primary-gold); border-radius: 16px; padding: 1.5rem; margin-top: 1.5rem; text-align: left;">
          <h4 style="color: var(--primary-gold); font-family: var(--font-serif); font-size: 1.3rem; margin-bottom: 0.5rem;">
            ✨ Kundli Chart Calculation Generated for ${name}
          </h4>
          <p style="font-size: 0.95rem; color: var(--text-main); margin-bottom: 0.75rem;">
            <strong>Birth Details:</strong> ${dob} at ${tob} (${pob}) | <strong>Focus:</strong> ${consult}
          </p>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 1rem; background: rgba(0,0,0,0.4); padding: 1rem; border-radius: 12px;">
            <div><strong>Ascendant (Lagna):</strong> Aries 04°21'</div>
            <div><strong>Moon Sign (Rashi):</strong> Taurus (Rohini Nakshatra)</div>
            <div><strong>Sun Sign (Surya):</strong> Leo</div>
            <div><strong>Current Dasha:</strong> Jupiter-Venus Mahadasha</div>
          </div>
          <p style="font-size: 0.9rem; color: var(--primary-gold-light); margin-top: 1rem;">
            ✓ Your Chart Analysis request has been logged! Acharya Shastri will review your planetary positions during your consultation session.
          </p>
        </div>
      `;
    });
  }

  /* -------------------------------------------------------------
   * 5. Testimonials Carousel Slider
   * ------------------------------------------------------------- */
  const track = document.getElementById('testimonialTrack');
  const prevBtn = document.getElementById('testimonialPrev');
  const nextBtn = document.getElementById('testimonialNext');
  const dotsContainer = document.getElementById('testimonialDots');

  if (track) {
    const slides = Array.from(track.children);
    let currentIndex = 0;

    function getSlidesPerPage() {
      if (window.innerWidth <= 768) return 1;
      if (window.innerWidth <= 1024) return 2;
      return 3;
    }

    function getMaxIndex() {
      return Math.max(0, slides.length - getSlidesPerPage());
    }

    function createDots() {
      if (!dotsContainer) return;
      dotsContainer.innerHTML = '';
      const totalDots = getMaxIndex() + 1;
      for (let i = 0; i < totalDots; i++) {
        const dot = document.createElement('div');
        dot.className = `carousel-dot ${i === currentIndex ? 'active' : ''}`;
        dot.addEventListener('click', () => goToSlide(i));
        dotsContainer.appendChild(dot);
      }
    }

    function updateSlider() {
      if (!slides.length) return;
      const cardStyle = window.getComputedStyle(slides[0]);
      const cardWidth = slides[0].offsetWidth;
      const gap = parseFloat(window.getComputedStyle(track).gap) || 24;
      const moveDistance = (cardWidth + gap) * currentIndex;
      track.style.transform = `translateX(-${moveDistance}px)`;
      createDots();
    }

    function goToSlide(index) {
      currentIndex = Math.max(0, Math.min(index, getMaxIndex()));
      updateSlider();
    }

    if (prevBtn) {
      prevBtn.addEventListener('click', () => {
        goToSlide(currentIndex - 1);
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', () => {
        goToSlide(currentIndex + 1);
      });
    }

    window.addEventListener('resize', updateSlider);
    setTimeout(updateSlider, 100);

    // Auto slide every 6 seconds
    setInterval(() => {
      if (currentIndex >= getMaxIndex()) {
        currentIndex = 0;
      } else {
        currentIndex++;
      }
      updateSlider();
    }, 6000);
  }

  /* -------------------------------------------------------------
   * 6. Cosmic Cinema Video Testimonials Theater Showcase
   * ------------------------------------------------------------- */
  const vSelectorCards = document.querySelectorAll('.v-selector-card');
  const vMainIframe = document.getElementById('vMainIframe');
  const vActiveTitle = document.getElementById('vActiveTitle');
  const vActiveName = document.getElementById('vActiveName');
  const vActiveLoc = document.getElementById('vActiveLoc');
  const vActiveAvatar = document.getElementById('vActiveAvatar');
  const vActiveQuote = document.getElementById('vActiveQuote');

  if (vSelectorCards.length) {
    vSelectorCards.forEach(card => {
      card.addEventListener('click', () => {
        vSelectorCards.forEach(c => c.classList.remove('active'));
        card.classList.add('active');

        const videoSrc = card.getAttribute('data-video');
        const title = card.getAttribute('data-title');
        const name = card.getAttribute('data-name');
        const loc = card.getAttribute('data-loc');
        const avatar = card.getAttribute('data-avatar');
        const quote = card.getAttribute('data-quote');

        if (vMainIframe && videoSrc) vMainIframe.src = videoSrc;
        if (vActiveTitle && title) vActiveTitle.textContent = title;
        if (vActiveName && name) vActiveName.textContent = name;
        if (vActiveLoc && loc) vActiveLoc.innerHTML = `<i class="fa-solid fa-location-dot text-gold"></i> ${loc}`;
        if (vActiveAvatar && avatar) vActiveAvatar.textContent = avatar;
        if (vActiveQuote && quote) vActiveQuote.textContent = quote;
      });
    });
  }


  /* -------------------------------------------------------------
   * 7. Interactive Cosmic Floating Particles Background
   * ------------------------------------------------------------- */
  const canvas = document.createElement('canvas');
  canvas.id = 'cosmicCanvas';
  canvas.style.position = 'fixed';
  canvas.style.top = '0';
  canvas.style.left = '0';
  canvas.style.width = '100vw';
  canvas.style.height = '100vh';
  canvas.style.pointerEvents = 'none';
  canvas.style.zIndex = '-1';
  canvas.style.opacity = '0.7';
  document.body.appendChild(canvas);

  const ctx = canvas.getContext('2d');
  let width, height;
  let particles = [];

  function resizeCanvas() {
    width = canvas.width = window.innerWidth;
    height = canvas.height = window.innerHeight;
  }

  window.addEventListener('resize', resizeCanvas);
  resizeCanvas();

  const particleCount = Math.min(Math.floor(window.innerWidth / 16), 60);

  class Particle {
    constructor() {
      this.reset();
    }

    reset() {
      this.x = Math.random() * width;
      this.y = Math.random() * height;
      this.size = Math.random() * 2 + 0.6;
      this.speedX = (Math.random() - 0.5) * 0.35;
      this.speedY = (Math.random() - 0.5) * 0.35 - 0.12;
      this.alpha = Math.random() * 0.6 + 0.2;
      this.color = Math.random() > 0.4 ? '229, 184, 73' : '255, 255, 255';
      this.pulseSpeed = Math.random() * 0.02 + 0.005;
      this.pulse = Math.random() * Math.PI;
    }

    update() {
      this.x += this.speedX;
      this.y += this.speedY;
      this.pulse += this.pulseSpeed;

      if (this.x < 0 || this.x > width || this.y < 0 || this.y > height) {
        this.reset();
      }
    }

    draw() {
      ctx.save();
      const currentAlpha = this.alpha + Math.sin(this.pulse) * 0.25;
      ctx.globalAlpha = Math.max(0.1, Math.min(0.9, currentAlpha));
      ctx.fillStyle = `rgb(${this.color})`;
      ctx.beginPath();
      ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
      ctx.fill();

      if (this.color.startsWith('229')) {
        ctx.shadowBlur = 5;
        ctx.shadowColor = 'rgba(229, 184, 73, 0.8)';
      }
      ctx.restore();
    }
  }

  for (let i = 0; i < particleCount; i++) {
    particles.push(new Particle());
  }

  function animateParticles() {
    ctx.clearRect(0, 0, width, height);
    particles.forEach(p => {
      p.update();
      p.draw();
    });
    requestAnimationFrame(animateParticles);
  }

  animateParticles();


  /* -------------------------------------------------------------
   * 8. Booking Consultation Modal Handler
   * ------------------------------------------------------------- */
  const bookingModal = document.getElementById('bookingModal');
  const closeBookingModalBtn = document.getElementById('closeBookingModal');
  const modalServiceSelect = document.getElementById('modalServiceRequired');
  const bookingForm = document.getElementById('bookingConsultationForm');

  function openModalWithService(serviceName) {
    if (!bookingModal) return;
    bookingModal.classList.add('active');
    bookingModal.setAttribute('aria-hidden', 'false');
    document.body.classList.add('modal-open');

    if (modalServiceSelect && serviceName) {
      let matched = false;
      const cleanService = serviceName.trim().toLowerCase();
      for (let i = 0; i < modalServiceSelect.options.length; i++) {
        const optVal = modalServiceSelect.options[i].value.trim().toLowerCase();
        if (optVal && (optVal.includes(cleanService) || cleanService.includes(optVal))) {
          modalServiceSelect.selectedIndex = i;
          matched = true;
          break;
        }
      }
      if (!matched) {
        modalServiceSelect.selectedIndex = 0;
      }
    }
  }

  function closeModal() {
    if (!bookingModal) return;
    bookingModal.classList.remove('active');
    bookingModal.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('modal-open');
  }

  // Event Delegation for any button opening the modal
  document.addEventListener('click', function(e) {
    const targetBtn = e.target.closest('.open-booking-modal, [data-open-modal="true"]');
    if (targetBtn) {
      e.preventDefault();
      const serviceName = targetBtn.getAttribute('data-service-name') || '';
      openModalWithService(serviceName);
    }
  });

  if (closeBookingModalBtn) {
    closeBookingModalBtn.addEventListener('click', closeModal);
  }

  if (bookingModal) {
    bookingModal.addEventListener('click', function(e) {
      if (e.target === bookingModal) {
        closeModal();
      }
    });

    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && bookingModal.classList.contains('active')) {
        closeModal();
      }
    });
  }

  if (bookingForm) {
    bookingForm.addEventListener('submit', function(e) {
      e.preventDefault();
      const submitBtn = bookingForm.querySelector('.modal-submit-btn');
      if (submitBtn) {
        submitBtn.innerHTML = '<i class="fa-solid fa-circle-notch fa-spin"></i> Submitting...';
        submitBtn.disabled = true;
      }
      setTimeout(function() {
        alert('Thank you! Your consultation request has been received. Acharya Raghu Sharma will contact you shortly.');
        bookingForm.reset();
        if (submitBtn) {
          submitBtn.innerHTML = '<i class="fa-solid fa-paper-plane"></i> Submit Enquiry';
          submitBtn.disabled = false;
        }
        closeModal();
      }, 1000);
    });
  }

});
