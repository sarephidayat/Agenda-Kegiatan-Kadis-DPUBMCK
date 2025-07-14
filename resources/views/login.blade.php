<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Dinas Bina Marga dan Cipta Karya Jawa Tengah</title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
    <div class="loading-overlay" id="loadingOverlay">
        <div class="loading-spinner"></div>
    </div>

    <div class="login-container">
        <div class="left-panel">
            <div class="logo-section">
                <div class="logo">
                    <img src="{{ asset('storage/img/logo-jateng.jpg') }}" alt="Logo Dinas Bina Marga dan Cipta Karya">
                </div>
                <div class="welcome-text">
                    <h1>Selamat Datang</h1>
                    <h2>Sistem Informasi</h2>
                    <p>Dinas Bina Marga dan Cipta Karya<br>Provinsi Jawa Tengah</p>
                </div>
            </div>
        </div>
        
        <div class="right-panel">
            <div class="login-header">
                <h3>Masuk ke Sistem</h3>
                <p>Silakan masukkan kredensial Anda untuk mengakses dashboard</p>
            </div>
            
            <div class="success-message" id="successMessage"></div>
            <div class="error-message" id="errorMessage"></div>
            
            <form id="loginForm" method="POST" action="{{ route('login.proses') }}">
                @csrf
                <div class="form-group">
                    <label for="username">Username / NIP</label>
                    <input type="text" id="username" name="username" placeholder="Masukkan username atau NIP" value="{{ old('username') }}" required>
                    @error('username')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="password-container">
                        <input type="password" id="password" name="password" placeholder="Masukkan password" required>
                        <button type="button" class="password-toggle" onclick="togglePassword()">👁️</button>
                    </div>
                    @error('password')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>
                
                <button type="submit" class="login-btn">Masuk ke Dashboard</button>
            </form>
            
            <div class="footer-text">
                © 2024 Dinas Bina Marga dan Cipta Karya Provinsi Jawa Tengah<br>
                Semua hak dilindungi undang-undang
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleButton = document.querySelector('.password-toggle');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleButton.textContent = '🙈';
            } else {
                passwordInput.type = 'password';
                toggleButton.textContent = '👁️';
            }
        }

        function showMessage(message, type = 'success') {
            const successMsg = document.getElementById('successMessage');
            const errorMsg = document.getElementById('errorMessage');
            
            // Hide both messages first
            successMsg.style.display = 'none';
            errorMsg.style.display = 'none';
            
            if (type === 'success') {
                successMsg.textContent = message;
                successMsg.style.display = 'block';
                setTimeout(() => {
                    successMsg.style.display = 'none';
                }, 3000);
            } else {
                errorMsg.textContent = message;
                errorMsg.style.display = 'block';
                setTimeout(() => {
                    errorMsg.style.display = 'none';
                }, 3000);
            }
        }

        // Page load animation
        window.addEventListener('load', function() {
            const container = document.querySelector('.login-container');
            container.style.opacity = '0';
            container.style.transform = 'translateY(30px)';
            
            setTimeout(() => {
                container.style.transition = 'all 0.8s ease';
                container.style.opacity = '1';
                container.style.transform = 'translateY(0)';
            }, 100);
        });

        // Add some interactive effects
        document.querySelectorAll('.form-group input').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'translateY(-2px)';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'translateY(0)';
            });
        });

        // Handle Laravel validation errors
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                showMessage('{{ $error }}', 'error');
            @endforeach
        @endif

        // Handle success messages
        @if (session('success'))
            showMessage('{{ session('success') }}', 'success');
        @endif

        // Handle error messages
        @if (session('error'))
            showMessage('{{ session('error') }}', 'error');
        @endif
    </script>
</body>
</html>