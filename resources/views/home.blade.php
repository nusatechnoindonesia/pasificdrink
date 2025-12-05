<!DOCTYPE html>
<html lang="id">
<head>
    <title>Pasifik Drink - Minuman Segar & Berkualitas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pasifik Drink menyediakan berbagai minuman segar dengan pesan cepat via WhatsApp. Fresh drinks at your doorstep!">
    
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-blue: #0D6EFD;
            --secondary-blue: #0B5ED7;
            --accent-teal: #20C997;
            --accent-orange: #FD7E14;
            --light-bg: #F8F9FA;
            --dark-text: #212529;
            --gray-text: #6C757D;
        }
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }
        
        body {
            overflow-x: hidden;
            color: var(--dark-text);
        }
        
        /* ===== HEADER PREMIUM ===== */
        .main-header {
            background: linear-gradient(135deg, var(--primary-blue) 0%, #0854C7 100%);
            box-shadow: 0 4px 20px rgba(13, 110, 253, 0.15);
            position: sticky;
            top: 0;
            z-index: 1030;
        }
        
        .logo-img {
            height: 55px;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
            transition: transform 0.3s ease;
        }
        
        .logo-img:hover {
            transform: scale(1.05);
        }
        
        .cart-btn {
            position: relative;
            background: rgba(255,255,255,0.15);
            border: none;
            width: 46px;
            height: 46px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .cart-btn:hover {
            background: rgba(255,255,255,0.25);
            transform: translateY(-2px);
        }
        
        .cart-count {
            position: absolute;
            top: -5px;
            right: -5px;
            background: var(--accent-orange);
            color: white;
            font-size: 0.75rem;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            box-shadow: 0 2px 5px rgba(253, 126, 20, 0.3);
        }
        
        /* ===== HERO SECTION ===== */
        .hero-section {
            background: linear-gradient(135deg, #E3F2FD 0%, #F8F9FA 100%);
            padding: 100px 0 60px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(13, 110, 253, 0.05) 0%, rgba(32, 201, 151, 0.05) 100%);
            top: -200px;
            right: -100px;
            z-index: 1;
        }
        
        .hero-title {
            font-size: 3.2rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            background: linear-gradient(90deg, var(--primary-blue) 0%, #0B5ED7 50%, var(--accent-teal) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .hero-subtitle {
            font-size: 1.1rem;
            color: var(--gray-text);
            line-height: 1.6;
            margin-bottom: 2rem;
            max-width: 90%;
        }
        
        .btn-primary-custom {
            background: linear-gradient(135deg, var(--primary-blue) 0%, #0B5ED7 100%);
            border: none;
            color: white;
            font-weight: 600;
            padding: 14px 32px;
            border-radius: 12px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(13, 110, 253, 0.3);
        }
        
        .btn-primary-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(13, 110, 253, 0.4);
            color: white;
        }
        
        .btn-outline-custom {
            background: transparent;
            border: 2px solid var(--primary-blue);
            color: var(--primary-blue);
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 12px;
            transition: all 0.3s ease;
        }
        
        .btn-outline-custom:hover {
            background: var(--primary-blue);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 4px 15px rgba(13, 110, 253, 0.2);
        }
        
        .stats-container {
            margin-top: 3rem;
            padding: 1.5rem;
            background: rgba(255,255,255,0.7);
            border-radius: 16px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.9);
            box-shadow: 0 8px 30px rgba(0,0,0,0.05);
        }
        
        .stat-item {
            text-align: center;
            padding: 0.5rem;
        }
        
        .stat-number {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--primary-blue);
            line-height: 1;
        }
        
        .stat-label {
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--gray-text);
            margin-top: 0.5rem;
        }
        
        /* ===== FEATURE CARDS ===== */
        .feature-card {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            height: 100%;
            transition: all 0.3s ease;
            border: 1px solid #E9ECEF;
            box-shadow: 0 4px 12px rgba(0,0,0,0.04);
        }
        
        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            border-color: var(--primary-blue);
        }
        
        .feature-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #E3F2FD 0%, #F0F7FF 100%);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }
        
        .feature-icon svg {
            width: 32px;
            height: 32px;
            color: var(--primary-blue);
        }
        
        .feature-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            color: var(--dark-text);
        }
        
        .feature-text {
            color: var(--gray-text);
            font-size: 0.95rem;
            line-height: 1.5;
        }
        
        /* ===== CATEGORY SECTION ===== */
        .section-header {
            margin-bottom: 2.5rem;
        }
        
        .section-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--dark-text);
            position: relative;
            display: inline-block;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 50px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-blue) 0%, var(--accent-teal) 100%);
            border-radius: 2px;
        }
        
        .category-card {
            background: white;
            border-radius: 16px;
            padding: 1.5rem;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid #E9ECEF;
            height: 100%;
            cursor: pointer;
        }
        
        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            border-color: var(--primary-blue);
        }
        
        .category-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            margin: 0 auto 1rem;
            border: 4px solid #F0F7FF;
            transition: all 0.3s ease;
        }
        
        .category-card:hover .category-img {
            transform: scale(1.08);
            border-color: var(--primary-blue);
        }
        
        .category-name {
            font-weight: 600;
            color: var(--dark-text);
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }
        
        .category-count {
            color: var(--gray-text);
            font-size: 0.9rem;
        }
        
        .carousel-nav-btn {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: white;
            border: 1px solid #DEE2E6;
            color: var(--dark-text);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .carousel-nav-btn:hover {
            background: var(--primary-blue);
            color: white;
            border-color: var(--primary-blue);
            transform: scale(1.1);
        }
        
        /* ===== PRODUCT CARDS ===== */
        .product-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid #E9ECEF;
            height: 100%;
            position: relative;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.1);
        }
        
        .product-badge {
            position: absolute;
            top: 12px;
            left: 12px;
            background: var(--accent-orange);
            color: white;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            z-index: 2;
        }
        
        .product-image {
            width: 100%;
            height: 180px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .product-card:hover .product-image {
            transform: scale(1.05);
        }
        
        .product-info {
            padding: 1.25rem;
        }
        
        .product-title {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--dark-text);
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .product-rating {
            display: flex;
            align-items: center;
            gap: 0.25rem;
            margin-bottom: 0.75rem;
        }
        
        .rating-star {
            color: #FFC107;
        }
        
        .rating-count {
            font-size: 0.85rem;
            color: var(--gray-text);
        }
        
        .product-price {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1rem;
        }
        
        .current-price {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--primary-blue);
        }
        
        .original-price {
            font-size: 0.95rem;
            color: var(--gray-text);
            text-decoration: line-through;
        }
        
        .discount-badge {
            background: #FFE7E7;
            color: #DC3545;
            padding: 2px 8px;
            border-radius: 6px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .product-actions {
            display: grid;
            grid-template-columns: 1fr 2fr 1fr;
            gap: 0.5rem;
        }
        
        .quantity-input {
            text-align: center;
            border: 1px solid #DEE2E6;
            border-radius: 8px;
            font-weight: 600;
        }
        
        .btn-add-cart {
            background: linear-gradient(135deg, var(--primary-blue) 0%, #0B5ED7 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            padding: 0.5rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }
        
        .btn-add-cart:hover {
            background: linear-gradient(135deg, #0B5ED7 0%, #0A58CA 100%);
            transform: translateY(-2px);
        }
        
        .btn-wishlist {
            background: white;
            border: 1px solid #DEE2E6;
            border-radius: 8px;
            color: var(--gray-text);
            transition: all 0.3s ease;
        }
        
        .btn-wishlist:hover {
            background: #FFF5F5;
            border-color: #FF6B6B;
            color: #FF6B6B;
        }
        
        /* ===== PROMO BANNERS ===== */
        .promo-banner {
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            height: 250px;
            background-size: cover;
            background-position: center;
        }
        
        .promo-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.3) 100%);
            display: flex;
            align-items: center;
            padding: 2rem;
        }
        
        .promo-content {
            color: white;
            max-width: 80%;
        }
        
        .promo-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        
        .promo-subtitle {
            font-size: 1rem;
            margin-bottom: 1.5rem;
            opacity: 0.9;
        }
        
        .btn-promo {
            background: white;
            color: var(--dark-text);
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-promo:hover {
            background: var(--primary-blue);
            color: white;
            transform: translateY(-2px);
        }
        
        /* ===== BENEFITS SECTION ===== */
        .benefits-section {
            background: linear-gradient(135deg, #F8F9FA 0%, #E9ECEF 100%);
            padding: 4rem 0;
        }
        
        .benefit-card {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            text-align: center;
            height: 100%;
            transition: all 0.3s ease;
            border: 1px solid transparent;
        }
        
        .benefit-card:hover {
            border-color: var(--primary-blue);
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        }
        
        .benefit-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #E3F2FD 0%, #F0F7FF 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
        }
        
        .benefit-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            color: var(--dark-text);
        }
        
        .benefit-text {
            color: var(--gray-text);
            font-size: 0.9rem;
            line-height: 1.5;
        }
        
        /* ===== FOOTER ===== */
        footer {
            background: linear-gradient(135deg, #0B5ED7 0%, #0854C7 100%);
            color: white;
            padding: 4rem 0 2rem;
        }
        
        .footer-logo {
            height: 50px;
            margin-bottom: 1.5rem;
        }
        
        .footer-description {
            color: rgba(255,255,255,0.8);
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
        }
        
        .social-links {
            display: flex;
            gap: 0.75rem;
        }
        
        .social-link {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: all 0.3s ease;
        }
        
        .social-link:hover {
            background: rgba(255,255,255,0.2);
            transform: translateY(-3px);
        }
        
        .footer-heading {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: white;
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 0.75rem;
        }
        
        .footer-links a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }
        
        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }
        
        .footer-divider {
            border-color: rgba(255,255,255,0.1);
            margin: 2.5rem 0;
        }
        
        .copyright {
            color: rgba(255,255,255,0.7);
            font-size: 0.9rem;
            text-align: center;
        }
        
        /* ===== MODAL ===== */
        .modal-glass {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.2rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .stats-container {
                padding: 1rem;
            }
            
            .stat-number {
                font-size: 1.8rem;
            }
            
            .promo-banner {
                height: 200px;
            }
            
            .promo-title {
                font-size: 1.4rem;
            }
            
            .feature-card, .category-card, .product-card {
                padding: 1.25rem;
            }
        }
        
        @media (max-width: 576px) {
            .hero-title {
                font-size: 1.8rem;
            }
            
            .section-title {
                font-size: 1.5rem;
            }
            
            .product-actions {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<header class="main-header py-2" style="background: #0D6EFD;">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <!-- Logo -->
            <a href="#" class="logo-container">
                <img src="images/logo-removebg-preview.png" class="logo-img" alt="Pasifik Drink" style="height: 90px;">
            </a>
            
            <!-- Konten lainnya -->
        </div>
    </div>
</header>


    
        <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">
                        Minuman Segar & Berkualitas<br>
                        <span class="text-primary">Langganan Bahagia</span>
                    </h1>
                    
                    <p class="hero-subtitle">
                        Nikmati berbagai pilihan minuman segar premium dengan pesan cepat via WhatsApp. 
                        Delivery cepat, harga terjangkau, dan kualitas terjamin.
                    </p>
                    
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="#categories" class="btn btn-primary-custom">
                            <i class="bi bi-cup-straw me-2"></i>Lihat Menu
                        </a>
                        <a href="#promo" class="btn btn-outline-custom">
                            <i class="bi bi-percent me-2"></i>Promo Hari Ini
                        </a>
                    </div>
                    
                    <div class="stats-container">
                        <div class="row">
                            <div class="col-4">
                                <div class="stat-item">
                                    <div class="stat-number">50+</div>
                                    <div class="stat-label">Pilihan Minuman</div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="stat-item">
                                    <div class="stat-number">5k+</div>
                                    <div class="stat-label">Pelanggan Puas</div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="stat-item">
                                    <div class="stat-number">10+</div>
                                    <div class="stat-label">Promo Bulanan</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <!-- Hero Image Placeholder -->
                    <div class="text-center mt-5 mt-lg-0">
                        <img src="https://images.unsplash.com/photo-1551024709-8f23befc6f87?w=600&auto=format&fit=crop" 
                             class="img-fluid rounded-4 shadow-lg" 
                             alt="Fresh Drinks" 
                             style="max-height: 400px; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Features -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-truck fs-3 text-primary"></i>
                        </div>
                        <h3 class="feature-title">Delivery Super Cepat</h3>
                        <p class="feature-text">
                            Pesan sekarang, minuman segar sampai dalam hitungan menit. Area cakupan luas dengan armada handal.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-whatsapp fs-3 text-primary"></i>
                        </div>
                        <h3 class="feature-title">Order via WhatsApp</h3>
                        <p class="feature-text">
                            Pesan mudah hanya dengan chat WhatsApp. Respons cepat, admin ramah, dan proses simpel.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-award fs-3 text-primary"></i>
                        </div>
                        <h3 class="feature-title">Kualitas Premium</h3>
                        <p class="feature-text">
                            Bahan terbaik, racikan spesial, dan penyajian higienis. Minuman segar setiap hari.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Categories -->
    <section id="categories" class="py-5">
        <div class="container">
            <div class="section-header d-flex justify-content-between align-items-center mb-4">
                <h2 class="section-title">Kategori Minuman</h2>
                <div class="d-flex gap-2">
                    <button class="carousel-nav-btn category-prev">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button class="carousel-nav-btn category-next">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
            </div>
            
            <div class="swiper categorySwiper">
                <div class="swiper-wrapper">
                    <!-- Category Items -->
                    <div class="swiper-slide">
                        <div class="category-card">
                            <img src="https://images.unsplash.com/photo-1622483767028-3f66f32aef97?w=300&auto=format&fit=crop" 
                                 class="category-img" 
                                 alt="Soft Drink">
                            <h4 class="category-name">Soft Drink</h4>
                            <div class="category-count">25+ produk</div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="category-card">
                            <img src="https://images.unsplash.com/photo-1600271886742-f049cd451bba?w=300&auto=format&fit=crop" 
                                 class="category-img" 
                                 alt="Juice">
                            <h4 class="category-name">Juice</h4>
                            <div class="category-count">18+ produk</div>
                        </div>
                    </div>
                    
                    <!-- Add more categories... -->
                </div>
            </div>
        </div>
    </section>
        <!-- Best Selling Products -->
    <section class="py-5">
        <div class="container">
            <div class="section-header mb-4">
                <h2 class="section-title">Produk Terlaris</h2>
                <p class="text-muted">Minuman paling diminati pelanggan kami</p>
            </div>
            
            <div class="row g-4">
                <!-- Product 1 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="product-card">
                        <div class="product-badge">HOT</div>
                        <img src="https://images.unsplash.com/photo-1544145945-f90425340c7e?w-300&auto=format&fit=crop" 
                             class="product-image" 
                             alt="Product">
                        <div class="product-info">
                            <h5 class="product-title">Fresh Orange Juice</h5>
                            <div class="product-rating">
                                <i class="bi bi-star-fill rating-star"></i>
                                <i class="bi bi-star-fill rating-star"></i>
                                <i class="bi bi-star-fill rating-star"></i>
                                <i class="bi bi-star-fill rating-star"></i>
                                <i class="bi bi-star-half rating-star"></i>
                                <span class="rating-count">(222)</span>
                            </div>
                            <div class="product-price">
                                <span class="current-price">IDR 28.000</span>
                                <span class="original-price">IDR 35.000</span>
                                <span class="discount-badge">-20%</span>
                            </div>
                            <div class="product-actions">
                                <input type="number" class="form-control quantity-input" value="1" min="1">
                                <button class="btn btn-add-cart">
                                    <i class="bi bi-cart-plus"></i> Add
                                </button>
                                <button class="btn btn-wishlist">
                                    <i class="bi bi-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add more products... -->
            </div>
        </div>
    </section>
        <!-- Promo Banners -->
    <section id="promo" class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-8">
                    <div class="promo-banner" 
                         style="background-image: url('https://images.unsplash.com/photo-1513558161293-cdaf765ed2fd?w=800&auto=format&fit=crop');">
                        <div class="promo-overlay">
                            <div class="promo-content">
                                <h3 class="promo-title">Diskon Spesial Akhir Tahun</h3>
                                <p class="promo-subtitle">Nikmati promo hingga 50% untuk semua minuman kategori Juice</p>
                                <button class="btn btn-promo">Beli Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="promo-banner" 
                         style="background-image: url('https://images.unsplash.com/photo-1570598912132-0ba1dc952b7d?w=400&auto=format&fit=crop');">
                        <div class="promo-overlay">
                            <div class="promo-content">
                                <h3 class="promo-title">Combo Hemat</h3>
                                <p class="promo-subtitle">Dapatkan paket hemat untuk minuman favoritmu</p>
                                <button class="btn btn-promo">Lihat Promo</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Benefits -->
    <section class="benefits-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title">Kenapa Memilih Pasifik Drink?</h2>
                <p class="text-muted">Keunggulan yang membuat kami berbeda</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="bi bi-clock-history fs-3 text-primary"></i>
                        </div>
                        <h4 class="benefit-title">24/7 Available</h4>
                        <p class="benefit-text">Pesan kapan saja, kami siap melayani 24 jam sehari</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="bi bi-shield-check fs-3 text-primary"></i>
                        </div>
                        <h4 class="benefit-title">Hygienic & Safe</h4>
                        <p class="benefit-text">Proses pembuatan higienis dan pengemasan aman</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="bi bi-currency-dollar fs-3 text-primary"></i>
                        </div>
                        <h4 class="benefit-title">Best Price</h4>
                        <p class="benefit-text">Harga kompetitif dengan kualitas terbaik</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="bi bi-headset fs-3 text-primary"></i>
                        </div>
                        <h4 class="benefit-title">Fast Support</h4>
                        <p class="benefit-text">Customer service responsif siap membantu Anda</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <!-- Logo & Info -->
                <div class="col-lg-4 mb-4">
                    <img src="images/logo-removebg-preview.png" class="footer-logo" alt="Pasifik Drink">
                    <p class="footer-description">
                        Penyedia minuman segar berkualitas dengan layanan pesan-antar cepat via WhatsApp. 
                        Fresh drinks at your doorstep!
                    </p>
                    <div class="social-links">
                        <a href="#" class="social-link">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="bi bi-tiktok"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                    <h5 class="footer-heading">Tautan Cepat</h5>
                    <ul class="footer-links">
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#categories">Kategori</a></li>
                        <li><a href="#promo">Promo</a></li>
                        <li><a href="#">Produk Terlaris</a></li>
                        <li><a href="#">Produk Baru</a></li>
                    </ul>
                </div>
                
                <!-- Info -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <h5 class="footer-heading">Informasi</h5>
                    <ul class="footer-links">
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                
                <!-- Contact -->
                <div class="col-lg-3 col-md-4 col-sm-12 mb-4">
                    <h5 class="footer-heading">Kontak Kami</h5>
                    <ul class="footer-links">
                        <li><i class="bi bi-geo-alt me-2"></i>Jl. Minuman Segar No. 123, Jakarta</li>
                        <li><i class="bi bi-telephone me-2"></i>+62 812-3456-7890</li>
                        <li><i class="bi bi-envelope me-2"></i>info@pasifikdrink.com</li>
                        <li><i class="bi bi-clock me-2"></i>Buka 24/7</li>
                    </ul>
                </div>
            </div>
            
            <hr class="footer-divider">
            
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="copyright">
                        &copy; 2025 Pasifik Drink. All rights reserved. 
                        <span class="d-block d-md-inline">Made with <i class="bi bi-heart-fill text-danger"></i> for better drinks.</span>
                    </p>
                </div>
            </div>
        </div>
    </footer>
        <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Initialize Swiper
        const categorySwiper = new Swiper('.categorySwiper', {
            slidesPerView: 2,
            spaceBetween: 16,
            navigation: {
                nextEl: '.category-next',
                prevEl: '.category-prev',
            },
            breakpoints: {
                640: { slidesPerView: 3 },
                768: { slidesPerView: 4 },
                1024: { slidesPerView: 5 },
                1200: { slidesPerView: 6 }
            }
        });
        
        // Product Swipers
        const productSwipers = document.querySelectorAll('.productSwiper');
        productSwipers.forEach(swiper => {
            new Swiper(swiper, {
                slidesPerView: 2,
                spaceBetween: 16,
                navigation: {
                    nextEl: '.product-next',
                    prevEl: '.product-prev',
                },
                breakpoints: {
                    640: { slidesPerView: 3 },
                    768: { slidesPerView: 4 },
                    1024: { slidesPerView: 5 }
                }
            });
        });
        
        // Cart functionality
        const cartBtn = document.getElementById('cartBtn');
        const cartCount = document.getElementById('cartCount');
        
        // Add to cart buttons
        document.querySelectorAll('.btn-add-cart').forEach(button => {
            button.addEventListener('click', function() {
                const currentCount = parseInt(cartCount.textContent);
                cartCount.textContent = currentCount + 1;
                
                // Animation
                cartBtn.style.transform = 'scale(1.1)';
                setTimeout(() => {
                    cartBtn.style.transform = 'scale(1)';
                }, 300);
                
                // Notification
                const toast = document.createElement('div');
                toast.className = 'position-fixed bottom-0 end-0 p-3';
                toast.innerHTML = `
                    <div class="toast show" role="alert">
                        <div class="toast-header bg-success text-white">
                            <strong class="me-auto"><i class="bi bi-check-circle"></i> Berhasil!</strong>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"></button>
                        </div>
                        <div class="toast-body">
                            Produk berhasil ditambahkan ke keranjang
                        </div>
                    </div>
                `;
                document.body.appendChild(toast);
                setTimeout(() => toast.remove(), 3000);
            });
        });
        
        // Quantity buttons
        document.querySelectorAll('.quantity-input').forEach(input => {
            const minus = input.previousElementSibling;
            const plus = input.nextElementSibling;
            
            if (minus && minus.classList.contains('btn-minus')) {
                minus.addEventListener('click', () => {
                    if (parseInt(input.value) > 1) {
                        input.value = parseInt(input.value) - 1;
                    }
                });
            }
            
            if (plus && plus.classList.contains('btn-plus')) {
                plus.addEventListener('click', () => {
                    input.value = parseInt(input.value) + 1;
                });
            }
        });
        
        // Wishlist buttons
        document.querySelectorAll('.btn-wishlist').forEach(button => {
            button.addEventListener('click', function() {
                const icon = this.querySelector('i');
                if (icon.classList.contains('bi-heart')) {
                    icon.classList.remove('bi-heart');
                    icon.classList.add('bi-heart-fill', 'text-danger');
                    this.classList.add('active');
                } else {
                    icon.classList.remove('bi-heart-fill', 'text-danger');
                    icon.classList.add('bi-heart');
                    this.classList.remove('active');
                }
            });
        });
        
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Parallax effect on scroll
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallax = document.querySelector('.hero-section');
            if (parallax) {
                parallax.style.transform = `translateY(${scrolled * 0.05}px)`;
            }
        });
        
        // Initialize tooltips
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
    </script>
</body>
</html>