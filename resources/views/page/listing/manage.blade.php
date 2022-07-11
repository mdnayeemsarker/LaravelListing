<x-layout>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Photo</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @unless($listings->isEmpty())
                @foreach ($listings as $listing)
                    <tr>
                        <th scope="row">
                            <h3> {{ $listing->id }}</h3>
                        </th>
                        <td>
                            {{ $listing->title }}
                        </td>
                        <td>
                            <img class="" height="100px" width="100"
                                src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/user.png') }}"
                                alt="">
                        </td>
                        <td>
                            {{ $listing->description }}
                        </td>
                        <td>
                            <a href="/listings/{{ $listing->id }}/edit"> Edit
                            </a>
                            <form action="/listings/{{ $listing->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="text-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </tfoot>
        </table>
        <div class="mt-6 p-2">
            {{ $listings->links() }}
        </div>
    @else
        <p>No LIsting Found</p>
    @endunless

</x-layout>
