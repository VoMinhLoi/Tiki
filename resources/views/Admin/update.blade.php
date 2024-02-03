<link rel="stylesheet" href="detail/assets/css/Detail/login.css">
<link rel="stylesheet" href="assets/css/grid_system.css">
<link rel="stylesheet" href="assets/font/fontawesome-free-6.5.1-web/css/all.min.css">
@include ('Admin.brand')
<div class="wrapper" style="display: flex;">
    <button class="over-layer" onclick=""></button>
    <form class="login"  action="{{ route('update', $item->id) }}" method="post"> 
                {{-- Đảm bảo rằng bạn đã bao gồm CSRF token trong mọi yêu cầu POST của bạn. Token này cần được gửi đi như một trường ẩn trong mẫu HTML hoặc thông qua các tiêu đề HTTP. --}}
            {{-- <form class="login"  action="'. route('loginNoProduct') .'" method="post"> --}}
            @csrf 
            <div class="auth">
                <h1 class="auth__hello">Thương hiệu {{ $item->id }}</h1>
                <p class="auth__title"></p>
                {{-- <label for="">Số điện thoại</label> --}}
                <input type="text" name="name" class="auth__input" placeholder="name" value="{{ $item->name }}" required>
                {{-- <label for="">Mật khẩu</label> --}}
                <input type="text" name="desc" class="auth__input" placeholder="desc" value="{{ $item->desc }}" required>
                <select  class="auth__input" name="status">
                    <option value="1">1</option>
                    <option value="0">0</option>
                </select>
                <div class="remember" style="    margin-top: 12px; display: flex; justify-content: center;">
                </div>
                {{-- <input type="submit" class="auth__button-login" value = 'Đăng nhập'> --}}
                <input type="submit" class ="auth__button-login" style="background-color: green;" value="Cập nhật">
            </div>
            <div class="login__img-cover">
                <img class="login__img" src="assets/img/tiki_login.png" alt="tiki trade" style="width: 203px">
                <p class="login-img__title">
                    Mua sắm tại Tiki <br>
                    Siêu ưu đãi mỗi ngày
                </p>
            </div>
            <a onclick="hiddenForm()" style=" position: absolute; right: 0; background: white; padding: 0px 8px; cursor: pointer;">X</a>
        </form>
</div>
<script src="detail/assets/js/form.js"></script>