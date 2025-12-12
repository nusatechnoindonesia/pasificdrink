<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Premium - Pasifik Drink</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    
    <style>
        :root {
            --primary-color: #2a9d8f;
            --primary-dark: #21867a;
            --secondary-color: #264653;
            --accent-color: #e9c46a;
            --danger-color: #e76f51;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --success-color: #28a745;
            --warning-color: #ffc107;
            --info-color: #17a2b8;
            --gradient-primary: linear-gradient(135deg, #2a9d8f 0%, #21867a 100%);
            --gradient-secondary: linear-gradient(135deg, #264653 0%, #1d3557 100%);
            --gradient-accent: linear-gradient(135deg, #e9c46a 0%, #f4a261 100%);
            --shadow-sm: 0 2px 10px rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 20px rgba(0, 0, 0, 0.08);
            --shadow-lg: 0 8px 30px rgba(0, 0, 0, 0.12);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', 'Montserrat', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
            min-height: 100vh;
            overflow-x: hidden;
        }
        
        /* Premium Sidebar */
        .sidebar {
            background: var(--gradient-secondary);
            color: white;
            min-height: 100vh;
            width: 280px;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 1050;
            box-shadow: 5px 0 25px rgba(0, 0, 0, 0.15);
            transition: var(--transition);
            border-right: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .sidebar-header {
            padding: 30px 25px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
            background: rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        .sidebar-header h3 {
            font-weight: 800;
            font-size: 1.8rem;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            letter-spacing: 1px;
            background: linear-gradient(45deg, var(--accent-color), #f4a261);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .sidebar-header small {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.85rem;
            letter-spacing: 1px;
        }
        
        .sidebar-menu {
            padding: 25px 0;
        }
        
        .nav-item {
            margin-bottom: 8px;
            position: relative;
            overflow: hidden;
        }
        
        .nav-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.6s;
        }
        
        .nav-item:hover::before {
            left: 100%;
        }
        
        .nav-link {
            color: rgba(255, 255, 255, 0.85);
            padding: 18px 25px;
            display: flex;
            align-items: center;
            transition: var(--transition);
            border-left: 4px solid transparent;
            text-decoration: none;
            cursor: pointer;
            font-weight: 500;
            position: relative;
            backdrop-filter: blur(5px);
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            right: 20px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--accent-color);
            opacity: 0;
            transform: scale(0);
            transition: var(--transition);
        }
        
        .nav-link:hover, .nav-link.active {
            color: white;
            background: rgba(255, 255, 255, 0.08);
            border-left-color: var(--accent-color);
            padding-left: 30px;
        }
        
        .nav-link.active::after {
            opacity: 1;
            transform: scale(1);
        }
        
        .nav-link i {
            width: 25px;
            font-size: 1.3rem;
            margin-right: 15px;
            transition: transform 0.3s;
        }
        
        .nav-link:hover i {
            transform: scale(1.1);
        }
        
        .main-content {
            margin-left: 280px;
            transition: var(--transition);
        }
        
        /* Premium Topbar */
        .topbar {
            background: white;
            padding: 18px 35px;
            box-shadow: var(--shadow-sm);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.95);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .topbar-info {
            display: flex;
            align-items: center;
        }
        
        .topbar-info i {
            font-size: 1.8rem;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-right: 12px;
        }
        
        .topbar-info h6 {
            font-weight: 700;
            color: var(--secondary-color);
            margin-bottom: 0;
        }
        
        .topbar-info small {
            color: #6c757d;
            font-size: 0.85rem;
        }
        
        .topbar-actions {
            display: flex;
            gap: 15px;
            align-items: center;
        }
        
        .notification-badge {
            position: relative;
            background: var(--danger-color);
            color: white;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            cursor: pointer;
            transition: var(--transition);
        }
        
        .notification-badge:hover {
            transform: scale(1.1);
        }
        
        .content-wrapper {
            padding: 35px;
        }
        
        /* Premium Page Header */
        .page-header {
            margin-bottom: 40px;
            position: relative;
        }
        
        .page-header h2 {
            font-weight: 800;
            color: var(--secondary-color);
            margin-bottom: 10px;
            font-size: 2.2rem;
            position: relative;
            display: inline-block;
            padding-bottom: 15px;
        }
        
        .page-header h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 70px;
            height: 4px;
            background: var(--gradient-primary);
            border-radius: 2px;
        }
        
        .page-header p {
            color: #666;
            font-size: 1.1rem;
            max-width: 600px;
        }
        
        /* Premium Cards */
        .card {
            border: none;
            border-radius: 16px;
            box-shadow: var(--shadow-md);
            margin-bottom: 30px;
            transition: var(--transition);
            overflow: hidden;
            background: white;
            border: 1px solid rgba(0, 0, 0, 0.03);
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }
        
        .card-header {
            background: white;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            padding: 25px;
            font-weight: 700;
            color: var(--secondary-color);
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 1.3rem;
            background: linear-gradient(to right, white, #f8f9fa);
        }
        
        .card-header i {
            margin-right: 12px;
            color: var(--primary-color);
        }
        
        .card-body {
            padding: 30px;
        }
        
        /* Premium Stats Cards */
        .stat-card {
            background: white;
            border-radius: 16px;
            padding: 25px;
            text-align: center;
            box-shadow: var(--shadow-md);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(0, 0, 0, 0.03);
        }
        
        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--gradient-primary);
        }
        
        .stat-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-lg);
        }
        
        .stat-card i {
            font-size: 2.8rem;
            margin-bottom: 20px;
            display: inline-block;
            padding: 20px;
            border-radius: 12px;
            background: linear-gradient(135deg, rgba(42, 157, 143, 0.1), rgba(233, 196, 106, 0.1));
        }
        
        .stat-card h3 {
            font-weight: 800;
            font-size: 2.5rem;
            margin-bottom: 5px;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        /* Premium Form Styles */
        .form-label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 10px;
            font-size: 0.95rem;
        }
        
        .form-control, .form-select {
            padding: 14px 18px;
            border-radius: 10px;
            border: 2px solid #e9ecef;
            font-size: 1rem;
            transition: var(--transition);
            background: #fff;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.3rem rgba(42, 157, 143, 0.15);
            transform: translateY(-2px);
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        /* Premium Buttons */
        .btn {
            padding: 12px 28px;
            border-radius: 10px;
            font-weight: 600;
            transition: var(--transition);
            border: none;
            position: relative;
            overflow: hidden;
        }
        
        .btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }
        
        .btn:hover::before {
            width: 300px;
            height: 300px;
        }
        
        .btn-primary {
            background: var(--gradient-primary);
            border: none;
            box-shadow: 0 4px 15px rgba(42, 157, 143, 0.3);
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(42, 157, 143, 0.4);
        }
        
        .btn-success {
            background: linear-gradient(135deg, #28a745, #20c997);
            border: none;
            box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);
        }
        
        .btn-warning {
            background: linear-gradient(135deg, #ffc107, #fd7e14);
            border: none;
            color: white;
            box-shadow: 0 4px 15px rgba(255, 193, 7, 0.3);
        }
        
        .btn-danger {
            background: linear-gradient(135deg, #dc3545, #e76f51);
            border: none;
            box-shadow: 0 4px 15px rgba(220, 53, 69, 0.3);
        }
        
        .btn-info {
            background: linear-gradient(135deg, #17a2b8, #4cc9f0);
            border: none;
            box-shadow: 0 4px 15px rgba(23, 162, 184, 0.3);
        }
        
        .btn-sm {
            padding: 8px 16px;
            font-size: 0.875rem;
        }
        
        /* Premium Table */
        .table-container {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow-md);
        }
        
        .table {
            margin-bottom: 0;
        }
        
        .table thead th {
            background: linear-gradient(to right, var(--secondary-color), #2d3748);
            color: white;
            border: none;
            padding: 18px;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
        }
        
        .table tbody tr {
            transition: var(--transition);
        }
        
        .table tbody tr:hover {
            background: rgba(42, 157, 143, 0.05);
            transform: scale(1.002);
        }
        
        .table td {
            padding: 18px;
            vertical-align: middle;
            border-color: #f1f3f4;
        }
        
        /* Premium Badges */
        .badge {
            padding: 8px 16px;
            font-weight: 600;
            border-radius: 8px;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
        }
        
        .badge-success {
            background: linear-gradient(135deg, #28a745, #20c997);
        }
        
        .badge-warning {
            background: linear-gradient(135deg, #ffc107, #fd7e14);
        }
        
        .badge-danger {
            background: linear-gradient(135deg, #dc3545, #e76f51);
        }
        
        .badge-info {
            background: linear-gradient(135deg, #17a2b8, #4cc9f0);
        }
        
        .badge-primary {
            background: var(--gradient-primary);
        }
        
        /* Premium Image Upload */
        .image-upload {
            border: 3px dashed #dee2e6;
            border-radius: 12px;
            padding: 40px;
            text-align: center;
            cursor: pointer;
            transition: var(--transition);
            background: #f8f9fa;
            position: relative;
            overflow: hidden;
        }
        
        .image-upload::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-primary);
            opacity: 0;
            transition: opacity 0.3s;
        }
        
        .image-upload:hover {
            border-color: var(--primary-color);
            background: rgba(42, 157, 143, 0.05);
        }
        
        .image-upload:hover::before {
            opacity: 0.1;
        }
        
        .image-upload i {
            font-size: 3.5rem;
            margin-bottom: 20px;
            display: block;
            color: #adb5bd;
            transition: var(--transition);
        }
        
        .image-upload:hover i {
            color: var(--primary-color);
            transform: translateY(-5px);
        }
        
        .image-preview {
            width: 100%;
            max-height: 250px;
            object-fit: contain;
            border-radius: 12px;
            display: none;
            margin-top: 20px;
            box-shadow: var(--shadow-sm);
            border: 1px solid #dee2e6;
        }
        
        /* Premium Modal */
        .modal-premium .modal-content {
            border-radius: 20px;
            overflow: hidden;
            border: none;
            box-shadow: var(--shadow-lg);
        }
        
        .modal-premium .modal-header {
            background: var(--gradient-secondary);
            color: white;
            padding: 25px;
            border: none;
        }
        
        .modal-premium .modal-header .modal-title {
            font-weight: 700;
            font-size: 1.5rem;
        }
        
        .modal-premium .modal-body {
            padding: 30px;
        }
        
        .modal-premium .modal-footer {
            padding: 20px 30px;
            border-top: 1px solid #f1f3f4;
            background: #f8f9fa;
        }
        
        /* Premium Animations */
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        .animate-pulse {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        /* Premium Theme Colors */
        .theme-colors {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        
        .theme-color {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            cursor: pointer;
            border: 4px solid transparent;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            box-shadow: var(--shadow-sm);
        }
        
        .theme-color::after {
            content: '✓';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
            transition: transform 0.3s;
        }
        
        .theme-color:hover {
            transform: scale(1.1);
        }
        
        .theme-color.active {
            border-color: white;
            box-shadow: 0 0 0 3px var(--secondary-color);
        }
        
        .theme-color.active::after {
            transform: translate(-50%, -50%) scale(1);
        }
        
        /* Premium Alert */
        .alert-premium {
            border-radius: 12px;
            border: none;
            margin-bottom: 25px;
            padding: 20px 25px;
            box-shadow: var(--shadow-sm);
        }
        
        .alert-success {
            background: linear-gradient(135deg, rgba(40, 167, 69, 0.1), rgba(32, 201, 151, 0.1));
            color: #155724;
            border-left: 5px solid #28a745;
        }
        
        .alert-info {
            background: linear-gradient(135deg, rgba(23, 162, 184, 0.1), rgba(76, 201, 240, 0.1));
            color: #0c5460;
            border-left: 5px solid #17a2b8;
        }
        
        /* Premium Responsive */
        @media (max-width: 1200px) {
            .sidebar {
                transform: translateX(-100%);
                box-shadow: none;
            }
            
            .sidebar.active {
                transform: translateX(0);
                box-shadow: 5px 0 25px rgba(0, 0, 0, 0.15);
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .toggle-sidebar {
                display: block !important;
            }
        }
        
        @media (max-width: 768px) {
            .content-wrapper {
                padding: 20px;
            }
            
            .topbar {
                padding: 15px 20px;
            }
            
            .page-header h2 {
                font-size: 1.8rem;
            }
        }
        
        .toggle-sidebar {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--secondary-color);
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        /* Premium Content Sections */
        .content-section {
            display: none;
            animation: slideIn 0.5s ease-out;
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .content-section.active {
            display: block;
        }
        
        /* Premium Product Grid */
        .product-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow-md);
            transition: var(--transition);
            margin-bottom: 30px;
            height: 100%;
            position: relative;
            border: 1px solid rgba(0, 0, 0, 0.03);
        }
        
        .product-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--gradient-primary);
        }
        
        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-lg);
        }
        
        .product-img {
            height: 220px;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }
        
        .product-img::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 40px;
            background: linear-gradient(to top, rgba(0,0,0,0.1), transparent);
        }
        
        .product-img img {
            max-width: 80%;
            max-height: 80%;
            object-fit: contain;
            transition: transform 0.5s;
        }
        
        .product-card:hover .product-img img {
            transform: scale(1.05);
        }
        
        .product-info {
            padding: 25px;
        }
        
        .product-name {
            font-weight: 700;
            margin-bottom: 12px;
            color: var(--secondary-color);
            font-size: 1.3rem;
        }
        
        .product-price {
            font-weight: 800;
            color: var(--primary-color);
            font-size: 1.4rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .product-original-price {
            text-decoration: line-through;
            color: #6c757d;
            font-size: 1rem;
            font-weight: 500;
        }
        
        /* Premium Loading */
        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            backdrop-filter: blur(10px);
        }
        
        .spinner-premium {
            width: 80px;
            height: 80px;
            border: 5px solid rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            border-top-color: var(--primary-color);
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            100% { transform: rotate(360deg); }
        }
        
        /* Premium Status Indicators */
        .status-indicator {
            display: inline-block;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin-right: 10px;
            box-shadow: 0 0 10px currentColor;
        }
        
        .status-active {
            background: #28a745;
            animation: pulse 2s infinite;
        }
        
        .status-inactive {
            background: #dc3545;
        }
        
        /* Premium Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f3f4;
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb {
            background: var(--gradient-primary);
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-dark);
        }
        
        /* Premium Toast */
        .toast-premium {
            background: white;
            border-radius: 12px;
            box-shadow: var(--shadow-lg);
            border: none;
            border-left: 5px solid var(--primary-color);
        }
    </style>
</head>
<body>
    <!-- Loading Overlay -->
    <div class="loading-overlay" id="loadingOverlay">
        <div class="spinner-premium"></div>
    </div>
    
    <!-- Admin Panel Premium -->
    <div class="admin-panel">
        <!-- Premium Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <h3><i class="fas fa-crown me-3"></i>Pasifik Drink</h3>
                <small>Admin Panel Premium</small>
            </div>
            
            <div class="sidebar-menu">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" data-section="dashboard">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-section="produk">
                            <i class="fas fa-wine-bottle"></i> Menu Produk
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-section="promo">
                            <i class="fas fa-tags"></i> Menu Promo
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-section="pengaturan">
                            <i class="fas fa-cog"></i> Pengaturan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-section="katalog">
                            <i class="fas fa-store"></i> Katalog
                        </a>
                    </li>
             
                </ul>
            </div>
            
            <div class="sidebar-footer px-4 py-3 position-absolute bottom-0 w-100">
                <div class="d-flex align-items-center justify-content-between">
                    <small class="text-muted">v1.0.0 Premium</small>
                    <button class="btn btn-sm btn-outline-light" id="toggleDarkMode">
                        <i class="fas fa-moon"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="main-content" id="mainContent">
            <!-- Premium Topbar -->
            <div class="topbar">
                <div class="d-flex align-items-center">
                    <button class="toggle-sidebar me-3" id="toggleSidebar">
                        <i class="fas fa-bars"></i>
                    </button>
                    
                    <div class="topbar-info">
                        <i class="fas fa-user-shield animate-float"></i>
                        <div>
                            <h6 class="mb-0">Admin Pasifik Drink</h6>
                            <small>Premium Admin Panel</small>
                        </div>
                    </div>
                </div>
                
                <div class="topbar-actions">
                    <div class="notification-badge animate-pulse" data-bs-toggle="tooltip" title="3 Notifikasi Baru">
                        3
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user me-2"></i> Admin
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user-cog me-2"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i> Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-sign-out-alt me-2"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Content Wrapper -->
            <div class="content-wrapper">
                <!-- Dashboard Section -->
                <div class="content-section active" id="dashboard-section">
                    <div class="page-header">
                        <h2>Dashboard Admin Premium</h2>
                        <p>Selamat datang di panel admin premium Pasifik Drink. Kelola produk, promo, dan katalog dengan mudah.</p>
                    </div>
                    
                    <div class="alert alert-info alert-premium">
                        <i class="fas fa-star me-2"></i>
                        <strong>Fitur Premium Aktif!</strong> Anda memiliki akses ke semua fitur admin panel premium.
                    </div>
                    
                    <!-- Stats Cards -->
                    <div class="row g-4 mb-5">
                        <div class="col-xl-3 col-lg-6">
                            <div class="stat-card">
                                <i class="fas fa-wine-bottle" style="color: var(--primary-color);"></i>
                                <h3 id="totalProduk">0</h3>
                                <p class="text-muted">Total Produk</p>
                                <small class="text-success"><i class="fas fa-arrow-up me-1"></i> 12% dari bulan lalu</small>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="stat-card">
                                <i class="fas fa-tag" style="color: var(--warning-color);"></i>
                                <h3 id="totalPromo">0</h3>
                                <p class="text-muted">Promo Aktif</p>
                                <small class="text-success"><i class="fas fa-arrow-up me-1"></i> 5% dari bulan lalu</small>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="stat-card">
                                <i class="fas fa-shopping-cart" style="color: var(--success-color);"></i>
                                <h3 id="totalPesanan">0</h3>
                                <p class="text-muted">Pesanan Hari Ini</p>
                                <small class="text-danger"><i class="fas fa-arrow-down me-1"></i> 3% dari kemarin</small>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="stat-card">
                                <i class="fas fa-dollar-sign" style="color: var(--danger-color);"></i>
                                <h3 id="totalPendapatan">Rp 0</h3>
                                <p class="text-muted">Pendapatan Bulan Ini</p>
                                <small class="text-success"><i class="fas fa-arrow-up me-1"></i> 18% dari bulan lalu</small>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Recent Activity -->
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-history"></i> Aktivitas Terbaru
                            <button class="btn btn-sm btn-primary" onclick="refreshActivities()">
                                <i class="fas fa-sync"></i> Refresh
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Waktu</th>
                                            <th>Aktivitas</th>
                                            <th>User</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody id="activitiesTable">
                                        <!-- Activities will be loaded here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Produk Section -->
                <div class="content-section" id="produk-section">
                    <div class="page-header">
                        <h2>Menu Produk Premium</h2>
                        <p>Kelola daftar minuman Pasifik Drink dengan fitur CRUD lengkap</p>
                    </div>
                    
                    <!-- Quick Actions -->
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Quick Actions</h5>
                                        <div class="btn-group">
                                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">
                                                <i class="fas fa-plus-circle me-2"></i> Tambah Produk
                                            </button>
          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Produk Table -->
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-list"></i> Daftar Produk
                            <div class="input-group" style="width: 300px;">
                                <input type="text" class="form-control" id="searchProduct" placeholder="Cari produk...">
                                <button class="btn btn-outline-primary" onclick="searchProducts()">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Gambar</th>
                                            <th>Nama Produk</th>
                                            <th>Kategori</th>
                                            <th>Harga Retail</th>
                                            <th>Stok</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="produkTableBody">
                                        <!-- Data produk akan diisi oleh JavaScript -->
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="text-muted" id="productCount">Menampilkan 0 produk</div>
                                <nav>
                                    <ul class="pagination mb-0" id="productPagination">
                                        <!-- Pagination akan diisi oleh JavaScript -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Modal Tambah/Edit Produk -->
                <div class="modal fade modal-premium" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addProductModalLabel">
                                    <i class="fas fa-wine-bottle me-2"></i> Tambah Produk Baru
                                </h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <form id="formTambahProduk">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Nama Produk</label>
                                            <input type="text" class="form-control" id="namaProduk" placeholder="Contoh: Blue Ocean" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Kategori</label>
                                            <select class="form-select" id="kategoriProduk" required>
                                                <option value="">Pilih Kategori</option>
                                                <option value="VIBE">VIBE</option>
                                                <option value="WINE">WINE</option>
                                                <option value="VODKA">VODKA</option>
                                                <option value="WHISKY">WHISKY</option>
                                                <option value="SOJU">SOJU</option>
                                                <option value="COGNAC">COGNAC</option>
                                                <option value="GIN">GIN</option>
                                                <option value="TEQUILLA">TEQUILLA</option>
                                                <option value="LIQUEOR">LIQUEOR</option>
                                                <option value="ARAK">ARAK</option>
                                                <option value="BEER">BEER</option>
                                                <option value="MIXER DRINK">MIXER DRINK</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Harga Retail (Rp)</label>
                                            <input type="number" class="form-control" id="hargaRetail" placeholder="35000" required>
                                        </div>
                             
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Stok Awal</label>
                                            <input type="number" class="form-control" id="stokProduk" placeholder="50" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Ukuran (ml)</label>
                                            <input type="text" class="form-control" id="ukuranProduk" placeholder="700ml">
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label">Deskripsi</label>
                                        <textarea class="form-control" id="deskripsiProduk" rows="3" placeholder="Deskripsi produk..."></textarea>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label">Upload Foto Produk</label>
                                        <div class="image-upload" id="imageUpload">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                            <p>Klik untuk upload foto atau drag & drop</p>
                                            <small class="text-muted">Format: JPG, PNG, Max 2MB</small>
                                            <input type="file" id="fileInput" accept="image/*" style="display: none;">
                                        </div>
                                        <div class="d-flex justify-content-center mt-3">
                                            <img id="imagePreview" class="image-preview" src="" alt="Preview">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    <i class="fas fa-times me-2"></i> Batal
                                </button>
                                <button type="button" class="btn btn-primary" onclick="saveProduct()">
                                    <i class="fas fa-save me-2"></i> Simpan Produk
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Modal Edit Produk -->
                <div class="modal fade modal-premium" id="editProductModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">
                                    <i class="fas fa-edit me-2"></i> Edit Produk
                                </h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body" id="editProductForm">
                                <!-- Form edit akan diisi oleh JavaScript -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    <i class="fas fa-times me-2"></i> Batal
                                </button>
                                <button type="button" class="btn btn-primary" onclick="updateProduct()">
                                    <i class="fas fa-sync me-2"></i> Update Produk
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Modal Detail Produk -->
                <div class="modal fade modal-premium" id="detailProductModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">
                                    <i class="fas fa-info-circle me-2"></i> Detail Produk
                                </h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body" id="detailProductContent">
                                <!-- Detail produk akan diisi oleh JavaScript -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    <i class="fas fa-times me-2"></i> Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Promo Section -->
                <div class="content-section" id="promo-section">
                    <div class="page-header">
                        <h2>Menu Promo Premium</h2>
                        <p>Buat dan kelala promo untuk minuman dengan fitur lengkap</p>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fas fa-tags"></i> Daftar Promo Aktif
                                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addPromoModal">
                                        <i class="fas fa-plus me-1"></i> Promo Baru
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Nama Promo</th>
                                                    <th>Kode</th>
                                                    <th>Diskon</th>
                                                    <th>Berlaku</th>
                                                    <th>Produk</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="promoTableBody">
                                                <!-- Data promo akan diisi oleh JavaScript -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fas fa-chart-line"></i> Statistik Promo
                                </div>
                                <div class="card-body">
                                    <div class="text-center mb-4">
                                        <div class="display-4 text-primary fw-bold" id="activePromoCount">0</div>
                                        <small class="text-muted">Promo Aktif</small>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label">Promo Terpopuler</label>
                                        <div class="list-group" id="topPromos">
                                            <!-- Top promos will be loaded here -->
                                        </div>
                                    </div>
                                    
                                    <div class="alert alert-info">
                                        <i class="fas fa-lightbulb me-2"></i>
                                        <small>Tip: Buat promo khusus untuk produk dengan stok tinggi.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Pengaturan Section -->
                <div class="content-section" id="pengaturan-section">
                    <div class="page-header">
                        <h2>Pengaturan Premium</h2>
                        <p>Ubah tampilan dan pengaturan katalog sesuai preferensi Anda</p>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fas fa-palette"></i> Tema & Tampilan
                                </div>
                                <div class="card-body">
                                    <div class="mb-4">
                                        <label class="form-label">Warna Tema Utama</label>
                                        <div class="theme-colors">
                                            <div class="theme-color active" style="background-color: #2a9d8f;" data-color="teal"></div>
                                            <div class="theme-color" style="background-color: #4361ee;" data-color="blue"></div>
                                            <div class="theme-color" style="background-color: #ef476f;" data-color="pink"></div>
                                            <div class="theme-color" style="background-color: #ff9e00;" data-color="orange"></div>
                                            <div class="theme-color" style="background-color: #7209b7;" data-color="purple"></div>
                                            <div class="theme-color" style="background-color: #06d6a0;" data-color="green"></div>
                                            <div class="theme-color" style="background-color: #ff595e;" data-color="red"></div>
                                            <div class="theme-color" style="background-color: #ff9e00;" data-color="amber"></div>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label">Layout Katalog</label>
                                        <select class="form-select" id="layoutKatalog">
                                            <option value="grid">Grid View</option>
                                            <option value="list">List View</option>
                                            <option value="card">Card View</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" id="darkModeToggle">
                                        <label class="form-check-label" for="darkModeToggle">Mode Gelap</label>
                                    </div>
                                    
                                    <button class="btn btn-primary" onclick="saveThemeSettings()">
                                        <i class="fas fa-save me-2"></i> Simpan Tema
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fas fa-whatsapp"></i> Integrasi WhatsApp
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label">Nomor WhatsApp Admin</label>
                                        <input type="text" class="form-control" id="nomorWhatsApp" placeholder="6281234567890" value="6281234567890">
                                        <small class="text-muted">Format: 62xxxxxxxxxxx (tanpa + dan spasi)</small>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label">Pesan Default</label>
                                        <textarea class="form-control" id="pesanWhatsApp" rows="3">Halo, saya ingin memesan minuman dari Pasifik Drink</textarea>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label">Autorespon</label>
                                        <textarea class="form-control" id="autoresponWhatsApp" rows="2">Terima kasih telah menghubungi Pasifik Drink. Pesanan Anda akan segera kami proses.</textarea>
                                    </div>
                                    
                                    <button class="btn btn-success" onclick="saveWhatsAppSettings()">
                                        <i class="fas fa-check me-2"></i> Simpan Pengaturan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fas fa-link"></i> Link & Integrasi
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Link Katalog Publik</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="linkKatalog" value="https://pasifikdrink.com/katalog" readonly>
                                                <button class="btn btn-outline-primary" type="button" onclick="copyLink()">
                                                    <i class="fas fa-copy"></i>
                                                </button>
                                            </div>
                                            <small class="text-muted">Link ini dapat dibagikan ke pelanggan</small>
                                        </div>
                                        
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">API Key</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="apiKey" value="pk_live_1234567890abcdef" readonly>
                                                <button class="btn btn-outline-primary" type="button" onclick="copyApiKey()">
                                                    <i class="fas fa-copy"></i>
                                                </button>
                                            </div>
                                            <small class="text-muted">Untuk integrasi dengan sistem lain</small>
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-warning" onclick="generateNewLink()">
                                            <i class="fas fa-sync me-2"></i> Generate Link Baru
                                        </button>
                                        <button class="btn btn-danger" onclick="resetApiKey()">
                                            <i class="fas fa-key me-2"></i> Reset API Key
                                        </button>
                                        <button class="btn btn-info" onclick="showQrCode()">
                                            <i class="fas fa-qrcode me-2"></i> QR Code
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Katalog Section -->
                <div class="content-section" id="katalog-section">
                    <div class="page-header">
                        <h2>Preview Katalog Premium</h2>
                        <p>Pratinjau tampilan katalog untuk pelanggan dengan berbagai layout</p>
                    </div>
                    
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div>
                                    <h5 class="mb-0">Katalog Pelanggan</h5>
                                    <small class="text-muted">Preview seperti yang dilihat pelanggan</small>
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-outline-primary active" onclick="changeLayout('grid')">
                                        <i class="fas fa-th-large"></i>
                                    </button>
                                    <button class="btn btn-outline-primary" onclick="changeLayout('list')">
                                        <i class="fas fa-list"></i>
                                    </button>
                                    <button class="btn btn-outline-primary" onclick="changeLayout('card')">
                                        <i class="fas fa-id-card"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <div class="row" id="katalogPreview">
                                <!-- Produk akan ditampilkan di sini -->
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-share-alt"></i> Bagikan Katalog
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h5>Bagikan katalog ke pelanggan</h5>
                                    <p>Salin link di bawah ini atau bagikan melalui media sosial:</p>
                                    
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="shareLink" value="https://pasifikdrink.com/katalog/abc123" readonly>
                                        <button class="btn btn-primary" type="button" onclick="copyShareLink()">
                                            <i class="fas fa-copy me-2"></i> Salin Link
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-success" onclick="shareWhatsApp()">
                                            <i class="fab fa-whatsapp me-2"></i> WhatsApp
                                        </button>
                                        <button class="btn btn-primary" onclick="shareFacebook()">
                                            <i class="fab fa-facebook me-2"></i> Facebook
                                        </button>
                                        <button class="btn btn-info" onclick="shareTelegram()">
                                            <i class="fab fa-telegram me-2"></i> Telegram
                                        </button>
                                        <button class="btn btn-dark" onclick="shareInstagram()">
                                            <i class="fab fa-instagram me-2"></i> Instagram
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-4 text-center">
                                <div id="qrcode" class="d-inline-block p-3 border rounded">
                                    <!-- QR Code will be generated here -->
                                </div>
                                <p class="mt-2 text-muted">Scan QR Code untuk membuka katalog</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Export Section -->
                <div class="content-section" id="export-section">
                    <div class="page-header">
                        <h2>Export & Backup Data</h2>
                        <p>Ekspor data produk, backup database, dan kelola data</p>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fas fa-file-export"></i> Export Data
                                </div>
                                <div class="card-body">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-success mb-3" onclick="exportToExcel()">
                                            <i class="fas fa-file-excel me-2"></i> Export ke Excel
                                        </button>
                                        <button class="btn btn-primary mb-3" onclick="exportToCSV()">
                                            <i class="fas fa-file-csv me-2"></i> Export ke CSV
                                        </button>
                                        <button class="btn btn-warning mb-3" onclick="exportToPDF()">
                                            <i class="fas fa-file-pdf me-2"></i> Export ke PDF
                                        </button>
                                        <button class="btn btn-info" onclick="exportToJSON()">
                                            <i class="fas fa-file-code me-2"></i> Export ke JSON
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fas fa-database"></i> Backup & Restore
                                </div>
                                <div class="card-body">
                                    <div class="mb-4">
                                        <label class="form-label">Backup Database</label>
                                        <button class="btn btn-primary w-100 mb-2" onclick="backupDatabase()">
                                            <i class="fas fa-download me-2"></i> Backup Sekarang
                                        </button>
                                        <small class="text-muted">Backup terakhir: <span id="lastBackup">Belum pernah</span></small>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label">Restore Database</label>
                                        <input type="file" class="form-control mb-2" id="restoreFile" accept=".json">
                                        <button class="btn btn-warning w-100" onclick="restoreDatabase()">
                                            <i class="fas fa-upload me-2"></i> Restore Data
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar"></i> Statistik Export
                                </div>
                                <div class="card-body">
                                    <div class="text-center mb-4">
                                        <div class="display-4 text-primary fw-bold" id="totalExports">0</div>
                                        <small class="text-muted">Total Export</small>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label">Riwayat Export</label>
                                        <div class="list-group" id="exportHistory">
                                            <!-- Export history will be loaded here -->
                                        </div>
                                    </div>
                                    
                                    <button class="btn btn-outline-primary w-100" onclick="clearExportHistory()">
                                        <i class="fas fa-trash me-2"></i> Hapus Riwayat
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- QRCode.js -->
    <script src="https://cdn.jsdelivr.net/npm/qrcodejs@1.0.0/qrcode.min.js"></script>
    <!-- SheetJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    
    <script>
        // Data penyimpanan lokal
        let produkData = JSON.parse(localStorage.getItem('produkData')) || [];
        let promoData = JSON.parse(localStorage.getItem('promoData')) || [];
        let pengaturanData = JSON.parse(localStorage.getItem('pengaturanData')) || {
            warnaTema: "teal",
            nomorWhatsApp: "6281234567890",
            pesanWhatsApp: "Halo, saya ingin memesan minuman dari Pasifik Drink",
            autoresponWhatsApp: "Terima kasih telah menghubungi Pasifik Drink. Pesanan Anda akan segera kami proses.",
            linkKatalog: "https://pasifikdrink.com/katalog/abc123",
            apiKey: "pk_live_1234567890abcdef",
            darkMode: false,
            layoutKatalog: "grid",
            lastBackup: null,
            exportHistory: [],
            activities: []
        };

        // Default produk data dari input Anda
        const defaultProducts = [
            // Minuman kategori 1
            { id: 1, nama: "Kawa Blackcurrant", kategori: "MIXER DRINK", hargaRetail: 270000, hargaGrosir: 250000, minGrosir: 12, stok: 50, ukuran: "700ml", deskripsi: "Minuman mixer rasa blackcurrant", foto: null, status: "aktif", createdAt: new Date().toISOString() },
            { id: 2, nama: "API HIJAU", kategori: "MIXER DRINK", hargaRetail: 270000, hargaGrosir: 250000, minGrosir: 12, stok: 45, ukuran: "700ml", deskripsi: "Minuman mixer rasa api hijau", foto: null, status: "aktif", createdAt: new Date().toISOString() },
            { id: 3, nama: "ANGGUR KETAN HITAM KECIL", kategori: "MIXER DRINK", hargaRetail: 270000, hargaGrosir: 250000, minGrosir: 12, stok: 30, ukuran: "700ml", deskripsi: "Anggur ketan hitam ukuran kecil", foto: null, status: "aktif", createdAt: new Date().toISOString() },
            { id: 4, nama: "MIXMAX BIRU", kategori: "MIXER DRINK", hargaRetail: 270000, hargaGrosir: 250000, minGrosir: 12, stok: 40, ukuran: "700ml", deskripsi: "Minuman mixer max biru", foto: null, status: "aktif", createdAt: new Date().toISOString() },
            { id: 5, nama: "BEER", kategori: "BEER", hargaRetail: 270000, hargaGrosir: 250000, minGrosir: 12, stok: 60, ukuran: "620ml", deskripsi: "Bir lokal", foto: null, status: "aktif", createdAt: new Date().toISOString() },
            
            // Minuman kategori 2
            { id: 6, nama: "ANI ANGGUR HIJAU 580ML", kategori: "WINE", hargaRetail: 165000, hargaGrosir: 165000, minGrosir: 12, stok: 25, ukuran: "580ml", deskripsi: "Anggur hijau 580ml", foto: null, status: "aktif", createdAt: new Date().toISOString() },
            { id: 7, nama: "ANI MAPPLE 580ML", kategori: "WINE", hargaRetail: 165000, hargaGrosir: 165000, minGrosir: 12, stok: 25, ukuran: "580ml", deskripsi: "Anggur maple 580ml", foto: null, status: "aktif", createdAt: new Date().toISOString() },
            { id: 8, nama: "ANI ROSE PINK 580ML", kategori: "WINE", hargaRetail: 165000, hargaGrosir: 165000, minGrosir: 12, stok: 20, ukuran: "580ml", deskripsi: "Anggur rose pink 580ml", foto: null, status: "aktif", createdAt: new Date().toISOString() },
            { id: 9, nama: "ANI ANGGUR MERAH 580ML", kategori: "WINE", hargaRetail: 165000, hargaGrosir: 165000, minGrosir: 12, stok: 30, ukuran: "580ml", deskripsi: "Anggur merah 580ml", foto: null, status: "aktif", createdAt: new Date().toISOString() },
            
            // Minuman kategori 3
            { id: 10, nama: "Kawa Hijau", kategori: "MIXER DRINK", hargaRetail: 295000, hargaGrosir: 275000, minGrosir: 12, stok: 35, ukuran: "700ml", deskripsi: "Minuman mixer rasa hijau", foto: null, status: "aktif", createdAt: new Date().toISOString() },
            { id: 11, nama: "Kawa Merah", kategori: "MIXER DRINK", hargaRetail: 295000, hargaGrosir: 275000, minGrosir: 12, stok: 35, ukuran: "700ml", deskripsi: "Minuman mixer rasa merah", foto: null, status: "aktif", createdAt: new Date().toISOString() },
            { id: 12, nama: "Vibe Black Tea 700 ml", kategori: "VIBE", hargaRetail: 295000, hargaGrosir: 275000, minGrosir: 12, stok: 40, ukuran: "700ml", deskripsi: "Vibe black tea 700ml", foto: null, status: "aktif", createdAt: new Date().toISOString() },
            { id: 13, nama: "Vibe Premium Vodka 700 ML", kategori: "VIBE", hargaRetail: 295000, hargaGrosir: 275000, minGrosir: 12, stok: 30, ukuran: "700ml", deskripsi: "Vibe premium vodka 700ml", foto: null, status: "aktif", createdAt: new Date().toISOString() },
            
            // Tambahkan lebih banyak produk sesuai data Anda...
        ];

        // Inisialisasi data jika kosong
        if (produkData.length === 0) {
            produkData = defaultProducts;
            simpanData();
        }

        // Variabel global untuk edit produk
        let currentEditProductId = null;
        let currentPage = 1;
        const productsPerPage = 10;

        // Simpan data ke localStorage
        function simpanData() {
            localStorage.setItem('produkData', JSON.stringify(produkData));
            localStorage.setItem('promoData', JSON.stringify(promoData));
            localStorage.setItem('pengaturanData', JSON.stringify(pengaturanData));
            updateDashboard();
        }

        // Tampilkan loading
        function showLoading() {
            document.getElementById('loadingOverlay').style.display = 'flex';
        }

        // Sembunyikan loading
        function hideLoading() {
            document.getElementById('loadingOverlay').style.display = 'none';
        }

        // Update dashboard stats
        function updateDashboard() {
            document.getElementById('totalProduk').textContent = produkData.length;
            document.getElementById('totalPromo').textContent = promoData.filter(p => p.status === 'aktif').length;
            
            // Generate random data for demo
            const todayOrders = Math.floor(Math.random() * 50) + 20;
            document.getElementById('totalPesanan').textContent = todayOrders;
            
            const monthlyRevenue = produkData.reduce((sum, produk) => sum + (produk.hargaRetail * 2), 0);
            document.getElementById('totalPendapatan').textContent = `Rp ${monthlyRevenue.toLocaleString()}`;
            
            updateActivities();
        }

        // Update activities
        function updateActivities() {
            const activities = pengaturanData.activities || [];
            const table = document.getElementById('activitiesTable');
            table.innerHTML = '';
            
            const recentActivities = activities.slice(-5).reverse();
            
            recentActivities.forEach(activity => {
                const row = document.createElement('tr');
                const timeAgo = getTimeAgo(activity.timestamp);
                
                row.innerHTML = `
                    <td><small>${timeAgo}</small></td>
                    <td>${activity.action}</td>
                    <td>${activity.user}</td>
                    <td><span class="badge ${activity.status === 'success' ? 'badge-success' : 'badge-warning'}">${activity.status}</span></td>
                `;
                table.appendChild(row);
            });
        }

        // Get time ago
        function getTimeAgo(timestamp) {
            const now = new Date();
            const past = new Date(timestamp);
            const diffMs = now - past;
            const diffMins = Math.floor(diffMs / 60000);
            const diffHours = Math.floor(diffMs / 3600000);
            const diffDays = Math.floor(diffMs / 86400000);
            
            if (diffMins < 1) return 'Baru saja';
            if (diffMins < 60) return `${diffMins} menit lalu`;
            if (diffHours < 24) return `${diffHours} jam lalu`;
            if (diffDays < 7) return `${diffDays} hari lalu`;
            return past.toLocaleDateString();
        }

        // Add activity log
        function addActivity(action, status = 'success') {
            const activities = pengaturanData.activities || [];
            activities.push({
                action,
                user: 'Admin',
                timestamp: new Date().toISOString(),
                status
            });
            pengaturanData.activities = activities;
            simpanData();
            updateActivities();
        }

        // Sidebar navigation
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active class from all links
                document.querySelectorAll('.nav-link').forEach(item => {
                    item.classList.remove('active');
                });
                
                // Add active class to clicked link
                this.classList.add('active');
                
                // Hide all sections
                document.querySelectorAll('.content-section').forEach(section => {
                    section.classList.remove('active');
                });
                
                // Show selected section
                const sectionId = this.getAttribute('data-section') + '-section';
                document.getElementById(sectionId).classList.add('active');
                
                // Load data for section
                switch(sectionId) {
                    case 'produk-section':
                        loadProdukTable();
                        break;
                    case 'promo-section':
                        loadPromoTable();
                        updatePromoStats();
                        break;
                    case 'katalog-section':
                        loadKatalogPreview();
                        generateQRCode();
                        break;
                    case 'export-section':
                        updateExportStats();
                        break;
                }
                
                // Close sidebar on mobile
                if (window.innerWidth < 1200) {
                    document.getElementById('sidebar').classList.remove('active');
                }
            });
        });

        // Toggle sidebar for mobile
        document.getElementById('toggleSidebar').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('active');
        });

        // Toggle dark mode
        document.getElementById('toggleDarkMode').addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
            const icon = this.querySelector('i');
            if (document.body.classList.contains('dark-mode')) {
                icon.classList.remove('fa-moon');
                icon.classList.add('fa-sun');
            } else {
                icon.classList.remove('fa-sun');
                icon.classList.add('fa-moon');
            }
        });

        // Image upload
        document.getElementById('imageUpload').addEventListener('click', function() {
            document.getElementById('fileInput').click();
        });

        document.getElementById('fileInput').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                if (file.size > 2 * 1024 * 1024) {
                    showAlert('File terlalu besar! Maksimal 2MB.', 'error');
                    return;
                }
                
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('imagePreview');
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                    preview.classList.add('animate__animated', 'animate__fadeIn');
                }
                reader.readAsDataURL(file);
            }
        });

        // Save product
        function saveProduct() {
            const form = document.getElementById('formTambahProduk');
            if (!form.checkValidity()) {
                form.reportValidity();
                return;
            }

            const newProduct = {
                id: produkData.length > 0 ? Math.max(...produkData.map(p => p.id)) + 1 : 1,
                nama: document.getElementById('namaProduk').value,
                kategori: document.getElementById('kategoriProduk').value,
                hargaRetail: parseInt(document.getElementById('hargaRetail').value),
                hargaGrosir: parseInt(document.getElementById('hargaGrosir').value),
                minGrosir: parseInt(document.getElementById('minGrosir').value),
                stok: parseInt(document.getElementById('stokProduk').value),
                ukuran: document.getElementById('ukuranProduk').value || '700ml',
                deskripsi: document.getElementById('deskripsiProduk').value,
                foto: document.getElementById('imagePreview').src || null,
                status: 'aktif',
                createdAt: new Date().toISOString(),
                updatedAt: new Date().toISOString()
            };

            showLoading();
            setTimeout(() => {
                produkData.push(newProduct);
                simpanData();
                
                // Reset form
                form.reset();
                document.getElementById('imagePreview').style.display = 'none';
                document.getElementById('imagePreview').src = '';
                
                // Close modal
                const modal = bootstrap.Modal.getInstance(document.getElementById('addProductModal'));
                modal.hide();
                
                hideLoading();
                
                // Show success alert
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: 'Produk berhasil ditambahkan!',
                    timer: 2000,
                    showConfirmButton: false
                });
                
                // Add activity log
                addActivity(`Menambah produk "${newProduct.nama}"`);
                
                // Refresh produk table
                loadProdukTable();
                loadKatalogPreview();
            }, 1000);
        }

        // Load produk table with pagination
        function loadProdukTable(page = 1) {
            currentPage = page;
            const tableBody = document.getElementById('produkTableBody');
            tableBody.innerHTML = '';
            
            const startIndex = (page - 1) * productsPerPage;
            const endIndex = startIndex + productsPerPage;
            const productsToShow = produkData.slice(startIndex, endIndex);
            
            productsToShow.forEach((produk, index) => {
                const globalIndex = startIndex + index + 1;
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${globalIndex}</td>
                    <td>
                        ${produk.foto ? 
                            `<img src="${produk.foto}" alt="${produk.nama}" class="rounded" style="width: 60px; height: 60px; object-fit: cover;">` : 
                            `<div class="bg-light rounded d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="fas fa-wine-bottle text-muted"></i>
                            </div>`
                        }
                    </td>
                    <td>
                        <strong>${produk.nama}</strong>
                        <br>
                        <small class="text-muted">${produk.ukuran}</small>
                    </td>
                    <td><span class="badge badge-primary">${produk.kategori}</span></td>
                    <td>Rp ${produk.hargaRetail.toLocaleString()}</td>
                    <td>
                        <span class="badge ${produk.stok > 20 ? 'badge-success' : produk.stok > 5 ? 'badge-warning' : 'badge-danger'}">
                            ${produk.stok} botol
                        </span>
                    </td>
                    <td>
                        <span class="status-indicator ${produk.status === 'aktif' ? 'status-active' : 'status-inactive'}"></span>
                        ${produk.status === 'aktif' ? 'Aktif' : 'Nonaktif'}
                    </td>
                    <td>
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-info" onclick="viewProduct(${produk.id})" data-bs-toggle="tooltip" title="Lihat Detail">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="btn btn-warning" onclick="editProduct(${produk.id})" data-bs-toggle="tooltip" title="Edit">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-danger" onclick="deleteProduct(${produk.id})" data-bs-toggle="tooltip" title="Hapus">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                `;
                tableBody.appendChild(row);
            });
            
            // Update product count
            document.getElementById('productCount').textContent = `Menampilkan ${productsToShow.length} dari ${produkData.length} produk`;
            
            // Update pagination
            updatePagination();
            
            // Initialize tooltips
            const tooltips = document.querySelectorAll('[data-bs-toggle="tooltip"]');
            tooltips.forEach(tooltip => new bootstrap.Tooltip(tooltip));
        }

        // Update pagination
        function updatePagination() {
            const totalPages = Math.ceil(produkData.length / productsPerPage);
            const pagination = document.getElementById('productPagination');
            pagination.innerHTML = '';
            
            // Previous button
            const prevLi = document.createElement('li');
            prevLi.className = `page-item ${currentPage === 1 ? 'disabled' : ''}`;
            prevLi.innerHTML = `<a class="page-link" href="#" onclick="loadProdukTable(${currentPage - 1})">«</a>`;
            pagination.appendChild(prevLi);
            
            // Page numbers
            const maxVisiblePages = 5;
            let startPage = Math.max(1, currentPage - Math.floor(maxVisiblePages / 2));
            let endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);
            
            if (endPage - startPage + 1 < maxVisiblePages) {
                startPage = Math.max(1, endPage - maxVisiblePages + 1);
            }
            
            for (let i = startPage; i <= endPage; i++) {
                const pageLi = document.createElement('li');
                pageLi.className = `page-item ${i === currentPage ? 'active' : ''}`;
                pageLi.innerHTML = `<a class="page-link" href="#" onclick="loadProdukTable(${i})">${i}</a>`;
                pagination.appendChild(pageLi);
            }
            
            // Next button
            const nextLi = document.createElement('li');
            nextLi.className = `page-item ${currentPage === totalPages ? 'disabled' : ''}`;
            nextLi.innerHTML = `<a class="page-link" href="#" onclick="loadProdukTable(${currentPage + 1})">»</a>`;
            pagination.appendChild(nextLi);
        }

        // View product detail
        function viewProduct(id) {
            const produk = produkData.find(p => p.id === id);
            if (!produk) return;
            
            const modalContent = document.getElementById('detailProductContent');
            modalContent.innerHTML = `
                <div class="row">
                    <div class="col-md-4 text-center mb-4">
                        ${produk.foto ? 
                            `<img src="${produk.foto}" alt="${produk.nama}" class="img-fluid rounded" style="max-height: 300px;">` : 
                            `<div class="bg-light rounded d-flex align-items-center justify-content-center" style="height: 300px;">
                                <i class="fas fa-wine-bottle fa-5x text-muted"></i>
                            </div>`
                        }
                    </div>
                    <div class="col-md-8">
                        <h4>${produk.nama}</h4>
                        <p class="text-muted">${produk.deskripsi || 'Tidak ada deskripsi'}</p>
                        
                        <table class="table table-bordered">
                            <tr>
                                <th>Kategori</th>
                                <td><span class="badge badge-primary">${produk.kategori}</span></td>
                            </tr>
                            <tr>
                                <th>Ukuran</th>
                                <td>${produk.ukuran}</td>
                            </tr>
                            <tr>
                                <th>Harga Retail</th>
                                <td><strong>Rp ${produk.hargaRetail.toLocaleString()}</strong></td>
                            </tr>
                      
                            <tr>
                                <th>Stok</th>
                                <td><span class="badge ${produk.stok > 20 ? 'badge-success' : produk.stok > 5 ? 'badge-warning' : 'badge-danger'}">${produk.stok} botol</span></td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td><span class="badge ${produk.status === 'aktif' ? 'badge-success' : 'badge-danger'}">${produk.status === 'aktif' ? 'Aktif' : 'Nonaktif'}</span></td>
                            </tr>
                            <tr>
                                <th>Tanggal Dibuat</th>
                                <td>${new Date(produk.createdAt).toLocaleDateString()}</td>
                            </tr>
                            <tr>
                                <th>Terakhir Diupdate</th>
                                <td>${new Date(produk.updatedAt).toLocaleDateString()}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            `;
            
            const modal = new bootstrap.Modal(document.getElementById('detailProductModal'));
            modal.show();
        }

        // Edit product
        function editProduct(id) {
            const produk = produkData.find(p => p.id === id);
            if (!produk) return;
            
            currentEditProductId = id;
            
            const formContent = document.getElementById('editProductForm');
            formContent.innerHTML = `
                <form id="formEditProduk">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="editNamaProduk" value="${produk.nama}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Kategori</label>
                            <select class="form-select" id="editKategoriProduk" required>
                                <option value="VIBE" ${produk.kategori === 'VIBE' ? 'selected' : ''}>VIBE</option>
                                <option value="WINE" ${produk.kategori === 'WINE' ? 'selected' : ''}>WINE</option>
                                <option value="VODKA" ${produk.kategori === 'VODKA' ? 'selected' : ''}>VODKA</option>
                                <option value="WHISKY" ${produk.kategori === 'WHISKY' ? 'selected' : ''}>WHISKY</option>
                                <option value="SOJU" ${produk.kategori === 'SOJU' ? 'selected' : ''}>SOJU</option>
                                <option value="COGNAC" ${produk.kategori === 'COGNAC' ? 'selected' : ''}>COGNAC</option>
                                <option value="GIN" ${produk.kategori === 'GIN' ? 'selected' : ''}>GIN</option>
                                <option value="TEQUILLA" ${produk.kategori === 'TEQUILLA' ? 'selected' : ''}>TEQUILLA</option>
                                <option value="LIQUEOR" ${produk.kategori === 'LIQUEOR' ? 'selected' : ''}>LIQUEOR</option>
                                <option value="ARAK" ${produk.kategori === 'ARAK' ? 'selected' : ''}>ARAK</option>
                                <option value="BEER" ${produk.kategori === 'BEER' ? 'selected' : ''}>BEER</option>
                                <option value="MIXER DRINK" ${produk.kategori === 'MIXER DRINK' ? 'selected' : ''}>MIXER DRINK</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Harga Retail (Rp)</label>
                            <input type="number" class="form-control" id="editHargaRetail" value="${produk.hargaRetail}" required>
                        </div>
                       
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Stok</label>
                            <input type="number" class="form-control" id="editStokProduk" value="${produk.stok}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Ukuran (ml)</label>
                            <input type="text" class="form-control" id="editUkuranProduk" value="${produk.ukuran}">
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="editDeskripsiProduk" rows="3">${produk.deskripsi || ''}</textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select" id="editStatusProduk">
                            <option value="aktif" ${produk.status === 'aktif' ? 'selected' : ''}>Aktif</option>
                            <option value="nonaktif" ${produk.status === 'nonaktif' ? 'selected' : ''}>Nonaktif</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Foto Produk</label>
                        <div class="image-upload" id="editImageUpload" onclick="triggerEditImageUpload()">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <p>Klik untuk upload foto baru</p>
                            <input type="file" id="editFileInput" accept="image/*" style="display: none;" onchange="handleEditImageUpload(event)">
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <img id="editImagePreview" class="image-preview" src="${produk.foto || ''}" alt="Preview" style="${produk.foto ? 'display: block;' : 'display: none;'}">
                        </div>
                    </div>
                </form>
            `;
            
            const modal = new bootstrap.Modal(document.getElementById('editProductModal'));
            modal.show();
        }

        // Trigger edit image upload
        function triggerEditImageUpload() {
            document.getElementById('editFileInput').click();
        }

        // Handle edit image upload
        function handleEditImageUpload(event) {
            const file = event.target.files[0];
            if (file) {
                if (file.size > 2 * 1024 * 1024) {
                    showAlert('File terlalu besar! Maksimal 2MB.', 'error');
                    return;
                }
                
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('editImagePreview');
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                    preview.classList.add('animate__animated', 'animate__fadeIn');
                }
                reader.readAsDataURL(file);
            }
        }

        // Update product
        function updateProduct() {
            const produk = produkData.find(p => p.id === currentEditProductId);
            if (!produk) return;
            
            // Get updated values
            produk.nama = document.getElementById('editNamaProduk').value;
            produk.kategori = document.getElementById('editKategoriProduk').value;
            produk.hargaRetail = parseInt(document.getElementById('editHargaRetail').value);
            produk.hargaGrosir = parseInt(document.getElementById('editHargaGrosir').value);
            produk.minGrosir = parseInt(document.getElementById('editMinGrosir').value);
            produk.stok = parseInt(document.getElementById('editStokProduk').value);
            produk.ukuran = document.getElementById('editUkuranProduk').value;
            produk.deskripsi = document.getElementById('editDeskripsiProduk').value;
            produk.status = document.getElementById('editStatusProduk').value;
            produk.foto = document.getElementById('editImagePreview').src || produk.foto;
            produk.updatedAt = new Date().toISOString();
            
            showLoading();
            setTimeout(() => {
                simpanData();
                
                // Close modal
                const modal = bootstrap.Modal.getInstance(document.getElementById('editProductModal'));
                modal.hide();
                
                hideLoading();
                
                // Show success alert
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: 'Produk berhasil diperbarui!',
                    timer: 2000,
                    showConfirmButton: false
                });
                
                // Add activity log
                addActivity(`Memperbarui produk "${produk.nama}"`);
                
                // Refresh produk table
                loadProdukTable(currentPage);
                loadKatalogPreview();
            }, 1000);
        }

        // Delete product
        function deleteProduct(id) {
            const produk = produkData.find(p => p.id === id);
            if (!produk) return;
            
            Swal.fire({
                title: 'Hapus Produk?',
                text: `Anda yakin ingin menghapus "${produk.nama}"?`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    showLoading();
                    setTimeout(() => {
                        produkData = produkData.filter(p => p.id !== id);
                        simpanData();
                        
                        hideLoading();
                        
                        Swal.fire({
                            icon: 'success',
                            title: 'Terhapus!',
                            text: 'Produk berhasil dihapus.',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        
                        // Add activity log
                        addActivity(`Menghapus produk "${produk.nama}"`);
                        
                        // Refresh produk table
                        loadProdukTable(1);
                        loadKatalogPreview();
                    }, 1000);
                }
            });
        }

        // Search products
        function searchProducts() {
            const searchTerm = document.getElementById('searchProduct').value.toLowerCase();
            if (!searchTerm.trim()) {
                loadProdukTable(1);
                return;
            }
            
            const filteredProducts = produkData.filter(produk =>
                produk.nama.toLowerCase().includes(searchTerm) ||
                produk.kategori.toLowerCase().includes(searchTerm) ||
                produk.deskripsi?.toLowerCase().includes(searchTerm)
            );
            
            const tableBody = document.getElementById('produkTableBody');
            tableBody.innerHTML = '';
            
            filteredProducts.forEach((produk, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${index + 1}</td>
                    <td>
                        ${produk.foto ? 
                            `<img src="${produk.foto}" alt="${produk.nama}" class="rounded" style="width: 60px; height: 60px; object-fit: cover;">` : 
                            `<div class="bg-light rounded d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="fas fa-wine-bottle text-muted"></i>
                            </div>`
                        }
                    </td>
                    <td>
                        <strong>${produk.nama}</strong>
                        <br>
                        <small class="text-muted">${produk.ukuran}</small>
                    </td>
                    <td><span class="badge badge-primary">${produk.kategori}</span></td>
                    <td>Rp ${produk.hargaRetail.toLocaleString()}</td>
                    <td>Rp ${produk.hargaGrosir.toLocaleString()}<br><small class="text-muted">(min ${produk.minGrosir} bot)</small></td>
                    <td>
                        <span class="badge ${produk.stok > 20 ? 'badge-success' : produk.stok > 5 ? 'badge-warning' : 'badge-danger'}">
                            ${produk.stok} botol
                        </span>
                    </td>
                    <td>
                        <span class="status-indicator ${produk.status === 'aktif' ? 'status-active' : 'status-inactive'}"></span>
                        ${produk.status === 'aktif' ? 'Aktif' : 'Nonaktif'}
                    </td>
                    <td>
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-info" onclick="viewProduct(${produk.id})">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="btn btn-warning" onclick="editProduct(${produk.id})">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-danger" onclick="deleteProduct(${produk.id})">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                `;
                tableBody.appendChild(row);
            });
            
            document.getElementById('productCount').textContent = `Menampilkan ${filteredProducts.length} hasil pencarian`;
            document.getElementById('productPagination').innerHTML = '';
        }

        // Load promo table
        function loadPromoTable() {
            const tableBody = document.getElementById('promoTableBody');
            tableBody.innerHTML = '';
            
            promoData.forEach((promo, index) => {
                const row = document.createElement('tr');
                let jenisText = '';
                let nilaiText = '';
                
                if (promo.jenis === 'persen') {
                    jenisText = 'Diskon %';
                    nilaiText = `${promo.nilai}%`;
                } else if (promo.jenis === 'nominal') {
                    jenisText = 'Potongan Rp';
                    nilaiText = `Rp ${parseInt(promo.nilai).toLocaleString()}`;
                } else if (promo.jenis === 'buy1get1') {
                    jenisText = 'Buy 1 Get 1';
                    nilaiText = 'Gratis 1';
                }
                
                const statusClass = promo.status === 'aktif' ? 'badge-success' : 'badge-danger';
                const statusText = promo.status === 'aktif' ? 'Aktif' : 'Nonaktif';
                
                row.innerHTML = `
                    <td>${promo.nama}</td>
                    <td><span class="badge bg-light text-dark">${promo.kode}</span></td>
                    <td>${jenisText}<br><small>${nilaiText}</small></td>
                    <td>${promo.mulai}<br>s/d<br>${promo.selesai}</td>
                    <td>${promo.produk === 'all' ? 'Semua Produk' : `${promo.produk.length} produk`}</td>
                    <td><span class="badge ${statusClass}">${statusText}</span></td>
                    <td>
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-warning" onclick="editPromo(${promo.id})">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-danger" onclick="hapusPromo(${promo.id})">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                `;
                tableBody.appendChild(row);
            });
        }

        // Update promo stats
        function updatePromoStats() {
            const activePromos = promoData.filter(p => p.status === 'aktif');
            document.getElementById('activePromoCount').textContent = activePromos.length;
            
            const topPromosList = document.getElementById('topPromos');
            topPromosList.innerHTML = '';
            
            activePromos.slice(0, 3).forEach(promo => {
                const item = document.createElement('a');
                item.className = 'list-group-item list-group-item-action';
                item.innerHTML = `
                    <div class="d-flex w-100 justify-content-between">
                        <h6 class="mb-1">${promo.nama}</h6>
                        <small>${promo.kode}</small>
                    </div>
                    <p class="mb-1">${promo.jenis === 'persen' ? `Diskon ${promo.nilai}%` : promo.jenis === 'nominal' ? `Potongan Rp ${promo.nilai}` : 'Buy 1 Get 1'}</p>
                `;
                topPromosList.appendChild(item);
            });
        }

        // Save theme settings
        function saveThemeSettings() {
            const activeColor = document.querySelector('.theme-color.active').getAttribute('data-color');
            const darkMode = document.getElementById('darkModeToggle').checked;
            const layout = document.getElementById('layoutKatalog').value;
            
            pengaturanData.warnaTema = activeColor;
            pengaturanData.darkMode = darkMode;
            pengaturanData.layoutKatalog = layout;
            
            simpanData();
            
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Pengaturan tema berhasil disimpan.',
                timer: 2000,
                showConfirmButton: false
            });
            
            addActivity('Mengubah pengaturan tema');
        }

        // Save WhatsApp settings
        function saveWhatsAppSettings() {
            pengaturanData.nomorWhatsApp = document.getElementById('nomorWhatsApp').value;
            pengaturanData.pesanWhatsApp = document.getElementById('pesanWhatsApp').value;
            pengaturanData.autoresponWhatsApp = document.getElementById('autoresponWhatsApp').value;
            
            simpanData();
            
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Pengaturan WhatsApp berhasil disimpan.',
                timer: 2000,
                showConfirmButton: false
            });
            
            addActivity('Mengubah pengaturan WhatsApp');
        }

        // Copy link
        function copyLink() {
            const linkInput = document.getElementById('linkKatalog');
            linkInput.select();
            navigator.clipboard.writeText(linkInput.value);
            
            Swal.fire({
                icon: 'success',
                title: 'Tersalin!',
                text: 'Link berhasil disalin ke clipboard.',
                timer: 1500,
                showConfirmButton: false
            });
        }

        // Copy API key
        function copyApiKey() {
            const apiKeyInput = document.getElementById('apiKey');
            apiKeyInput.select();
            navigator.clipboard.writeText(apiKeyInput.value);
            
            Swal.fire({
                icon: 'success',
                title: 'Tersalin!',
                text: 'API Key berhasil disalin.',
                timer: 1500,
                showConfirmButton: false
            });
        }

        // Generate new link
        function generateNewLink() {
            const randomId = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
            const newLink = `https://pasifikdrink.com/katalog/${randomId}`;
            
            document.getElementById('linkKatalog').value = newLink;
            document.getElementById('shareLink').value = newLink;
            pengaturanData.linkKatalog = newLink;
            
            simpanData();
            
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Link baru berhasil digenerate.',
                timer: 2000,
                showConfirmButton: false
            });
            
            addActivity('Generate link katalog baru');
        }

        // Reset API key
        function resetApiKey() {
            Swal.fire({
                title: 'Reset API Key?',
                text: 'API Key lama tidak akan bisa digunakan lagi.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Reset!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    const newApiKey = 'pk_live_' + Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
                    document.getElementById('apiKey').value = newApiKey;
                    pengaturanData.apiKey = newApiKey;
                    
                    simpanData();
                    
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: 'API Key berhasil direset.',
                        timer: 2000,
                        showConfirmButton: false
                    });
                    
                    addActivity('Reset API Key');
                }
            });
        }

        // Show QR Code
        function showQrCode() {
            const link = pengaturanData.linkKatalog;
            const qrcodeDiv = document.createElement('div');
            qrcodeDiv.id = 'tempQrCode';
            
            Swal.fire({
                title: 'QR Code Katalog',
                html: qrcodeDiv,
                showCancelButton: true,
                confirmButtonText: 'Download',
                cancelButtonText: 'Tutup',
                showLoaderOnConfirm: true,
                preConfirm: () => {
                    return new Promise((resolve) => {
                        // Download QR Code functionality would go here
                        setTimeout(() => resolve(), 1000);
                    });
                }
            });
            
            setTimeout(() => {
                new QRCode(qrcodeDiv, {
                    text: link,
                    width: 200,
                    height: 200,
                    colorDark: "#000000",
                    colorLight: "#ffffff",
                    correctLevel: QRCode.CorrectLevel.H
                });
            }, 100);
        }

        // Load katalog preview
        function loadKatalogPreview() {
            const katalogContainer = document.getElementById('katalogPreview');
            katalogContainer.innerHTML = '';
            
            const activeProducts = produkData.filter(p => p.status === 'aktif');
            const layout = pengaturanData.layoutKatalog || 'grid';
            
            if (layout === 'grid') {
                katalogContainer.className = 'row g-4';
                activeProducts.forEach(produk => {
                    const col = document.createElement('div');
                    col.className = 'col-xl-3 col-lg-4 col-md-6';
                    
                    col.innerHTML = `
                        <div class="product-card">
                            <div class="product-img">
                                ${produk.foto ? 
                                    `<img src="${produk.foto}" alt="${produk.nama}">` : 
                                    `<i class="fas fa-wine-bottle fa-5x" style="color: var(--primary-color);"></i>`
                                }
                            </div>
                            <div class="product-info">
                                <h5 class="product-name">${produk.nama}</h5>
                                <p class="text-muted small mb-3">${produk.deskripsi || 'Minuman premium dari Pasifik Drink'}</p>
                                <div class="product-price">
                                    <span>Rp ${produk.hargaRetail.toLocaleString()}</span>
                                    <small class="text-muted ms-2">/botol</small>
                                </div>
                                <div class="product-original-price">
                                    Grosir: Rp ${produk.hargaGrosir.toLocaleString()} (min ${produk.minGrosir} bot)
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <span class="badge ${produk.stok > 20 ? 'badge-success' : produk.stok > 5 ? 'badge-warning' : 'badge-danger'}">
                                        Stok: ${produk.stok}
                                    </span>
                                    <button class="btn btn-sm btn-primary" onclick="pesanProduk(${produk.id})">
                                        <i class="fab fa-whatsapp me-1"></i> Pesan
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                    katalogContainer.appendChild(col);
                });
            } else if (layout === 'list') {
                katalogContainer.className = 'list-group';
                activeProducts.forEach(produk => {
                    const item = document.createElement('div');
                    item.className = 'list-group-item list-group-item-action';
                    item.innerHTML = `
                        <div class="row align-items-center">
                            <div class="col-auto">
                                ${produk.foto ? 
                                    `<img src="${produk.foto}" alt="${produk.nama}" class="rounded" style="width: 80px; height: 80px; object-fit: cover;">` : 
                                    `<div class="bg-light rounded d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                        <i class="fas fa-wine-bottle fa-2x text-muted"></i>
                                    </div>`
                                }
                            </div>
                            <div class="col">
                                <h6 class="mb-1">${produk.nama}</h6>
                                <small class="text-muted">${produk.kategori} • ${produk.ukuran}</small>
                            </div>
                            <div class="col-auto">
                                <div class="text-end">
                                    <div class="fw-bold">Rp ${produk.hargaRetail.toLocaleString()}</div>
                                    <small class="text-muted">Grosir: Rp ${produk.hargaGrosir.toLocaleString()}</small>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-sm btn-primary" onclick="pesanProduk(${produk.id})">
                                    <i class="fab fa-whatsapp me-1"></i> Pesan
                                </button>
                            </div>
                        </div>
                    `;
                    katalogContainer.appendChild(item);
                });
            }
        }

        // Change layout
        function changeLayout(layout) {
            const buttons = document.querySelectorAll('.btn-group .btn');
            buttons.forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
            
            pengaturanData.layoutKatalog = layout;
            simpanData();
            loadKatalogPreview();
        }

        // Generate QR Code for sharing
        function generateQRCode() {
            const qrcodeContainer = document.getElementById('qrcode');
            qrcodeContainer.innerHTML = '';
            
            const link = pengaturanData.linkKatalog;
            new QRCode(qrcodeContainer, {
                text: link,
                width: 150,
                height: 150,
                colorDark: "#2a9d8f",
                colorLight: "#ffffff",
                correctLevel: QRCode.CorrectLevel.H
            });
        }

        // Pesan produk via WhatsApp
        function pesanProduk(id) {
            const produk = produkData.find(p => p.id === id);
            if (produk) {
                const nomor = pengaturanData.nomorWhatsApp;
                const pesan = encodeURIComponent(
                    `${pengaturanData.pesanWhatsApp}\n\n` +
                    `Saya ingin memesan:\n` +
                    `• ${produk.nama}\n` +
                    `• Harga: Rp ${produk.hargaRetail.toLocaleString()}\n` +
                    `• Grosir: Rp ${produk.hargaGrosir.toLocaleString()} (min ${produk.minGrosir} bot)\n` +
                    `• Ukuran: ${produk.ukuran}`
                );
                const url = `https://wa.me/${nomor}?text=${pesan}`;
                window.open(url, '_blank');
            }
        }

        // Copy share link
        function copyShareLink() {
            const linkInput = document.getElementById('shareLink');
            linkInput.select();
            navigator.clipboard.writeText(linkInput.value);
            
            Swal.fire({
                icon: 'success',
                title: 'Tersalin!',
                text: 'Link berhasil disalin ke clipboard.',
                timer: 1500,
                showConfirmButton: false
            });
        }

        // Share via WhatsApp
        function shareWhatsApp() {
            const nomor = pengaturanData.nomorWhatsApp;
            const pesan = encodeURIComponent(`Lihat katalog minuman Pasifik Drink di: ${pengaturanData.linkKatalog}`);
            const url = `https://wa.me/?text=${pesan}`;
            window.open(url, '_blank');
        }

        // Share via Facebook
        function shareFacebook() {
            const url = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(pengaturanData.linkKatalog)}`;
            window.open(url, '_blank');
        }

        // Share via Telegram
        function shareTelegram() {
            const pesan = encodeURIComponent(`Katalog Pasifik Drink: ${pengaturanData.linkKatalog}`);
            const url = `https://t.me/share/url?url=${encodeURIComponent(pengaturanData.linkKatalog)}&text=${pesan}`;
            window.open(url, '_blank');
        }

        // Share via Instagram
        function shareInstagram() {
            Swal.fire({
                icon: 'info',
                title: 'Bagikan ke Instagram',
                text: 'Salin link katalog dan bagikan melalui Instagram.',
                showCancelButton: true,
                confirmButtonText: 'Salin Link',
                cancelButtonText: 'Tutup'
            }).then((result) => {
                if (result.isConfirmed) {
                    copyShareLink();
                }
            });
        }

        // Export to Excel
        function exportToExcel() {
            showLoading();
            
            setTimeout(() => {
                const ws = XLSX.utils.json_to_sheet(produkData.map(p => ({
                    'Nama Produk': p.nama,
                    'Kategori': p.kategori,
                    'Harga Retail': p.hargaRetail,
                    'Harga Grosir': p.hargaGrosir,
                    'Min. Grosir': p.minGrosir,
                    'Stok': p.stok,
                    'Ukuran': p.ukuran,
                    'Status': p.status,
                    'Deskripsi': p.deskripsi
                })));
                
                const wb = XLSX.utils.book_new();
                XLSX.utils.book_append_sheet(wb, ws, 'Produk');
                XLSX.writeFile(wb, 'produk-pasifik-drink.xlsx');
                
                hideLoading();
                
                // Add to export history
                addExportHistory('Excel');
                
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: 'Data berhasil diexport ke Excel.',
                    timer: 2000,
                    showConfirmButton: false
                });
            }, 1000);
        }

        // Export to CSV
        function exportToCSV() {
            showLoading();
            
            setTimeout(() => {
                const headers = ['Nama Produk', 'Kategori', 'Harga Retail', 'Harga Grosir', 'Min. Grosir', 'Stok', 'Ukuran', 'Status', 'Deskripsi'];
                const csvRows = [
                    headers.join(','),
                    ...produkData.map(p => [
                        `"${p.nama}"`,
                        `"${p.kategori}"`,
                        p.hargaRetail,
                        p.hargaGrosir,
                        p.minGrosir,
                        p.stok,
                        `"${p.ukuran}"`,
                        `"${p.status}"`,
                        `"${p.deskripsi || ''}"`
                    ].join(','))
                ];
                
                const csvContent = csvRows.join('\n');
                const blob = new Blob([csvContent], { type: 'text/csv' });
                const url = window.URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = 'produk-pasifik-drink.csv';
                a.click();
                
                hideLoading();
                
                // Add to export history
                addExportHistory('CSV');
                
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: 'Data berhasil diexport ke CSV.',
                    timer: 2000,
                    showConfirmButton: false
                });
            }, 1000);
        }

        // Export to PDF
        function exportToPDF() {
            Swal.fire({
                icon: 'info',
                title: 'Export PDF',
                text: 'Fitur export PDF akan segera hadir!',
                timer: 2000,
                showConfirmButton: false
            });
        }

        // Export to JSON
        function exportToJSON() {
            showLoading();
            
            setTimeout(() => {
                const dataStr = JSON.stringify(produkData, null, 2);
                const dataUri = 'data:application/json;charset=utf-8,'+ encodeURIComponent(dataStr);
                const exportFileDefaultName = 'produk-pasifik-drink.json';
                
                const linkElement = document.createElement('a');
                linkElement.setAttribute('href', dataUri);
                linkElement.setAttribute('download', exportFileDefaultName);
                linkElement.click();
                
                hideLoading();
                
                // Add to export history
                addExportHistory('JSON');
                
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: 'Data berhasil diexport ke JSON.',
                    timer: 2000,
                    showConfirmButton: false
                });
            }, 1000);
        }

        // Add export history
        function addExportHistory(format) {
            const history = pengaturanData.exportHistory || [];
            history.push({
                format,
                timestamp: new Date().toISOString(),
                count: produkData.length
            });
            pengaturanData.exportHistory = history;
            simpanData();
            updateExportStats();
        }

        // Update export stats
        function updateExportStats() {
            const history = pengaturanData.exportHistory || [];
            document.getElementById('totalExports').textContent = history.length;
            
            const historyList = document.getElementById('exportHistory');
            historyList.innerHTML = '';
            
            const recentHistory = history.slice(-5).reverse();
            
            recentHistory.forEach(item => {
                const historyItem = document.createElement('a');
                historyItem.className = 'list-group-item list-group-item-action';
                historyItem.innerHTML = `
                    <div class="d-flex w-100 justify-content-between">
                        <h6 class="mb-1">Export ${item.format}</h6>
                        <small>${new Date(item.timestamp).toLocaleDateString()}</small>
                    </div>
                    <p class="mb-1">${item.count} produk</p>
                `;
                historyList.appendChild(historyItem);
            });
            
            document.getElementById('lastBackup').textContent = 
                history.length > 0 ? 
                new Date(history[0].timestamp).toLocaleDateString() : 
                'Belum pernah';
        }

        // Backup database
        function backupDatabase() {
            showLoading();
            
            setTimeout(() => {
                const backupData = {
                    produkData,
                    promoData,
                    pengaturanData,
                    backupTimestamp: new Date().toISOString()
                };
                
                const dataStr = JSON.stringify(backupData, null, 2);
                const dataUri = 'data:application/json;charset=utf-8,'+ encodeURIComponent(dataStr);
                const exportFileDefaultName = `backup-pasifik-drink-${new Date().toISOString().slice(0,10)}.json`;
                
                const linkElement = document.createElement('a');
                linkElement.setAttribute('href', dataUri);
                linkElement.setAttribute('download', exportFileDefaultName);
                linkElement.click();
                
                hideLoading();
                
                pengaturanData.lastBackup = new Date().toISOString();
                simpanData();
                
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: 'Database berhasil dibackup.',
                    timer: 2000,
                    showConfirmButton: false
                });
                
                addActivity('Backup database');
            }, 1000);
        }

        // Restore database
        function restoreDatabase() {
            const fileInput = document.getElementById('restoreFile');
            const file = fileInput.files[0];
            
            if (!file) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Pilih file backup terlebih dahulu.',
                });
                return;
            }
            
            Swal.fire({
                title: 'Restore Database?',
                text: 'Data saat ini akan diganti dengan data backup.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Restore!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        try {
                            const backupData = JSON.parse(e.target.result);
                            
                            if (backupData.produkData && backupData.pengaturanData) {
                                produkData = backupData.produkData;
                                promoData = backupData.promoData || [];
                                pengaturanData = backupData.pengaturanData;
                                
                                simpanData();
                                
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil!',
                                    text: 'Database berhasil direstore.',
                                    timer: 2000,
                                    showConfirmButton: false
                                }).then(() => {
                                    location.reload();
                                });
                                
                                addActivity('Restore database');
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error!',
                                    text: 'Format file backup tidak valid.',
                                });
                            }
                        } catch (error) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: 'Gagal membaca file backup.',
                            });
                        }
                    };
                    reader.readAsText(file);
                }
            });
        }

        // Clear export history
        function clearExportHistory() {
            Swal.fire({
                title: 'Hapus Riwayat?',
                text: 'Riwayat export akan dihapus permanen.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    pengaturanData.exportHistory = [];
                    simpanData();
                    updateExportStats();
                    
                    Swal.fire({
                        icon: 'success',
                        title: 'Terhapus!',
                        text: 'Riwayat export berhasil dihapus.',
                        timer: 2000,
                        showConfirmButton: false
                    });
                    
                    addActivity('Menghapus riwayat export');
                }
            });
        }

        // Refresh activities
        function refreshActivities() {
            updateActivities();
            Swal.fire({
                icon: 'success',
                title: 'Diperbarui!',
                text: 'Aktivitas terbaru berhasil dimuat.',
                timer: 1500,
                showConfirmButton: false
            });
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            showLoading();
            
            // Initialize data
            updateDashboard();
            loadProdukTable();
            loadPromoTable();
            loadKatalogPreview();
            generateQRCode();
            
            // Set tema colors
            const activeColor = pengaturanData.warnaTema || 'teal';
            document.querySelectorAll('.theme-color').forEach(color => {
                if (color.getAttribute('data-color') === activeColor) {
                    color.classList.add('active');
                }
                
                color.addEventListener('click', function() {
                    document.querySelectorAll('.theme-color').forEach(c => c.classList.remove('active'));
                    this.classList.add('active');
                });
            });
            
            // Set nilai pengaturan
            document.getElementById('nomorWhatsApp').value = pengaturanData.nomorWhatsApp;
            document.getElementById('pesanWhatsApp').value = pengaturanData.pesanWhatsApp;
            document.getElementById('autoresponWhatsApp').value = pengaturanData.autoresponWhatsApp || '';
            document.getElementById('linkKatalog').value = pengaturanData.linkKatalog;
            document.getElementById('shareLink').value = pengaturanData.linkKatalog;
            document.getElementById('apiKey').value = pengaturanData.apiKey;
            document.getElementById('layoutKatalog').value = pengaturanData.layoutKatalog || 'grid';
            document.getElementById('darkModeToggle').checked = pengaturanData.darkMode || false;
            
            // Hide loading
            setTimeout(() => {
                hideLoading();
            }, 1000);
            
            // Add welcome activity
            if (!pengaturanData.activities || pengaturanData.activities.length === 0) {
                addActivity('Login ke admin panel');
            }
        });

        // Show alert
        function showAlert(message, type) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });
            
            Toast.fire({
                icon: type,
                title: message
            });
        }
    </script>
</body>
</html>