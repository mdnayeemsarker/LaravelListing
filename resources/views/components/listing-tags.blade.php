@props(['tagsCsv'])

@php
$tags = explode(',', $tagsCsv);
@endphp

<ul class="flex" style="list-style-type: none;">
    @foreach ($tags as $tags)
        <span class="bg-success text-warning m-1 flex items-center justify-center rounded py-1 px-3">
            <a href="/?tag={{ $tags }}" class="text-white">{{ $tags }}</a>
        </span>
    @endforeach
</ul>
