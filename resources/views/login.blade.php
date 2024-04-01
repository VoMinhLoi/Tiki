<link rel="stylesheet" href="assets/css/login.css">
<style>

    /* ======= Toast message ======== */

    #toast {
    position: fixed;
    top: 50px;
    right: 32px;
    z-index: 999999;
    }

    .toast {
        display: flex;
        align-items: center;
        background-color: #fff;
        border-radius: 2px;
        padding: 20px 0;
        min-width: 400px;
        max-width: 450px;
        border-left: 4px solid;
        box-shadow: 0 5px 8px rgba(0, 0, 0, 0.08);
        transition: all linear 0.3s;
        animation: slideInLeft ease .3s, fadeOut linear 1s 3000ms forwards;
    }

    @keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(calc(100% + 32px));
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
    }

    @keyframes fadeOut {
    to {
        opacity: 0;
    }
    }

    .toast--success {
    border-color: #47d864;
    }

    .toast--success .toast__icon {
    color: #47d864;
    }

    .toast--info {
    border-color: #2f86eb;
    }

    .toast--info .toast__icon {
    color: #2f86eb;
    }

    .toast--warning {
    border-color: #ffc021;
    }

    .toast--warning .toast__icon {
    color: #ffc021;
    }

    .toast--error {
    border-color: #ff623d;
    }

    .toast--error .toast__icon {
    color: #ff623d;
    }

    .toast + .toast {
    margin-top: 24px;
    }

    .toast__icon {
    font-size: 24px;
    }

    .toast__icon,
    .toast__close {
    padding: 0 16px;
    }

    .toast__body {
    flex-grow: 1;
    }

    .toast__title {
    font-size: 16px;
    font-weight: 600;
    color: #333;
    }

    .toast__msg {
    font-size: 14px;
    color: #888;
    margin-top: 6px;
    line-height: 1.5;
    }

    .toast__close {
    font-size: 20px;
    color: rgba(0, 0, 0, 0.3);
    cursor: pointer;
    }
    .toast__time {
        width: 100%;
        position: absolute;
        height: 4px;
        bottom: 0;
        left: 0;
        animation: scale ease 3.3s forwards
    }
    .toast--error .toast__time {
        background: #ff623d;
    }
    .toast--success .toast__time {
        background: #47d864;
    }
    @keyframes scale {
        from {
            width: 100%;
        }
        to {
            width: 0%
        }
    }
</style>
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
                            <input type="text" id="email" name="email" class="auth__input" placeholder="Số điện thoại" value="" >
                            @error('email')
                                <div class="alert-danger">{{ $message }}</div>
                            @enderror
                            {{-- <label for="">Mật khẩu</label> --}}
                            {{-- <input type="password" name="password" class="auth__input" placeholder="Mật khẩu" value="{{ old('password', cookie('remember_password')) }}" > --}}
                            <input type="password" id="password" name="password" class="auth__input" placeholder="Mật khẩu" value="" >
                            @error('password')
                                <div class="alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="remember" style="    margin-top: 12px; display: flex; justify-content: center; align-items:center">
                                {{-- <input class="remember__checkbox" type="checkbox" id="remember"  name="remember" {{ old('remember', cookie('remember_remember')) ? 'checked' : '' }}> --}}
                                <input class="remember__checkbox" type="checkbox" id="remember"  name="remember" >
                                <label class="remember__label" for="remember"> Nhớ mật khẩu</label>
                                <a href="{{ route('formForgotPassword') }}" style="margin-left:4px; font-size:10px; color:red">Quên mật khẩu</a>
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
{{-- const icons = {
    success: "fas fa-check-circle",
    info: "fas fa-info-circle",
    warning: "fas fa-exclamation-circle",
    error: "fas fa-exclamation-circle"
    }; --}}
@if ($errors->any())
    <div id="toast">
        <div class="toast toast--error">
            <div class="toast__icon">
                <i class="fas fa-exclamation-circle"></i>
            </div>
            <div class="toast__body">
                <h3 class="toast__title" >Lỗi người dùng</h3>
                <p class="toast__msg">{{ $errors->all()['0'] }}</p>
            </div>
            <div class="toast__close">
                <i class="fas fa-times"></i>
            </div>
            <div class="toast__time"></div>
        </div>
    </div>
@else
{{-- Ngược lại thông báo đăng nhập thành công --}}
    @if (session('json_message'))
    <div id="toast">
        <div class="toast toast--success" >
            <div class="toast__icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <div class="toast__body">
                <h3 class="toast__title">Thành công</h3>
                <p class="toast__msg">{{ session('json_message') }}</p>
            </div>
            <div class="toast__close">
                <i class="fas fa-times"></i>
            </div>
            <div class="toast__time"></div>
        </div>
    </div>
    @endif
@endif
             
<script src="assets/js/form.js"></script>
<script>
    var menuUser = document.querySelector('.menu-user')
    // Nếu menuUser tồn tại trả về true còn không thì null - false thì hiện thị login để đăng nhập mới được vào cart
    if(!menuUser){
        var cartButton = document.querySelector('.header-private-item__link.header-private-item__link--blue.header-private-item__link-quantity')
        cartButton.onclick = () => {
            var wrapper = document.querySelector(".wrapper")
            wrapper.classList.toggle('display-flex')
            var loginButton = wrapper.querySelector(".auth__button-login")
        }
    }

    // Hiển thị thông báo khi đăng nhập không thành công
    function toast() {
        const main = document.getElementById("toast");
        if (main) {
            const toast = document.querySelector(".toast");

            // Auto remove toast
            const autoRemoveId = setTimeout(function () {
            main.removeChild(toast);
            }, 3000 + 1000);

            // Remove toast when clicked
            toast.onclick = function (e) {
                if (e.target.closest(".toast__close")) {
                    main.removeChild(toast);
                    clearTimeout(autoRemoveId);
                }
            };
            console.log(toast);
        }
    }
    toast()
</script>