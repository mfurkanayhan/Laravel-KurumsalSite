@foreach($children as $submenu)
    <ul class="list-links">
        @if(count($submenu->$children))
            <li style="color: #1d00af;font-family: 'Arial Black'">{{$submenu->title}}</li>
            <ul class="list-links">
                @include('home.menutree',['children' => $submenu->$children])
            </ul>
            <hr>
        @else
            <li><a href="#">{{$submenu->title}}</a> </li>
        @endif
    </ul>
@endforeach
