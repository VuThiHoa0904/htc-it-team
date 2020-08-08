{{--<ul>--}}
{{--    @foreach($items as $menu_item)--}}
{{--        @php--}}
{{--            $submenu = $menu_item->children;--}}
{{--        @endphp--}}
{{--        @if(count($submenu) >= 1)--}}
{{--            <li class="has-dropdown">--}}
{{--                --}}{{--                                    menu cha--}}
{{--                <a href="{{ $menu_item->url }}">{{ $menu_item->title }}</a>--}}
{{--                <ul class="dropdown">--}}
{{--                    --}}{{--                                        menu con--}}
{{--                    @foreach($submenu as $item)--}}
{{--                        <li><strong><a href="{{$item->url}}">{{$item->title}} </a></strong></li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--        @else--}}
{{--            <li>--}}
{{--                --}}{{--                                    menu chính--}}
{{--                <a href="{{ $menu_item->url }}">{{ $menu_item->title }}</a>--}}
{{--            </li>--}}
{{--        @endif--}}
{{--    @endforeach--}}
{{--</ul>--}}
{{--<?php //dd($items); ?>--}}

{{--//menu--}}
@if(!isset($innerLoop))
<ul class="nav navbar-nav">
@else
<ul class="dropdown-menu">
@endif

@php

    if (Voyager::translatable($items)) {
        $items = $items->load('translations');
    }

@endphp

@foreach ($items as $item)

    @php

        $originalItem = $item;
        if (Voyager::translatable($item)) {
            $item = $item->translate($options->locale);
        }

        $listItemClass = null;
        $linkAttributes =  null;
        $styles = null;
        $icon = null;
        $caret = null;

        // Background Color or Color
        if (isset($options->color) && $options->color == true) {
            $styles = 'color:'.$item->color;
        }
        if (isset($options->background) && $options->background == true) {
            $styles = 'background-color:'.$item->color;
        }

        // With Children Attributes
        if(!$originalItem->children->isEmpty()) {
            //$linkAttributes =  'class="dropdown-toggle" data-toggle="dropdown"';
            $linkAttributes =  '';
            $caret = '<span class="caret"></span>';

            if(url($item->link()) == url()->current()){
                $listItemClass = 'dropdown active';
            }else{
                $listItemClass = 'dropdown';
            }
        }

        // Set Icon
        if(isset($options->icon) && $options->icon == true){
            $icon = '<i class="' . $item->icon_class . '"></i>';
        }

    @endphp

    <li class="{{ $listItemClass }}">
        <a href="{{ url($item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}" {!! $linkAttributes ?? '' !!}>
            {!! $icon !!}
            <span>{{ $item->title }}</span>
        </a>
        {!! $caret !!}
    @if(!$originalItem->children->isEmpty())
        @include('voyager::menu.bootstrap', ['items' => $originalItem->children, 'options' => $options, 'innerLoop' => true])
        @endif
    </li>
@endforeach

</ul>
