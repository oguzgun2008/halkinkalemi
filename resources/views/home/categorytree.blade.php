
@foreach($children as $subcategory)
<ul class="dropdown-menu border-radius-0">
    @if(count($subcategory->children))
    <li>
        <a href="demo-law-firm-2-practice-areas-detail.html" class="nav-link">{{$subcategory->title}}</a>
    </li>
        <ul class="dropdown-menu border-radius-0">
            @include('home.categorytree',['children'=>$subcategory->children])
        </ul>
    @else
        <li>
            <a href="demo-law-firm-2-practice-areas-detail.html" class="nav-link">{{$subcategory->title}}</a>
        </li>
    @endif
</ul>
@endforeach
