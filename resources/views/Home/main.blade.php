<div class="main">
    @include ('Home/sidebar')
    <div class="contain">
        <div class="grid wide">
            <form action="{{ route('filter') }}" style="background: #fff; margin: 10px 0; padding: 0 4px" method="post">
                @csrf
                @method('Put')
                <label for="price">Lọc theo giá:</label>
                <select class="add-ingredient__name-input" name="price" id="price" style="border: 1px solid black">
                    <option value="" disabled selected style="display:none;">Chọn một giá trị</option>
                    <option value=" 5000000" @if(isset($price) && $price  ==  5000000) selected @endif>5,000,000<sup>đ</sup></option>
                    <option value="10000000" @if(isset($price) && $price == 10000000) selected @endif>10,000,000<sup>đ</sup></option>
                    <option value="15000000" @if(isset($price) && $price == 15000000) selected @endif>15,000,000<sup>đ</sup></option>
                    <option value="20000000" @if(isset($price) && $price == 20000000) selected @endif>20,000,000<sup>đ</sup></option>
                </select>
                <button class="button-filter" style="padding: 4px; border-radius: 4px; color: white; background: #2e66f6;">Lọc</button>
            </form>
            @include ('Home.container')
        </div>
        @include('Home.footer')
    </div>
</div>

<script>
    fetch('/api/product/filter', {
        method: 'get',  // Hoặc 'GET' tùy thuộc vào cấu hình route của bạn
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            // Các header khác nếu cần thiết
        },
        body: JSON.stringify({
            // Truyền các tham số hoặc dữ liệu cần thiết cho hàm filter
            // Ví dụ:
            // category: 'electronics',
            // price_range: '100-500',
        }),
    })
        .then(response => response.json())
        .then(data => {
            // Xử lý dữ liệu trả về từ API
            console.log(data);
        })
        .catch(error => {
            // Xử lý lỗi nếu có
            console.error('Error:', error);
        });
</script>