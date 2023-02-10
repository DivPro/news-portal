<ul>
@foreach($childs as $child)
	<li>
	    <a href="{{ action('App\Http\Controllers\CategoryController@show', $child->id) }}">{{ $child->title }}</a>
	    @if(count($child->childs))
            @include('category.tree',['childs' => $child->childs])
        @endif
	</li>
@endforeach
</ul>