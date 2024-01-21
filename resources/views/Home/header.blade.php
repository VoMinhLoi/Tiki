    <header class="header">
        <a href="#" class="header__link">
            <img src="assets/img/logo_tiki.png" alt="logo" class="header-link__img">
        </a>
        <div class="header__search d-none-c">
            <div class="header-search__bar">
                {{-- <i class="fa-solid fa-magnifying-glass"></i> --}}
                <img src="assets/img/icon_search.png" alt="iconSearch" class="header-search-bar__icon">
                <input type="text" class="header-search-bar__input flex-grow-1 d-none-c" placeholder="Điện tử">

                <div class="search">
                    <h1 class="search__header">Tìm kiếm mới nhất</h1>
                    <ul class="search__list">
                        <li class="search__item">
                            <a href="#" class="search-item__link">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                iPhone 15 Pro max
                            </a>
                        </li>
                        <li class="search__item">
                            <a href="#" class="search-item__link">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                Máy giặt SamSungGT LG6300
                            </a>
                        </li>
                        <li class="search__item">
                            <a href="#" class="search-item__link">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                LapTop Gaming
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="header-search-bar__button d-none-c">
                    <span>
                        Tìm kiếm
                    </span>
                </button>
            </div>
            <nav class="header__nav d-none-c-m-l-low">
                <ul class="header-nav__list">
                    <li class="header-nav__item">
                        <a href="#" class="header-nav-item__link">
                            12.12 Sale Sinh Nhật
                        </a>
                    </li>
                    <li class="header-nav__item">
                        <a href="#" class="header-nav-item__link">
                            Miễn Phí Gói Quà
                        </a>
                    </li>
                    <li class="header-nav__item">
                        <a href="#" class="header-nav-item__link">
                            điện gia dụng
                        </a>
                    </li>
                    <li class="header-nav__item">
                        <a href="#" class="header-nav-item__link">
                            mẹ & bé
                        </a>
                    </li>
                    <li class="header-nav__item">
                        <a href="#" class="header-nav-item__link">
                            sách
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="header__private">
            <ul class="header-private__list">
                <li class="header-private__item">
                    <a href="#" class="header-private-item__link d-none-c-m header-private-item__link--blue">
                        <i class="fa-solid fa-house header-private-item-link__icon "></i>
                        Trang chủ
                    </a>
                </li>
                <li class="header-private__item">
                    <a href="#" class="header-private-item__link d-none-c-m">
                        <i class="fa-regular fa-face-smile header-private-item-link__icon"></i>
                        Tài khoản
                    </a>
                </li>
                <li class="header-private__item d-none-c">
                    <a onclick="showLogin()" href="#" class="header-private-item__link header-private-item__link--blue header-private-item__link-quantity margin-0">
                        <i class="fa-solid fa-cart-shopping header-private-item-link__icon "></i>
                    </a>
                </li>
                <li class="header-private__item d-none-l">
                    <label for="show-menu-mobile"  href="#" class="header-private-item__link header-private-item__link--blue margin-0">
                        <i class="fa-solid fa-list header-private-item-link__icon margin-0"></i>
                    </label>
                </li>
            </ul>
            <div class="header-private__address d-none-c-m">
                <p class="header-private-address__detail ">
                    <i class="fa-solid fa-location-dot"></i>
                    Giao đến: <a href="#" class="header-private-address-detail__link">TP. Pleiku, P. Yên Đỗ, Gia Lai</a>
                </p>
            </div>
        </div>
        <input type="checkbox" name="show-menu-mobile" id="show-menu-mobile" style="display: none">
        <label for="show-menu-mobile"  class="over-layer-menu-mobile"></label>
        <ul class="menu-mobile">
            <li class="menu-mobile__item">
                <a href="#" class="menu-mobile-item__link">Trang chủ</a>
            </li>
            <li class="menu-mobile__item">
                <a href="#" class="menu-mobile-item__link">Tài khoản cá nhân</a>
            </li>
            <li class="menu-mobile__item">
                <a href="#" class="menu-mobile-item__link">Địa chỉ</a>
            </li>
        </ul>
    </header>
