@props(['icon', 'title' => null])

<div class="flex space-x-2 cursor-pointer shadow-sm border px-3 py-1 items-center hover:shadow-none">
    {{ $icon }}
    @if ($title)    
        <span class="">
            {{ $title }}
        </span>
    @endif
</div>