    {{-- The Master doesn't talk, he acts. --}}
    
    @foreach($menuList as $k => $v)
        <li>
            <a href="{{ $v['slug'] }}">{{ $v['menu_name'] }}</a>
        </li>
    @endforeach

