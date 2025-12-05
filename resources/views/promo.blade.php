<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo - MinumanKu</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Reset & Base Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
    line-height: 1.6;
    color: #1f2937;
    background-color: #f9fafb;
}

.container {
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 1rem;
}

/* Utility Classes */
.desktop-only {
    display: none;
}

@media (min-width: 768px) {
    .desktop-only {
        display: block;
    }
    .mobile-only {
        display: none;
    }
}

.text-center {
    text-align: center;
}

/* Navbar */
.navbar {
    background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
    color: white;
    position: sticky;
    top: 0;
    z-index: 1000;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.nav-wrapper {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 64px;
}

.logo {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: white;
    text-decoration: none;
    font-size: 1.25rem;
    font-weight: 600;
}

.logo i {
    font-size: 2rem;
}

.nav-links {
    display: flex;
    gap: 2rem;
}

.nav-link {
    color: white;
    text-decoration: none;
    transition: color 0.3s;
}

.nav-link:hover,
.nav-link.active {
    color: #bfdbfe;
}

.search-bar {
    display: flex;
    align-items: center;
    background: rgba(30, 58, 138, 0.5);
    border-radius: 0.5rem;
    padding: 0.5rem 1rem;
    flex: 1;
    max-width: 400px;
    margin: 0 2rem;
}

.search-bar i {
    color: #bfdbfe;
    margin-right: 0.5rem;
}

.search-bar input {
    background: transparent;
    border: none;
    outline: none;
    color: white;
    width: 100%;
}

.search-bar input::placeholder {
    color: #bfdbfe;
}

.mobile-menu-btn {
    background: none;
    border: none;
    color: white;
    font-size: 1.5rem;
    cursor: pointer;
    padding: 0.5rem;
}

.mobile-menu {
    display: none;
    padding: 1rem 0;
}

.mobile-menu.active {
    display: block;
}

.mobile-search {
    display: flex;
    align-items: center;
    background: rgba(30, 58, 138, 0.5);
    border-radius: 0.5rem;
    padding: 0.5rem 1rem;
    margin-bottom: 1rem;
}

.mobile-search i {
    color: #bfdbfe;
    margin-right: 0.5rem;
}

.mobile-search input {
    background: transparent;
    border: none;
    outline: none;
    color: white;
    width: 100%;
}

.mobile-search input::placeholder {
    color: #bfdbfe;
}

.mobile-link {
    display: block;
    color: white;
    text-decoration: none;
    padding: 0.5rem 0;
    border-radius: 0.5rem;
    padding-left: 1rem;
}

.mobile-link:hover {
    background: rgba(30, 58, 138, 0.5);
}

/* Hero Banner */
.hero-banner {
    position: relative;
    height: 500px;
    overflow: hidden;
    background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
}

@media (min-width: 768px) {
    .hero-banner {
        height: 600px;
    }
}

.banner-slide {
    position: absolute;
    inset: 0;
    opacity: 0;
    transition: opacity 1s ease-in-out;
}

.banner-slide.active {
    opacity: 1;
}

.banner-image {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
}

.banner-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to right, rgba(30, 58, 138, 0.8), rgba(37, 99, 235, 0.6));
}

.banner-content {
    position: relative;
    height: 100%;
    display: flex;
    align-items: center;
    color: white;
}

.banner-content h1 {
    font-size: 2rem;
    margin-bottom: 1rem;
    line-height: 1.2;
}

@media (min-width: 768px) {
    .banner-content h1 {
        font-size: 3.75rem;
    }
}

.banner-content p {
    font-size: 1.25rem;
    margin-bottom: 2rem;
    color: #bfdbfe;
}

@media (min-width: 768px) {
    .banner-content p {
        font-size: 1.5rem;
    }
}

.banner-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255, 255, 255, 0.3);
    backdrop-filter: blur(4px);
    border: none;
    color: white;
    padding: 0.5rem;
    border-radius: 50%;
    cursor: pointer;
    transition: background 0.3s;
    z-index: 10;
}

.banner-nav:hover {
    background: rgba(255, 255, 255, 0.5);
}

.banner-nav.prev {
    left: 1rem;
}

.banner-nav.next {
    right: 1rem;
}

.banner-nav i {
    font-size: 1.5rem;
    display: block;
}

.banner-indicators {
    position: absolute;
    bottom: 2rem;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 0.5rem;
    z-index: 10;
}

.indicator {
    height: 0.5rem;
    width: 0.5rem;
    background: rgba(255, 255, 255, 0.5);
    border-radius: 9999px;
    cursor: pointer;
    transition: all 0.3s;
}

.indicator.active {
    width: 2rem;
    background: white;
}

/* Buttons */
.btn {
    display: inline-block;
    padding: 0.75rem 2rem;
    border-radius: 0.5rem;
    text-decoration: none;
    transition: all 0.3s;
    font-weight: 500;
}

.btn-primary {
    background: white;
    color: #2563eb;
}

.btn-primary:hover {
    background: #eff6ff;
}

.btn-light {
    background: white;
    color: #2563eb;
}

.btn-light:hover {
    background: #eff6ff;
}

/* Sections */
.section {
    padding: 4rem 0;
}

.section-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 2rem;
}

.section-title {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.section-title i {
    font-size: 2rem;
    color: #2563eb;
}

.section-title h2 {
    font-size: 1.875rem;
}

.section-link {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: #2563eb;
    text-decoration: none;
    transition: color 0.3s;
}

.section-link:hover {
    color: #1d4ed8;
}

/* Product Grid */
.product-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1.5rem;
}

@media (min-width: 640px) {
    .product-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 1024px) {
    .product-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

.product-grid-4 {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1.5rem;
}

@media (min-width: 640px) {
    .product-grid-4 {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 1024px) {
    .product-grid-4 {
        grid-template-columns: repeat(4, 1fr);
    }
}

/* Product Card */
.product-card {
    background: white;
    border-radius: 0.5rem;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
    overflow: hidden;
    text-decoration: none;
    color: inherit;
    transition: box-shadow 0.3s;
    display: block;
}

.product-card:hover {
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
}

.product-image-wrapper {
    position: relative;
    padding-top: 100%;
    overflow: hidden;
}

.product-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s;
}

.product-card:hover .product-image {
    transform: scale(1.1);
}

.product-badge {
    position: absolute;
    top: 0.75rem;
    right: 0.75rem;
    padding: 0.25rem 0.75rem;
    border-radius: 9999px;
    color: white;
    font-size: 0.875rem;
    display: flex;
    align-items: center;
    gap: 0.25rem;
}

.badge-discount {
    background: #ef4444;
}

.badge-featured {
    background: #2563eb;
}

.product-info {
    padding: 1rem;
}

.product-brand {
    font-size: 0.875rem;
    color: #6b7280;
    margin-bottom: 0.25rem;
}

.product-name {
    font-size: 1.125rem;
    margin-bottom: 0.5rem;
    color: #1f2937;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.product-volume {
    font-size: 0.875rem;
    color: #2563eb;
    margin-bottom: 0.5rem;
}

.product-price-wrapper {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.price-original {
    font-size: 0.875rem;
    color: #9ca3af;
    text-decoration: line-through;
}

.price-current {
    font-size: 1.25rem;
    color: #2563eb;
    font-weight: 600;
}

/* Promo Section */
.promo-section {
    background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
    padding: 4rem 0;
    color: white;
}

.promo-header {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.75rem;
    margin-bottom: 1rem;
}

.promo-header i {
    font-size: 2.5rem;
}

.promo-header h2 {
    font-size: 1.875rem;
}

.promo-subtitle {
    text-align: center;
    font-size: 1.25rem;
    color: #bfdbfe;
    margin-bottom: 3rem;
}

.promo-banners {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1.5rem;
    margin-bottom: 2rem;
}

@media (min-width: 768px) {
    .promo-banners {
        grid-template-columns: repeat(2, 1fr);
    }
}

.promo-banner-card {
    position: relative;
    border-radius: 0.5rem;
    overflow: hidden;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    text-decoration: none;
    display: block;
}

.promo-banner-image {
    height: 256px;
    background-size: cover;
    background-position: center;
}

.promo-banner-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
}

.promo-banner-content {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 1.5rem;
    color: white;
}

.promo-discount-badge {
    display: inline-block;
    background: #ef4444;
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 9999px;
    margin-bottom: 0.5rem;
    font-size: 0.875rem;
}

.promo-banner-content h3 {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
}

.promo-banner-content p {
    color: #d1d5db;
    margin-bottom: 0.75rem;
}

.promo-validity-text {
    font-size: 0.875rem;
    color: #d1d5db;
}

/* Categories Section */
.categories-section {
    background: #eff6ff;
    padding: 4rem 0;
}

.categories-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
}

@media (min-width: 768px) {
    .categories-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (min-width: 1024px) {
    .categories-grid {
        grid-template-columns: repeat(6, 1fr);
    }
}

.category-card {
    background: white;
    border-radius: 0.5rem;
    padding: 1.5rem;
    text-align: center;
    text-decoration: none;
    color: inherit;
    transition: box-shadow 0.3s;
}

.category-card:hover {
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.category-icon {
    font-size: 2.5rem;
    margin-bottom: 0.5rem;
}

.category-name {
    color: #1f2937;
}

/* Footer */
.footer {
    background: #1e3a8a;
    color: white;
    margin-top: 4rem;
}

.footer-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 2rem;
    padding: 3rem 0;
}

@media (min-width: 768px) {
    .footer-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

.footer-col h3 {
    font-size: 1.25rem;
    margin-bottom: 1rem;
}

.footer-col p {
    color: #bfdbfe;
    line-height: 1.6;
}

.footer-links {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
}

.footer-links a {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: #bfdbfe;
    text-decoration: none;
    transition: color 0.3s;
}

.footer-links a:hover {
    color: white;
}

.social-links {
    display: flex;
    gap: 1rem;
}

.social-link {
    background: #1e40af;
    width: 3rem;
    height: 3rem;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-decoration: none;
    transition: background 0.3s;
}

.social-link:hover {
    background: #1d4ed8;
}

.social-link i {
    font-size: 1.5rem;
}

.footer-bottom {
    border-top: 1px solid #1e40af;
    padding: 2rem 0;
    text-align: center;
    color: #bfdbfe;
}

/* Page Header */
.page-header {
    background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
    color: white;
    padding: 3rem 0;
}

.page-header h1 {
    font-size: 2.25rem;
    margin-bottom: 0.5rem;
}

.page-header p {
    font-size: 1.25rem;
    color: #bfdbfe;
}

/* Catalog Layout */
.catalog-layout {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1.5rem;
}

@media (min-width: 768px) {
    .catalog-layout {
        grid-template-columns: 300px 1fr;
    }
}

.filter-toggle {
    background: #2563eb;
    color: white;
    border: none;
    padding: 0.75rem 1rem;
    border-radius: 0.5rem;
    cursor: pointer;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    margin-bottom: 1rem;
    font-size: 1rem;
}

.filters-sidebar {
    display: none;
}

@media (min-width: 768px) {
    .filters-sidebar {
        display: block;
    }
}

.filters-sidebar.active {
    display: block;
}

.filter-card {
    background: white;
    border-radius: 0.5rem;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
    padding: 1.5rem;
    margin-bottom: 1.5rem;
}

.filter-card h3 {
    font-size: 1.125rem;
    margin-bottom: 1rem;
}

.filter-options {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.filter-btn {
    width: 100%;
    text-align: left;
    padding: 0.5rem 1rem;
    border-radius: 0.5rem;
    background: #f3f4f6;
    color: #374151;
    border: none;
    cursor: pointer;
    transition: all 0.3s;
}

.filter-btn:hover {
    background: #e5e7eb;
}

.filter-btn.active {
    background: #2563eb;
    color: white;
}

.catalog-info {
    margin-bottom: 1rem;
    color: #6b7280;
}

.product-grid-catalog {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1.5rem;
}

@media (min-width: 640px) {
    .product-grid-catalog {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 1024px) {
    .product-grid-catalog {
        grid-template-columns: repeat(3, 1fr);
    }
}

.no-products {
    text-align: center;
    padding: 4rem 0;
    color: #6b7280;
}

.no-products p {
    font-size: 1.25rem;
}

/* Product Detail */
.breadcrumb {
    margin-bottom: 1.5rem;
    font-size: 0.875rem;
    color: #6b7280;
}

.breadcrumb a {
    color: #2563eb;
    text-decoration: none;
}

.breadcrumb a:hover {
    text-decoration: underline;
}

.breadcrumb span {
    margin: 0 0.5rem;
}

.product-detail-layout {
    display: grid;
    grid-template-columns: 1fr;
    gap: 2rem;
    margin-bottom: 4rem;
}

@media (min-width: 1024px) {
    .product-detail-layout {
        grid-template-columns: 1fr 1fr;
    }
}

.product-gallery {
    position: relative;
}

.main-image-wrapper {
    position: relative;
    background: white;
    border-radius: 0.5rem;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    margin-bottom: 1rem;
}

.main-image-container {
    padding-top: 100%;
    position: relative;
}

.main-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.image-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255, 255, 255, 0.8);
    border: none;
    padding: 0.5rem;
    border-radius: 50%;
    cursor: pointer;
    transition: background 0.3s;
    z-index: 10;
}

.image-nav:hover {
    background: white;
}

.image-nav.prev {
    left: 1rem;
}

.image-nav.next {
    right: 1rem;
}

.image-nav i {
    font-size: 1.5rem;
    color: #374151;
}

.discount-badge-detail {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: #ef4444;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 9999px;
    display: flex;
    align-items: center;
    gap: 0.25rem;
    font-size: 0.875rem;
}

.thumbnails {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 0.5rem;
}

.thumbnail {
    padding-top: 100%;
    position: relative;
    border-radius: 0.5rem;
    overflow: hidden;
    cursor: pointer;
    border: 2px solid transparent;
    transition: border 0.3s;
}

.thumbnail.active {
    border-color: #2563eb;
}

.thumbnail img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.product-info-detail {
    background: white;
    border-radius: 0.5rem;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    padding: 1.5rem;
}

.product-brand-detail {
    color: #2563eb;
    margin-bottom: 0.5rem;
}

.product-name-detail {
    font-size: 1.875rem;
    margin-bottom: 1rem;
    color: #1f2937;
}

.price-section {
    border-top: 1px solid #e5e7eb;
    border-bottom: 1px solid #e5e7eb;
    padding: 1rem 0;
    margin-bottom: 1.5rem;
}

.price-original-detail {
    color: #9ca3af;
    text-decoration: line-through;
    margin-bottom: 0.25rem;
}

.price-current-detail {
    font-size: 2.25rem;
    color: #2563eb;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.savings-badge {
    display: inline-block;
    background: #fee2e2;
    color: #dc2626;
    padding: 0.25rem 0.75rem;
    border-radius: 9999px;
    font-size: 0.875rem;
}

.product-meta {
    margin-bottom: 1.5rem;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 0.5rem;
    color: #374151;
}

.meta-item i {
    color: #2563eb;
}

.order-button {
    width: 100%;
    background: #16a34a;
    color: white;
    border: none;
    padding: 1rem;
    border-radius: 0.5rem;
    font-size: 1.125rem;
    cursor: pointer;
    transition: background 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    text-decoration: none;
    margin-bottom: 1rem;
}

.order-button:hover {
    background: #15803d;
}

.order-note {
    text-align: center;
    font-size: 0.875rem;
    color: #6b7280;
}

.detail-sections {
    display: grid;
    grid-template-columns: 1fr;
    gap: 2rem;
}

@media (min-width: 1024px) {
    .detail-sections {
        grid-template-columns: 2fr 1fr;
    }
}

.detail-card {
    background: white;
    border-radius: 0.5rem;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
    padding: 1.5rem;
    margin-bottom: 1.5rem;
}

.detail-card h2,
.detail-card h3 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    color: #1f2937;
}

.detail-card p {
    color: #374151;
    line-height: 1.6;
    margin-bottom: 1rem;
}

.detail-card ul {
    list-style: none;
}

.detail-card li {
    display: flex;
    align-items: start;
    gap: 0.5rem;
    margin-bottom: 0.5rem;
    color: #374151;
}

.detail-card li .checkmark {
    color: #2563eb;
    margin-top: 0.25rem;
}

.info-sidebar {
    background: #eff6ff;
    border-radius: 0.5rem;
    padding: 1.5rem;
}

.info-item {
    margin-bottom: 0.75rem;
}

.info-label {
    font-size: 0.875rem;
    color: #6b7280;
}

.info-value {
    color: #1f2937;
}

.promo-badge-sidebar {
    background: #fee2e2;
    color: #991b1b;
    padding: 0.75rem;
    border-radius: 0.5rem;
    margin-top: 0.75rem;
}

/* Promo Page */
.promo-banner-slider {
    position: relative;
    height: 400px;
    overflow: hidden;
    background: linear-gradient(135deg, #dc2626 0%, #ea580c 100%);
}

@media (min-width: 768px) {
    .promo-banner-slider {
        height: 500px;
    }
}

.promo-slide {
    position: absolute;
    inset: 0;
    opacity: 0;
    transition: opacity 1s ease-in-out;
}

.promo-slide.active {
    opacity: 1;
}

.banner-overlay-promo {
    position: absolute;
    inset: 0;
    background: linear-gradient(to right, rgba(30, 58, 138, 0.9), rgba(37, 99, 235, 0.7));
}

.promo-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: #ef4444;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 9999px;
    margin-bottom: 0.75rem;
}

.promo-validity {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 1.125rem;
}

.promo-list-section {
    border-bottom: 1px solid #e5e7eb;
    padding-bottom: 4rem;
    margin-bottom: 4rem;
}

.promo-list-section:last-child {
    border-bottom: none;
}

.promo-card-large {
    background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
    border-radius: 0.5rem;
    padding: 2rem;
    margin-bottom: 2rem;
    color: white;
}

.promo-card-header {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

@media (min-width: 768px) {
    .promo-card-header {
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }
}

.promo-card-large h3 {
    font-size: 1.875rem;
    margin-bottom: 0.5rem;
}

.promo-card-large p {
    font-size: 1.125rem;
    color: #bfdbfe;
    margin-bottom: 0.75rem;
}

.promo-products-title {
    font-size: 1.25rem;
    margin-bottom: 1.5rem;
    color: #1f2937;
}

    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-wrapper">
                <a href="index.html" class="logo">
                    <i class="fas fa-shopping-cart"></i>
                    <span>MinumanKu</span>
                </a>

                <div class="nav-links desktop-only">
                    <a href="index.html" class="nav-link">Beranda</a>
                    <a href="catalog.html" class="nav-link">Katalog</a>
                    <a href="promo.html" class="nav-link active">Promo</a>
                </div>

                <div class="search-bar desktop-only">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Cari minuman favorit..." id="searchInput">
                </div>

                <button class="mobile-menu-btn" id="mobileMenuBtn">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div class="mobile-menu" id="mobileMenu">
                <div class="mobile-search">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Cari minuman...">
                </div>
                <a href="index.html" class="mobile-link">Beranda</a>
                <a href="catalog.html" class="mobile-link">Katalog</a>
                <a href="promo.html" class="mobile-link">Promo</a>
            </div>
        </div>
    </nav>

    <!-- Promo Banner Slider -->
    <section class="promo-banner-slider">
        <div class="promo-slide active" id="promoBanner1">
            <div class="banner-image" style="background-image: url('https://images.unsplash.com/photo-1534353436294-0dbd4bdac845?w=1200')">
                <div class="banner-overlay-promo"></div>
            </div>
            <div class="banner-content">
                <div class="container">
                    <div class="promo-badge">
                        <i class="fas fa-tags"></i>
                        <span>Diskon 21%</span>
                    </div>
                    <h1>Flash Sale Minuman Soda</h1>
                    <p>Diskon hingga 21% untuk semua minuman soda! Buruan sebelum kehabisan!</p>
                    <div class="promo-validity">
                        <i class="fas fa-clock"></i>
                        <span>Berlaku hingga 31 Desember 2025</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="promo-slide" id="promoBanner2">
            <div class="banner-image" style="background-image: url('https://images.unsplash.com/photo-1610970881699-44a5587cabec?w=1200')">
                <div class="banner-overlay-promo"></div>
            </div>
            <div class="banner-content">
                <div class="container">
                    <div class="promo-badge">
                        <i class="fas fa-tags"></i>
                        <span>Diskon 18%</span>
                    </div>
                    <h1>Promo Jus Sehat</h1>
                    <p>Beli jus dan dapatkan diskon spesial! Sehat dan hemat!</p>
                    <div class="promo-validity">
                        <i class="fas fa-clock"></i>
                        <span>Berlaku hingga 25 Desember 2025</span>
                    </div>
                </div>
            </div>
        </div>

        <button class="banner-nav prev" id="prevPromoBanner">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="banner-nav next" id="nextPromoBanner">
            <i class="fas fa-chevron-right"></i>
        </button>

        <div class="banner-indicators" id="promoBannerIndicators">
            <!-- Indicators will be generated by JavaScript -->
        </div>
    </section>

    <!-- Promo List -->
    <section class="section">
        <div class="container">
            <div style="margin-bottom: 3rem;">
                <h2 style="margin-bottom: 0.5rem;">Semua Promo Aktif</h2>
                <p style="color: #6b7280;">Jangan lewatkan penawaran terbaik kami!</p>
            </div>

            <div id="promoList">
                <!-- Promo sections will be loaded by JavaScript -->
            </div>

            <!-- All Promo Products -->
            <div style="margin-top: 4rem;">
                <h3 style="margin-bottom: 1.5rem;">Semua Produk Promo</h3>
                <div class="product-grid product-grid-4" id="allPromoProducts">
                    <!-- Products will be loaded by JavaScript -->
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>MinumanKu</h3>
                    <p>Toko minuman terpercaya dengan berbagai pilihan produk berkualitas untuk keluarga Indonesia.</p>
                </div>

                <div class="footer-col">
                    <h3>Kontak Kami</h3>
                    <div class="footer-links">
                        <a href="https://wa.me/6281234567890" target="_blank">
                            <i class="fas fa-phone"></i>
                            WhatsApp: +62 812-3456-7890
                        </a>
                        <a href="https://instagram.com/minumanku" target="_blank">
                            <i class="fab fa-instagram"></i>
                            @minumanku
                        </a>
                        <a href="https://maps.google.com" target="_blank">
                            <i class="fas fa-map-marker-alt"></i>
                            Lihat Lokasi Toko
                        </a>
                    </div>
                </div>

                <div class="footer-col">
                    <h3>Ikuti Kami</h3>
                    <div class="social-links">
                        <a href="https://instagram.com/minumanku" target="_blank" class="social-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://facebook.com/minumanku" target="_blank" class="social-link">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="https://twitter.com/minumanku" target="_blank" class="social-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                    <div style="margin-top: 1.5rem;">
                        <h4 style="margin-bottom: 0.5rem;">Jam Operasional</h4>
                        <p style="font-size: 0.875rem; color: #93c5fd;">Senin - Sabtu: 08:00 - 20:00</p>
                        <p style="font-size: 0.875rem; color: #93c5fd;">Minggu: 09:00 - 18:00</p>
                    </div>









                    
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2025 MinumanKu. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="assets/js/data.js"></script>
    <script src="assets/js/promo.js"></script>
</body>
</html>
