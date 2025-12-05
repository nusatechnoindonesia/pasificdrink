<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country USA Collection - Minuman.com</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-blue: #007bff;
            --secondary-blue: #0056b3;
            --light-blue: #e9f2ff;
            --dark-blue: #004085;
            --text-gray: #333;
            --light-gray: #f8f9fa;
            --border-color: #e0e0e0;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-gray);
            line-height: 1.6;
            background-color: #fff;
        }
        
        /* Header Styles */
        .top-header {
            background-color: var(--primary-blue);
            color: white;
            padding: 10px 0;
            font-size: 14px;
        }
        
        .top-header a {
            color: white;
            text-decoration: none;
            margin-right: 15px;
        }
        
        .top-header a:hover {
            text-decoration: underline;
        }
        
        .main-header {
            padding: 15px 0;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .logo {
            font-size: 28px;
            font-weight: 800;
            color: var(--primary-blue);
            text-decoration: none;
        }
        
        .logo span {
            color: #ff6b00;
        }
        
        .search-box {
            position: relative;
        }
        
        .search-box input {
            width: 100%;
            padding: 12px 20px;
            border: 2px solid #ddd;
            border-radius: 50px;
            font-size: 16px;
        }
        
        .search-box button {
            position: absolute;
            right: 5px;
            top: 5px;
            background-color: var(--primary-blue);
            color: white;
            border: none;
            border-radius: 50px;
            padding: 8px 20px;
        }
        
        .header-icons a {
            color: var(--text-gray);
            font-size: 22px;
            margin-left: 20px;
            position: relative;
        }
        
        .header-icons .badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: red;
            color: white;
            border-radius: 50%;
            font-size: 12px;
            width: 18px;
            height: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        /* Navigation */
        .main-nav {
            background-color: var(--dark-blue);
        }
        
        .main-nav .nav-link {
            color: white !important;
            font-weight: 500;
            padding: 12px 20px !important;
            transition: all 0.3s;
        }
        
        .main-nav .nav-link:hover,
        .main-nav .nav-link.active {
            background-color: var(--primary-blue);
        }
        
        /* Breadcrumb */
        .breadcrumb-section {
            background-color: var(--light-gray);
            padding: 15px 0;
            margin-bottom: 30px;
            border-bottom: 1px solid var(--border-color);
        }
        
        .breadcrumb {
            background-color: transparent;
            padding: 0;
            margin: 0;
        }
        
        .breadcrumb-item a {
            color: var(--primary-blue);
            text-decoration: none;
        }
        
        .breadcrumb-item.active {
            color: var(--text-gray);
        }
        
        /* Page Header */
        .page-header {
            margin-bottom: 30px;
        }
        
        .page-header h1 {
            font-size: 32px;
            font-weight: 700;
            color: var(--dark-blue);
            margin-bottom: 10px;
        }
        
        .page-description {
            color: #666;
            font-size: 16px;
            max-width: 800px;
        }
        
        /* Filters */
        .filter-section {
            background-color: var(--light-gray);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            border: 1px solid var(--border-color);
        }
        
        .filter-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--dark-blue);
        }
        
        .filter-group {
            margin-bottom: 20px;
        }
        
        .filter-group h6 {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--text-gray);
        }
        
        .filter-option {
            margin-bottom: 8px;
            display: flex;
            align-items: center;
        }
        
        .filter-option input {
            margin-right: 8px;
        }
        
        .filter-option label {
            font-size: 14px;
            color: #555;
            cursor: pointer;
        }
        
        .btn-apply-filters {
            background-color: var(--primary-blue);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-weight: 600;
            width: 100%;
            margin-top: 10px;
        }
        
        /* Product Grid */
        .product-card {
            background-color: white;
            border: 1px solid var(--border-color);
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s;
            height: 100%;
            margin-bottom: 25px;
            position: relative;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            border-color: var(--primary-blue);
        }
        
        .product-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #ff4757;
            color: white;
            padding: 4px 10px;
            border-radius: 3px;
            font-size: 12px;
            font-weight: 600;
            z-index: 10;
        }
        
        .product-img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-bottom: 1px solid var(--border-color);
        }
        
        .product-info {
            padding: 15px;
        }
        
        .product-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 5px;
            height: 40px;
            overflow: hidden;
            color: var(--text-gray);
        }
        
        .product-category {
            font-size: 12px;
            color: #666;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .product-country {
            display: inline-block;
            background-color: var(--light-blue);
            color: var(--primary-blue);
            font-size: 11px;
            padding: 3px 8px;
            border-radius: 3px;
            margin-bottom: 10px;
            font-weight: 600;
        }
        
        .product-description {
            font-size: 13px;
            color: #666;
            margin-bottom: 15px;
            height: 40px;
            overflow: hidden;
        }
        
        .product-price-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 15px;
        }
        
        .product-price {
            color: var(--primary-blue);
            font-weight: 700;
            font-size: 18px;
        }
        
        .product-old-price {
            color: #999;
            text-decoration: line-through;
            font-size: 14px;
            margin-left: 5px;
        }
        
        .product-rating {
            color: #ffc107;
            font-size: 14px;
        }
        
        .product-rating span {
            color: #666;
            font-size: 12px;
            margin-left: 5px;
        }
        
        .btn-add-to-cart {
            background-color: var(--primary-blue);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            width: 100%;
            font-weight: 600;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .btn-add-to-cart:hover {
            background-color: var(--secondary-blue);
        }
        
        .btn-add-to-cart i {
            margin-right: 8px;
        }
        
        /* Pagination */
        .pagination-section {
            margin-top: 40px;
            margin-bottom: 50px;
        }
        
        .pagination {
            justify-content: center;
        }
        
        .page-link {
            color: var(--primary-blue);
            border: 1px solid var(--border-color);
            margin: 0 3px;
            border-radius: 5px !important;
        }
        
        .page-link:hover {
            background-color: var(--light-blue);
            color: var(--secondary-blue);
        }
        
        .page-item.active .page-link {
            background-color: var(--primary-blue);
            border-color: var(--primary-blue);
            color: white;
        }
        
        /* Footer */
        .footer {
            background-color: var(--dark-blue);
            color: white;
            padding: 50px 0 20px;
            margin-top: 50px;
        }
        
        .footer h5 {
            color: white;
            font-weight: 700;
            margin-bottom: 20px;
            font-size: 18px;
        }
        
        .footer ul {
            list-style: none;
            padding: 0;
        }
        
        .footer ul li {
            margin-bottom: 10px;
        }
        
        .footer ul li a {
            color: #ddd;
            text-decoration: none;
        }
        
        .footer ul li a:hover {
            color: white;
            text-decoration: underline;
        }
        
        .footer-about p {
            color: #ddd;
            margin-bottom: 15px;
        }
        
        .social-icons a {
            color: white;
            font-size: 20px;
            margin-right: 15px;
        }
        
        .copyright {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 20px;
            margin-top: 30px;
            text-align: center;
            color: #aaa;
            font-size: 14px;
        }
        
        /* Modal Popup */
        .modal {
            display: none;
            position: fixed;
            z-index: 1050;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.5);
        }
        
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 0;
            border: 1px solid #888;
            width: 90%;
            max-width: 800px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.2);
            animation-name: animatetop;
            animation-duration: 0.3s;
        }
        
        @keyframes animatetop {
            from {top: -50px; opacity: 0}
            to {top: 0; opacity: 1}
        }
        
        .modal-header {
            padding: 15px 20px;
            background-color: var(--primary-blue);
            color: white;
            border-radius: 10px 10px 0 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .modal-header h3 {
            margin: 0;
            font-size: 20px;
        }
        
        .close-modal {
            color: white;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            line-height: 20px;
        }
        
        .close-modal:hover {
            color: #ddd;
        }
        
        .modal-body {
            padding: 20px;
            max-height: 70vh;
            overflow-y: auto;
        }
        
        .modal-product-detail {
            display: flex;
            flex-wrap: wrap;
        }
        
        .modal-product-image {
            flex: 0 0 40%;
            max-width: 40%;
            padding-right: 20px;
        }
        
        .modal-product-image img {
            width: 100%;
            border-radius: 10px;
            border: 1px solid var(--border-color);
        }
        
        .modal-product-info {
            flex: 0 0 60%;
            max-width: 60%;
        }
        
        .modal-product-title {
            font-size: 24px;
            font-weight: 700;
            color: var(--dark-blue);
            margin-bottom: 10px;
        }
        
        .modal-product-price {
            font-size: 28px;
            font-weight: 700;
            color: var(--primary-blue);
            margin-bottom: 15px;
        }
        
        .modal-product-description {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.7;
        }
        
        .modal-product-features {
            margin-bottom: 20px;
        }
        
        .modal-product-features h5 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--text-gray);
        }
        
        .modal-product-features ul {
            padding-left: 20px;
            margin-bottom: 0;
        }
        
        .modal-product-features li {
            margin-bottom: 5px;
            color: #555;
        }
        
        .modal-actions {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }
        
        .btn-modal-cart {
            background-color: var(--primary-blue);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 12px 25px;
            font-weight: 600;
            flex: 1;
        }
        
        .btn-modal-wishlist {
            background-color: white;
            color: var(--primary-blue);
            border: 2px solid var(--primary-blue);
            border-radius: 5px;
            padding: 12px 25px;
            font-weight: 600;
            flex: 1;
        }
        
        /* Quick View Button */
        .btn-quick-view {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background-color: rgba(255,255,255,0.9);
            color: var(--primary-blue);
            border: 1px solid var(--primary-blue);
            border-radius: 5px;
            padding: 8px 15px;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
            opacity: 0;
            transition: all 0.3s;
            z-index: 5;
        }
        
        .product-card:hover .btn-quick-view {
            opacity: 1;
        }
        
        /* Responsive Styles */
        @media (max-width: 768px) {
            .header-icons {
                margin-top: 15px;
                text-align: center;
            }
            
            .page-header h1 {
                font-size: 24px;
            }
            
            .filter-section {
                margin-bottom: 20px;
            }
            
            .product-img {
                height: 180px;
            }
            
            .modal-product-detail {
                flex-direction: column;
            }
            
            .modal-product-image,
            .modal-product-info {
                flex: 0 0 100%;
                max-width: 100%;
                padding-right: 0;
                margin-bottom: 20px;
            }
            
            .modal-content {
                width: 95%;
                margin: 10% auto;
            }
        }
        
        @media (max-width: 576px) {
            .product-title {
                font-size: 15px;
            }
            
            .product-price {
                font-size: 16px;
            }
            
            .btn-add-to-cart {
                padding: 8px 10px;
                font-size: 14px;
            }
            
            .modal-header h3 {
                font-size: 18px;
            }
            
            .modal-product-title {
                font-size: 20px;
            }
            
            .modal-product-price {
                font-size: 24px;
            }
            
            .modal-actions {
                flex-direction: column;
            }
        }
        
        /* Sort Options */
        .sort-options {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .sort-label {
            margin-right: 10px;
            font-weight: 600;
            color: var(--text-gray);
        }
        
        .sort-select {
            padding: 8px 15px;
            border: 1px solid var(--border-color);
            border-radius: 5px;
            background-color: white;
            color: var(--text-gray);
        }
        
        /* Product Count */
        .product-count {
            color: #666;
            font-size: 14px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <!-- Top Header -->
    <div class="top-header">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div>
                    <a href="#"><i class="fas fa-phone-alt"></i> 0812-3456-7890</a>
                    <a href="#"><i class="fas fa-envelope"></i> cs@minuman.com</a>
                </div>
                <div>
                    <a href="#">Daftar</a>
                    <a href="#">Masuk</a>
                    <a href="#">Bantuan</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Main Header -->
    <header class="main-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-6">
                    <a href="#" class="logo">minuman<span>.com</span></a>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <div class="search-box">
                        <input type="text" placeholder="Cari minuman...">
                        <button><i class="fas fa-search"></i></button>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="header-icons text-end">
                        <a href="#">
                            <i class="fas fa-user"></i>
                        </a>
                        <a href="#">
                            <i class="fas fa-heart"></i>
                            <span class="badge">3</span>
                        </a>
                        <a href="#">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="badge">5</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 d-block d-md-none mt-3">
                    <div class="search-box">
                        <input type="text" placeholder="Cari minuman...">
                        <button><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark main-nav">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Minuman Dingin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Minuman Panas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Jus Buah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Minuman Kekinian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kopi & Teh</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">By Country</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Promo</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Breadcrumb -->
    <section class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">By Country</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Country USA</li>
                </ol>
            </nav>
        </div>
    </section>
    
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- Sidebar Filters -->
            <div class="col-lg-3">
                <div class="filter-section">
                    <h4 class="filter-title">Filter Produk</h4>
                    
                    <div class="filter-group">
                        <h6>Kategori</h6>
                        <div class="filter-option">
                            <input type="checkbox" id="category1" checked>
                            <label for="category1">Wine (12)</label>
                        </div>
                        <div class="filter-option">
                            <input type="checkbox" id="category2">
                            <label for="category2">Whisky (8)</label>
                        </div>
                        <div class="filter-option">
                            <input type="checkbox" id="category3">
                            <label for="category3">Bourbon (5)</label>
                        </div>
                        <div class="filter-option">
                            <input type="checkbox" id="category4">
                            <label for="category4">Vodka (3)</label>
                        </div>
                        <div class="filter-option">
                            <input type="checkbox" id="category5">
                            <label for="category5">Tequila (2)</label>
                        </div>
                    </div>
                    
                    <div class="filter-group">
                        <h6>Harga</h6>
                        <div class="filter-option">
                            <input type="checkbox" id="price1">
                            <label for="price1">Rp 0 - Rp 500.000</label>
                        </div>
                        <div class="filter-option">
                            <input type="checkbox" id="price2" checked>
                            <label for="price2">Rp 500.000 - Rp 1.000.000</label>
                        </div>
                        <div class="filter-option">
                            <input type="checkbox" id="price3">
                            <label for="price3">Rp 1.000.000 - Rp 2.000.000</label>
                        </div>
                        <div class="filter-option">
                            <input type="checkbox" id="price4">
                            <label for="price4">Rp 2.000.000+</label>
                        </div>
                    </div>
                    
                    <div class="filter-group">
                        <h6>Rating</h6>
                        <div class="filter-option">
                            <input type="checkbox" id="rating5">
                            <label for="rating5">
                                <span class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span> & Keatas
                            </label>
                        </div>
                        <div class="filter-option">
                            <input type="checkbox" id="rating4" checked>
                            <label for="rating4">
                                <span class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span> & Keatas
                            </label>
                        </div>
                        <div class="filter-option">
                            <input type="checkbox" id="rating3">
                            <label for="rating3">
                                <span class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span> & Keatas
                            </label>
                        </div>
                    </div>
                    
                    <button class="btn-apply-filters">Terapkan Filter</button>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-lg-9">
                <div class="page-header">
                    <h1>Country USA Collection</h1>
                    <p class="page-description">Temukan minuman berkualitas tinggi dari Amerika Serikat. Koleksi eksklusif wine, whisky, bourbon, dan minuman premium lainnya langsung dari produsen terbaik USA.</p>
                </div>
                
                <div class="sort-options">
                    <span class="sort-label">Urutkan:</span>
                    <select class="sort-select">
                        <option>Paling Sesuai</option>
                        <option>Harga Terendah</option>
                        <option>Harga Tertinggi</option>
                        <option>Rating Tertinggi</option>
                        <option>Terbaru</option>
                    </select>
                </div>
                
                <div class="product-count">Menampilkan 12 dari 28 produk</div>
                
                <!-- Product Grid -->
                <div class="row">
                    <!-- Product 1 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="product-card">
                            <span class="product-badge">Best Seller</span>
                            <img src="https://images.unsplash.com/photo-1551024709-8f23befc6f87?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="product-img" alt="California Red Wine">
                            <button class="btn-quick-view" data-product="1">Quick View</button>
                            <div class="product-info">
                                <div class="product-category">Wine</div>
                                <span class="product-country">USA</span>
                                <h3 class="product-title">California Red Wine 2019</h3>
                                <p class="product-description">Wine merah premium dari California dengan rasa buah beri dan coklat.</p>
                                <div class="product-price-section">
                                    <div>
                                        <span class="product-price">Rp 850.000</span>
                                        <span class="product-old-price">Rp 950.000</span>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span>(128)</span>
                                    </div>
                                </div>
                                <button class="btn-add-to-cart" data-product="1">
                                    <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product 2 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="product-card">
                            <img src="https://images.unsplash.com/photo-1510812431401-41d2bd2722f3?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="product-img" alt="Kentucky Bourbon">
                            <button class="btn-quick-view" data-product="2">Quick View</button>
                            <div class="product-info">
                                <div class="product-category">Bourbon</div>
                                <span class="product-country">USA</span>
                                <h3 class="product-title">Kentucky Straight Bourbon</h3>
                                <p class="product-description">Bourbon asli Kentucky dengan rasa vanilla, kayu manis, dan caramel.</p>
                                <div class="product-price-section">
                                    <div>
                                        <span class="product-price">Rp 1.250.000</span>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(89)</span>
                                    </div>
                                </div>
                                <button class="btn-add-to-cart" data-product="2">
                                    <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product 3 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="product-card">
                            <span class="product-badge">New</span>
                            <img src="https://images.unsplash.com/photo-1600566752355-35792bedcfea?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="product-img" alt="Napa Valley White Wine">
                            <button class="btn-quick-view" data-product="3">Quick View</button>
                            <div class="product-info">
                                <div class="product-category">Wine</div>
                                <span class="product-country">USA</span>
                                <h3 class="product-title">Napa Valley White Wine 2020</h3>
                                <p class="product-description">Wine putih premium dari Napa Valley dengan aroma citrus dan apel hijau.</p>
                                <div class="product-price-section">
                                    <div>
                                        <span class="product-price">Rp 720.000</span>
                                        <span class="product-old-price">Rp 800.000</span>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span>(67)</span>
                                    </div>
                                </div>
                                <button class="btn-add-to-cart" data-product="3">
                                    <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product 4 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="product-card">
                            <img src="https://images.unsplash.com/photo-1551024709-8f23befc6f87?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="product-img" alt="Tennessee Whiskey">
                            <button class="btn-quick-view" data-product="4">Quick View</button>
                            <div class="product-info">
                                <div class="product-category">Whisky</div>
                                <span class="product-country">USA</span>
                                <h3 class="product-title">Tennessee Whiskey 12 Years</h3>
                                <p class="product-description">Whiskey asli Tennessee dengan proses penyaringan maple charcoal.</p>
                                <div class="product-price-section">
                                    <div>
                                        <span class="product-price">Rp 1.500.000</span>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span>(142)</span>
                                    </div>
                                </div>
                                <button class="btn-add-to-cart" data-product="4">
                                    <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product 5 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="product-card">
                            <span class="product-badge">Sale</span>
                            <img src="https://images.unsplash.com/photo-1510812431401-41d2bd2722f3?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="product-img" alt="California Sparkling Wine">
                            <button class="btn-quick-view" data-product="5">Quick View</button>
                            <div class="product-info">
                                <div class="product-category">Wine</div>
                                <span class="product-country">USA</span>
                                <h3 class="product-title">California Sparkling Wine</h3>
                                <p class="product-description">Sparkling wine dengan gelembung halus dan rasa buah segar.</p>
                                <div class="product-price-section">
                                    <div>
                                        <span class="product-price">Rp 650.000</span>
                                        <span class="product-old-price">Rp 780.000</span>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(203)</span>
                                    </div>
                                </div>
                                <button class="btn-add-to-cart" data-product="5">
                                    <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product 6 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="product-card">
                            <img src="https://images.unsplash.com/photo-1600566752355-35792bedcfea?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="product-img" alt="Oregon Pinot Noir">
                            <button class="btn-quick-view" data-product="6">Quick View</button>
                            <div class="product-info">
                                <div class="product-category">Wine</div>
                                <span class="product-country">USA</span>
                                <h3 class="product-title">Oregon Pinot Noir 2018</h3>
                                <p class="product-description">Pinot noir premium dari Oregon dengan rasa cherry dan earthy notes.</p>
                                <div class="product-price-section">
                                    <div>
                                        <span class="product-price">Rp 950.000</span>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span>(98)</span>
                                    </div>
                                </div>
                                <button class="btn-add-to-cart" data-product="6">
                                    <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Pagination -->
                <div class="pagination-section">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5>minuman.com</h5>
                    <div class="footer-about">
                        <p>Tempat terbaik untuk membeli minuman segar dan minuman kekinian dengan kualitas terjamin dan harga terjangkau.</p>
                        <p><i class="fas fa-map-marker-alt"></i> Jl. Minuman Segar No. 123, Jakarta</p>
                        <p><i class="fas fa-phone"></i> 0812-3456-7890</p>
                        <p><i class="fas fa-envelope"></i> cs@minuman.com</p>
                        <div class="social-icons mt-3">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-tiktok"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Kategori</h5>
                    <ul>
                        <li><a href="#">Minuman Dingin</a></li>
                        <li><a href="#">Minuman Panas</a></li>
                        <li><a href="#">Jus Buah</a></li>
                        <li><a href="#">Minuman Kekinian</a></li>
                        <li><a href="#">Kopi & Teh</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Layanan</h5>
                    <ul>
                        <li><a href="#">Cara Pesan</a></li>
                        <li><a href="#">Pengiriman</a></li>
                        <li><a href="#">Pembayaran</a></li>
                        <li><a href="#">Garansi</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5>Berlangganan Newsletter</h5>
                    <p>Dapatkan info promo dan produk terbaru langsung ke email Anda.</p>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email Anda">
                        <button class="btn btn-primary" type="button">Berlangganan</button>
                    </div>
                    <p class="small">Dengan berlangganan, Anda menyetujui Kebijakan Privasi kami.</p>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 minuman.com. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>
    
    <!-- Modal Popup -->
    <div id="productModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Detail Produk</h3>
                <span class="close-modal">&times;</span>
            </div>
            <div class="modal-body">
                <div class="modal-product-detail">
                    <div class="modal-product-image">
                        <img id="modalProductImage" src="" alt="Product Image">
                    </div>
                    <div class="modal-product-info">
                        <h2 id="modalProductTitle" class="modal-product-title"></h2>
                        <div id="modalProductPrice" class="modal-product-price"></div>
                        <div class="modal-product-rating mb-3">
                            <span id="modalProductRating" class="product-rating"></span>
                            <span id="modalProductReviewCount" style="color: #666; font-size: 14px;"></span>
                        </div>
                        <p id="modalProductDescription" class="modal-product-description"></p>
                        
                        <div class="modal-product-features">
                            <h5>Spesifikasi Produk</h5>
                            <ul id="modalProductSpecs">
                                <!-- Will be filled by JavaScript -->
                            </ul>
                        </div>
                        
                        <div class="modal-product-features">
                            <h5>Keunggulan</h5>
                            <ul id="modalProductFeatures">
                                <!-- Will be filled by JavaScript -->
                            </ul>
                        </div>
                        
                        <div class="modal-actions">
                            <button class="btn-modal-cart" id="modalAddToCart">
                                <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                            </button>
                            <button class="btn-modal-wishlist" id="modalAddToWishlist">
                                <i class="fas fa-heart"></i> Tambah ke Wishlist
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        // Product Data
        const products = {
            1: {
                title: "California Red Wine 2019",
                price: "Rp 850.000",
                oldPrice: "Rp 950.000",
                image: "https://images.unsplash.com/photo-1551024709-8f23befc6f87?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
                rating: 4.5,
                reviews: 128,
                description: "Wine merah premium dari California dengan rasa buah beri, plum, dan sentuhan coklat yang halus. Diproduksi dari anggur Cabernet Sauvignon pilihan yang dipetik pada kondisi optimal. Cocok untuk disajikan dengan daging merah, keju keras, atau dinikmati sendiri di malam hari.",
                specs: [
                    "Jenis: Red Wine",
                    "Asal: California, USA",
                    "Volume: 750ml",
                    "Alkohol: 13.5%",
                    "Vintage: 2019",
                    "Varietal: Cabernet Sauvignon"
                ],
                features: [
                    "100% anggur Cabernet Sauvignon",
                    "Dibuat dengan teknik fermentasi terkontrol",
                    "Diaging dalam oak barrel selama 12 bulan",
                    "Cocok untuk penyimpanan jangka panjang",
                    "Dikemas dalam botol premium dengan label elegan"
                ]
            },
            2: {
                title: "Kentucky Straight Bourbon",
                price: "Rp 1.250.000",
                oldPrice: null,
                image: "https://images.unsplash.com/photo-1510812431401-41d2bd2722f3?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
                rating: 5,
                reviews: 89,
                description: "Bourbon asli Kentucky dengan rasa vanilla, kayu manis, caramel, dan sentuhan oak yang khas. Diproduksi dengan metode tradisional Kentucky menggunakan jagung lokal pilihan dan disimpan dalam barrel charred oak minimal 4 tahun.",
                specs: [
                    "Jenis: Bourbon Whiskey",
                    "Asal: Kentucky, USA",
                    "Volume: 700ml",
                    "Alkohol: 45%",
                    "Aging: 4 Tahun",
                    "Mash Bill: 70% jagung, 20% rye, 10% barley"
                ],
                features: [
                    "100% bourbon asli Kentucky",
                    "Diproduksi dengan metode sour mash tradisional",
                    "Disimpan dalam barrel charred oak",
                    "Rasa kompleks dengan finish yang panjang",
                    "Dikemas dalam botol kaca tebal dengan tutup kayu"
                ]
            },
            3: {
                title: "Napa Valley White Wine 2020",
                price: "Rp 720.000",
                oldPrice: "Rp 800.000",
                image: "https://images.unsplash.com/photo-1600566752355-35792bedcfea?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
                rating: 4,
                reviews: 67,
                description: "Wine putih premium dari Napa Valley dengan aroma citrus, apel hijau, dan peach yang segar. Diproduksi dari anggur Chardonnay pilihan yang tumbuh di lereng bukit Napa Valley. Cocok untuk seafood, salad, atau minuman penyegar di siang hari.",
                specs: [
                    "Jenis: White Wine",
                    "Asal: Napa Valley, USA",
                    "Volume: 750ml",
                    "Alkohol: 12.5%",
                    "Vintage: 2020",
                    "Varietal: Chardonnay"
                ],
                features: [
                    "Anggur Chardonnay premium",
                    "Fermentasi suhu terkontrol",
                    "Sedikit oak aging untuk kompleksitas",
                    "Asam seimbang dengan finish bersih",
                    "Botol hijau untuk perlindungan UV"
                ]
            }
        };
        
        // Modal Functionality
        const modal = document.getElementById("productModal");
        const closeModal = document.querySelector(".close-modal");
        const quickViewButtons = document.querySelectorAll(".btn-quick-view");
        const addToCartButtons = document.querySelectorAll(".btn-add-to-cart");
        
        // Open modal on quick view click
        quickViewButtons.forEach(button => {
            button.addEventListener("click", function() {
                const productId = this.getAttribute("data-product");
                const product = products[productId];
                
                if (product) {
                    // Fill modal with product data
                    document.getElementById("modalProductImage").src = product.image;
                    document.getElementById("modalProductTitle").textContent = product.title;
                    
                    let priceHTML = product.price;
                    if (product.oldPrice) {
                        priceHTML += ` <span style="color: #999; text-decoration: line-through; font-size: 20px;">${product.oldPrice}</span>`;
                    }
                    document.getElementById("modalProductPrice").innerHTML = priceHTML;
                    
                    // Generate star rating
                    let starsHTML = "";
                    const fullStars = Math.floor(product.rating);
                    const hasHalfStar = product.rating % 1 >= 0.5;
                    
                    for (let i = 0; i < 5; i++) {
                        if (i < fullStars) {
                            starsHTML += '<i class="fas fa-star"></i>';
                        } else if (i === fullStars && hasHalfStar) {
                            starsHTML += '<i class="fas fa-star-half-alt"></i>';
                        } else {
                            starsHTML += '<i class="far fa-star"></i>';
                        }
                    }
                    
                    document.getElementById("modalProductRating").innerHTML = starsHTML;
                    document.getElementById("modalProductReviewCount").textContent = `(${product.reviews} ulasan)`;
                    document.getElementById("modalProductDescription").textContent = product.description;
                    
                    // Fill specs
                    const specsList = document.getElementById("modalProductSpecs");
                    specsList.innerHTML = "";
                    product.specs.forEach(spec => {
                        const li = document.createElement("li");
                        li.textContent = spec;
                        specsList.appendChild(li);
                    });
                    
                    // Fill features
                    const featuresList = document.getElementById("modalProductFeatures");
                    featuresList.innerHTML = "";
                    product.features.forEach(feature => {
                        const li = document.createElement("li");
                        li.textContent = feature;
                        featuresList.appendChild(li);
                    });
                    
                    // Set modal add to cart button
                    document.getElementById("modalAddToCart").setAttribute("data-product", productId);
                    document.getElementById("modalAddToWishlist").setAttribute("data-product", productId);
                    
                    // Show modal
                    modal.style.display = "block";
                    document.body.style.overflow = "hidden"; // Prevent scrolling
                }
            });
        });
        
        // Close modal
        closeModal.addEventListener("click", function() {
            modal.style.display = "none";
            document.body.style.overflow = "auto";
        });
        
        // Close modal when clicking outside
        window.addEventListener("click", function(event) {
            if (event.target === modal) {
                modal.style.display = "none";
                document.body.style.overflow = "auto";
            }
        });
        
        // Add to cart functionality
        function addToCart(productId) {
            const product = products[productId];
            const cartBadge = document.querySelector(".header-icons .fa-shopping-cart + .badge");
            let currentCount = parseInt(cartBadge.textContent);
            cartBadge.textContent = currentCount + 1;
            
            // Show notification
            const notification = document.createElement("div");
            notification.className = "alert alert-success alert-dismissible fade show position-fixed";
            notification.style.top = "20px";
            notification.style.right = "20px";
            notification.style.zIndex = "1060";
            notification.innerHTML = `
                <strong>Berhasil!</strong> ${product.title} telah ditambahkan ke keranjang.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            `;
            
            document.body.appendChild(notification);
            
            // Auto remove notification after 3 seconds
            setTimeout(() => {
                if(notification.parentNode) {
                    notification.remove();
                }
            }, 3000);
        }
        
        // Add to cart from product cards
        addToCartButtons.forEach(button => {
            button.addEventListener("click", function() {
                const productId = this.getAttribute("data-product");
                addToCart(productId);
                
                // Button animation
                const originalText = this.innerHTML;
                this.innerHTML = '<i class="fas fa-check"></i> Ditambahkan';
                this.style.backgroundColor = "#28a745";
                
                setTimeout(() => {
                    this.innerHTML = originalText;
                    this.style.backgroundColor = "";
                }, 1500);
            });
        });
        
        // Add to cart from modal
        document.getElementById("modalAddToCart").addEventListener("click", function() {
            const productId = this.getAttribute("data-product");
            addToCart(productId);
            modal.style.display = "none";
            document.body.style.overflow = "auto";
        });
        
        // Add to wishlist from modal
        document.getElementById("modalAddToWishlist").addEventListener("click", function() {
            const productId = this.getAttribute("data-product");
            const product = products[productId];
            const wishlistBadge = document.querySelector(".header-icons .fa-heart + .badge");
            let currentCount = parseInt(wishlistBadge.textContent);
            wishlistBadge.textContent = currentCount + 1;
            
            // Show notification
            const notification = document.createElement("div");
            notification.className = "alert alert-info alert-dismissible fade show position-fixed";
            notification.style.top = "20px";
            notification.style.right = "20px";
            notification.style.zIndex = "1060";
            notification.innerHTML = `
                <strong>Berhasil!</strong> ${product.title} telah ditambahkan ke wishlist.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            `;
            
            document.body.appendChild(notification);
            
            // Auto remove notification after 3 seconds
            setTimeout(() => {
                if(notification.parentNode) {
                    notification.remove();
                }
            }, 3000);
            
            // Button animation
            this.innerHTML = '<i class="fas fa-check"></i> Ditambahkan';
            this.style.backgroundColor = "#28a745";
            this.style.color = "white";
            this.style.borderColor = "#28a745";
            
            setTimeout(() => {
                this.innerHTML = '<i class="fas fa-heart"></i> Tambah ke Wishlist';
                this.style.backgroundColor = "";
                this.style.color = "";
                this.style.borderColor = "";
            }, 1500);
        });
        
        // Apply filters button
        document.querySelector(".btn-apply-filters").addEventListener("click", function() {
            // Get selected filters
            const selectedCategories = [];
            document.querySelectorAll(".filter-group:nth-child(2) input:checked").forEach(cb => {
                selectedCategories.push(cb.nextElementSibling.textContent);
            });
            
            const selectedPrices = [];
            document.querySelectorAll(".filter-group:nth-child(3) input:checked").forEach(cb => {
                selectedPrices.push(cb.nextElementSibling.textContent);
            });
            
            // In a real application, you would filter products here
            // For this example, we'll just show an alert
            let message = "Filter diterapkan:\n";
            if (selectedCategories.length > 0) {
                message += "Kategori: " + selectedCategories.join(", ") + "\n";
            }
            if (selectedPrices.length > 0) {
                message += "Harga: " + selectedPrices.join(", ");
            }
            
            if (selectedCategories.length === 0 && selectedPrices.length === 0) {
                message = "Silakan pilih filter terlebih dahulu";
            }
            
            alert(message);
        });
        
        // Search functionality
        const searchInput = document.querySelector(".search-box input");
        const searchButton = document.querySelector(".search-box button");
        
        searchButton.addEventListener("click", function() {
            if(searchInput.value.trim()) {
                alert(`Mencari: ${searchInput.value}`);
            }
        });
        
        searchInput.addEventListener("keypress", function(e) {
            if(e.key === "Enter") {
                searchButton.click();
            }
        });
        
        // Sort functionality
        const sortSelect = document.querySelector(".sort-select");
        sortSelect.addEventListener("change", function() {
            alert(`Produk akan diurutkan berdasarkan: ${this.value}`);
            // In a real application, you would sort and re-render products here
        });
    </script>
</body>
</html>