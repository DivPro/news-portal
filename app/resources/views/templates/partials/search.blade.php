<form class="grid-x grid-padding-x align-left" method="post" action="{{url('search')}}">
    {{csrf_field()}}
    <div class="cell small-7"><input type="text" name="search"></div>
    <div class="cell small-1"><button class="submit success button">Search</button></div>
</form>