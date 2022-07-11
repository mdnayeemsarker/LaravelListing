<x-layout>
    <x-card class="m-5 max-w-lg p-10">
        <header class="text-center">
            <h2 class="mb-1 text-2xl font-bold uppercase">Edit Listing</h2>
            <p class="mb-4">Edit: {{ $listing->title }}</p>
        </header>
        <form action="/listings/{{ $listing->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-md-12 mb-3">
                <label for="company" class="inline-block text-lg">Edit: Company Name
                    <span class="text-danger">*</span>
                </label><br>
                <input type="text" class="col-md-12 rounded border border-gray-200 p-2" name="company"
                    value="{{ $listing->company }}" id="company">
                @error('company')
                    <p class="text-danger mt-1 text-xs">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-md-12 mb-3">
                <label for="title" class="inline-block text-lg">Edit: Job Title
                    <span class="text-danger">*</span></label><br>
                <input type="text" class="col-md-12 rounded border border-gray-200 p-2" name="title"
                    value="{{ $listing->title }}" id="title">
                @error('title')
                    <p class="text-danger mt-1 text-xs">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-md-12 mb-3">
                <label for="location" class="inline-block text-lg">Edit: Location
                    <span class="text-danger">*</span></label><br>
                <input type="text" class="col-md-12 rounded border border-gray-200 p-2" name="location"
                    value="{{ $listing->location }}" id="location">
                @error('location')
                    <p class="text-danger mt-1 text-xs">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-md-12 mb-3">
                <label for="tags" class="inline-block text-lg">Edit: Tags (Comma Separated)
                    <span class="text-danger">*</span></label>
                <input type="text" class="col-md-12 rounded border border-gray-200 p-2" name="tags"
                    value="{{ $listing->tags }}" id="tags">
                @error('tags')
                    <p class="text-danger mt-1 text-xs">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-md-12 mb-3">
                <label for="email" class="inline-block text-lg">Edit: Contact Email
                    <span class="text-danger">*</span></label>
                <input type="email" class="col-md-12 rounded border border-gray-200 p-2" name="email"
                    value="{{ $listing->email }}" id="email">
                @error('email')
                    <p class="text-danger mt-1 text-xs">{{ $message }}</p>
                @enderror
                email
            </div>
            <div class="col-md-12 mb-3">
                <label for="website" class="inline-block text-lg">Edit: Website Url
                    <span class="text-danger">*</span></label>
                <input type="text" class="col-md-12 rounded border border-gray-200 p-2" name="website"
                    value="{{ $listing->website }}" id="website">
                @error('website')
                    <p class="text-danger mt-1 text-xs">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-md-12 mb-3">
                <label for="logo" class="inline-block text-lg">Company Logo
                    <span class="text-danger">*</span></label>
                <input type="file" class="col-md-12 rounded border border-gray-200 p-2" name="logo"
                    id="logo">
                @error('logo')
                    <p class="text-danger mt-1 text-xs">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-md-12 mb-3">
                <label for="description" class="inline-block text-lg">Job Description
                    <span class="text-danger">*</span></label>
                <textarea type="textarea" class="col-md-12 rounded border border-gray-200 p-2" name="description"
                    placeholder="Example: Senior, Laravel, Debeloper" id="description">
                    {{ $listing->description }}
                </textarea>
                @error('description')
                    <p class="text-danger mt-1 text-xs">{{ $message }}</p>
                @enderror
            </div>
            <input type="submit" class="bg-primary pl-10 pr-10 text-white" value="Update">
        </form>
    </x-card>
</x-layout>
