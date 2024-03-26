        <style>
            .item-product__img {
                max-height: 183px;
            }
        </style>
<?php
                    // Tìm sản phẩm cuối cùng
                    $dem = 0;
                    $arrayProduct = array($product);
                    $keyLastElement = sizeof($arrayProduct[0]) - 1;
                    $lastElement = $arrayProduct[0][$keyLastElement];
                    // $arrayLastElement = array($lastElement); cách cast kiểu này thì vẫn là object
                    $arrayLastElement = $lastElement->toArray();
                    $temporary = null;
                    // Render tất cả sản phẩm
                    foreach ($product as $item) {
                        // if để Mở dòng mới chứa 6 sản phẩm
                        if ($dem == 0){
                            echo    '
                                    <div class="row">
                                        <div class="col l-2 m-4 c-12">
                                            <a href="'. route('product.detail',  $item->id) .'" class="item-product">
                                                <div style="width: 183px; height: 183px; display: flex; justify-content: center; align-items: center;">                      <img src="assets/img/' . $item->image . '" alt="" class="item-product__img"></div>
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
                                                    <p class="item-product-infor__price item-product-infor__price-has-discount">' . number_format($item->price, 0, ',', '.') . '<sup>₫</sup></p>
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
                                            <a href="'. route('product.detail',$item->id) .'" class="item-product">
                                                <div style="width: 183px; height: 183px; display: flex; justify-content:center; align-items: center;"><img src="assets/img/' . $item->image . '" alt="" class="item-product__img"></div>
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
                                                            <li class="item-product-infor-evaluate__saled">Đã bán 999</li>
                                                        </ul>
                                                    </div>
                                                    <p class="item-product-infor__price item-product-infor__price-has-discount">' . number_format($item->price, 0, ',', '.') . '<sup>₫</sup></p>
                                                    <p class="item-product-infor__receiving-date">Giao thứ 2, 12/12</p>
                                                </div>
                                            </a>
                                        </div>
                                    ';
                            $dem++;
                        // Đủ 6 sản phẩm thì cho ngắt
                            if($dem == 6){
                               $dem = 0;
                               echo '</div>';
                            }
                        }
                        // Dò xem đó phải phần tử cuối để đóng row khi dòng chưa chứa đủ 6 sản phẩm đã hết.
                        $arrayItem = $item->toArray();
                        if($arrayLastElement['id'] == $arrayItem['id']){
                            echo '</div>';
                        }
                    }
                ?>
                {{-- <div class="row">
                    <div class="col c-12 text-center">
                        <button class="contain__extra">
                            Xem thêm
                        </button>
                    </div>
                </div> --}}