<x-layout>
    <div class="grid-col-2 grid gap-4 space-y-4">
        @unless(count($listing) == 0)
            @foreach ($listing as $list)
                <x-listing-card :listing="$list" />
            @endforeach
        @else
            <p>No Listing Found</p>
        @endunless
    </div>
    <div class="mt-6 p-2">
        {{ $listing->links() }}
    </div>
</x-layout>
