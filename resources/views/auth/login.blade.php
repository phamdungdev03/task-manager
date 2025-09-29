<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row min-vh-100">
            <!-- Left side - Image -->
            <div class="col-lg-6 d-none d-lg-block p-0">
                <div class="image-section">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=1200" alt="Login Image">
                </div>
            </div>

            <!-- Right side - Login Form -->
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <div class="login-wrapper">
                    <div class="login-header">
                        <h1>Chào mừng trở lại</h1>
                        <p>Đăng nhập để tiếp tục</p>
                    </div>

                    <!-- Error Alert - Uncomment when using Laravel Blade -->
                    <!--
                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $errors->first() }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif
                    -->

                    <form method="POST" action="{{ route('login') }}">
                        <!-- @csrf -->
                        
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input 
                                type="email" 
                                class="form-control" 
                                id="email" 
                                name="email" 
                                placeholder="example@email.com"
                                required
                            >
                        </div>

                        <div class="form-group">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input 
                                type="password" 
                                class="form-control" 
                                id="password" 
                                name="password" 
                                placeholder="Nhập mật khẩu của bạn"
                                required
                            >
                        </div>

                        <div class="form-options">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                <label class="form-check-label" for="remember">
                                    Ghi nhớ đăng nhập
                                </label>
                            </div>
                            <a href="/" class="forgot-link">Quên mật khẩu?</a>
                        </div>

                        <button type="submit" class="btn btn-primary btn-login">
                            Đăng nhập
                        </button>
                    </form>

                    <div class="register-link">
                        <p>Chưa có tài khoản? <a href="/">Đăng ký ngay</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<!-- CSS FILE: style.css -->
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
    background-color: #f8f9fa;
}

.image-section {
    height: 100vh;
    overflow: hidden;
    position: relative;
}

.image-section img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.image-section::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(99, 102, 241, 0.8) 0%, rgba(139, 92, 246, 0.8) 100%);
}

.login-wrapper {
    width: 100%;
    max-width: 450px;
    padding: 40px;
}

.login-header {
    margin-bottom: 40px;
}

.login-header h1 {
    font-size: 32px;
    font-weight: 700;
    color: #1a202c;
    margin-bottom: 8px;
}

.login-header p {
    font-size: 16px;
    color: #718096;
}

.form-group {
    margin-bottom: 24px;
}

.form-label {
    font-size: 14px;
    font-weight: 600;
    color: #2d3748;
    margin-bottom: 8px;
}

.form-control {
    height: 48px;
    padding: 12px 16px;
    font-size: 15px;
    border: 2px solid #e2e8f0;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.form-control:focus {
    border-color: #6366f1;
    box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
}

.form-options {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 24px;
}

.form-check-label {
    font-size: 14px;
    color: #4a5568;
    cursor: pointer;
}

.forgot-link {
    font-size: 14px;
    color: #6366f1;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
}

.forgot-link:hover {
    color: #4f46e5;
}

.btn-login {
    width: 100%;
    height: 48px;
    font-size: 16px;
    font-weight: 600;
    border: none;
    border-radius: 8px;
    background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
    color: white;
    transition: all 0.3s ease;
    margin-bottom: 24px;
}

.btn-login:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(99, 102, 241, 0.3);
}

.register-link {
    text-align: center;
    padding-top: 20px;
    border-top: 1px solid #e2e8f0;
}

.register-link p {
    font-size: 14px;
    color: #718096;
    margin: 0;
}

.register-link a {
    color: #6366f1;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s ease;
}

.register-link a:hover {
    color: #4f46e5;
}

.alert {
    border-radius: 8px;
    margin-bottom: 24px;
}

@media (max-width: 991px) {
    .login-wrapper {
        padding: 30px 20px;
    }
    
    .login-header h1 {
        font-size: 28px;
    }
}
</style>