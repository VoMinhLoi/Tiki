
    <div class="main">
        <div class="side-bar">
            <h1 class="side-bar__header fw-bold">Danh mục</h1>
            <ul class="side-bar__list">
                @foreach ($catalog as $item)
                    <li class="side-bar__item">
                        <a href="#" class="side-bar-item__link">
                            <img src="assets/img/{{ $item->img }}" alt="Image Catalog" class="side-bar-item-link__img">
                            {{ $item->name}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="contain flex-grow-1">
            <div class="grid wide ">
                <?php
                    // Tìm sản phẩm cuối cùng
                    $dem = 0;
                    $arrayProduct = array($product);
                    $keyLastElement = sizeof($arrayProduct[0]) - 1;
                    $lastElement = $arrayProduct[0][$keyLastElement];
                    $temporary = null;
                    // Render tất cả sản phẩm
                    foreach ($product as $item) {
                        // if để cho 1 dòng chỉ chứa 6 sản phẩm
                        if ($dem == 0){
                            echo    '
                                    <div class="row margin-top-16">
                                        <div class="col l-2 m-4 c-12">
                                            <a href="#" class="item-product">
                                                <img src="assets/img/' . $item->image . '" alt="" class="item-product__img">
                                                {{-- <img src="" alt="" class="item-product__img"> --}}
                                                <div class="item-product__infor">
                                                    <p class="item-product-infor__auth text-center">
                                                        <i class="fa-solid fa-circle-check"></i>
                                                        Chính hãng
                                                    </p>
                                                    <div class="item-product-infor__desc-evaluate">
                                                        <p class="item-product-infor__desc">
                                                            ' . $item->desc . '
                                                        </p>
                                                        <ul class="item-product-infor__evaluate">
                                                            <li class="item-product-infor-evaluate__star">
                                                                <i class="fa-solid fa-star"></i>
                                                                
                                                            </li>
                                                            <li class="item-product-infor-evaluate__star">
                                                                <i class="fa-solid fa-star"></i>
                                                                
                                                            </li>
                                                            <li class="item-product-infor-evaluate__star">
                                                                <i class="fa-solid fa-star"></i>
                                                                
                                                            </li>
                                                            <li class="item-product-infor-evaluate__star">
                                                                <i class="fa-solid fa-star"></i>
                                                                
                                                            </li>
                                                            <li class="item-product-infor-evaluate__star">
                                                                <i class="fa-solid fa-star"></i>
                                                                
                                                            </li>
                                                            <li class="item-product-infor-evaluate__saled flex-grow-1">Đã bán 999</li>
                                                        </ul>
                                                    </div>
                                                    <p class="item-product-infor__price item-product-infor__price-has-discount">' . $item->price . '<sup>₫</sup></p>
                                                    <p class="item-product-infor__receiving-date">Giao thứ 2, 12/12</p>
                                                </div>
                                            </a>
                                        </div>
                                    ';
                            $dem++;
                        }
                        else {
                        // Thêm sản phẩm vào dòng
                            echo    '
                                        <div class="col l-2 m-4 c-12">
                                            <a href="#" class="item-product">
                                                <img src="assets/img/' . $item->image . '" alt="" class="item-product__img">
                                                {{-- <img src="" alt="" class="item-product__img"> --}}
                                                <div class="item-product__infor">
                                                    <p class="item-product-infor__auth text-center">
                                                        <i class="fa-solid fa-circle-check"></i>
                                                        Chính hãng
                                                    </p>
                                                    <div class="item-product-infor__desc-evaluate">
                                                        <p class="item-product-infor__desc">
                                                            ' . $item->desc . '
                                                        </p>
                                                        <ul class="item-product-infor__evaluate">
                                                            <li class="item-product-infor-evaluate__star">
                                                                <i class="fa-solid fa-star"></i>
                                                                
                                                            </li>
                                                            <li class="item-product-infor-evaluate__star">
                                                                <i class="fa-solid fa-star"></i>
                                                                
                                                            </li>
                                                            <li class="item-product-infor-evaluate__star">
                                                                <i class="fa-solid fa-star"></i>
                                                                
                                                            </li>
                                                            <li class="item-product-infor-evaluate__star">
                                                                <i class="fa-solid fa-star"></i>
                                                                
                                                            </li>
                                                            <li class="item-product-infor-evaluate__star">
                                                                <i class="fa-solid fa-star"></i>
                                                                
                                                            </li>
                                                            <li class="item-product-infor-evaluate__saled flex-grow-1">Đã bán 999</li>
                                                        </ul>
                                                    </div>
                                                    <p class="item-product-infor__price item-product-infor__price-has-discount">' . $item->price . '<sup>₫</sup></p>
                                                    <p class="item-product-infor__receiving-date">Giao thứ 2, 12/12</p>
                                                </div>
                                            </a>
                                        </div>
                                    ';
                            $dem++;
                            if($lastElement == $item){
                               echo '</div>';
                            }
                        // Đủ 6 sản phẩm thì cho ngắt
                            if($dem == 6){
                               $dem = 0;
                               echo '</div>';
                            }
                        }
                        $temporary = $item;
                    }
                    dd($lastElement,3, $item);
                ?>
                <div class="row">
                    <div class="col c-12 text-center">
                        <button class="contain__extra">
                            Xem thêm
                        </button>
                    </div>
                </div>

            </div>
            @include('Home.footer')
        </div>
    </div>