<!DOCTYPE html>
<html lang="id">
<head>
    <title>Pasifik Drink - Distributor Minuman Premium</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pasifik Drink - Distributor resmi minuman premium, wine, vodka, whisky, soju, dan cocktail dengan harga grosir terbaik.">
    
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
    <style>
        :root {
            --primary-blue: #0066FF;
            --primary-blue-light: #3399FF;
            --primary-blue-dark: #0052CC;
            --secondary-blue: #00BFFF;
            --accent-teal: #00E6CC;
            --accent-purple: #9D4EDD;
            --accent-gold: #FFD700;
            --gradient-primary: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-blue) 100%);
            --gradient-primary-dark: linear-gradient(135deg, var(--primary-blue-dark) 0%, #0088FF 100%);
            --gradient-accent: linear-gradient(135deg, var(--accent-purple) 0%, var(--accent-teal) 100%);
            --gradient-gold: linear-gradient(135deg, #FFD700 0%, #FFA500 100%);
            --gradient-glow: linear-gradient(135deg, #0066FF 0%, #00BFFF 50%, #00E6CC 100%);
            --glass-bg: rgba(255, 255, 255, 0.15);
            --glass-border: rgba(255, 255, 255, 0.2);
            --shadow-blue: 0 10px 40px rgba(0, 102, 255, 0.3);
            --shadow-blue-lg: 0 20px 60px rgba(0, 102, 255, 0.4);
            --shadow-blue-xl: 0 25px 75px rgba(0, 102, 255, 0.5);
            --neon-glow: 0 0 20px rgba(0, 102, 255, 0.5);
            --neon-glow-gold: 0 0 20px rgba(255, 215, 0, 0.5);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: #ffffff;
            background: linear-gradient(135deg, #0a192f 0%, #1a365d 100%);
            overflow-x: hidden;
            scroll-behavior: smooth;
            min-height: 100vh;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }
        
        /* ===== PRELOADER ===== */
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-primary);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: opacity 0.5s ease;
        }
        
        .loader {
            width: 60px;
            height: 60px;
            border: 4px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
            margin-bottom: 20px;
        }
        
        .preloader-text {
            color: white;
            font-weight: 600;
            font-size: 1.2rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        /* ===== PROMO POPUP PREMIUM ===== */
        .promo-popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(10px);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9998;
            opacity: 0;
            visibility: hidden;
            transition: all 0.5s ease;
        }
        
        .promo-popup.active {
            opacity: 1;
            visibility: visible;
        }
        
        .promo-popup-content {
            background: linear-gradient(135deg, #0a192f 0%, #1a365d 100%);
            border-radius: 30px;
            width: 90%;
            max-width: 500px;
            overflow: hidden;
            position: relative;
            transform: scale(0.8);
            transition: transform 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            border: 2px solid var(--primary-blue-light);
            box-shadow: 0 30px 80px rgba(0, 102, 255, 0.4);
        }
        
        .promo-popup.active .promo-popup-content {
            transform: scale(1);
        }
        
        .promo-popup-header {
            background: var(--gradient-primary);
            padding: 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .promo-popup-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            animation: shine 3s infinite;
        }
        
        @keyframes shine {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
        
        .promo-popup-title {
            font-size: 2.5rem;
            font-weight: 900;
            color: white;
            margin-bottom: 0.5rem;
            text-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
        }
        
        .promo-popup-subtitle {
            font-size: 1.3rem;
            color: white;
            opacity: 0.9;
            font-weight: 600;
        }
        
        .promo-popup-body {
            padding: 2.5rem;
            text-align: center;
        }
        
        .promo-feature {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            border-left: 4px solid var(--accent-gold);
        }
        
        .promo-feature-icon {
            width: 50px;
            height: 50px;
            background: var(--gradient-primary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
        }
        
        .promo-feature-text {
            flex: 1;
            text-align: left;
        }
        
        .promo-feature-text h4 {
            color: white;
            font-size: 1.1rem;
            margin-bottom: 0.25rem;
        }
        
        .promo-feature-text p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }
        
        .promo-cta {
            background: var(--gradient-gold);
            color: #000;
            border: none;
            padding: 1.2rem 2.5rem;
            border-radius: 15px;
            font-size: 1.2rem;
            font-weight: 800;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            margin: 2rem auto 1rem;
            width: 100%;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 10px 30px rgba(255, 215, 0, 0.3);
        }
        
        .promo-cta:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 15px 40px rgba(255, 215, 0, 0.5);
        }
        
        .promo-close {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(255, 255, 255, 0.1);
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 10;
        }
        
        .promo-close:hover {
            background: var(--gradient-primary);
            transform: rotate(90deg);
        }
        
        .promo-app-buttons {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }
        
        .app-btn {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .app-btn:hover {
            background: var(--gradient-primary);
            transform: translateY(-3px);
            border-color: transparent;
        }
        
        .app-btn i {
            font-size: 1.5rem;
        }
        
        .app-btn-text {
            text-align: left;
        }
        
        .app-btn-text small {
            display: block;
            font-size: 0.8rem;
            opacity: 0.8;
        }
        
        .app-btn-text strong {
            font-size: 1.1rem;
        }
        
        /* ===== HEADER PREMIUM BIRU GACOR ===== */
        .main-header {
            background: linear-gradient(135deg, rgba(0, 102, 255, 0.95) 0%, rgba(0, 51, 204, 0.95) 100%);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.4s ease;
            box-shadow: var(--shadow-blue);
        }
        
        .main-header.scrolled {
            background: rgba(0, 51, 204, 0.98);
            padding: 10px 0;
        }
        
        .logo-container {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .logo-img {
            height: 70px;
            filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.5));
            transition: all 0.3s ease;
        }
        
        .logo-img:hover {
            transform: scale(1.05);
            filter: drop-shadow(0 0 15px var(--primary-blue-light));
        }
        
        .logo-text {
            font-family: 'Montserrat', sans-serif;
            font-weight: 900;
            font-size: 1.8rem;
            background: linear-gradient(135deg, #ffffff 0%, #00BFFF 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 0 10px rgba(0, 191, 255, 0.3);
        }
        
        .nav-link-custom {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 600;
            padding: 0.5rem 1.5rem !important;
            position: relative;
            transition: all 0.3s ease;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
        }
        
        .nav-link-custom::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: var(--accent-gold);
            transition: width 0.3s ease;
        }
        
        .nav-link-custom:hover::before,
        .nav-link-custom.active::before {
            width: 80%;
        }
        
        .nav-link-custom:hover {
            color: white !important;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }
        
        /* Cart Button Premium */
        .cart-btn {
            position: relative;
            width: 55px;
            height: 55px;
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.4rem;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .cart-btn:hover {
            background: var(--gradient-primary);
            transform: translateY(-3px) scale(1.05);
            box-shadow: var(--shadow-blue-lg);
            border-color: transparent;
        }
        
        .cart-count {
            position: absolute;
            top: -5px;
            right: -5px;
            background: var(--gradient-gold);
            color: #000;
            font-size: 0.8rem;
            font-weight: 900;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--neon-glow-gold);
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
        
        /* ===== HERO SECTION ===== */
        .hero-section {
            min-height: 100vh;
            background: linear-gradient(135deg, rgba(0, 102, 255, 0.1) 0%, rgba(0, 51, 204, 0.2) 100%),
                        url('https://images.unsplash.com/photo-1513558161293-cdaf765ed2fd?w=1600&auto=format&fit=crop&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
            padding-top: 120px;
            display: flex;
            align-items: center;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0, 51, 204, 0.7) 0%, rgba(0, 102, 255, 0.5) 100%);
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
        }
        
        .hero-title {
            font-size: 4rem;
            font-weight: 900;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, #ffffff 0%, #00BFFF 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 0 30px rgba(0, 191, 255, 0.5);
            animation: glow 2s ease-in-out infinite alternate;
        }
        
        @keyframes glow {
            from { text-shadow: 0 0 20px rgba(0, 191, 255, 0.5); }
            to { text-shadow: 0 0 30px rgba(0, 191, 255, 0.8), 0 0 40px rgba(0, 191, 255, 0.6); }
        }
        
        .hero-subtitle {
            font-size: 1.3rem;
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.6;
            margin-bottom: 2.5rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        /* Button Styles */
        .btn-primary-custom {
            background: var(--gradient-primary);
            border: none;
            color: white;
            font-weight: 700;
            padding: 18px 40px;
            border-radius: 15px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            font-size: 1.1rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            box-shadow: var(--shadow-blue);
        }
        
        .btn-primary-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }
        
        .btn-primary-custom:hover::before {
            left: 100%;
        }
        
        .btn-primary-custom:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: var(--shadow-blue-xl);
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }
        
        .btn-outline-custom {
            background: transparent;
            border: 2px solid var(--primary-blue-light);
            color: white;
            font-weight: 600;
            padding: 16px 38px;
            border-radius: 15px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            font-size: 1.1rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }
        
        .btn-outline-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-primary);
            z-index: -1;
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.3s ease;
        }
        
        .btn-outline-custom:hover::before {
            transform: scaleX(1);
            transform-origin: left;
        }
        
        .btn-outline-custom:hover {
            color: white;
            border-color: transparent;
            transform: translateY(-5px) scale(1.05);
            box-shadow: var(--shadow-blue);
        }
        
        /* Stats Container */
        .stats-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 2.5rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: var(--shadow-blue);
            margin-top: 4rem;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .stat-item {
            text-align: center;
            padding: 1rem;
        }
        
        .stat-number {
            font-size: 2.8rem;
            font-weight: 900;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1;
            text-shadow: 0 0 20px rgba(0, 102, 255, 0.5);
        }
        
        .stat-label {
            font-size: 0.9rem;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.8);
            margin-top: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        /* ===== FEATURE CARDS ===== */
        .feature-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 2.5rem 2rem;
            height: 100%;
            transition: all 0.4s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
        }
        
        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-primary);
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: -1;
        }
        
        .feature-card:hover::before {
            opacity: 0.1;
        }
        
        .feature-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: var(--shadow-blue-lg);
            border-color: var(--primary-blue-light);
        }
        
        .feature-icon {
            width: 80px;
            height: 80px;
            background: var(--gradient-primary);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
            color: white;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-blue);
        }
        
        .feature-card:hover .feature-icon {
            background: var(--gradient-accent);
            transform: rotateY(180deg) scale(1.1);
        }
        
        .feature-title {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: white;
            text-align: center;
        }
        
        .feature-text {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.95rem;
            line-height: 1.6;
            text-align: center;
        }
        
        /* ===== CATEGORY SECTION ===== */
        .category-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid rgba(255, 255, 255, 0.2);
            height: 100%;
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }
        
        .category-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--gradient-primary);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }
        
        .category-card:hover::before {
            transform: scaleX(1);
        }
        
        .category-card:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: var(--shadow-blue-lg);
            border-color: var(--primary-blue-light);
        }
        
        .category-icon {
            width: 80px;
            height: 80px;
            background: var(--gradient-primary);
            border-radius: 50%;
            margin: 0 auto 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
            transition: all 0.3s ease;
        }
        
        .category-card:hover .category-icon {
            background: var(--gradient-accent);
            transform: scale(1.1) rotate(15deg);
        }
        
        .category-name {
            font-weight: 700;
            color: white;
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .category-count {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
            background: rgba(255, 255, 255, 0.1);
            padding: 5px 15px;
            border-radius: 20px;
            display: inline-block;
        }
        
        /* ===== PRODUCT SECTION ===== */
        .product-section {
            background: linear-gradient(135deg, #0a192f 0%, #1a365d 100%);
        }
        
        .product-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid rgba(255, 255, 255, 0.2);
            height: 100%;
            position: relative;
        }
        
        .product-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: var(--shadow-blue-xl);
            border-color: var(--primary-blue-light);
        }
        
        .product-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: var(--gradient-gold);
            color: #000;
            padding: 8px 16px;
            border-radius: 25px;
            font-size: 0.8rem;
            font-weight: 900;
            z-index: 2;
            box-shadow: var(--neon-glow-gold);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .product-image-container {
            height: 180px;
            overflow: hidden;
            position: relative;
        }
        
        .product-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }
        
        .product-card:hover .product-image {
            transform: scale(1.1);
        }
        
        .product-info {
            padding: 1.5rem;
        }
        
        .product-title {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: white;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            min-height: 56px;
        }
        
        .product-category {
            color: var(--primary-blue-light);
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .product-price {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }
        
        .price-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .price-label {
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.7);
        }
        
        .price-value {
            font-size: 1rem;
            font-weight: 700;
            color: white;
        }
        
        .price-retail {
            font-size: 0.9rem;
            text-decoration: line-through;
            color: rgba(255, 255, 255, 0.5);
        }
        
        .price-grosir {
            font-size: 1.1rem;
            font-weight: 800;
            color: var(--accent-gold);
            text-shadow: 0 0 10px rgba(255, 215, 0, 0.3);
        }
        
        .min-order {
            font-size: 0.8rem;
            color: var(--accent-teal);
            font-style: italic;
        }
        
        .product-actions {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.75rem;
        }
        
        .btn-quantity {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            font-weight: bold;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .btn-quantity:hover {
            background: var(--gradient-primary);
            transform: scale(1.1);
        }
        
        .quantity-display {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: white;
            font-size: 1.1rem;
        }
        
        .btn-add-cart {
            background: var(--gradient-primary);
            color: white;
            border: none;
            border-radius: 10px;
            font-weight: 700;
            padding: 0.75rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
            grid-column: span 2;
        }
        
        .btn-add-cart:hover {
            background: var(--gradient-primary-dark);
            transform: translateY(-3px);
            box-shadow: var(--shadow-blue);
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }
        
        .btn-whatsapp {
            background: #25D366;
            color: white;
            border: none;
            border-radius: 10px;
            font-weight: 700;
            padding: 0.75rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
            grid-column: span 2;
            margin-top: 0.5rem;
        }
        
        .btn-whatsapp:hover {
            background: #128C7E;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(37, 211, 102, 0.3);
        }
        
        /* ===== CART MODAL ===== */
        .cart-modal {
            position: fixed;
            top: 0;
            right: -450px;
            width: 450px;
            height: 100vh;
            background: linear-gradient(135deg, #0a192f 0%, #1a365d 100%);
            backdrop-filter: blur(20px);
            z-index: 9998;
            transition: right 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            box-shadow: -10px 0 30px rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
        }
        
        .cart-modal.open {
            right: 0;
        }
        
        .cart-header {
            padding: 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .cart-header h3 {
            color: white;
            margin: 0;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .close-cart {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 10px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .close-cart:hover {
            background: var(--gradient-primary);
            transform: rotate(90deg);
        }
        
        .cart-body {
            flex: 1;
            overflow-y: auto;
            padding: 1.5rem;
        }
        
        .cart-empty {
            text-align: center;
            padding: 3rem 1rem;
            color: rgba(255, 255, 255, 0.5);
        }
        
        .cart-empty i {
            font-size: 3rem;
            margin-bottom: 1rem;
            opacity: 0.3;
        }
        
        .cart-item {
            display: flex;
            gap: 1rem;
            padding: 1rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            align-items: center;
        }
        
        .cart-item-image {
            width: 80px;
            height: 80px;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .cart-item-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .cart-item-info {
            flex: 1;
        }
        
        .cart-item-title {
            font-weight: 600;
            color: white;
            margin-bottom: 0.25rem;
            font-size: 0.95rem;
        }
        
        .cart-item-price {
            color: var(--accent-gold);
            font-weight: 700;
            font-size: 1.1rem;
        }
        
        .cart-item-actions {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .cart-item-quantity {
            background: rgba(255, 255, 255, 0.1);
            padding: 0.25rem 0.75rem;
            border-radius: 5px;
            font-weight: 600;
        }
        
        .remove-item {
            background: rgba(255, 0, 0, 0.2);
            border: 1px solid rgba(255, 0, 0, 0.3);
            color: #ff6b6b;
            width: 30px;
            height: 30px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .remove-item:hover {
            background: rgba(255, 0, 0, 0.4);
            transform: scale(1.1);
        }
        
        .cart-footer {
            padding: 1.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            background: rgba(0, 0, 0, 0.2);
        }
        
        .cart-total {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            font-size: 1.2rem;
            font-weight: 700;
        }
        
        .cart-total-label {
            color: rgba(255, 255, 255, 0.8);
        }
        
        .cart-total-value {
            color: var(--accent-gold);
            font-size: 1.5rem;
            text-shadow: 0 0 10px rgba(255, 215, 0, 0.3);
        }
        
        .btn-checkout {
            background: var(--gradient-primary);
            color: white;
            border: none;
            width: 100%;
            padding: 1rem;
            border-radius: 12px;
            font-weight: 700;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
        }
        
        .btn-checkout:hover {
            background: var(--gradient-primary-dark);
            transform: translateY(-3px);
            box-shadow: var(--shadow-blue);
        }
        
        .btn-clear-cart {
            background: rgba(255, 0, 0, 0.2);
            color: #ff6b6b;
            border: 1px solid rgba(255, 0, 0, 0.3);
            width: 100%;
            padding: 0.75rem;
            border-radius: 12px;
            font-weight: 600;
            margin-top: 1rem;
            transition: all 0.3s ease;
        }
        
        .btn-clear-cart:hover {
            background: rgba(255, 0, 0, 0.4);
            transform: translateY(-2px);
        }
        
        /* ===== SECTION TITLE ===== */
        .section-title {
            font-size: 2.8rem;
            font-weight: 900;
            margin-bottom: 1rem;
            color: white;
            position: relative;
            display: inline-block;
            text-shadow: 0 0 20px rgba(0, 102, 255, 0.3);
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 80px;
            height: 5px;
            background: var(--gradient-primary);
            border-radius: 3px;
            box-shadow: var(--neon-glow);
        }
        
        .section-subtitle {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.1rem;
            margin-bottom: 3rem;
        }
        
        /* ===== FOOTER ===== */
        footer {
            background: linear-gradient(135deg, #0052CC 0%, #003399 100%);
            position: relative;
            overflow: hidden;
            padding-top: 4rem;
        }
        
        .footer-bg {
            position: absolute;
            top: 0;
            right: 0;
            width: 40%;
            height: 100%;
            opacity: 0.1;
            background: url('https://images.unsplash.com/photo-1513558161293-cdaf765ed2fd?w=800&auto=format&fit=crop&q=80');
            background-size: cover;
            clip-path: polygon(25% 0%, 100% 0%, 100% 100%, 0% 100%);
        }
        
        .footer-content {
            position: relative;
            z-index: 2;
        }
        
        .footer-logo {
            height: 60px;
            margin-bottom: 1.5rem;
            filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.3));
        }
        
        .footer-description {
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
            line-height: 1.6;
        }
        
        .social-links {
            display: flex;
            gap: 0.75rem;
        }
        
        .social-link {
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }
        
        .social-link:hover {
            background: var(--gradient-primary);
            transform: translateY(-3px) rotate(5deg);
            box-shadow: var(--shadow-blue);
        }
        
        .footer-heading {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: white;
            position: relative;
            padding-bottom: 0.75rem;
        }
        
        .footer-heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 3px;
            background: var(--accent-gold);
            border-radius: 2px;
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 0.75rem;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .footer-links a:hover {
            color: white;
            padding-left: 5px;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
        }
        
        .footer-divider {
            border-color: rgba(255, 255, 255, 0.1);
            margin: 2.5rem 0;
        }
        
        .copyright {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
            text-align: center;
            padding-bottom: 2rem;
        }
        
        /* ===== WHATSAPP FLOATING BUTTON ===== */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 65px;
            height: 65px;
            background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            box-shadow: 0 10px 30px rgba(37, 211, 102, 0.4);
            z-index: 100;
            transition: all 0.3s ease;
            animation: float 3s ease-in-out infinite;
            text-decoration: none;
        }
        
        .whatsapp-float:hover {
            transform: scale(1.1) rotate(10deg);
            box-shadow: 0 15px 40px rgba(37, 211, 102, 0.6);
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        /* ===== RESPONSIVE DESIGN ===== */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.8rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .stats-container {
                padding: 2rem;
                margin-top: 3rem;
            }
            
            .stat-number {
                font-size: 2rem;
            }
            
            .cart-modal {
                width: 100%;
                right: -100%;
            }
            
            .section-title {
                font-size: 2.2rem;
            }
            
            .product-actions {
                grid-template-columns: 1fr;
            }
            
            .promo-popup-title {
                font-size: 2rem;
            }
            
            .promo-popup-subtitle {
                font-size: 1.1rem;
            }
            
            .promo-app-buttons {
                flex-direction: column;
            }
        }
        
        @media (max-width: 576px) {
            .hero-title {
                font-size: 2.2rem;
            }
            
            .btn-primary-custom,
            .btn-outline-custom {
                padding: 14px 28px;
                font-size: 1rem;
                width: 100%;
                margin-bottom: 1rem;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .feature-card, .category-card, .product-card {
                padding: 1.5rem;
            }
            
            .promo-popup-content {
                width: 95%;
                border-radius: 20px;
            }
            
            .promo-popup-body {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>

<!-- Preloader -->
<div class="preloader">
    <div class="loader"></div>
    <div class="preloader-text">Pasifik Drink</div>
</div>

<!-- Promo Popup -->
<div class="promo-popup" id="promoPopup">
    <div class="promo-popup-content">
        <button class="promo-close" onclick="closePromo()">
            <i class="bi bi-x-lg"></i>
        </button>
        
        <div class="promo-popup-header">
            <h2 class="promo-popup-title">PASIFIK DRINK</h2>
            <p class="promo-popup-subtitle">Free Instant Delivery!</p>
        </div>
        
        <div class="promo-popup-body">
            <div class="promo-feature">
                <div class="promo-feature-icon">
                    <i class="bi bi-truck"></i>
                </div>
                <div class="promo-feature-text">
                    <h4>GRATIS PENGIRIMAN</h4>
                    <p>Order minuman premium dengan pengiriman gratis ke seluruh area Jakarta</p>
                </div>
            </div>
            
            <div class="promo-feature">
                <div class="promo-feature-icon">
                    <i class="bi bi-lightning"></i>
                </div>
                <div class="promo-feature-text">
                    <h4>INSTANT DELIVERY</h4>
                    <p>Pesan sekarang, minuman premium Anda tiba dalam 60 menit</p>
                </div>
            </div>
            
            <div class="promo-feature">
                <div class="promo-feature-icon">
                    <i class="bi bi-gift"></i>
                </div>
                <div class="promo-feature-text">
                    <h4>BONUS SPECIAL</h4>
                    <p>Dapatkan bonus minuman gratis untuk setiap order pertama Anda</p>
                </div>
            </div>
            
            <button class="promo-cta" onclick="orderNow()">
                <i class="bi bi-whatsapp"></i> ORDER SEKARANG
            </button>
            
            <div class="promo-app-buttons">
                <a href="#" class="app-btn">
                    <i class="bi bi-phone"></i>
                    <div class="app-btn-text">
                        <small>Download on</small>
                        <strong>App Store</strong>
                    </div>
                </a>
                <a href="#" class="app-btn">
                    <i class="bi bi-google-play"></i>
                    <div class="app-btn-text">
                        <small>Get it on</small>
                        <strong>Google Play</strong>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Cart Modal -->
<div class="cart-modal" id="cartModal">
    <div class="cart-header">
        <h3><i class="bi bi-cart3"></i> Keranjang Belanja</h3>
        <button class="close-cart" onclick="closeCart()">
            <i class="bi bi-x-lg"></i>
        </button>
    </div>
    
    <div class="cart-body" id="cartBody">
        <!-- Cart items will be dynamically added here -->
    </div>
    
    <div class="cart-footer">
        <div class="cart-total">
            <span class="cart-total-label">Total:</span>
            <span class="cart-total-value" id="cartTotal">Rp 0</span>
        </div>
        
        <button class="btn-checkout" onclick="checkout()">
            <i class="bi bi-whatsapp"></i> Pesan via WhatsApp
        </button>
        
        <button class="btn-clear-cart" onclick="clearCart()">
            <i class="bi bi-trash"></i> Kosongkan Keranjang
        </button>
    </div>
</div>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/6281234567890" target="_blank" class="whatsapp-float animate__animated animate__fadeInUp animate__delay-1s">
    <i class="bi bi-whatsapp"></i>
</a>

<!-- Header -->
<header class="main-header py-3">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <!-- Logo -->
                <div class="logo-container">
                    <img src="images/logo-removebg-preview.png" class="logo-img" alt="Pasifik Drink">
                    <span class="logo-text d-none d-lg-block">PASIFIK DRINK</span>
                </div>
                
                <!-- Mobile Toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon text-white"><i class="bi bi-list"></i></span>
                </button>
                
                <!-- Navigation -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom active" href="#home">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom" href="#categories">Kategori</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom" href="#products">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom" href="#about">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom" href="#contact">Kontak</a>
                        </li>
                    </ul>
                    
                    <!-- Cart Button -->
                    <button class="btn cart-btn" onclick="openCart()">
                        <i class="bi bi-cart3"></i>
                        <span class="cart-count" id="cartCount">0</span>
                    </button>
                </div>
            </div>
        </nav>
    </div>
</header>

<!-- Hero Section -->
<section id="home" class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="hero-content">
                    <h1 class="hero-title animate__animated animate__fadeInDown">
                        DISTRIBUTOR MINUMAN PREMIUM
                    </h1>
                    
                    <p class="hero-subtitle animate__animated animate__fadeInUp animate__delay-1s">
                        Supplier resmi minuman alkohol premium dengan harga grosir terbaik. 
                        Wine, Vodka, Whisky, Soju, Cocktail, dan berbagai minuman berkualitas lainnya.
                    </p>
                    
                    <div class="d-flex flex-wrap gap-3 mb-4 justify-content-center">
                        <a href="#products" class="btn btn-primary-custom animate__animated animate__pulse animate__delay-2s">
                            <i class="bi bi-shop me-2"></i>Lihat Produk
                        </a>
                        <a href="#contact" class="btn btn-outline-custom animate__animated animate__pulse animate__delay-3s">
                            <i class="bi bi-phone me-2"></i>Hubungi Kami
                        </a>
                    </div>
                    
                    <!-- Stats -->
                    <div class="stats-container animate__animated animate__fadeInUp animate__delay-4s">
                        <div class="row text-center">
                            <div class="col-md-4">
                                <div class="stat-item">
                                    <div class="stat-number">100+</div>
                                    <div class="stat-label">Jenis Minuman</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="stat-item">
                                    <div class="stat-number">500+</div>
                                    <div class="stat-label">Klien Puas</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="stat-item">
                                    <div class="stat-number">24/7</div>
                                    <div class="stat-label">Layanan</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card animate__animated animate__fadeInUp">
                    <div class="feature-icon">
                        <i class="bi bi-award"></i>
                    </div>
                    <h3 class="feature-title">Produk Asli</h3>
                    <p class="feature-text">
                        Semua produk 100% original dengan garansi keaslian. Sertifikat resmi untuk setiap produk premium.
                    </p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="feature-card animate__animated animate__fadeInUp animate__delay-1s">
                    <div class="feature-icon">
                        <i class="bi bi-truck"></i>
                    </div>
                    <h3 class="feature-title">Pengiriman Cepat</h3>
                    <p class="feature-text">
                        Pengiriman ke seluruh Indonesia dengan sistem logistik profesional. Aman, cepat, dan terpercaya.
                    </p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="feature-card animate__animated animate__fadeInUp animate__delay-2s">
                    <div class="feature-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h3 class="feature-title">Harga Grosir</h3>
                    <p class="feature-text">
                        Harga khusus untuk grosir dengan minimum order terjangkau. Diskon khusus untuk reseller.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section id="categories" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title animate__animated animate__fadeInDown">Kategori Produk</h2>
            <p class="section-subtitle animate__animated animate__fadeInUp">Pilih kategori minuman premium favorit Anda</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="category-card animate__animated animate__fadeInLeft" onclick="filterProducts('WINE')">
                    <div class="category-icon">
                        <i class="bi bi-cup-straw"></i>
                    </div>
                    <h4 class="category-name">WINE</h4>
                    <div class="category-count">15+ produk</div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="category-card animate__animated animate__fadeInLeft animate__delay-1s" onclick="filterProducts('VODKA')">
                    <div class="category-icon">
                        <i class="bi bi-droplet"></i>
                    </div>
                    <h4 class="category-name">VODKA</h4>
                    <div class="category-count">12+ produk</div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="category-card animate__animated animate__fadeInLeft animate__delay-2s" onclick="filterProducts('WHISKY')">
                    <div class="category-icon">
                        <i class="bi bi-cup-hot"></i>
                    </div>
                    <h4 class="category-name">WHISKY</h4>
                    <div class="category-count">10+ produk</div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="category-card animate__animated animate__fadeInLeft animate__delay-3s" onclick="filterProducts('SOJU')">
                    <div class="category-icon">
                        <i class="bi bi-flower1"></i>
                    </div>
                    <h4 class="category-name">SOJU</h4>
                    <div class="category-count">8+ produk</div>
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-lg-3 col-md-6">
                <div class="category-card" onclick="filterProducts('COGNAC')">
                    <div class="category-icon">
                        <i class="bi bi-gem"></i>
                    </div>
                    <h4 class="category-name">COGNAC</h4>
                    <div class="category-count">6+ produk</div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="category-card" onclick="filterProducts('GIN')">
                    <div class="category-icon">
                        <i class="bi bi-flower2"></i>
                    </div>
                    <h4 class="category-name">GIN</h4>
                    <div class="category-count">5+ produk</div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="category-card" onclick="filterProducts('TEQUILLA')">
                    <div class="category-icon">
                        <i class="bi bi-sun"></i>
                    </div>
                    <h4 class="category-name">TEQUILLA</h4>
                    <div class="category-count">4+ produk</div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="category-card" onclick="filterProducts('ALL')">
                    <div class="category-icon">
                        <i class="bi bi-grid-3x3"></i>
                    </div>
                    <h4 class="category-name">SEMUA</h4>
                    <div class="category-count">100+ produk</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products Section -->
<section id="products" class="py-5 product-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title animate__animated animate__fadeInDown">Katalog Produk</h2>
            <p class="section-subtitle animate__animated animate__fadeInUp">Minuman premium dengan harga grosir terbaik</p>
        </div>
        
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-center mb-4">
                    <div class="btn-group flex-wrap" role="group">
                        <button type="button" class="btn btn-outline-primary active" onclick="filterProducts('ALL')">Semua</button>
                        <button type="button" class="btn btn-outline-primary" onclick="filterProducts('MIXER DRINK')">Mixer Drink</button>
                        <button type="button" class="btn btn-outline-primary" onclick="filterProducts('BEER')">Beer</button>
                        <button type="button" class="btn btn-outline-primary" onclick="filterProducts('WINE')">Wine</button>
                        <button type="button" class="btn btn-outline-primary" onclick="filterProducts('VODKA')">Vodka</button>
                        <button type="button" class="btn btn-outline-primary" onclick="filterProducts('WHISKY')">Whisky</button>
                        <button type="button" class="btn btn-outline-primary" onclick="filterProducts('SOJU')">Soju</button>
                        <button type="button" class="btn btn-outline-primary" onclick="filterProducts('COGNAC')">Cognac</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row g-4" id="productGrid">
            <!-- Products will be loaded here dynamically -->
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="section-title mb-4">Tentang Pasifik Drink</h2>
                <p class="mb-4" style="color: rgba(255,255,255,0.9); line-height: 1.8;">
                    Pasifik Drink adalah distributor resmi minuman premium yang telah berpengalaman lebih dari 10 tahun 
                    dalam menyediakan berbagai jenis minuman berkualitas tinggi. Kami berkomitmen untuk memberikan 
                    produk-produk terbaik dengan harga grosir yang kompetitif.
                </p>
                <p class="mb-4" style="color: rgba(255,255,255,0.9); line-height: 1.8;">
                    Dengan jaringan distribusi yang luas dan sistem logistik yang terpercaya, kami mampu melayani 
                    kebutuhan berbagai klien mulai dari restoran, bar, hotel, hingga perorangan yang membutuhkan 
                    minuman premium untuk acara khusus.
                </p>
                <a href="#contact" class="btn btn-primary-custom">
                    <i class="bi bi-chat-dots me-2"></i>Konsultasi Gratis
                </a>
            </div>
            <div class="col-lg-6">
                <div class="stats-container" style="background: rgba(255,255,255,0.05);">
                    <div class="row text-center">
                        <div class="col-6">
                            <div class="stat-item">
                                <div class="stat-number">10+</div>
                                <div class="stat-label">Tahun Pengalaman</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-item">
                                <div class="stat-number">500+</div>
                                <div class="stat-label">Klien Tetap</div>
                            </div>
                        </div>
                        <div class="col-6 mt-4">
                            <div class="stat-item">
                                <div class="stat-number">50+</div>
                                <div class="stat-label">Merek Terdaftar</div>
                            </div>
                        </div>
                        <div class="col-6 mt-4">
                            <div class="stat-item">
                                <div class="stat-number">100%</div>
                                <div class="stat-label">Produk Asli</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Hubungi Kami</h2>
            <p class="section-subtitle">Konsultasikan kebutuhan minuman premium Anda</p>
        </div>
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="stats-container" style="background: rgba(255,255,255,0.05);">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="text-center">
                                <div class="feature-icon mb-3" style="width: 60px; height: 60px; margin: 0 auto;">
                                    <i class="bi bi-whatsapp"></i>
                                </div>
                                <h5>WhatsApp</h5>
                                <p style="color: rgba(255,255,255,0.8);">+62 812-3456-7890</p>
                                <a href="https://wa.me/6281234567890" class="btn btn-outline-custom btn-sm" target="_blank">
                                    <i class="bi bi-whatsapp me-2"></i>Chat Sekarang
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-4">
                            <div class="text-center">
                                <div class="feature-icon mb-3" style="width: 60px; height: 60px; margin: 0 auto;">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <h5>Telepon</h5>
                                <p style="color: rgba(255,255,255,0.8);">(021) 1234-5678</p>
                                <p style="color: rgba(255,255,255,0.8); font-size: 0.9rem;">Senin - Minggu: 24 Jam</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-4">
                            <div class="text-center">
                                <div class="feature-icon mb-3" style="width: 60px; height: 60px; margin: 0 auto;">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <h5>Email</h5>
                                <p style="color: rgba(255,255,255,0.8);">pasifik.drink@gmail.com</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-4">
                            <div class="text-center">
                                <div class="feature-icon mb-3" style="width: 60px; height: 60px; margin: 0 auto;">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <h5>Alamat</h5>
                                <p style="color: rgba(255,255,255,0.8); font-size: 0.9rem;">
                                    Jl. Minuman Premium No. 123<br>
                                    Jakarta Pusat, Indonesia
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="pt-5">
    <div class="footer-bg"></div>
    <div class="container footer-content">
        <div class="row">
            <!-- Logo & Info -->
            <div class="col-lg-4 col-md-6 mb-4">
                <img src="images/logo-removebg-preview.png" class="footer-logo" alt="Pasifik Drink">
                <p class="footer-description">
                    Distributor resmi minuman premium dengan sertifikasi lengkap. 
                    Komitmen kami adalah memberikan produk berkualitas dengan layanan terbaik.
                </p>
                <div class="social-links">
                    <a href="https://wa.me/6281234567890" class="social-link" target="_blank">
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
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="footer-heading">Menu</h5>
                <ul class="footer-links">
                    <li><a href="#home"><i class="bi bi-chevron-right"></i> Beranda</a></li>
                    <li><a href="#categories"><i class="bi bi-chevron-right"></i> Kategori</a></li>
                    <li><a href="#products"><i class="bi bi-chevron-right"></i> Produk</a></li>
                    <li><a href="#about"><i class="bi bi-chevron-right"></i> Tentang</a></li>
                    <li><a href="#contact"><i class="bi bi-chevron-right"></i> Kontak</a></li>
                </ul>
            </div>
            
            <!-- Contact -->
            <div class="col-lg-4 col-md-12 mb-4">
                <h5 class="footer-heading">Kontak</h5>
                <ul class="footer-links">
                    <li>
                        <a href="https://wa.me/6281234567890" target="_blank">
                            <i class="bi bi-whatsapp me-2"></i>+62 812-3456-7890
                        </a>
                    </li>
                    <li>
                        <a href="tel:02112345678">
                            <i class="bi bi-telephone me-2"></i>(021) 1234-5678
                        </a>
                    </li>
                    <li>
                        <a href="mailto:order@pasifikdrink.com">
                            <i class="bi bi-envelope me-2"></i>order@pasifikdrink.com
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="bi bi-clock me-2"></i>Buka 24/7
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="bi bi-geo-alt me-2"></i>Jakarta Pusat, Indonesia
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <hr class="footer-divider">
        
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="copyright">
                    &copy; 2025 <strong>Pasifik Drink</strong>. All rights reserved. 
                    <span class="d-block d-md-inline mt-2 mt-md-0">Hanya untuk usia 21+</span>
                </p>
                <p class="copyright mt-2" style="font-size: 0.8rem; color: rgba(255,255,255,0.5);">
                    *Minum alkohol berlebihan berbahaya bagi kesehatan. Nikmati dengan bijak.
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

<script>
    // ===== PRODUCT DATA =====
    const products = [
        // Kategori BEER
        {
            id: 1,
            name: "Kawa Blackcurrant",
            category: "BEER",
            image: "https://images.unsplash.com/photo-1551024709-8f23befc6f87?w=400&auto=format&fit=crop&q=80",
            retail: 270000,
            grosir: 250000,
            minOrder: 12,
            description: "Minuman rasa blackcurrant premium"
        },
        {
            id: 2,
            name: "API HIJAU",
            category: "BEER",
            image: "https://images.unsplash.com/photo-1544145945-f90425340c7e?w=400&auto=format&fit=crop&q=80",
            retail: 270000,
            grosir: 250000,
            minOrder: 12,
            description: "Minuman hijau dengan rasa segar"
        },
        {
            id: 3,
            name: "ANGGUR KETAN HITAM KECIL",
            category: "BEER",
            image: "https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?w=400&auto=format&fit=crop&q=80",
            retail: 270000,
            grosir: 250000,
            minOrder: 12,
            description: "Anggur ketan hitam ukuran kecil"
        },
        {
            id: 4,
            name: "MIXMAX BIRU",
            category: "BEER",
            image: "https://images.unsplash.com/photo-1570598912132-0ba1dc952b7d?w=400&auto=format&fit=crop&q=80",
            retail: 270000,
            grosir: 250000,
            minOrder: 12,
            description: "Minuman max biru"
        },
        {
            id: 5,
            name: "BEER LOKAL",
            category: "BEER",
            image: "https://images.unsplash.com/photo-1567696911981-8d2760b6b1c6?w=400&auto=format&fit=crop&q=80",
            retail: 270000,
            grosir: 250000,
            minOrder: 12,
            description: "Bir lokal premium"
        },
        
        // Kategori SOJU
        {
            id: 6,
            name: "SOJU PREMIUM 580ML",
            category: "SOJU",
            image: "https://images.unsplash.com/photo-1602922960040-1c36d6c4b864?w=400&auto=format&fit=crop&q=80",
            retail: 165000,
            grosir: 165000,
            minOrder: 12,
            description: "Soju hijau premium 580ml"
        },
        {
            id: 7,
            name: "SOJU MAPLE 580ML",
            category: "SOJU",
            image: "https://images.unsplash.com/photo-1602922960040-1c36d6c4b864?w=400&auto=format&fit=crop&q=60",
            retail: 165000,
            grosir: 165000,
            minOrder: 12,
            description: "Soju maple 580ml"
        },
        {
            id: 8,
            name: "SOJU ROSE PINK 580ML",
            category: "SOJU",
            image: "https://images.unsplash.com/photo-1602922960040-1c36d6c4b864?w=400&auto=format&fit=crop&q=80",
            retail: 165000,
            grosir: 165000,
            minOrder: 12,
            description: "Soju rose pink 580ml"
        },
        {
            id: 9,
            name: "SOJU MERAH 580ML",
            category: "SOJU",
            image: "https://images.unsplash.com/photo-1602922960040-1c36d6c4b864?w=400&auto=format&fit=crop&q=60",
            retail: 165000,
            grosir: 165000,
            minOrder: 12,
            description: "Soju merah premium 580ml"
        },
        
        // Kategori WHISKY
        {
            id: 10,
            name: "WHISKY BLACK TEA 700ML",
            category: "WHISKY",
            image: "https://images.unsplash.com/photo-1602922960040-1c36d6c4b864?w=400&auto=format&fit=crop&q=80",
            retail: 295000,
            grosir: 275000,
            minOrder: 12,
            description: "Whisky black tea 700ml premium"
        },
        {
            id: 11,
            name: "WHISKY PREMIUM 700ML",
            category: "WHISKY",
            image: "https://images.unsplash.com/photo-1602922960040-1c36d6c4b864?w=400&auto=format&fit=crop&q=80",
            retail: 295000,
            grosir: 275000,
            minOrder: 12,
            description: "Whisky premium 700ml"
        },
        {
            id: 12,
            name: "WHISKY ORIGINAL 700ML",
            category: "WHISKY",
            image: "https://images.unsplash.com/photo-1602922960040-1c36d6c4b864?w=400&auto=format&fit=crop&q=60",
            retail: 295000,
            grosir: 275000,
            minOrder: 12,
            description: "Whisky original 700ml"
        },
        
        // Kategori MIXER DRINK
        {
            id: 13,
            name: "MIXER DRINK ICELAND 700ML",
            category: "MIXER DRINK",
            image: "https://images.unsplash.com/photo-1602922960040-1c36d6c4b864?w=400&auto=format&fit=crop&q=80",
            retail: 85000,
            grosir: 80000,
            minOrder: 12,
            description: "Mixer Drink Iceland 700ml"
        },
        {
            id: 14,
            name: "MIXER DRINK GOOSE",
            category: "MIXER DRINK",
            image: "https://images.unsplash.com/photo-1602922960040-1c36d6c4b864?w=400&auto=format&fit=crop&q=60",
            retail: 1250000,
            grosir: 1150000,
            minOrder: 12,
            description: "Mixer Drink Goose premium"
        },
        
        // Kategori WINE
        {
            id: 15,
            name: "WINE DANIEL'S",
            category: "WINE",
            image: "https://images.unsplash.com/photo-1602922960040-1c36d6c4b864?w=400&auto=format&fit=crop&q=80",
            retail: 750000,
            grosir: 650000,
            minOrder: 12,
            description: "Wine Daniel's original"
        },
        {
            id: 16,
            name: "WINE BLACK LABEL",
            category: "WINE",
            image: "https://images.unsplash.com/photo-1602922960040-1c36d6c4b864?w=400&auto=format&fit=crop&q=60",
            retail: 980000,
            grosir: 900000,
            minOrder: 12,
            description: "Wine Black Label"
        },
        {
            id: 17,
            name: "WINE REGAL 12 Y.O",
            category: "WINE",
            image: "https://images.unsplash.com/photo-1602922960040-1c36d6c4b864?w=400&auto=format&fit=crop&q=80",
            retail: 750000,
            grosir: 675000,
            minOrder: 12,
            description: "Wine Regal 12 Years Old"
        },
        
        // Kategori VODKA
        {
            id: 18,
            name: "VODKA CHAMISUL 360ML",
            category: "VODKA",
            image: "https://images.unsplash.com/photo-1602922960040-1c36d6c4b864?w=400&auto=format&fit=crop&q=80",
            retail: 75000,
            grosir: 65000,
            minOrder: 12,
            description: "Vodka Chamisul original"
        },
        {
            id: 19,
            name: "VODKA ORIGINAL 360ML",
            category: "VODKA",
            image: "https://images.unsplash.com/photo-1602922960040-1c36d6c4b864?w=400&auto=format&fit=crop&q=60",
            retail: 80000,
            grosir: 65000,
            minOrder: 12,
            description: "Vodka original 360ml"
        },
        
        // Kategori COGNAC
        {
            id: 20,
            name: "COGNAC MARTELL VSOP",
            category: "COGNAC",
            image: "https://images.unsplash.com/photo-1602922960040-1c36d6c4b864?w=400&auto=format&fit=crop&q=80",
            retail: 1500000,
            grosir: 1350000,
            minOrder: 12,
            description: "Cognac Martell VSOP premium"
        },
        {
            id: 21,
            name: "COGNAC HENNESSY VSOP",
            category: "COGNAC",
            image: "https://images.unsplash.com/photo-1602922960040-1c36d6c4b864?w=400&auto=format&fit=crop&q=60",
            retail: 1550000,
            grosir: 1400000,
            minOrder: 12,
            description: "Cognac Hennessy VSOP"
        }
    ];

    // ===== CART SYSTEM =====
    let cart = JSON.parse(localStorage.getItem('pasifikDrinkCart')) || [];
    
    function updateCartCount() {
        const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
        document.getElementById('cartCount').textContent = totalItems;
    }
    
    function saveCart() {
        localStorage.setItem('pasifikDrinkCart', JSON.stringify(cart));
        updateCartCount();
        renderCart();
    }
    
    function addToCart(productId, quantity = 1) {
        const product = products.find(p => p.id === productId);
        if (!product) return;
        
        const existingItem = cart.find(item => item.id === productId);
        
        if (existingItem) {
            existingItem.quantity += quantity;
        } else {
            cart.push({
                id: product.id,
                name: product.name,
                category: product.category,
                price: product.grosir,
                quantity: quantity,
                image: product.image
            });
        }
        
        saveCart();
        showNotification(`${product.name} ditambahkan ke keranjang!`, 'success');
    }
    
    function removeFromCart(productId) {
        cart = cart.filter(item => item.id !== productId);
        saveCart();
    }
    
    function updateCartItemQuantity(productId, quantity) {
        const item = cart.find(item => item.id === productId);
        if (item) {
            if (quantity < 1) {
                removeFromCart(productId);
            } else {
                item.quantity = quantity;
                saveCart();
            }
        }
    }
    
    function clearCart() {
        if (cart.length === 0) {
            showNotification('Keranjang sudah kosong!', 'info');
            return;
        }
        
        if (confirm('Apakah Anda yakin ingin mengosongkan keranjang?')) {
            cart = [];
            saveCart();
            showNotification('Keranjang telah dikosongkan!', 'success');
        }
    }
    
    function renderCart() {
        const cartBody = document.getElementById('cartBody');
        const cartTotal = document.getElementById('cartTotal');
        
        if (cart.length === 0) {
            cartBody.innerHTML = `
                <div class="cart-empty">
                    <i class="bi bi-cart-x"></i>
                    <p>Keranjang belanja kosong</p>
                    <p style="font-size: 0.9rem;">Tambahkan produk ke keranjang untuk memulai</p>
                </div>
            `;
            cartTotal.textContent = 'Rp 0';
            return;
        }
        
        let total = 0;
        let cartHTML = '';
        
        cart.forEach(item => {
            const itemTotal = item.price * item.quantity;
            total += itemTotal;
            
            cartHTML += `
                <div class="cart-item">
                    <div class="cart-item-image">
                        <img src="${item.image}" alt="${item.name}">
                    </div>
                    <div class="cart-item-info">
                        <div class="cart-item-title">${item.name}</div>
                        <div class="cart-item-price">Rp ${item.price.toLocaleString()}</div>
                        <div class="cart-item-category" style="font-size: 0.8rem; color: rgba(255,255,255,0.6);">${item.category}</div>
                    </div>
                    <div class="cart-item-actions">
                        <button class="btn-quantity" onclick="updateCartItemQuantity(${item.id}, ${item.quantity - 1})">-</button>
                        <div class="cart-item-quantity">${item.quantity}</div>
                        <button class="btn-quantity" onclick="updateCartItemQuantity(${item.id}, ${item.quantity + 1})">+</button>
                        <button class="remove-item" onclick="removeFromCart(${item.id})">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                </div>
            `;
        });
        
        cartBody.innerHTML = cartHTML;
        cartTotal.textContent = `Rp ${total.toLocaleString()}`;
    }
    
    function checkout() {
        if (cart.length === 0) {
            showNotification('Keranjang kosong! Tambahkan produk terlebih dahulu.', 'warning');
            return;
        }
        
        let message = `Halo Pasifik Drink, saya ingin memesan:\n\n`;
        let total = 0;
        
        cart.forEach((item, index) => {
            const itemTotal = item.price * item.quantity;
            total += itemTotal;
            message += `${index + 1}. ${item.name} (${item.category})\n`;
            message += `   Jumlah: ${item.quantity} botol\n`;
            message += `   Harga: Rp ${item.price.toLocaleString()}/botol\n`;
            message += `   Subtotal: Rp ${itemTotal.toLocaleString()}\n\n`;
        });
        
        message += `Total: Rp ${total.toLocaleString()}\n\n`;
        message += `Mohon informasi lebih lanjut mengenai pengiriman dan pembayaran. Terima kasih!`;
        
        const encodedMessage = encodeURIComponent(message);
        const phoneNumber = "6281234567890";
        const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodedMessage}`;
        
        window.open(whatsappURL, '_blank');
    }
    
    // ===== CART MODAL FUNCTIONS =====
    function openCart() {
        document.getElementById('cartModal').classList.add('open');
        document.body.style.overflow = 'hidden';
        renderCart();
    }
    
    function closeCart() {
        document.getElementById('cartModal').classList.remove('open');
        document.body.style.overflow = 'auto';
    }
    
    // ===== PROMO POPUP FUNCTIONS =====
    function showPromo() {
        // Cek jika sudah pernah ditutup dalam 24 jam
        const lastClosed = localStorage.getItem('promoClosed');
        const now = new Date().getTime();
        
        if (lastClosed && (now - parseInt(lastClosed)) < 24 * 60 * 60 * 1000) {
            return; // Jangan tampilkan jika ditutup dalam 24 jam terakhir
        }
        
        setTimeout(() => {
            document.getElementById('promoPopup').classList.add('active');
            document.body.style.overflow = 'hidden';
        }, 1000); // Tampilkan setelah 1 detik
    }
    
    function closePromo() {
        document.getElementById('promoPopup').classList.remove('active');
        document.body.style.overflow = 'auto';
        
        // Simpan waktu penutupan
        localStorage.setItem('promoClosed', new Date().getTime().toString());
    }
    
    function orderNow() {
        closePromo();
        window.open('https://wa.me/6281234567890?text=Halo%20Pasifik%20Drink,%20saya%20ingin%20order%20minuman%20premium!', '_blank');
    }
    
    // ===== PRODUCT RENDERING =====
    function renderProducts(category = 'ALL') {
        const productGrid = document.getElementById('productGrid');
        let filteredProducts = products;
        
        if (category !== 'ALL') {
            filteredProducts = products.filter(product => product.category === category);
        }
        
        productGrid.innerHTML = '';
        
        filteredProducts.forEach(product => {
            const discount = Math.round(((product.retail - product.grosir) / product.retail) * 100);
            
            const productCard = document.createElement('div');
            productCard.className = 'col-lg-3 col-md-4 col-sm-6';
            productCard.innerHTML = `
                <div class="product-card">
                    ${discount > 0 ? `<div class="product-badge">-${discount}%</div>` : ''}
                    <div class="product-image-container">
                        <img src="${product.image}" class="product-image" alt="${product.name}">
                    </div>
                    <div class="product-info">
                        <div class="product-category">${product.category}</div>
                        <h5 class="product-title">${product.name}</h5>
                        <div class="product-price">
                            <div class="price-row">
                                <span class="price-label">Retail:</span>
                                <span class="price-value price-retail">Rp ${product.retail.toLocaleString()}</span>
                            </div>
                            <div class="price-row">
                                <span class="price-label">Grosir:</span>
                                <span class="price-value price-grosir">Rp ${product.grosir.toLocaleString()}</span>
                            </div>
                        </div>
                        <div class="min-order">Minimal order: ${product.minOrder} botol</div>
                        
                        <div class="product-actions">
                            <button class="btn-quantity" onclick="updateProductQuantity(${product.id}, -1)">-</button>
                            <div class="quantity-display" id="quantity-${product.id}">1</div>
                            <button class="btn-quantity" onclick="updateProductQuantity(${product.id}, 1)">+</button>
                            <button class="btn-add-cart" onclick="addToCart(${product.id}, getProductQuantity(${product.id}))">
                                <i class="bi bi-cart-plus"></i> Tambah
                            </button>
                            <button class="btn-whatsapp" onclick="directOrder(${product.id})">
                                <i class="bi bi-whatsapp"></i> Order Langsung
                            </button>
                        </div>
                    </div>
                </div>
            `;
            
            productGrid.appendChild(productCard);
        });
    }
    
    function filterProducts(category) {
        renderProducts(category);
        // Update active button
        document.querySelectorAll('.btn-group .btn').forEach(btn => {
            btn.classList.remove('active');
        });
        event.target.classList.add('active');
    }
    
    function getProductQuantity(productId) {
        const display = document.getElementById(`quantity-${productId}`);
        return display ? parseInt(display.textContent) : 1;
    }
    
    function updateProductQuantity(productId, change) {
        const display = document.getElementById(`quantity-${productId}`);
        if (display) {
            let current = parseInt(display.textContent);
            current = Math.max(1, current + change);
            display.textContent = current;
        }
    }
    
    function directOrder(productId) {
        const product = products.find(p => p.id === productId);
        if (!product) return;
        
        const quantity = getProductQuantity(productId);
        const message = `Halo Pasifik Drink, saya ingin memesan:\n\n`;
        const orderMessage = `${product.name} (${product.category})\n`;
        const quantityMessage = `Jumlah: ${quantity} botol\n`;
        const priceMessage = `Harga Grosir: Rp ${product.grosir.toLocaleString()}/botol\n`;
        const totalMessage = `Total: Rp ${(product.grosir * quantity).toLocaleString()}\n\n`;
        const infoMessage = `Mohon informasi lebih lanjut mengenai pengiriman dan pembayaran. Terima kasih!`;
        
        const fullMessage = message + orderMessage + quantityMessage + priceMessage + totalMessage + infoMessage;
        const encodedMessage = encodeURIComponent(fullMessage);
        const phoneNumber = "6281234567890";
        const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodedMessage}`;
        
        window.open(whatsappURL, '_blank');
    }
    
    // ===== NOTIFICATION SYSTEM =====
    function showNotification(message, type) {
        const notification = document.createElement('div');
        notification.className = `position-fixed top-0 start-50 translate-middle-x p-3`;
        notification.style.zIndex = '1050';
        notification.style.marginTop = '80px';
        
        const bgColor = type === 'success' ? 'linear-gradient(135deg, #00b09b 0%, #96c93d 100%)' : 
                        type === 'warning' ? 'linear-gradient(135deg, #f46b45 0%, #eea849 100%)' :
                        'linear-gradient(135deg, #0066FF 0%, #00BFFF 100%)';
        
        notification.innerHTML = `
            <div class="toast show" role="alert" style="background: ${bgColor}; border: none; color: white;">
                <div class="toast-body d-flex align-items-center">
                    <i class="bi ${type === 'success' ? 'bi-check-circle' : type === 'warning' ? 'bi-exclamation-triangle' : 'bi-info-circle'} me-2" style="font-size: 1.2rem;"></i>
                    <div>${message}</div>
                </div>
            </div>
        `;
        
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.remove();
        }, 3000);
    }
    
    // ===== INITIALIZATION =====
    document.addEventListener('DOMContentLoaded', function() {
        // Preloader
        setTimeout(() => {
            document.querySelector('.preloader').style.opacity = '0';
            setTimeout(() => {
                document.querySelector('.preloader').style.display = 'none';
                // Tampilkan promo popup setelah preloader selesai
                showPromo();
            }, 500);
        }, 1500);
        
        // Initialize cart
        updateCartCount();
        renderCart();
        
        // Initialize products
        renderProducts();
        
        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.main-header');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
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
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Close cart when clicking outside
        document.addEventListener('click', function(event) {
            const cartModal = document.getElementById('cartModal');
            const cartBtn = document.querySelector('.cart-btn');
            const promoPopup = document.getElementById('promoPopup');
            
            // Close cart modal
            if (cartModal.classList.contains('open') && 
                !cartModal.contains(event.target) && 
                !cartBtn.contains(event.target)) {
                closeCart();
            }
            
            // Close promo popup when clicking outside
            if (promoPopup.classList.contains('active') && 
                !promoPopup.contains(event.target)) {
                closePromo();
            }
        });
    });
</script>
</body>
</html>