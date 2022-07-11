@props(['listing'])
<x-card>
    <div class="card m-2 p-3">
        <a href="/?company={{ $listing->company }}">
            <img class="" height="100px" width="100"
                src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/user.png') }}"
                alt="">
        </a>
        <h3>{{ $listing->title }}</h3>
        <x-listing-tags :tagsCsv="$listing->tags" />
        <p>
            <span class="flaticon-building">{{ $listing->location }}</span>,
            <span>
                <a href="/?company={{ $listing->company }}"
                    class="bg-primary learn-more m-1 flex items-center justify-center rounded py-1 py-1 px-3 text-white">{{ $listing->company }}</a>
            </span>
        </p>
        <span>
            <a href="mailto:{{ $listing->email }}"
                class="bg-success learn-more m-1 flex items-center justify-center rounded py-1 py-1 px-3 text-white">Contact
                Via Email
            </a>
            <a href="{{ $listing->website }}" target="blank"
                class="bg-info learn-more m-1 flex items-center justify-center rounded py-1 py-1 px-3 text-white">Visit
                Website</a>
        </span>
        <p>
            {{ $listing->description }} <a href="/listings/{{ $listing->id }}" class="learn-more">
                <b>Details</b></a>
        </p>
    </div>
</x-card>
