<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Modern | Bootstrap</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3a0ca3;
            --accent-color: #4cc9f0;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --success-color: #06d6a0;
            --warning-color: #ffd166;
            --danger-color: #ef476f;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .login-container {
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
            overflow: hidden;
            width: 100%;
            max-width: 450px;
            animation: fadeIn 0.8s ease-out;
            position: relative;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .login-header {
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 40px 30px 30px;
            text-align: center;
            border-radius: 0 0 40px 40px;
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
        }
        
        .login-header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff" fill-opacity="0.1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
            background-size: cover;
            background-position: center;
        }
        
        .login-header h1 {
            font-weight: 700;
            margin-bottom: 10px;
            font-size: 2.2rem;
            position: relative;
            z-index: 1;
        }
        
        .login-header p {
            opacity: 0.9;
            font-size: 1rem;
            position: relative;
            z-index: 1;
        }
        
        .login-body {
            padding: 0 30px 30px;
        }
        
        .form-group {
            margin-bottom: 25px;
            position: relative;
        }
        
        .form-label {
            font-weight: 500;
            margin-bottom: 8px;
            color: #555;
            display: flex;
            align-items: center;
        }
        
        .form-label i {
            margin-right: 8px;
            color: var(--primary-color);
        }
        
        .input-group {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid #ddd;
            transition: all 0.3s;
        }
        
        .input-group:focus-within {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(67, 97, 238, 0.25);
        }
        
        .input-group-text {
            background-color: #f8f9fa;
            border: none;
            padding: 0 15px;
            color: #666;
        }
        
        .form-control {
            border: none;
            padding: 15px;
            height: 50px;
            font-size: 1rem;
        }
        
        .form-control:focus {
            box-shadow: none;
        }
        
        .show-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #777;
            cursor: pointer;
            z-index: 10;
        }
        
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }
        
        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .forgot-password {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
            font-size: 0.9rem;
        }
        
        .forgot-password:hover {
            color: var(--secondary-color);
            text-decoration: underline;
        }
        
        .login-btn {
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            border: none;
            color: white;
            font-weight: 600;
            padding: 15px;
            border-radius: 10px;
            width: 100%;
            transition: all 0.3s;
            height: 55px;
            font-size: 1.1rem;
            margin-top: 10px;
            position: relative;
            overflow: hidden;
        }
        
        .login-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }
        
        .login-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(67, 97, 238, 0.3);
        }
        
        .login-btn:hover::before {
            left: 100%;
        }
        
        .divider {
            text-align: center;
            margin: 30px 0;
            position: relative;
        }
        
        .divider::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 0;
            width: 45%;
            height: 1px;
            background-color: #ddd;
        }
        
        .divider::after {
            content: "";
            position: absolute;
            top: 50%;
            right: 0;
            width: 45%;
            height: 1px;
            background-color: #ddd;
        }
        
        .social-login {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 30px;
        }
        
        .social-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #ddd;
            background-color: white;
            color: #555;
            transition: all 0.3s;
            font-size: 1.2rem;
        }
        
        .social-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .social-btn.google:hover {
            background-color: #db4437;
            color: white;
            border-color: #db4437;
        }
        
        .social-btn.facebook:hover {
            background-color: #4267B2;
            color: white;
            border-color: #4267B2;
        }
        
        .social-btn.twitter:hover {
            background-color: #1DA1F2;
            color: white;
            border-color: #1DA1F2;
        }
        
        .signup-link {
            text-align: center;
            color: #666;
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }
        
        .signup-link a {
            color: var(--primary-color);
            font-weight: 600;
            text-decoration: none;
        }
        
        .signup-link a:hover {
            text-decoration: underline;
        }
        
        .login-footer {
            margin-top: 20px;
            text-align: center;
            color: #888;
            font-size: 0.85rem;
        }
        
        /* Toast notification */
        .toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
        }
        
        .custom-toast {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            border: none;
            max-width: 350px;
        }
        
        .toast-success {
            border-left: 5px solid var(--success-color);
        }
        
        .toast-error {
            border-left: 5px solid var(--danger-color);
        }
        
        /* Loading spinner */
        .spinner-border {
            width: 1rem;
            height: 1rem;
            border-width: 0.15em;
        }
        
        /* Security indicator */
        .password-strength {
            height: 5px;
            background-color: #eee;
            border-radius: 5px;
            margin-top: 5px;
            overflow: hidden;
        }
        
        .password-strength-fill {
            height: 100%;
            width: 0%;
            border-radius: 5px;
            transition: width 0.3s, background-color 0.3s;
        }
        
        /* Responsive */
        @media (max-width: 576px) {
            .login-container {
                max-width: 100%;
            }
            
            .login-header {
                padding: 30px 20px 25px;
            }
            
            .login-body {
                padding: 0 20px 25px;
            }
            
            .remember-forgot {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
        }
        
        /* Floating animation */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        .floating-icon {
            position: absolute;
            font-size: 3rem;
            opacity: 0.1;
            color: white;
            z-index: 0;
            animation: float 6s ease-in-out infinite;
        }
        
        .floating-icon:nth-child(1) {
            top: 20px;
            left: 20px;
            animation-delay: 0s;
        }
        
        .floating-icon:nth-child(2) {
            top: 40px;
            right: 30px;
            animation-delay: 1s;
        }
        
        .floating-icon:nth-child(3) {
            bottom: 30px;
            left: 40px;
            animation-delay: 2s;
        }
        
        .floating-icon:nth-child(4) {
            bottom: 50px;
            right: 20px;
            animation-delay: 3s;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Floating background icons -->
        <div class="floating-icon">
            <i class="fas fa-lock"></i>
        </div>
        <div class="floating-icon">
            <i class="fas fa-user-shield"></i>
        </div>
        <div class="floating-icon">
            <i class="fas fa-key"></i>
        </div>
        <div class="floating-icon">
            <i class="fas fa-sign-in-alt"></i>
        </div>
        
        <!-- Header Section -->
        <div class="login-header">
            <h1>Selamat Datang</h1>
            <p>Masuk ke akun Anda untuk melanjutkan</p>
        </div>
        
        <!-- Login Form -->
        <div class="login-body">
            <form id="loginForm">
                <div class="form-group">
                    <label for="email" class="form-label">
                        <i class="fas fa-envelope"></i> Alamat Email
                    </label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="email" placeholder="nama@contoh.com" required>
                        <span class="input-group-text">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>
                    <div class="form-text mt-2">
                        <i class="fas fa-info-circle text-primary"></i> Gunakan email yang terdaftar
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password" class="form-label">
                        <i class="fas fa-lock"></i> Kata Sandi
                    </label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" placeholder="Masukkan kata sandi" required>
                        <button type="button" class="show-password" id="togglePassword">
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                    <div class="password-strength mt-2">
                        <div class="password-strength-fill" id="passwordStrength"></div>
                    </div>
                
                </div>
                
                <!-- <div class="remember-forgot">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">
                            Ingat saya
                        </label>
                    </div>
                    <a href="#" class="forgot-password" id="forgotPassword">Lupa kata sandi?</a>
                </div> -->
                
                <button type="submit" class="btn login-btn" id="loginButton">
                    <span id="buttonText">Masuk Sekarang</span>
                    <span id="buttonSpinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                </button>
                
         
            </form>
            
     
        </div>
    </div>
    
    <!-- Toast container untuk notifikasi -->
    <div class="toast-container"></div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // DOM Elements
        const loginForm = document.getElementById('loginForm');
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const loginButton = document.getElementById('loginButton');
        const buttonText = document.getElementById('buttonText');
        const buttonSpinner = document.getElementById('buttonSpinner');
        const forgotPasswordLink = document.getElementById('forgotPassword');
        const signupLink = document.getElementById('signupLink');
        const passwordStrength = document.getElementById('passwordStrength');
        
        // Toggle show/hide password
        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            // Toggle icon
            const icon = this.querySelector('i');
            icon.classList.toggle('fa-eye');
            icon.classList.toggle('fa-eye-slash');
        });
        
        // Check password strength
        passwordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;
            
            if (password.length >= 8) strength += 25;
            if (/[A-Z]/.test(password)) strength += 25;
            if (/[0-9]/.test(password)) strength += 25;
            if (/[^A-Za-z0-9]/.test(password)) strength += 25;
            
            // Update strength indicator
            passwordStrength.style.width = strength + '%';
            
            // Change color based on strength
            if (strength < 50) {
                passwordStrength.style.backgroundColor = '#ef476f'; // Red
            } else if (strength < 75) {
                passwordStrength.style.backgroundColor = '#ffd166'; // Yellow
            } else {
                passwordStrength.style.backgroundColor = '#06d6a0'; // Green
            }
        });
        
        // Show toast notification
        function showToast(message, type = 'success') {
            const toastContainer = document.querySelector('.toast-container');
            
            // Create toast element
            const toastEl = document.createElement('div');
            toastEl.className = `toast custom-toast toast-${type}`;
            toastEl.setAttribute('role', 'alert');
            toastEl.setAttribute('aria-live', 'assertive');
            toastEl.setAttribute('aria-atomic', 'true');
            
            // Toast content
            const toastIcon = type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle';
            const toastHeaderClass = type === 'success' ? 'text-success' : 'text-danger';
            
            toastEl.innerHTML = `
                <div class="toast-header bg-white">
                    <i class="fas ${toastIcon} ${toastHeaderClass} me-2"></i>
                    <strong class="me-auto">${type === 'success' ? 'Sukses' : 'Error'}</strong>
                    <small>baru saja</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body bg-light">
                    ${message}
                </div>
            `;
            
            // Add to container
            toastContainer.appendChild(toastEl);
            
            // Initialize and show toast
            const toast = new bootstrap.Toast(toastEl, {
                autohide: true,
                delay: 5000
            });
            toast.show();
            
            // Remove toast from DOM after it's hidden
            toastEl.addEventListener('hidden.bs.toast', function() {
                toastContainer.removeChild(toastEl);
            });
        }
        
        // Handle form submission
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const rememberMe = document.getElementById('rememberMe').checked;
            
            // Validate email
            if (!validateEmail(email)) {
                showToast('Format email tidak valid!', 'error');
                document.getElementById('email').focus();
                return;
            }
            
            // Validate password
            if (password.length < 8) {
                showToast('Kata sandi minimal 8 karakter!', 'error');
                document.getElementById('password').focus();
                return;
            }
            
            // Show loading state
            buttonText.textContent = 'Memproses...';
            buttonSpinner.classList.remove('d-none');
            loginButton.disabled = true;
            
            // Simulate API call with delay
            setTimeout(() => {
                // For demo purposes, accept any valid email and password >= 8 chars
                showToast('Login berhasil! Mengarahkan ke dashboard...', 'success');
                
                // Simulate redirect after 2 seconds
                setTimeout(() => {
                    // Reset button state
                    buttonText.textContent = 'Masuk Sekarang';
                    buttonSpinner.classList.add('d-none');
                    loginButton.disabled = false;
                    
                    // Show success message
                    alert(`Login berhasil!\nEmail: ${email}\nIngat Saya: ${rememberMe ? 'Ya' : 'Tidak'}`);
                }, 2000);
            }, 1500);
        });
        
        // Forgot password link
        forgotPasswordLink.addEventListener('click', function(e) {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            
            if (!email) {
                showToast('Silakan masukkan email Anda terlebih dahulu.', 'error');
                document.getElementById('email').focus();
                return;
            }
            
            if (!validateEmail(email)) {
                showToast('Format email tidak valid!', 'error');
                return;
            }
            
            showToast(`Instruksi reset kata sandi telah dikirim ke ${email}`, 'success');
        });
        
        // Signup link
        signupLink.addEventListener('click', function(e) {
            e.preventDefault();
            showToast('Mengarahkan ke halaman pendaftaran...', 'success');
            
            // In a real app, you would redirect to signup page
            setTimeout(() => {
                alert('Fitur pendaftaran akan segera tersedia!');
            }, 1000);
        });
        
        // Social login buttons
        document.querySelectorAll('.social-btn').forEach(button => {
            button.addEventListener('click', function() {
                const platform = this.classList.contains('google') ? 'Google' : 
                               this.classList.contains('facebook') ? 'Facebook' : 'Twitter';
                
                showToast(`Mengarahkan ke login ${platform}...`, 'success');
                
                // In a real app, you would implement OAuth flow here
                setTimeout(() => {
                    alert(`Login dengan ${platform} sedang dalam pengembangan!`);
                }, 1000);
            });
        });
        
        // Email validation helper
        function validateEmail(email) {
            const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }
        
        // Input validation on blur
        document.getElementById('email').addEventListener('blur', function() {
            const email = this.value;
            if (email && !validateEmail(email)) {
                this.classList.add('is-invalid');
            } else {
                this.classList.remove('is-invalid');
            }
        });
        
        document.getElementById('password').addEventListener('blur', function() {
            const password = this.value;
            if (password && password.length < 8) {
                this.classList.add('is-invalid');
            } else {
                this.classList.remove('is-invalid');
            }
        });
        
        // Initial demo notification
        window.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                showToast('Selamat datang! Silakan login dengan email dan kata sandi Anda.', 'success');
            }, 1000);
        });
    </script>
</body>
</html>