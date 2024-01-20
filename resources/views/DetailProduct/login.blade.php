<div class="wrapper">
    {{-- <label class="over-layer" for="show-login"></label> --}}
    <button class="over-layer" onclick="hiddenLogin()"></button>
    <form class="login"  action="action_page.php" method="post">
        <div class="auth">
            <h1 class="auth__hello">Xin chào,</h1>
            <p class="auth__title">Đăng nhập hoặc Tạo tài khoản</p>
            {{-- <label for="">Số điện thoại</label> --}}
            <input type="text" class="auth__input" placeholder="Số điện thoại">
            {{-- <label for="">Mật khẩu</label> --}}
            <input type="password" class="auth__input" placeholder="Mật khẩu">
            <button class="auth__button-login">Đăng nhập</button>
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