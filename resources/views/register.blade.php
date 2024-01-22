<link rel="stylesheet" href="detail/assets/css/Detail/container.css">
<style>
    a {
        text-decoration: none;
    }
</style>
<div class="wrapper" style="display: flex">
    {{-- <label class="over-layer" for="show-login"></label> --}}
    <button class="over-layer"></button>
    <form class="login"  action="{{ route('register') }}" method="post">
        {{-- Đảm bảo rằng bạn đã bao gồm CSRF token trong mọi yêu cầu POST của bạn. Token này cần được gửi đi như một trường ẩn trong mẫu HTML hoặc thông qua các tiêu đề HTTP. --}}
        @csrf
        <div class="auth">
            <h1 class="auth__hello">Xin chào,</h1>
            <p class="auth__title">Tạo tài khoản</p>
            {{-- <label for="">Số điện thoại</label> --}}
            <input type="text" name="name" class="auth__input" placeholder="Họ và tên" required>
            @error('name')
                <div class="alert-danger">{{ $message }}</div>
            @enderror
            <input type="text" name="email" class="auth__input" placeholder="Số điện thoại" required>
            @error('email')
                <div class="alert-danger">{{ $message }}</div>
            @enderror
            {{-- <label for="">Mật khẩu</label> --}}
            <input type="password" name="password" class="auth__input" placeholder="Mật khẩu" required>
            @error('password')
                <div class="alert-danger">{{ $message }}</div>
            @enderror
            <input class="auth__button-login" type="Submit" value="Đăng ký">
            <a href="{{ route('formLogin') }}" class ="auth__button-login">Đăng nhập</a>
        </div>
        <div class="login__img-cover">
            <img class="login__img" src="assets/img/tiki_login.png" alt="tiki trade" style="width: 203px">
        </div>
    </form>
</div>