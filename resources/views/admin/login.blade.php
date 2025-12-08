<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Pasifik Drink</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2a9d8f;
            --secondary-color: #264653;
            --accent-color: #e9c46a;
            --danger-color: #e76f51;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --success-color: #28a745;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body {
            background: linear-gradient(135deg, var(--secondary-color) 0%, #1d3557 100%);
            min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 20px;
        }
        .login-container {
            background-color: white; border-radius: 20px; box-shadow: 0 15px 35px rgba(0,0,0,0.25);
            width: 100%; max-width: 450px; animation: fadeIn 0.8s ease-out; position: relative;
        }
        @keyframes fadeIn { from { opacity:0; transform:translateY(20px);} to { opacity:1; transform:translateY(0);} }
        .login-header {
            background: linear-gradient(to right, var(--primary-color), #21867a);
            color:white; padding:40px 30px 30px; text-align:center; border-radius:0 0 40px 40px; margin-bottom:20px; position:relative; overflow:hidden;
        }
        .login-header h1 { font-weight:700; margin-bottom:10px; font-size:2.2rem; position:relative; z-index:1; }
        .login-header p { opacity:0.9; font-size:1rem; position:relative; z-index:1; }
        .login-body { padding: 0 30px 30px; }
        .form-group { margin-bottom: 25px; position: relative; }
        .form-label { font-weight:500; margin-bottom:8px; color:#555; display:flex; align-items:center; }
        .form-label i { margin-right:8px; color: var(--primary-color); }
        .input-group { position:relative; border-radius:10px; overflow:hidden; border:1px solid #ddd; transition: all 0.3s; }
        .input-group:focus-within { border-color: var(--primary-color); box-shadow:0 0 0 0.25rem rgba(42,157,143,0.25); }
        .input-group-text { background-color:#f8f9fa; border:none; padding:0 15px; color:#666; }
        .form-control { border:none; padding:15px; height:50px; font-size:1rem; }
        .form-control:focus { box-shadow:none; }
        .show-password { position:absolute; right:15px; top:50%; transform:translateY(-50%); background:none; border:none; color:#777; cursor:pointer; z-index:10; }
        .login-btn { background: linear-gradient(to right, var(--primary-color), #21867a); border:none; color:white; font-weight:600; padding:15px; border-radius:10px; width:100%; transition:all 0.3s; height:55px; font-size:1.1rem; margin-top:10px; position:relative; overflow:hidden; }
        .login-btn:hover { transform:translateY(-3px); box-shadow:0 10px 20px rgba(42,157,143,0.3); }
        .login-footer { margin-top:20px; text-align:center; color:#888; font-size:0.85rem; }
        .floating-icon { position:absolute; font-size:3rem; opacity:0.1; color:white; z-index:0; animation:float 6s ease-in-out infinite; }
        @keyframes float { 0%,100%{transform:translateY(0);}50%{transform:translateY(-10px);} }
        .floating-icon:nth-child(1){ top:20px; left:20px; animation-delay:0s; }
        .floating-icon:nth-child(2){ top:40px; right:30px; animation-delay:1s; }
        .floating-icon:nth-child(3){ bottom:30px; left:40px; animation-delay:2s; }
        .floating-icon:nth-child(4){ bottom:50px; right:20px; animation-delay:3s; }
        .alert { border-radius:10px; border:none; margin-bottom:20px; }
        .alert-success { background-color: rgba(40,167,69,0.1); color:#155724; border-left:4px solid var(--success-color);}
        .alert-danger { background-color: rgba(220,53,69,0.1); color:#721c24; border-left:4px solid var(--danger-color);}
    </style>
</head>
<body>

<div class="login-container">
    <div class="floating-icon"><i class="fas fa-wine-bottle"></i></div>
    <div class="floating-icon"><i class="fas fa-user-shield"></i></div>
    <div class="floating-icon"><i class="fas fa-key"></i></div>
    <div class="floating-icon"><i class="fas fa-sign-in-alt"></i></div>

    <div class="login-header">
        <h1><i class="fas fa-crown me-2"></i>Pasifik Drink</h1>
        <p>Admin Panel Premium</p>
    </div>

    <div class="login-body">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <i class="fas fa-check-circle me-2"></i>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show">
            <i class="fas fa-exclamation-circle me-2"></i>
            @foreach($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div class="form-group">
                <label for="email" class="form-label"><i class="fas fa-envelope"></i> Alamat Email</label>
                <div class="input-group">
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="admin@pasifikdrink.com" required>
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="form-label"><i class="fas fa-lock"></i> Kata Sandi</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan kata sandi" required>
                    <button type="button" class="show-password" id="togglePassword"><i class="far fa-eye"></i></button>
                </div>
             </div>

            <button type="submit" class="btn login-btn" id="loginButton">
                <span id="buttonText">Masuk Sekarang</span>
                <span id="buttonSpinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
            </button>
        </form>

        <div class="login-footer">
            <p>&copy; 2025 Pasifik Drink. v1.0.0 Premium</p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');
    
    if (togglePassword) {
        togglePassword.addEventListener('click', () => {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            const icon = togglePassword.querySelector('i');
            icon.classList.toggle('fa-eye');
            icon.classList.toggle('fa-eye-slash');
        });
    }

    // Menampilkan spinner saat form submit
    const loginForm = document.querySelector('form');
    const loginButton = document.getElementById('loginButton');
    const buttonText = document.getElementById('buttonText');
    const buttonSpinner = document.getElementById('buttonSpinner');

    if (loginForm) {
        loginForm.addEventListener('submit', function() {
            buttonText.textContent = 'Memproses...';
            if (buttonSpinner) {
                buttonSpinner.classList.remove('d-none');
            }
            if (loginButton) {
                loginButton.disabled = true;
            }
        });
    }
});
</script>
</body>
</html>