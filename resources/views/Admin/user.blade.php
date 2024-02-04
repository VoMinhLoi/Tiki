@include('Admin.manage')
<style>
    li.side-bar__item:nth-child(4) .side-bar__item-link{
        background-color: white !important;
        color: black ;
    }
</style>
<div class="container">
    <div class="add">
        <h1 class="add-title">
            Thêm người dùng:
        </h1>
        <form  action="{{ route('addUser') }}" class="add-ingredient" method="post">
            @csrf
            <div class="add-ingredient__name">
                <label class="add-ingredient__name-label" for="name">tên người dùng:</label>
                <input class="add-ingredient__name-input" name="name" type="text" id="name" required>
            </div>
            <div class="add-ingredient__name">
                <label class="add-ingredient__name-label" for="email">email:</label>
                <input class="add-ingredient__name-input" name="email"  type="text" id="email" required>
            </div>
            <div class="add-ingredient__name">
                <label class="add-ingredient__name-label" for="password">mật khẩu:</label>
                <input class="add-ingredient__name-input" name="password"  type="text" id="password" required>
            </div>
            <input class="add-ingredient__submit" type="submit" value="Thêm" style="color: white;">
        </form>
    </div>
    <div class="show-list">
        <h1 class="show-list__title">danh sách người dùng</h1>
        <table class="show-list__table">
            
            <thead>
                <tr>
                    <th>id</th>
                    <th>tên</th>
                    <th>email</th>
                    <th>hành động</th>
                </tr>
            </thead>
        
            <tbody>
                @foreach ($user as $item)
                <tr>
                    <td style="text-align: center"> {{ $item->id }} </td>
                    <td style="text-align: center"> {{ $item->name }}</td>
                    <td style="text-align: center"> {{ $item->email }}</td>
                    <td style="text-align: center">
                        <a href="{{ route('updateFormBrand', $item->id) }} " style="display: block; background-color:green; color:white; border-radius: 4px">Cập nhật</a>
                        <a href="{{ route('deleteUser', $item->id) }}" style="margin-top: 4px; display: block; background-color:red; color:white; border-radius: 4px">Xóa</a>
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