<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Pasifik Drink</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #2a9d8f;
            --secondary-color: #264653;
            --accent-color: #e9c46a;
            --danger-color: #e76f51;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --success-color: #2a9d8f;
            --warning-color: #f4a261;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background-color: #f5f7fa;
            min-height: 100vh;
        }
        
        /* Admin Panel Styles */
        .sidebar {
            background-color: var(--secondary-color);
            color: white;
            min-height: 100vh;
            width: 250px;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 100;
            box-shadow: 3px 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .sidebar-header {
            padding: 25px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
        }
        
        .sidebar-header h3 {
            font-weight: 700;
            font-size: 1.5rem;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .sidebar-header h3 i {
            color: var(--accent-color);
            margin-right: 10px;
        }
        
        .sidebar-menu {
            padding: 20px 0;
        }
        
        .nav-item {
            margin-bottom: 5px;
        }
        
        .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 15px 20px;
            display: flex;
            align-items: center;
            transition: all 0.3s;
            border-left: 4px solid transparent;
            text-decoration: none;
            cursor: pointer;
        }
        
        .nav-link:hover, .nav-link.active {
            color: white;
            background-color: rgba(255, 255, 255, 0.1);
            border-left-color: var(--accent-color);
        }
        
        .nav-link i {
            width: 25px;
            font-size: 1.2rem;
            margin-right: 12px;
        }
        
        .main-content {
            margin-left: 250px;
            transition: all 0.3s;
        }
        
        .topbar {
            background-color: white;
            padding: 15px 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 99;
        }
        
        .topbar-info {
            display: flex;
            align-items: center;
        }
        
        .topbar-info i {
            font-size: 1.5rem;
            color: var(--primary-color);
            margin-right: 10px;
        }
        
        .content-wrapper {
            padding: 30px;
        }
        
        .page-header {
            margin-bottom: 30px;
        }
        
        .page-header h2 {
            font-weight: 700;
            color: var(--secondary-color);
            margin-bottom: 5px;
        }
        
        .page-header p {
            color: #666;
        }
        
        /* Card Styles */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
        }
        
        .card-header {
            background-color: white;
            border-bottom: 1px solid #eee;
            padding: 20px;
            font-weight: 600;
            color: var(--secondary-color);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .card-header i {
            margin-right: 10px;
            color: var(--primary-color);
        }
        
        .card-body {
            padding: 25px;
        }
        
        /* Form Styles */
        .form-label {
            font-weight: 500;
            color: #555;
            margin-bottom: 8px;
        }
        
        .form-control, .form-select {
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(42, 157, 143, 0.25);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 10px 25px;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .btn-primary:hover {
            background-color: #238277;
            border-color: #238277;
            transform: translateY(-2px);
        }
        
        .btn-success {
            background-color: var(--success-color);
            border-color: var(--success-color);
        }
        
        .btn-warning {
            background-color: var(--warning-color);
            border-color: var(--warning-color);
            color: white;
        }
        
        .btn-danger {
            background-color: var(--danger-color);
            border-color: var(--danger-color);
        }
        
        /* Table Styles */
        .table-container {
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        
        .table {
            margin-bottom: 0;
        }
        
        .table th {
            font-weight: 600;
            color: var(--secondary-color);
            background-color: #f8f9fa;
            border-top: none;
            padding: 15px;
        }
        
        .table td {
            padding: 15px;
            vertical-align: middle;
        }
        
        .badge {
            padding: 5px 12px;
            font-weight: 500;
        }
        
        .badge-success {
            background-color: var(--success-color);
        }
        
        .badge-warning {
            background-color: var(--warning-color);
        }
        
        .badge-danger {
            background-color: var(--danger-color);
        }
        
        .badge-info {
            background-color: #4cc9f0;
        }
        
        /* Product Image Upload */
        .image-upload {
            border: 2px dashed #ddd;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
            background-color: #f8f9fa;
        }
        
        .image-upload:hover {
            border-color: var(--primary-color);
            background-color: rgba(42, 157, 143, 0.05);
        }
        
        .image-preview {
            width: 100%;
            max-height: 200px;
            object-fit: contain;
            border-radius: 8px;
            display: none;
            margin-top: 15px;
        }
        
        /* Theme Color Selector */
        .theme-colors {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 15px;
        }
        
        .theme-color {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            cursor: pointer;
            border: 3px solid transparent;
            transition: all 0.3s;
        }
        
        .theme-color:hover {
            transform: scale(1.1);
        }
        
        .theme-color.active {
            border-color: #333;
            transform: scale(1.1);
        }
        
        /* Alert */
        .alert {
            border-radius: 10px;
            border: none;
            margin-bottom: 20px;
        }
        
        .alert-success {
            background-color: rgba(42, 157, 143, 0.1);
            color: var(--success-color);
            border-left: 4px solid var(--success-color);
        }
        
        .alert-info {
            background-color: rgba(76, 201, 240, 0.1);
            color: #4cc9f0;
            border-left: 4px solid #4cc9f0;
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .sidebar {
                margin-left: -250px;
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .sidebar.active {
                margin-left: 0;
            }
            
            .toggle-sidebar {
                display: block !important;
            }
        }
        
        .toggle-sidebar {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--secondary-color);
        }
        
        /* Hidden Content */
        .content-section {
            display: none;
        }
        
        .content-section.active {
            display: block;
            animation: fadeIn 0.5s;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        /* Product Grid */
        .product-card {
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
            margin-bottom: 25px;
            height: 100%;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
        }
        
        .product-img {
            height: 180px;
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        
        .product-img img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }
        
        .product-info {
            padding: 20px;
        }
        
        .product-name {
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--secondary-color);
        }
        
        .product-price {
            font-weight: 700;
            color: var(--primary-color);
            font-size: 1.2rem;
            margin-bottom: 15px;
        }
        
        /* Modal */
        .modal-header {
            background-color: var(--secondary-color);
            color: white;
        }
        
        .modal-footer {
            border-top: 1px solid #eee;
        }
        
        /* Status Indicator */
        .status-indicator {
            display: inline-block;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-right: 8px;
        }
        
        .status-active {
            background-color: var(--success-color);
        }
        
        .status-inactive {
            background-color: var(--danger-color);
        }
    </style>
</head>
<body>
    <!-- Admin Panel -->
    <div class="admin-panel">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <h3><i class="fas fa-cocktail"></i> Pasifik Drink</h3>
                <small class="text-muted">Admin Panel</small>
            </div>
            
            <div class="sidebar-menu">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" data-section="dashboard">
                            <i class="fas fa-home"></i> Dashboard
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
        </div>
        
        <!-- Main Content -->
        <div class="main-content">
            <!-- Topbar -->
            <div class="topbar">
                <button class="toggle-sidebar" id="toggleSidebar">
                    <i class="fas fa-bars"></i>
                </button>
                
                <div class="topbar-info">
                    <i class="fas fa-user-shield"></i>
                    <div>
                        <h6 class="mb-0">Admin Pasifik Drink</h6>
                        <small class="text-muted">Panel Admin</small>
                    </div>
                </div>
            </div>
            
            <!-- Content Wrapper -->
            <div class="content-wrapper">
                <!-- Dashboard Section -->
                <div class="content-section active" id="dashboard-section">
                    <div class="page-header">
                        <h2>Dashboard Admin</h2>
                        <p>Selamat datang di panel admin Pasifik Drink</p>
                    </div>
                    
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle"></i> Anda dapat mengelola produk, promo, dan pengaturan toko minuman dari panel ini.
                    </div>
                    
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    <i class="fas fa-wine-bottle fa-3x mb-3" style="color: var(--primary-color);"></i>
                                    <h3 id="totalProduk">12</h3>
                                    <p class="text-muted">Total Produk</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    <i class="fas fa-tag fa-3x mb-3" style="color: var(--warning-color);"></i>
                                    <h3 id="totalPromo">5</h3>
                                    <p class="text-muted">Promo Aktif</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    <i class="fas fa-shopping-cart fa-3x mb-3" style="color: var(--success-color);"></i>
                                    <h3 id="totalPesanan">24</h3>
                                    <p class="text-muted">Pesanan Hari Ini</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    <i class="fas fa-dollar-sign fa-3x mb-3" style="color: var(--danger-color);"></i>
                                    <h3 id="totalPendapatan">2.5JT</h3>
                                    <p class="text-muted">Pendapatan Bulan Ini</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mt-4">
                        <div class="card-header">
                            <i class="fas fa-history"></i> Aktivitas Terbaru
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <i class="fas fa-plus-circle text-success me-2"></i>
                                    Produk "Matcha Latte" ditambahkan
                                    <small class="text-muted float-end">10 menit lalu</small>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-edit text-warning me-2"></i>
                                    Promo "Weekend30" diperbarui
                                    <small class="text-muted float-end">1 jam lalu</small>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-cog text-primary me-2"></i>
                                    Pengaturan katalog diubah
                                    <small class="text-muted float-end">2 jam lalu</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Produk Section -->
                <div class="content-section" id="produk-section">
                    <div class="page-header">
                        <h2>Menu Produk</h2>
                        <p>Kelola daftar minuman Pasifik Drink</p>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-plus-circle"></i> Tambah Produk Baru
                        </div>
                        <div class="card-body">
                            <form id="formTambahProduk">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Nama Minuman</label>
                                        <input type="text" class="form-control" id="namaProduk" placeholder="Contoh: Blue Ocean" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Kategori</label>
                                        <select class="form-select" id="kategoriProduk" required>
                                            <option value="">Pilih Kategori</option>
                                            <option value="kopi">Kopi</option>
                                            <option value="teh">Teh</option>
                                            <option value="frappe">Frappe</option>
                                            <option value="jus">Jus</option>
                                            <option value="mocktail">Mocktail</option>
                                            <option value="milkshake">Milkshake</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Harga (Rp)</label>
                                        <input type="number" class="form-control" id="hargaProduk" placeholder="35000" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Stok Awal</label>
                                        <input type="number" class="form-control" id="stokProduk" placeholder="50" required>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsiProduk" rows="3" placeholder="Deskripsi minuman..."></textarea>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">Upload Foto Minuman</label>
                                    <div class="image-upload" id="imageUpload">
                                        <i class="fas fa-cloud-upload-alt fa-3x mb-3" style="color: #ccc;"></i>
                                        <p>Klik untuk upload foto</p>
                                        <input type="file" id="fileInput" accept="image/*" style="display: none;">
                                    </div>
                                    <img id="imagePreview" class="image-preview" src="" alt="Preview">
                                </div>
                                
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Simpan Produk
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-list"></i> Daftar Produk
                            <button class="btn btn-sm btn-primary" id="refreshProduk">
                                <i class="fas fa-sync"></i> Refresh
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Kategori</th>
                                            <th>Harga</th>
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
                        </div>
                    </div>
                </div>
                
                <!-- Promo Section -->
                <div class="content-section" id="promo-section">
                    <div class="page-header">
                        <h2>Menu Promo</h2>
                        <p>Buat dan kelola promo untuk minuman</p>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-tag"></i> Buat Promo Baru
                        </div>
                        <div class="card-body">
                            <form id="formBuatPromo">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Nama Promo</label>
                                        <input type="text" class="form-control" id="namaPromo" placeholder="Contoh: Weekend Special" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Kode Promo</label>
                                        <input type="text" class="form-control" id="kodePromo" placeholder="WEEKEND30" required>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Jenis Promo</label>
                                        <select class="form-select" id="jenisPromo" required>
                                            <option value="">Pilih Jenis</option>
                                            <option value="persen">Diskon Persentase (%)</option>
                                            <option value="nominal">Potongan Harga (Rp)</option>
                                            <option value="buy1get1">Buy 1 Get 1</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Nilai Promo</label>
                                        <input type="text" class="form-control" id="nilaiPromo" placeholder="30 atau 20000" required>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Tanggal Mulai</label>
                                        <input type="date" class="form-control" id="mulaiPromo" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Tanggal Selesai</label>
                                        <input type="date" class="form-control" id="selesaiPromo" required>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">Produk yang Dipromokan</label>
                                    <select class="form-select" id="produkPromo" multiple>
                                        <!-- Produk akan diisi oleh JavaScript -->
                                    </select>
                                    <small class="text-muted">Tahan Ctrl/Cmd untuk memilih beberapa produk</small>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-check"></i> Buat Promo
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-tags"></i> Daftar Promo Aktif
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nama Promo</th>
                                            <th>Kode</th>
                                            <th>Jenis</th>
                                            <th>Nilai</th>
                                            <th>Berlaku</th>
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
                
                <!-- Pengaturan Section -->
                <div class="content-section" id="pengaturan-section">
                    <div class="page-header">
                        <h2>Pengaturan Katalog</h2>
                        <p>Ubah tampilan dan pengaturan katalog</p>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-palette"></i> Ubah Warna Tema
                        </div>
                        <div class="card-body">
                            <div class="theme-colors">
                                <div class="theme-color active" style="background-color: #2a9d8f;" data-color="teal"></div>
                                <div class="theme-color" style="background-color: #4361ee;" data-color="blue"></div>
                                <div class="theme-color" style="background-color: #ef476f;" data-color="pink"></div>
                                <div class="theme-color" style="background-color: #ff9e00;" data-color="orange"></div>
                                <div class="theme-color" style="background-color: #7209b7;" data-color="purple"></div>
                                <div class="theme-color" style="background-color: #06d6a0;" data-color="green"></div>
                            </div>
                            <p class="mt-3">Pilih warna tema untuk katalog minuman</p>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-whatsapp"></i> Nomor WhatsApp Tujuan
                        </div>
                        <div class="card-body">
                            <form id="formWhatsApp">
                                <div class="mb-3">
                                    <label class="form-label">Nomor WhatsApp (dengan kode negara)</label>
                                    <input type="text" class="form-control" id="nomorWhatsApp" placeholder="6281234567890" value="6281234567890" required>
                                    <small class="text-muted">Format: 62xxxxxxxxxxx (tanpa + dan spasi)</small>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Pesan Default WhatsApp</label>
                                    <textarea class="form-control" id="pesanWhatsApp" rows="3" placeholder="Halo, saya ingin memesan...">Halo, saya ingin memesan minuman dari Pasifik Drink</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Simpan Pengaturan WhatsApp
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-link"></i> Link Katalog
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Link Katalog Publik</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="linkKatalog" value="https://pasifikdrink.com/katalog" readonly>
                                    <button class="btn btn-outline-primary" type="button" id="copyLink">
                                        <i class="fas fa-copy"></i> Salin
                                    </button>
                                </div>
                                <small class="text-muted">Link ini dapat dibagikan ke pelanggan</small>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Generate Link Baru</label>
                                <button class="btn btn-warning" id="generateLink">
                                    <i class="fas fa-sync"></i> Generate Link Baru
                                </button>
                                <small class="text-muted">Link baru akan menggantikan link sebelumnya</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Katalog Section -->
                <div class="content-section" id="katalog-section">
                    <div class="page-header">
                        <h2>Preview Katalog</h2>
                        <p>Pratinjau tampilan katalog untuk pelanggan</p>
                    </div>
                    
                    <div class="alert alert-info">
                        <i class="fas fa-eye"></i> Ini adalah preview bagaimana katalog akan terlihat oleh pelanggan
                    </div>
                    
                    <div class="card">
                        <div class="card-body">
                            <div class="row" id="katalogPreview">
                                <!-- Produk akan ditampilkan di sini -->
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mt-4">
                        <div class="card-header">
                            <i class="fas fa-share-alt"></i> Bagikan Katalog
                        </div>
                        <div class="card-body text-center">
                            <h5>Bagikan katalog ke pelanggan</h5>
                            <p>Salin link di bawah ini atau bagikan melalui:</p>
                            
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="shareLink" value="https://pasifikdrink.com/katalog/abc123" readonly>
                                    <button class="btn btn-primary" type="button" id="copyShareLink">
                                        <i class="fas fa-copy"></i> Salin Link
                                    </button>
                                </div>
                            </div>
                            
                            <div class="d-flex justify-content-center gap-3">
                                <button class="btn btn-success" id="shareWhatsApp">
                                    <i class="fab fa-whatsapp"></i> WhatsApp
                                </button>
                                <button class="btn btn-primary" id="shareFacebook">
                                    <i class="fab fa-facebook"></i> Facebook
                                </button>
                                <button class="btn btn-info" id="shareTelegram">
                                    <i class="fab fa-telegram"></i> Telegram
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Data penyimpanan lokal
        let produkData = JSON.parse(localStorage.getItem('produkData')) || [
            { id: 1, nama: "Blue Ocean", kategori: "mocktail", harga: 42000, stok: 24, deskripsi: "Minuman mocktail dengan rasa buah-buahan segar", foto: null, status: "aktif" },
            { id: 2, nama: "Caramel Macchiato", kategori: "kopi", harga: 35000, stok: 18, deskripsi: "Kopi dengan caramel dan susu", foto: null, status: "aktif" },
            { id: 3, nama: "Tropical Punch", kategori: "jus", harga: 38000, stok: 32, deskripsi: "Jus campuran buah tropis", foto: null, status: "aktif" },
            { id: 4, nama: "Matcha Latte", kategori: "teh", harga: 32000, stok: 15, deskripsi: "Matcha dengan susu steamed", foto: null, status: "aktif" }
        ];
        
        let promoData = JSON.parse(localStorage.getItem('promoData')) || [
            { id: 1, nama: "Weekend Special", kode: "WEEKEND30", jenis: "persen", nilai: 30, mulai: "2023-10-01", selesai: "2023-12-31", produk: [1, 3], status: "aktif" },
            { id: 2, nama: "Buy 1 Get 1", kode: "BOGO", jenis: "buy1get1", nilai: "1", mulai: "2023-11-01", selesai: "2023-11-30", produk: [2], status: "aktif" }
        ];
        
        let pengaturanData = JSON.parse(localStorage.getItem('pengaturanData')) || {
            warnaTema: "teal",
            nomorWhatsApp: "6281234567890",
            pesanWhatsApp: "Halo, saya ingin memesan minuman dari Pasifik Drink",
            linkKatalog: "https://pasifikdrink.com/katalog/abc123"
        };
        
        // Simpan data ke localStorage
        function simpanData() {
            localStorage.setItem('produkData', JSON.stringify(produkData));
            localStorage.setItem('promoData', JSON.stringify(promoData));
            localStorage.setItem('pengaturanData', JSON.stringify(pengaturanData));
            updateDashboard();
        }
        
        // Update dashboard stats
        function updateDashboard() {
            document.getElementById('totalProduk').textContent = produkData.length;
            document.getElementById('totalPromo').textContent = promoData.filter(p => p.status === 'aktif').length;
            document.getElementById('totalPesanan').textContent = Math.floor(Math.random() * 50) + 10; // Random untuk demo
            document.getElementById('totalPendapatan').textContent = "2.5JT";
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
                
                // If produk section, load produk list
                if (sectionId === 'produk-section') {
                    loadProdukTable();
                    loadProdukOptions();
                }
                
                // If promo section, load promo list
                if (sectionId === 'promo-section') {
                    loadPromoTable();
                    loadProdukOptionsPromo();
                }
                
                // If katalog section, load katalog preview
                if (sectionId === 'katalog-section') {
                    loadKatalogPreview();
                }
                
                // Close sidebar on mobile
                if (window.innerWidth < 992) {
                    document.querySelector('.sidebar').classList.remove('active');
                }
            });
        });
        
        // Toggle sidebar for mobile
        document.getElementById('toggleSidebar').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
        });
        
        // Image upload
        document.getElementById('imageUpload').addEventListener('click', function() {
            document.getElementById('fileInput').click();
        });
        
        document.getElementById('fileInput').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('imagePreview');
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        });
        
        // Tambah produk
        document.getElementById('formTambahProduk').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const newProduk = {
                id: produkData.length > 0 ? Math.max(...produkData.map(p => p.id)) + 1 : 1,
                nama: document.getElementById('namaProduk').value,
                kategori: document.getElementById('kategoriProduk').value,
                harga: parseInt(document.getElementById('hargaProduk').value),
                stok: parseInt(document.getElementById('stokProduk').value),
                deskripsi: document.getElementById('deskripsiProduk').value,
                foto: document.getElementById('imagePreview').src || null,
                status: 'aktif'
            };
            
            produkData.push(newProduk);
            simpanData();
            
            // Reset form
            this.reset();
            document.getElementById('imagePreview').style.display = 'none';
            document.getElementById('imagePreview').src = '';
            
            // Show success alert
            showAlert('Produk berhasil ditambahkan!', 'success');
            
            // Refresh produk table
            loadProdukTable();
            loadProdukOptions();
            loadKatalogPreview();
        });
        
        // Load produk table
        function loadProdukTable() {
            const tableBody = document.getElementById('produkTableBody');
            tableBody.innerHTML = '';
            
            produkData.forEach((produk, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${index + 1}</td>
                    <td>${produk.nama}</td>
                    <td><span class="badge badge-info">${produk.kategori}</span></td>
                    <td>Rp ${produk.harga.toLocaleString()}</td>
                    <td>${produk.stok}</td>
                    <td>
                        <span class="status-indicator ${produk.status === 'aktif' ? 'status-active' : 'status-inactive'}"></span>
                        ${produk.status === 'aktif' ? 'Aktif' : 'Nonaktif'}
                    </td>
                    <td>
                        <button class="btn btn-sm btn-warning me-1" onclick="editProduk(${produk.id})">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-sm btn-danger" onclick="hapusProduk(${produk.id})">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                `;
                tableBody.appendChild(row);
            });
        }
        
        // Load produk options for promo
        function loadProdukOptions() {
            const selectProduk = document.getElementById('produkPromo');
            selectProduk.innerHTML = '<option value="all">Semua Produk</option>';
            
            produkData.forEach(produk => {
                if (produk.status === 'aktif') {
                    const option = document.createElement('option');
                    option.value = produk.id;
                    option.textContent = `${produk.nama} - Rp ${produk.harga.toLocaleString()}`;
                    selectProduk.appendChild(option);
                }
            });
        }
        
        // Load produk options for promo (separate function for promo section)
        function loadProdukOptionsPromo() {
            const selectProduk = document.getElementById('produkPromo');
            if (selectProduk) {
                selectProduk.innerHTML = '<option value="all">Semua Produk</option>';
                
                produkData.forEach(produk => {
                    if (produk.status === 'aktif') {
                        const option = document.createElement('option');
                        option.value = produk.id;
                        option.textContent = `${produk.nama} - Rp ${produk.harga.toLocaleString()}`;
                        selectProduk.appendChild(option);
                    }
                });
            }
        }
        
        // Edit produk
        function editProduk(id) {
            const produk = produkData.find(p => p.id === id);
            if (produk) {
                // Untuk sederhana, kita akan hapus dan tambah baru dengan modal edit
                if (confirm(`Edit produk "${produk.nama}"?`)) {
                    const namaBaru = prompt("Nama baru:", produk.nama);
                    if (namaBaru) {
                        produk.nama = namaBaru;
                        produk.harga = parseInt(prompt("Harga baru:", produk.harga)) || produk.harga;
                        produk.stok = parseInt(prompt("Stok baru:", produk.stok)) || produk.stok;
                        
                        simpanData();
                        loadProdukTable();
                        loadProdukOptions();
                        loadKatalogPreview();
                        showAlert('Produk berhasil diubah!', 'success');
                    }
                }
            }
        }
        
        // Hapus produk
        function hapusProduk(id) {
            const produk = produkData.find(p => p.id === id);
            if (produk && confirm(`Hapus produk "${produk.nama}"?`)) {
                produkData = produkData.filter(p => p.id !== id);
                simpanData();
                loadProdukTable();
                loadProdukOptions();
                loadKatalogPreview();
                showAlert('Produk berhasil dihapus!', 'success');
            }
        }
        
        // Buat promo
        document.getElementById('formBuatPromo').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const selectedProduk = Array.from(document.getElementById('produkPromo').selectedOptions)
                .map(option => option.value);
            
            const newPromo = {
                id: promoData.length > 0 ? Math.max(...promoData.map(p => p.id)) + 1 : 1,
                nama: document.getElementById('namaPromo').value,
                kode: document.getElementById('kodePromo').value.toUpperCase(),
                jenis: document.getElementById('jenisPromo').value,
                nilai: document.getElementById('nilaiPromo').value,
                mulai: document.getElementById('mulaiPromo').value,
                selesai: document.getElementById('selesaiPromo').value,
                produk: selectedProduk.includes('all') ? 'all' : selectedProduk.map(id => parseInt(id)),
                status: 'aktif'
            };
            
            promoData.push(newPromo);
            simpanData();
            
            // Reset form
            this.reset();
            
            // Show success alert
            showAlert('Promo berhasil dibuat!', 'success');
            
            // Refresh promo table
            loadPromoTable();
        });
        
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
                    <td>${jenisText}</td>
                    <td>${nilaiText}</td>
                    <td>${promo.mulai} s/d ${promo.selesai}</td>
                    <td><span class="badge ${statusClass}">${statusText}</span></td>
                    <td>
                        <button class="btn btn-sm btn-warning me-1" onclick="editPromo(${promo.id})">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-sm btn-danger" onclick="hapusPromo(${promo.id})">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                `;
                tableBody.appendChild(row);
            });
        }
        
        // Edit promo
        function editPromo(id) {
            const promo = promoData.find(p => p.id === id);
            if (promo) {
                const action = prompt("Ubah promo:\n1. Nonaktifkan\n2. Hapus\n\nMasukkan angka:");
                if (action === '1') {
                    promo.status = promo.status === 'aktif' ? 'nonaktif' : 'aktif';
                    simpanData();
                    loadPromoTable();
                    showAlert('Status promo berhasil diubah!', 'success');
                } else if (action === '2') {
                    hapusPromo(id);
                }
            }
        }
        
        // Hapus promo
        function hapusPromo(id) {
            const promo = promoData.find(p => p.id === id);
            if (promo && confirm(`Hapus promo "${promo.nama}"?`)) {
                promoData = promoData.filter(p => p.id !== id);
                simpanData();
                loadPromoTable();
                showAlert('Promo berhasil dihapus!', 'success');
            }
        }
        
        // Ubah warna tema
        document.querySelectorAll('.theme-color').forEach(color => {
            color.addEventListener('click', function() {
                document.querySelectorAll('.theme-color').forEach(c => c.classList.remove('active'));
                this.classList.add('active');
                
                const colorValue = this.getAttribute('data-color');
                pengaturanData.warnaTema = colorValue;
                simpanData();
                
                showAlert('Warna tema berhasil diubah!', 'success');
            });
        });
        
        // Simpan pengaturan WhatsApp
        document.getElementById('formWhatsApp').addEventListener('submit', function(e) {
            e.preventDefault();
            
            pengaturanData.nomorWhatsApp = document.getElementById('nomorWhatsApp').value;
            pengaturanData.pesanWhatsApp = document.getElementById('pesanWhatsApp').value;
            simpanData();
            
            showAlert('Pengaturan WhatsApp berhasil disimpan!', 'success');
        });
        
        // Copy link katalog
        document.getElementById('copyLink').addEventListener('click', function() {
            const linkInput = document.getElementById('linkKatalog');
            linkInput.select();
            document.execCommand('copy');
            showAlert('Link berhasil disalin!', 'success');
        });
        
        // Generate link baru
        document.getElementById('generateLink').addEventListener('click', function() {
            const randomId = Math.random().toString(36).substring(2, 10);
            const newLink = `https://pasifikdrink.com/katalog/${randomId}`;
            
            document.getElementById('linkKatalog').value = newLink;
            pengaturanData.linkKatalog = newLink;
            simpanData();
            
            showAlert('Link baru berhasil digenerate!', 'success');
        });
        
        // Load katalog preview
        function loadKatalogPreview() {
            const katalogContainer = document.getElementById('katalogPreview');
            katalogContainer.innerHTML = '';
            
            produkData.filter(p => p.status === 'aktif').forEach(produk => {
                const col = document.createElement('div');
                col.className = 'col-md-4';
                
                // Cek apakah produk ada promo
                let promoInfo = '';
                const promoAktif = promoData.find(promo => 
                    promo.status === 'aktif' && 
                    (promo.produk === 'all' || promo.produk.includes(produk.id))
                );
                
                if (promoAktif) {
                    let potongan = '';
                    if (promoAktif.jenis === 'persen') {
                        potongan = `${promoAktif.nilai}%`;
                    } else if (promoAktif.jenis === 'nominal') {
                        potongan = `Rp ${parseInt(promoAktif.nilai).toLocaleString()}`;
                    } else if (promoAktif.jenis === 'buy1get1') {
                        potongan = 'Buy 1 Get 1';
                    }
                    promoInfo = `<div class="badge bg-danger mb-2">PROMO ${potongan}</div>`;
                }
                
                col.innerHTML = `
                    <div class="product-card">
                        <div class="product-img" style="background: linear-gradient(45deg, #f8f9fa, #e9ecef);">
                            ${produk.foto ? 
                                `<img src="${produk.foto}" alt="${produk.nama}">` : 
                                `<i class="fas fa-${produk.kategori === 'kopi' ? 'coffee' : produk.kategori === 'teh' ? 'mug-hot' : 'glass-whiskey'} fa-3x" style="color: #ccc;"></i>`
                            }
                        </div>
                        <div class="product-info">
                            ${promoInfo}
                            <h5 class="product-name">${produk.nama}</h5>
                            <p class="text-muted small">${produk.deskripsi || 'Minuman segar dari Pasifik Drink'}</p>
                            <div class="product-price">Rp ${produk.harga.toLocaleString()}</div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge ${produk.stok > 10 ? 'badge-success' : 'badge-warning'}">
                                    Stok: ${produk.stok}
                                </span>
                                <button class="btn btn-sm btn-primary" onclick="pesanProduk(${produk.id})">
                                    <i class="fab fa-whatsapp"></i> Pesan
                                </button>
                            </div>
                        </div>
                    </div>
                `;
                katalogContainer.appendChild(col);
            });
        }
        
        // Pesan produk via WhatsApp
        function pesanProduk(id) {
            const produk = produkData.find(p => p.id === id);
            if (produk) {
                const nomor = pengaturanData.nomorWhatsApp;
                const pesan = encodeURIComponent(`${pengaturanData.pesanWhatsApp}\n\nSaya ingin memesan:\n${produk.nama} - Rp ${produk.harga.toLocaleString()}`);
                const url = `https://wa.me/${nomor}?text=${pesan}`;
                window.open(url, '_blank');
            }
        }
        
        // Share link
        document.getElementById('copyShareLink').addEventListener('click', function() {
            const linkInput = document.getElementById('shareLink');
            linkInput.select();
            document.execCommand('copy');
            showAlert('Link berhasil disalin!', 'success');
        });
        
        // Share via WhatsApp
        document.getElementById('shareWhatsApp').addEventListener('click', function() {
            const nomor = pengaturanData.nomorWhatsApp;
            const pesan = encodeURIComponent(`Lihat katalog minuman Pasifik Drink di: ${pengaturanData.linkKatalog}`);
            const url = `https://wa.me/${nomor}?text=${pesan}`;
            window.open(url, '_blank');
        });
        
        // Share via Facebook
        document.getElementById('shareFacebook').addEventListener('click', function() {
            const url = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(pengaturanData.linkKatalog)}`;
            window.open(url, '_blank');
        });
        
        // Share via Telegram
        document.getElementById('shareTelegram').addEventListener('click', function() {
            const pesan = encodeURIComponent(`Katalog Pasifik Drink: ${pengaturanData.linkKatalog}`);
            const url = `https://t.me/share/url?url=${encodeURIComponent(pengaturanData.linkKatalog)}&text=${pesan}`;
            window.open(url, '_blank');
        });
        
        // Show alert
        function showAlert(message, type) {
            const alertDiv = document.createElement('div');
            alertDiv.className = `alert alert-${type} alert-dismissible fade show`;
            alertDiv.innerHTML = `
                <i class="fas fa-${type === 'success' ? 'check-circle' : 'info-circle'} me-2"></i>
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            `;
            
            const contentWrapper = document.querySelector('.content-wrapper');
            contentWrapper.insertBefore(alertDiv, contentWrapper.firstChild);
            
            setTimeout(() => {
                if (alertDiv.parentNode) {
                    alertDiv.remove();
                }
            }, 5000);
        }
        
        // Refresh produk
        document.getElementById('refreshProduk').addEventListener('click', function() {
            loadProdukTable();
            showAlert('Daftar produk diperbarui!', 'success');
        });
        
        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            // Set tanggal default untuk promo
            const today = new Date();
            const nextWeek = new Date();
            nextWeek.setDate(today.getDate() + 7);
            
            document.getElementById('mulaiPromo').value = today.toISOString().split('T')[0];
            document.getElementById('selesaiPromo').value = nextWeek.toISOString().split('T')[0];
            
            // Load initial data
            updateDashboard();
            loadProdukTable();
            loadProdukOptions();
            loadPromoTable();
            
            // Set warna tema aktif
            const activeColor = pengaturanData.warnaTema || 'teal';
            document.querySelectorAll('.theme-color').forEach(color => {
                if (color.getAttribute('data-color') === activeColor) {
                    color.classList.add('active');
                }
            });
            
            // Set nilai pengaturan
            document.getElementById('nomorWhatsApp').value = pengaturanData.nomorWhatsApp;
            document.getElementById('pesanWhatsApp').value = pengaturanData.pesanWhatsApp;
            document.getElementById('linkKatalog').value = pengaturanData.linkKatalog;
            document.getElementById('shareLink').value = pengaturanData.linkKatalog;
        });
    </script>
</body>
</html>