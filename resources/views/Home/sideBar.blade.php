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