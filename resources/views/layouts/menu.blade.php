@if(isset($is_child) && $is_child)
    <ul class="treeview-menu" data-widget="tree">
@else
    <ul class="sidebar-menu" data-widget="tree">
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

        $isActive = null;
        $styles = null;
        $icon = null;

        // Background Color or Color
        if (isset($options->color) && $options->color == true) {
            $styles = 'color:'.$item->color;
        }
        if (isset($options->background) && $options->background == true) {
            $styles = 'background-color:'.$item->color;
        }

        // Check if link is current
        if(url($item->link()) == url()->current()){
            $isActive = 'active';
        }

        // Set Icon
        if(isset($options->icon) && $options->icon == true){
            $icon = '<i class="' . $item->icon_class . '"></i>';
        }

        // if(!$originalItem->children->isEmpty()){
        //     $options->has_child = true;
        // }

    @endphp

    @if(!$originalItem->children->isEmpty())
    <li class="{{ $isActive }} treeview">
    @else
    <li class="{{ $isActive }}">
    @endif
        <a href="{{ url($item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}">
            {!! $icon !!}
            <i class="{{ $item->icon_class }}"></i>
            <span>{{ $item->title }}</span>
        </a>
        @if(!$originalItem->children->isEmpty())
            @include('layouts.menu', ['items' => $originalItem->children, 'options' => $options, 'is_child' => true])
        @endif
    </li>
@endforeach
</ul>