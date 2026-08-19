/**
 * AFRO TASTE — Culinary E-Commerce Engine
 */

// African Food Database
const DISHES = [
  {
    id: 'dish_1',
    name: 'Nigerian Party Smoked Jollof & Suya Beef',
    brand: 'NIGERIAN HERITAGE',
    category: 'nigerian',
    price: 18.50,
    oldPrice: 22.00,
    image: 'kilishi2.jpg',
    description: 'Long-grain parboiled rice cooked in rich tomato-pepper reduction, infused with woodsmoke flavor and served with tender spicy beef Suya.'
  },
  {
    id: 'dish_2',
    name: 'Ethiopian Doro Wat with Fresh Injera',
    brand: 'ETHIOPIAN KITCHEN',
    category: 'ethiopian',
    price: 19.00,
    oldPrice: null,
    image: 'ethio.jpg',
    description: 'Slow-simmered chicken stew infused with Berbere spices, Niter Kibbeh spiced butter, boiled eggs, served with authentic fermented teff Injera.'
  },
  {
    id: 'dish_3',
    name: 'Cameroonian Prawn & Bitterleaf Ndolé',
    brand: 'CAMEROON CUISINE',
    category: 'cameroonian',
    price: 21.00,
    oldPrice: 25.00,
    image: 'cam3.jpg',
    description: 'Traditional Cameroonian dish made of stewed nuts, washed bitter leaves, tender beef, and grilled prawns served with fried ripe plantains.'
  },
  {
    id: 'dish_4',
    name: 'Nigerian Egusi Soup with Pounded Yam',
    brand: 'NIGERIAN HERITAGE',
    category: 'nigerian',
    price: 17.50,
    oldPrice: null,
    image: 'egusi2.jpeg',
    description: 'Rich melon seed soup cooked with spinach, stockfish, goat meat, and red palm oil, paired with fluffy, warm pounded yam.'
  }
];

// State Management
let state = {
  cart: [],
  wishlistCount: 5,
  activeFilter: 'all', 
  products: []
};

// DOM Initialization
document.addEventListener('DOMContentLoaded', () => {
  initSuperHeader();
  // renderProducts();
  initFilterTabs();
  // initCartDrawer();
  initQuickView();
  initCountdown();
  initFormHandlers();
});

/* 1. Super Header Dismissal */
function initSuperHeader() {
  const dismissBtn = document.getElementById('dismissSuperHeader');
  const superHeader = document.getElementById('superHeader');
  dismissBtn.addEventListener('click', () => {
    superHeader.classList.add('hidden');
  });
}


function initFilterTabs() {
  const tabs = document.querySelectorAll('.tab-btn');
  tabs.forEach(tab => {
    tab.addEventListener('click', (e) => {
      tabs.forEach(t => t.classList.remove('active'));
      e.target.classList.add('active');
      state.activeFilter = e.target.dataset.filter;
      // renderProducts();
    });
  });
}

/* 4. Quick View Modal */
function initQuickView() {
  const closeBtn = document.getElementById('closeQuickView');
  const overlay = document.getElementById('quickViewOverlay');

  closeBtn.addEventListener('click', () => overlay.classList.remove('active'));
  overlay.addEventListener('click', (e) => {
    if (e.target === overlay) overlay.classList.remove('active');
  });
}

function openQuickViewModal(productId) {
  const product = DISHES.find(p => p.id === productId);
  const container = document.getElementById('quickViewContent');
  const overlay = document.getElementById('quickViewOverlay');

  container.innerHTML = `
    <div style="display:grid; grid-template-columns: 1fr 1fr; gap:24px; align-items:center;">
      <img src="${product.image}" alt="${product.name}" style="border-radius:12px; width:100%; aspect-ratio:4/3; object-fit:cover;">
      <div>
        <span style="font-size:0.75rem; text-transform:uppercase; color:#D96B27; font-weight:700;">${product.brand}</span>
        <h2 style="font-family:'Syne'; margin:8px 0; font-size:1.5rem;">${product.name}</h2>
        <p style="font-size:1.25rem; font-weight:800; margin-bottom:16px;">$${product.price.toFixed(2)}</p>
        <p style="color:#6B5E54; font-size:0.9rem; margin-bottom:24px;">${product.description}</p>
        <button class="btn btn-primary full-width" onclick="addToCart('${product.id}'); document.getElementById('quickViewOverlay').classList.remove('active');">Add to Taste Basket</button>
      </div>
    </div>
  `;
  overlay.classList.add('active');
}

/* 5. Countdown Timer Engine */
function initCountdown() {
  let hours = 8, minutes = 19, seconds = 42;
  const hEl = document.getElementById('hours');
  const mEl = document.getElementById('minutes');
  const sEl = document.getElementById('seconds');

  setInterval(() => {
    if (seconds > 0) {
      seconds--;
    } else {
      seconds = 59;
      if (minutes > 0) {
        minutes--;
      } else {
        minutes = 59;
        if (hours > 0) hours--;
      }
    }
    hEl.textContent = String(hours).padStart(2, '0');
    mEl.textContent = String(minutes).padStart(2, '0');
    sEl.textContent = String(seconds).padStart(2, '0');
  }, 1000);
}

/* 6. Form Handlers & Utilities */
function initFormHandlers() {
  const newsletter = document.getElementById('newsletterForm');
  newsletter.addEventListener('submit', (e) => {
    e.preventDefault();
    alert('Welcome to the Afro Taste family! Your $15 discount coupon code is: AFROFEAST15');
    newsletter.reset();
  });

  document.getElementById('backToTop').addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
}

// Mobile Slide-Out Menu Toggle Logic
document.addEventListener('DOMContentLoaded', () => {
  const openBtn = document.getElementById('mobileMenuOpen');
  const closeBtn = document.getElementById('mobileMenuClose');
  const overlay = document.getElementById('mobileMenuOverlay');
  const drawer = document.getElementById('mobileMenuDrawer');

  if (openBtn && drawer && overlay) {
    openBtn.addEventListener('click', () => {
      drawer.classList.add('active');
      overlay.classList.add('active');
    });

    const closeMenu = () => {
      drawer.classList.remove('active');
      overlay.classList.remove('active');
    };

    closeBtn.addEventListener('click', closeMenu);
    overlay.addEventListener('click', closeMenu);
  }
});



    // const state = { cart: [], products: [] };

    
    // Fetch products dynamically from PHP backend
    async function loadProducts() {
      try {
        const res = await fetch('https://coodesrc.com/swiss/api.php?action=get_products');
        state.products = await res.json();
        renderProducts();
      } catch(e) {
        console.error('Failed to load products from API', e);
      }
    }

    function renderProducts() {
      const container = document.getElementById('productsGrid');
      container.innerHTML = state.products.map(product => `
        <div class="product-card">
          <div class="product-thumb">
            ${product.oldPrice ? `<span class="badge-discount">SAVE ${(100 - (product.price/product.oldPrice * 100)).toFixed(0)}%</span>` : ''}
            <img src="${product.image}" alt="${product.name}" loading="lazy">
          </div>
          <div class="product-details">
            <span class="product-brand">${product.brand}</span>
            <h3 class="product-title">${product.name}</h3>
            <div class="product-price">
              <span>$${product.price.toFixed(2)}</span>
              ${product.oldPrice ? `<span class="old">$${product.oldPrice.toFixed(2)}</span>` : ''}
            </div>
            <button class="add-to-cart-btn" onclick="addToCart('${product.id}')">Add to Basket</button>
          </div>
        </div>
      `).join('');
    }

    function addToCart(productId) {
      const product = state.products.find(p => p.id === productId);
      if(product) {
        state.cart.push(product);
        updateCartUI();
        document.getElementById('cartDrawer').classList.add('active');
      }
    }

    function removeFromCart(index) {
      state.cart.splice(index, 1);
      updateCartUI();
    }

    function updateCartUI() {
      const drawerCount = document.getElementById('cartDrawerCount');
      const container = document.getElementById('cartItemsContainer');
      const subtotalEl = document.getElementById('cartSubtotal');

      drawerCount.textContent = state.cart.length;

      if (state.cart.length === 0) {
        container.innerHTML = `<div class="empty-cart-msg">Your Taste Basket is currently empty.</div>`;
        subtotalEl.textContent = '$0.00';
        return;
      }

      container.innerHTML = state.cart.map((item, index) => `
        <div class="cart-item">
          <img src="${item.image}" alt="${item.name}">
          <div class="cart-item-info">
            <div class="cart-item-title">${item.name}</div>
            <div class="cart-item-price">$${item.price.toFixed(2)}</div>
          </div>
          <button onclick="removeFromCart(${index})" style="color:#C83214; font-size:0.8rem; font-weight:700; border:none; background:none; cursor:pointer;">Remove</button>
        </div>
      `).join('');

      const subtotal = state.cart.reduce((sum, item) => sum + item.price, 0);
      subtotalEl.textContent = `$${subtotal.toFixed(2)}`;
    }

    function closeCartDrawer() {
      document.getElementById('cartDrawer').classList.remove('active');
    }

    // Checkout Modal Handlers
    function openCheckoutModal() {
      const subtotal = state.cart.reduce((sum, item) => sum + item.price, 0);
      if (subtotal === 0) return alert('Your cart is empty!');

      document.getElementById('checkoutTotal').textContent = `$${subtotal.toFixed(2)}`;
      document.getElementById('paypalAmount').value = subtotal.toFixed(2);
      document.getElementById('checkoutModal').classList.add('active');
    }

    function closeCheckoutModal() {
      document.getElementById('checkoutModal').classList.remove('active');
    }

    // Notice confirmation checkbox listener
    document.getElementById('acceptReturnNotice').addEventListener('change', function(e) {
      document.getElementById('paypalSubmitBtn').disabled = !e.target.checked;
    });

    // Initialize application
    loadProducts();
  