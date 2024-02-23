<link rel="stylesheet" href="assets/css/login.css">

<?php
    //Kiểm tra nếu có id product thì đăng nhập để thêm sản phẩm vào
    if(isset($product)){
        echo    '
        <div class="wrapper">
            <button class="over-layer" onclick="hiddenLogin()">
                </button>
                
                ';
        //if để xác định đang đứng từ detail (1 sản phẩm)
        if(isset($product->id)){
            echo    '
                        <form class="login"  action="'. route('login',$product->id) .'" method="post">
                    ';
        }
        //Từ trang home
        echo    '
                        <form class="login"  action="'. route('login',1) .'" method="post">
                    ';
    }
    // Ngược lại thì chỉ muốn đăng nhập
    else {
        echo    '
                <style>
                    a {
                        text-decoration: none;
                    }
                </style>
                    <div class="wrapper" style="display: flex">
                        {{-- <label class="over-layer" for="show-login"></label> --}}
                        <button class="over-layer" onclick="hiddenLogin()">
                        </button>
                        <form class="login"  action="'. route('loginAdmin') .'" method="post">
                        
                ';
    }
?>
                            {{-- Đảm bảo rằng bạn đã bao gồm CSRF token trong mọi yêu cầu POST của bạn. Token này cần được gửi đi như một trường ẩn trong mẫu HTML hoặc thông qua các tiêu đề HTTP. --}}
                        {{-- <form class="login"  action="'. route('loginNoProduct') .'" method="post"> --}}
                        @csrf 
                        <div class="auth">
                            <h1 class="auth__hello">Xin chào,</h1>
                            <p class="auth__title">Đăng nhập hoặc Tạo tài khoản</p>
                            {{-- <label for="">Số điện thoại</label> --}}
                            {{-- <input type="text" name="email" class="auth__input" placeholder="Số điện thoại" value="{{ old('email', cookie('remember_email')) }}" required> --}}
                            <input type="text" name="email" class="auth__input" placeholder="Số điện thoại" value="" required>
                            @error('email')
                                <div class="alert-danger">{{ $message }}</div>
                            @enderror
                            {{-- <label for="">Mật khẩu</label> --}}
                            {{-- <input type="password" name="password" class="auth__input" placeholder="Mật khẩu" value="{{ old('password', cookie('remember_password')) }}" required> --}}
                            <input type="password" name="password" class="auth__input" placeholder="Mật khẩu" value="" required>
                            @error('password')
                                <div class="alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="remember" style="    margin-top: 12px; display: flex; justify-content: center;">
                                {{-- <input class="remember__checkbox" type="checkbox" id="remember"  name="remember" {{ old('remember', cookie('remember_remember')) ? 'checked' : '' }}> --}}
                                <input class="remember__checkbox" type="checkbox" id="remember"  name="remember" >
                                <label class="remember__label" for="remember"> Nhớ mật khẩu</label>
                            </div>
                            <button class="auth__button-login">Đăng nhập</button>
                            {{-- <input type="submit" class="auth__button-login" value = 'Đăng nhập'> --}}
                            <a href="{{ route('formRegister') }}" class ="auth__button-login">Đăng ký</a>
                            <a href="{{ url('/auth/google') }}" class="auth__button-login">Đăng nhập bằng Google</a>
                        </div>
                        <div class="login__img-cover">
                            <img class="login__img" src="assets/img/tiki_login.png" alt="tiki trade" style="width: 203px">
                            <p class="login-img__title">
                                Mua sắm tại Tiki <br>
                                Siêu ưu đãi mỗi ngày
                            </p>
                        </div>
                        </form>

                    </div>
                    
            <script src="assets/js/form.js"></script>