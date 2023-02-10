<ul id="tree">
    @foreach($categories['categories'] as $category)
        <li>
        @if(Route::currentRouteName()=='category.show' && request()->segment(2)==$category->id)
        {{ $category->title }}
        @else
        <a href="{{ action('App\Http\Controllers\CategoryController@show', $category->id) }}">{{ $category->title }}</a>
        @endif
            @if(count($category->childs))
                @include('category.tree',['childs' => $category->childs])
            @endif
        </li>
    @endforeach
</ul>