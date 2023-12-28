@if($items->count() > 0)
    <ul class="main_menu">
        @foreach($items as $item)
            @php
                $isActive = false;
                $url = null;
                $target = '_self';
                if($item->page) {
                    $url = route($item->page->type);
                }
                else {
                    $url = url()->to($item->url);
                }

                if($item->target) {
                    $target = $item->target;
                }

                $isActive = request()->fullUrlIs($url);
            @endphp
            @if($item->navItems->count() > 0)
                <li class="{{ $isActive ? 'active' : '' }} menu-item menu-item-has-children">
            @else
                <li class="{{ $isActive ? 'active' : '' }} menu-item">
                    @endif
                    @if($item->navItems->count() > 0)
                        <a href="{{$url}}">
                            @else
                                <a href="{{$url}}">
                                    @endif
                                    {{$item->label}}
                                </a>
                                @if($item->navItems->count() > 0)
                                    <ul class="sub-menu">
                                        @foreach($item->navItems as $subItem)
                                            @php
                                                $isActive = false;
                                                $url = null;
                                                $target = '_self';
                                                if($subItem->page) {
                                                    $url = route($subItem->page->type);
                                                }
                                                else {
                                                    $url = url()->to($subItem->url);
                                                }

                                                if($subItem->target) {
                                                    $target = $subItem->target;
                                                }

                                                $isActive = request()->fullUrlIs($url);
                                            @endphp
                                            <li class="menu-item">
                                                <a href="{{$url}}" >
                                                    <span>{{ $subItem->label }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                    @endif
                </li>
                @endforeach
    </ul>
@endif
