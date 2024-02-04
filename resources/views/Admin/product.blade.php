@include('Admin.manage')
<style>
    li.side-bar__item:nth-child(3) .side-bar__item-link{
        background-color: white !important;
        color: black ;
    }
</style>
<div class="container">
    <div class="add">
        <h1 class="add-title">
            Thêm sản phẩm:
        </h1>
        <form  action="{{ route('addProduct') }}" class="add-ingredient" method="post">
            @csrf
            <div class="add-ingredient__name">
                <label class="add-ingredient__name-label" for="catalog_id">id mục lục:</label>
                <select class="add-ingredient__name-input"  name="catalog_id" id="catalog_id">
                    @foreach ($catalog as $item)
                        <option value="{{ $item->id }}"> {{ $item->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="add-ingredient__name">
                <label class="add-ingredient__name-label" for="brand_id">id thương hiệu:</label>
                <select class="add-ingredient__name-input"  name="brand_id" id="brand_id">
                    @foreach ($brand as $item)
                        <option value="{{ $item->id }}"> {{ $item->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="add-ingredient__name">
                <label class="add-ingredient__name-label" for="content">nội dung:</label>
                <input class="add-ingredient__name-input" name="content" type="text" id="content" required>
            </div>
            <div class="add-ingredient__name">
                <label class="add-ingredient__name-label" for="name">tên sản phẩm:</label>
                <input class="add-ingredient__name-input" name="name" type="text" id="name" required>
            </div>
            <div class="add-ingredient__name">
                <label class="add-ingredient__name-label" for="desc">mô tả:</label>
                <input class="add-ingredient__name-input" name="desc"  type="text" id="desc" required>
            </div>
            <div class="add-ingredient__name">
                <label class="add-ingredient__name-label" for="price">giá:</label>
                <input class="add-ingredient__name-input" name="price"  type="text" id="price" required>
            </div>
            <div class="add-ingredient__name">
                <label class="add-ingredient__name-label" for="img">hình ảnh:</label>
                <input class="" name="image"  type="file" id="img" required>
            </div>
            <div class="add-ingredient__name">
                <label class="add-ingredient__name-label" for="status">trạng thái:</label>
                <select class="add-ingredient__name-input"  name="status" id="status">
                    <option value="1">1</option>
                    <option value="0">0</option>
                </select>
            </div>
            <input class="add-ingredient__submit" type="Submit" value="Thêm" style="color: white;">
        </form>
    </div>
    <div class="show-list">
        <h1 class="show-list__title">danh sách sản phẩm</h1>
        <table class="show-list__table">
            
            <thead>
                <tr>
                    <th>id</th>
                    <th>id mục lục</th>
                    <th>id thương hiệu</th>
                    <th>tên</th>
                    <th>nội dung</th>
                    <th>mô tả</th>
                    <th>giá</th>
                    <th>hình ảnh</th>
                    <th>trạng thái</th>
                    <th>hành động</th>
                </tr>
            </thead>
        
            <tbody>
                @foreach ($product as $item)
                <tr>
                    <td style="text-align: center"> {{ $item->id }} </td>
                    <td style="text-align: center"> {{ $item->catalog_id }} </td>
                    <td style="text-align: center"> {{ $item->brand_id }} </td>
                    <td style="text-align: center"> {{ $item->name }}</td>
                    <td > {{ $item->content }} </td>
                    <td> {{ $item->desc }}</td>
                    <td style="text-align: center"> {{ $item->price }}</td>
                    <td style="text-align: center"> <img src="assets/img/{{ $item->img }}" alt="{{ $item->img }}"> </td>
                    <td style="text-align: center"> {{ $item->status }}</td>
                    <td style="text-align: center">
                        <a href="" style="display: block; background-color:green; color:white; border-radius: 4px">Cập nhật</a>
                        <a href="{{ route('deleteCatalog', $item->id) }}" style="margin-top: 4px; display: block; background-color:red; color:white; border-radius: 4px">Xóa</a>
                    </td>
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