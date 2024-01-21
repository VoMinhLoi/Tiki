<div class="wrapper">
    {{-- <label class="over-layer" for="show-login"></label> --}}
    <button class="over-layer" onclick="hiddenLogin()"></button>
    <form class="login"  action="{{ route('login',$product->id) }}" method="post">
        {{-- Đảm bảo rằng bạn đã bao gồm CSRF token trong mọi yêu cầu POST của bạn. Token này cần được gửi đi như một trường ẩn trong mẫu HTML hoặc thông qua các tiêu đề HTTP. --}}
        @csrf 
        <div class="auth">
            <h1 class="auth__hello">Xin chào,</h1>
            <p class="auth__title">Đăng nhập hoặc Tạo tài khoản</p>
            {{-- <label for="">Số điện thoại</label> --}}
            <input type="text" name="email" class="auth__input" placeholder="Số điện thoại">
            @error('email')
                <div class="alert-danger">{{ $message }}</div>
            @enderror
            {{-- <label for="">Mật khẩu</label> --}}
            <input type="password" name="password" class="auth__input" placeholder="Mật khẩu">
            @error('password')
                <div class="alert-danger">{{ $message }}</div>
            @enderror
            {{-- <button class="auth__button-login">Đăng nhập</button> --}}
            <input type="submit" class="auth__button-login" value = 'Đăng nhập'>
        </div>
        <div class="login__img-cover">
            <img class="login__img" src="assets/img/tiki_login.png" alt="tiki trade" style="width: 203px">
            <p class="login-img__title">
                Mua sắm tại Tiki <br>
                Siêu ưu đãi mỗi ngày
            </p>
        </div>
    </form>
    
    {{-- <button class="close-login" onclick="hiddenLogin()">x</button> --}}
</div>