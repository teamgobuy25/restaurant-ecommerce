<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Afro Taste — Authentic Pan-African Culinary Experience</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Syne:wght@600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- 1. SUPER HEADER (Announcement Bar) -->
  <div class="super-header" id="superHeader">
    <div class="super-header-container">
      <div class="selectors">
        <select aria-label="Currency Selector">
          <option>USD $</option>
          <option>EUR €</option>
          <option>GBP £</option>
          <option>NGN ₦</option>
        </select>
        <select aria-label="Language Selector">
          <option>EN</option>
          <option>FR</option>
          <option>AM (አማርኛ)</option>
        </select>
      </div>
      <div class="promo-text">
        🌍 EXPRESS TEMPERATURE-CONTROLLED SHIPPING ON MEAL KITS OVER $75
      </div>
      <div class="super-actions">
        <a href="#help">Catering Support</a>
        <button class="dismiss-btn" id="dismissSuperHeader" aria-label="Dismiss banner">✕</button>
      </div>
    </div>
  </div>

  <!-- 2. MAIN HEADER & MEGAMENU NAVIGATION -->
  <header class="main-header">
    <div class="header-container">
      <!-- LOGO PLACEHOLDER -->
      <a href="#" class="brand-logo-placeholder">
        <div class="logo-box">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path></svg>
        </div>
        <div class="logo-text-group">
          <span class="logo-name">AFRO TASTE</span>
          <span class="logo-sub">CULINARY MARKET</span>
        </div>
      </a>
      
      <div class="search-wrapper">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
        <input type="text" placeholder="Search Jollof, Injera, Ndolé, Suya spices..." id="searchInput">
        <span class="search-shortcut">⌘K</span>
      </div>

      <div class="user-actions">
        <a href="#" class="icon-link" aria-label="Account">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
        </a>
        <a href="#" class="icon-link wishlist-trigger" aria-label="Wishlist">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
          <span class="badge" id="wishlistCount">5</span>
        </a>
        <button class="cart-trigger-btn" id="cartTrigger">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
          <span class="cart-title">Taste Basket</span>
          <span class="badge" id="cartCount">0</span>
        </button>
      </div>
    </div>

    <nav class="megamenu-nav">
      <ul class="nav-links">
        <li class="has-megamenu">
          <a href="#categories">Explore Regions</a>
          <div class="megamenu-panel">
            <div class="megamenu-grid">
              <div class="menu-col">
                <h4>West African</h4>
                <a href="#">Nigerian Jollof & Soups</a>
                <a href="#">Ghanaian Waakye & Shito</a>
                <a href="#">Senegalese Thiéboudienne</a>
              </div>
              <div class="menu-col">
                <h4>East African</h4>
                <a href="#">Ethiopian Injera & Wots</a>
                <a href="#">Kenyan Nyama Choma</a>
                <a href="#">Tanzanian Pilau</a>
              </div>
              <div class="menu-col">
                <h4>Central & South</h4>
                <a href="#">Cameroonian Ndolé</a>
                <a href="#">Congolese Poulet Moambé</a>
                <a href="#">South African Bobotie</a>
              </div>
              <div class="menu-card">
                <img src="cam.jpg" alt="Special Banquet">
                <div class="overlay">
                  <span>Traditional Feast</span>
                  <h5>Pan-African Spice Vault</h5>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li><a href="#products">Ready Meals</a></li>
        <li><a href="#categories">Artisanal Spices</a></li>
        <li><a href="#promo" class="sale-link">Weekend Feast Sale</a></li>
        <li><a href="#editorial">Heritage Recipes</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <!-- 3. HERO SECTION -->
    <section class="hero-section">
      <div class="hero-container">
        <div class="hero-content">
          <div class="pill-tag"><span class="dot"></span> Fresh Batch Delivered Weekly</div>
          <h1 class="hero-title">Taste the Vibrant Soul of Africa.</h1>
          <p class="hero-subtitle">From smoky Nigerian Suya to rich Ethiopian Doro Wat and authentic Cameroonian Ndolé—handcrafted traditional meals delivered fresh to your door.</p>
          <div class="hero-cta-group">
            <a href="#products" class="btn btn-primary">Order Fresh Dishes</a>
            <button class="btn btn-ghost" id="openVideoBtn">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
              Our Culinary Journey
            </button>
          </div>
          <div class="hero-social-proof">
            <div class="avatar-stack">
              <img src="https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?auto=format&fit=crop&w=100&q=80" alt="User">
              <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=100&q=80" alt="User">
              <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?auto=format&fit=crop&w=100&q=80" alt="User">
            </div>
            <div class="proof-text">★ 4.9 Rating from 25k+ Food Lovers</div>
          </div>
        </div>

        <div class="hero-visual">
          <img src="jallof2.jpg" alt="Afro Taste Banquet">
          <div class="floating-card glassmorphism">
            <span class="tag">Chef Special</span>
            <h4>Royal Smoked Jollof Rice</h4>
            <p>$18.50 — <span>Ready in 15 mins</span></p>
          </div>
        </div>
      </div>

      <!-- SHAPE DIVIDER 1: Soft Organic Wave -->
      <div class="shape-divider wave-divider">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118.08,130.83,121.5,200,115.8,241.1,112.4,281.3,87.9,321.39,56.44Z" fill="#FFFDF9"></path>
        </svg>
      </div>
    </section>

    <!-- 4. TRUST BADGES & VALUE PROPOSITIONS -->
    <section class="trust-section">
      <div class="trust-container">
        <div class="trust-card">
          <div class="icon-wrap">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
          </div>
          <div>
            <h4>100% Authentic Recipes</h4>
            <p>Crafted by native master chefs</p>
          </div>
        </div>
        <div class="trust-card">
          <div class="icon-wrap">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
          </div>
          <div>
            <h4>Insulated Fresh Shipping</h4>
            <p>Guaranteed fresh arrival</p>
          </div>
        </div>
        <div class="trust-card">
          <div class="icon-wrap">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
          </div>
          <div>
            <h4>Ethical Sourcing</h4>
            <p>Direct from African farmers</p>
          </div>
        </div>
        <div class="trust-card">
          <div class="icon-wrap">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"></path><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path></svg>
          </div>
          <div>
            <h4>Halal & Vegan Friendly</h4>
            <p>Clearly labeled options</p>
          </div>
        </div>
      </div>
    </section>

    <!-- 5. FEATURED CATEGORIES (Bento Grid) -->
    <section class="categories-section" id="categories">
      <div class="section-container">
        <div class="section-header">
          <h2>Regional Heritage Collections</h2>
          <p>Discover distinct flavor profiles across the African continent.</p>
        </div>
        
        <div class="bento-grid">
          <div class="bento-item cat-large">
            <img src="okra.jpg" alt="West African Delights">
            <div class="bento-overlay">
              <h3>Nigerian & West African Classics</h3>
              <a href="#products" class="category-link">Explore Jollof, Egusi & Suya →</a>
            </div>
          </div>
          <div class="bento-item cat-top">
            <img src="ethio.jpg" alt="Ethiopian Injera">
            <div class="bento-overlay">
              <h3>Ethiopian Injera & Wots</h3>
              <a href="#products" class="category-link">Explore Doro Wat & Berbere →</a>
            </div>
          </div>
          <div class="bento-item cat-mid">
            <img src="cam.jpg" alt="Cameroonian Delicacies">
            <div class="bento-overlay">
              <h3>Cameroonian Specialties</h3>
              <a href="#products" class="category-link">Explore Ndolé & Achu Soup →</a>
            </div>
          </div>
          <div class="bento-item cat-wide">
            <img src="pantry.jpg" alt="African Spices">
            <div class="bento-overlay">
              <h3>Pantry & Artisanal Spice Vault</h3>
              <a href="#products" class="category-link">Shop Raw Spices & Pastes →</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 6. MAIN PRODUCT SHOWCASE GRID -->
    <section class="products-section" id="products">
      <div class="section-container">
        <div class="products-header">
          <div>
            <h2>Culinary Showcase</h2>
            <p>Pre-cooked gourmet dishes & complete meal kits ready to heat and savor.</p>
          </div>
          <div class="filter-tabs">
            <button class="tab-btn active" data-filter="all">All Dishes</button>
            <button class="tab-btn" data-filter="nigerian">Nigerian</button>
            <button class="tab-btn" data-filter="ethiopian">Ethiopian</button>
            <button class="tab-btn" data-filter="cameroonian">Cameroonian</button>
          </div>
        </div>

        <div class="products-grid" id="productsGrid">
          <!-- Populated dynamically via JS -->
        </div>
      </div>
    </section>

    <!-- 7. PROMO BANNER SECTION (High-Urgency Flash Sale) -->
    <section class="promo-section" id="promo">
      <!-- SHAPE DIVIDER 2 Top: Angular Geometric Slant -->
      <div class="shape-divider slant-top">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path d="M1200 0L0 120V0h1200z" fill="#FFFDF9"></path>
        </svg>
      </div>

      <div class="promo-container">
        <div class="promo-content">
          <span class="urgency-tag">WEEKEND FEAST DISCOUNT</span>
          <h2 class="promo-title">Family Banquet Feast Box</h2>
          <p>Get 30% off our Pan-African Celebration Feast Bundle including Jollof, Injera with Doro Wat, and Cameroonian Plantain Ndolé.</p>
          
          <div class="countdown-timer" id="countdown">
            <div class="time-block"><span id="hours">08</span><label>Hours</label></div>
            <div class="time-block"><span id="minutes">19</span><label>Mins</label></div>
            <div class="time-block"><span id="seconds">42</span><label>Secs</label></div>
          </div>

          <a href="#products" class="btn btn-accent">Claim Feast Box Now</a>
        </div>
        <div class="promo-image">
          <img src="party.jpg" alt="African Feast Bundle">
        </div>
      </div>

      <!-- SHAPE DIVIDER 2 Bottom: Angular Geometric Slant -->
      <div class="shape-divider slant-bottom">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path d="M1200 120L0 0v120h1200z" fill="#FFFDF9"></path>
        </svg>
      </div>
    </section>

    <!-- 8. SOCIAL PROOF & CUSTOMER REVIEWS -->
    <section class="reviews-section">
      <div class="section-container">
        <div class="section-header">
          <h2>Love From Our Foodie Family</h2>
          <p>Authentic feedback from diaspora communities and culinary enthusiasts.</p>
        </div>

        <div class="reviews-carousel" id="reviewsCarousel">
          <div class="review-card">
            <div class="stars">★★★★★</div>
            <p class="review-text">"The Nigerian Smoked Jollof tasted exactly like home in Lagos! The party-smoky flavor was 100% on point. Ordering every single week."</p>
            <div class="reviewer">
              <img src="https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?auto=format&fit=crop&w=100&q=80" alt="Reviewer">
              <div>
                <h5>Amina Bello</h5>
                <span>Verified Buyer • London, UK</span>
              </div>
            </div>
          </div>

          <div class="review-card">
            <div class="stars">★★★★★</div>
            <p class="review-text">"Fresh Injera delivered in perfect condition with authentic Berbere-rich Doro Wat. So difficult to find genuine Ethiopian taste like this!"</p>
            <div class="reviewer">
              <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=100&q=80" alt="Reviewer">
              <div>
                <h5>Tewodros Kassaye</h5>
                <span>Verified Buyer • Toronto, CA</span>
              </div>
            </div>
          </div>

          <div class="review-card">
            <div class="stars">★★★★★</div>
            <p class="review-text">"As a Cameroonian living abroad, finding properly made Ndolé with bitterleaf and prawns was impossible until Afro Taste. Magnifique!"</p>
            <div class="reviewer">
              <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?auto=format&fit=crop&w=100&q=80" alt="Reviewer">
              <div>
                <h5>Nathalie Ekotto</h5>
                <span>Verified Buyer • Paris, FR</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 9. INSTAGRAM / SOCIAL COMMERCE MOSAIC GRID -->
    <section class="instagram-section">
      <div class="section-container">
        <div class="section-header center">
          <h2>#AfroTasteTable</h2>
          <p>Tag <strong>#AfroTasteTable</strong> on Instagram to share your African feast creations.</p>
        </div>

        <div class="mosaic-grid">
          <div class="mosaic-item">
            <img src="bitter leaf 2.jpeg" alt="Social Dish">
            <div class="mosaic-overlay">
              <span>View Recipe →</span>
            </div>
          </div>
          <div class="mosaic-item">
            <img src="yam.jpeg" alt="Social Dish">
            <div class="mosaic-overlay">
              <span>View Recipe →</span>
            </div>
          </div>
          <div class="mosaic-item">
            <img src="bole.jpg" alt="Social Dish">
            <div class="mosaic-overlay">
              <span>View Recipe →</span>
            </div>
          </div>
          <div class="mosaic-item">
            <img src="jallof3.jpeg" alt="Social Dish">
            <div class="mosaic-overlay">
              <span>View Recipe →</span>
            </div>
          </div>
          <div class="mosaic-item">
            <img src="jallof4.jpeg" alt="Social Dish">
            <div class="mosaic-overlay">
              <span>View Recipe →</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 10. EDUCATIONAL CONTENT / EDITORIAL BLOG -->
    <section class="editorial-section" id="editorial">
      <div class="section-container">
        <div class="section-header">
          <h2>Heritage Stories & Food Culture</h2>
          <p>Explore the deep histories behind traditional African cooking techniques.</p>
        </div>

        <div class="editorial-grid">
          <article class="blog-card">
            <div class="blog-thumb">
              <span class="blog-pill">Culinary History</span>
              <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=600&q=80" alt="Jollof History">
            </div>
            <div class="blog-content">
              <span class="meta">July 18, 2026 • 5 min read</span>
              <h3>The Great Jollof Debate: Senegal, Nigeria & Ghana</h3>
              <p>Unpacking the origins of Wolof rice and how regional variations created a beloved continental icon.</p>
              <a href="#" class="read-more">Read Story →</a>
            </div>
          </article>

          <article class="blog-card">
            <div class="blog-thumb">
              <span class="blog-pill">Spice Science</span>
              <img src="https://images.unsplash.com/photo-1596797038530-2c107229654b?auto=format&fit=crop&w=600&q=80" alt="Ethiopian Berbere">
            </div>
            <div class="blog-content">
              <span class="meta">July 10, 2026 • 6 min read</span>
              <h3>Secrets of Berbere: Ethiopia’s Legendary Spice Blend</h3>
              <p>Understanding the 12 key spices that give Ethiopian cuisine its distinct warm, complex depth.</p>
              <a href="#" class="read-more">Read Story →</a>
            </div>
          </article>

          <article class="blog-card">
            <div class="blog-thumb">
              <span class="blog-pill">Cameroon Heritage</span>
              <img src="https://images.unsplash.com/photo-1547496502-affa22d38842?auto=format&fit=crop&w=600&q=80" alt="Ndolé Prep">
            </div>
            <div class="blog-content">
              <span class="meta">June 29, 2026 • 4 min read</span>
              <h3>Ndolé: Cameroon’s Sacred Bitterleaf Gourmet Specialty</h3>
              <p>How ground peanuts, bitterleaf, and fresh seafood are transformed into a national treasure.</p>
              <a href="#" class="read-more">Read Story →</a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- 11. LEAD CAPTURE SECTION (Newsletter) -->
    <section class="newsletter-section">
      <div class="newsletter-card glassmorphism">
        <h2>Get $15 Off Your First Feast</h2>
        <p>Subscribe for secret weekend chef specials, recipe cards, and pan-African food cultural stories.</p>
        
        <form class="newsletter-form" id="newsletterForm">
          <input type="email" placeholder="Enter your email address..." required>
          <button type="submit" class="btn btn-primary">Get My Discount</button>
        </form>
        <p class="privacy-note">We respect your privacy. Unsubscribe at any time.</p>
      </div>
    </section>
  </main>

  <!-- 12. COMPLETE FOOTER SECTION -->
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-grid">
        <div class="footer-col brand-col">
          <a href="#" class="footer-logo">AFRO TASTE<span>.</span></a>
          <p>Connecting the world to authentic, handcrafted traditional African dishes, pantry staples, and regional heritage meals.</p>
          <div class="social-links">
            <a href="#" aria-label="Instagram">IG</a>
            <a href="#" aria-label="TikTok">TT</a>
            <a href="#" aria-label="YouTube">YT</a>
            <a href="#" aria-label="Pinterest">PI</a>
          </div>
        </div>

        <div class="footer-col">
          <h4>Regions</h4>
          <ul>
            <li><a href="#">Nigerian Cuisine</a></li>
            <li><a href="#">Ethiopian Kitchen</a></li>
            <li><a href="#">Cameroonian Delights</a></li>
            <li><a href="#">Ghanaian Specialties</a></li>
            <li><a href="#">Senegalese Flavors</a></li>
            <li><a href="#">Artisanal Spices</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Customer Care</h4>
          <ul>
            <li><a href="#">Cold-Chain Delivery Info</a></li>
            <li><a href="#">Freshness Guarantee</a></li>
            <li><a href="#">Track Meal Shipment</a></li>
            <li><a href="#">Dietary & Allergy Guide</a></li>
            <li><a href="#">Catering Services</a></li>
            <li><a href="#">FAQs</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Contact Kitchen HQ</h4>
          <p class="contact-item">📍 128 Heritage Way, London SE1 4PG</p>
          <p class="contact-item">✉ kitchen@afrotaste.com</p>
          <p class="contact-item">📞 +44 (0) 20 7946 0912</p>
          <p class="contact-item">Mon — Sat: 8:00 - 20:00 GMT</p>
        </div>
      </div>

      <div class="footer-bottom">
        <p>© 2026 AFRO TASTE Culinary Market Ltd. All rights reserved.</p>
        <div class="payment-icons">
          <span>VISA</span>
          <span>MC</span>
          <span>AMEX</span>
          <span>APPLE PAY</span>
          <span>PAYPAL</span>
        </div>
        <button class="back-to-top" id="backToTop">Back to Top ↑</button>
      </div>
    </div>
  </footer>

  <!-- CART DRAWER MODAL -->
  <div class="cart-drawer-overlay" id="cartOverlay"></div>
  <aside class="cart-drawer" id="cartDrawer">
    <div class="cart-header">
      <h3>Your Taste Basket (<span id="cartDrawerCount">0</span>)</h3>
      <button class="close-drawer" id="closeCart">✕</button>
    </div>
    <div class="cart-body" id="cartItemsContainer">
      <div class="empty-cart-msg">Your Taste Basket is currently empty.</div>
    </div>
    <div class="cart-footer">
      <div class="subtotal-row">
        <span>Subtotal</span>
        <span id="cartSubtotal">$0.00</span>
      </div>
      <p class="shipping-note">Temperature-controlled packaging calculated at checkout.</p>
      <button class="btn btn-primary full-width">Proceed to Secure Checkout</button>
    </div>
  </aside>

  <!-- QUICK VIEW MODAL -->
  <div class="modal-overlay" id="quickViewOverlay">
    <div class="modal-card">
      <button class="close-modal" id="closeQuickView">✕</button>
      <div class="modal-body" id="quickViewContent">
        <!-- Injected via JS -->
      </div>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>