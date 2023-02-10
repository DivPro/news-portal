<ul id="tree">
    @foreach($categories['categories'] as $category)
        <li>
        <a href="{{ action('App\Http\Controllers\CategoryController@show', $category->id) }}">{{ $category->title }}</a>
            @if(count($category->childs))
                @include('category.tree',['childs' => $category->childs])
            @endif
        </li>
    @endforeach
</ul>