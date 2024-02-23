@include('Admin.manage')
<style>
    li.side-bar__item:nth-child(1) .side-bar__item-link{
        background-color: white !important;
        color: black ;
    }
</style>
<div class="container">
    <div class="add">
        <h1 class="add-title">
            Thêm thương hiệu:
        </h1>
        <form  action="{{ route('addBrand') }}" class="add-ingredient" method="post">
            @csrf
            <div class="add-ingredient__name">
                <label class="add-ingredient__name-label" for="name">tên thương hiệu:</label>
                <input class="add-ingredient__name-input" name="name" type="text" id="name" required>
            </div>
            <div class="add-ingredient__name">
                <label class="add-ingredient__name-label" for="desc">mô tả:</label>
                <input class="add-ingredient__name-input" name="desc"  type="text" id="desc" required>
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
        <h1 class="show-list__title">danh sách thương hiệu</h1>
        <table class="show-list__table">
            
            <thead>
                <tr>
                    <th>id</th>
                    <th>tên</th>
                    <th>mô tả</th>
                    <th>trạng thái</th>
                    <th>hành động</th>
                </tr>
            </thead>
        
            <tbody>
                @if(isset($brand))
                    @foreach ($brand as $item)
                    <tr>
                        <td style="text-align: center"> {{ $item->id }} </td>
                        <td style="text-align: center"> {{ $item->name }}</td>
                        <td> {{ $item->desc }}</td>
                        <td style="text-align: center"> {{ $item->status }}</td>
                        <td style="text-align: center">
                            <a href="{{ route('updateFormBrand', $item->id) }} " style="display: block; background-color:green; color:white; border-radius: 4px">Cập nhật</a>
                            <a href="{{ route('deleteBrand', $item->id) }}" style="margin-top: 4px; display: block; background-color:red; color:white; border-radius: 4px">Xóa</a>
                        </td>
                    </tr>
                    @endforeach
                @endif
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