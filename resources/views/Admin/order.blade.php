@include('Admin.manage')
<style>
    li.side-bar__item:nth-child(5) .side-bar__item-link{
        background-color: white !important;
        color: black ;
    }
</style>
<div class="container">
    <div class="add">
        <h1 class="add-title">
            Thống kê:
        </h1>
        <p>Doanh thu: {{ number_format($revenue, 0, ',', '.') }}<sup>₫</sup></p>
        <p>Đã thu: {{ number_format($received, 0, ',', '.') }}<sup>₫</sup></p>
    </div>
    <div class="show-list">
        <h1 class="show-list__title">danh sách đơn hàng</h1>
        <table class="show-list__table">
            
            <thead>
                <tr>
                    <th>id</th>
                    <th>tên sản phẩm</th>
                    <th>tên khách hàng</th>
                    <th>số lượng</th>
                    <th>địa chỉ</th>
                    <th>số điện thoại</th>
                    <th>tổng giá</th>
                    <th>phương thức thanh toán</th>
                    <th>trạng thái</th>

                </tr>
            </thead>
        
            <tbody>
                @foreach ($order as $item)
                <tr>
                    <td style="text-align: center"> {{ $item->id }} </td>
                    @php
                        $product = \App\Models\Product::where('id', $item->product_id)->first();

                    @endphp
                    <td style="text-align: center"> {{ $product->name }}</td>
                    <td style="text-align: center"> {{Auth::user()->name }}</td>
                    <td style="text-align: center"> {{ $item->quantity }}</td>
                    <td style="text-align: center"> {{ $item->address }}</td>
                    <td style="text-align: center"> {{ $item->phone }}</td>
                    <td style="text-align: center"> {{ $item->totalPrice }}</td>
                    <td style="text-align: center"> {{ $item->payingMethod }}</td>
                    <td style="text-align: center"> {{ $item->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</div>
</div>
</div>
</div>
</body>
</html>