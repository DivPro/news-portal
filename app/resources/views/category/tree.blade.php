<ul>
@foreach($childs as $child)
	<li>
	@if(Route::currentRouteName()=='category.show' && request()->segment(2)==$child->id)
        {{ $category->title }}
        @else
        <a href="{{ action('App\Http\Controllers\CategoryController@show', $child->id) }}">{{ $child->title }}</a>
        @endif
	    @if(count($child->childs))
            @include('category.tree',['childs' => $child->childs])
        @endif
	</li>
@endforeach
</ul>