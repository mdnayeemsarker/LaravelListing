<x-layout>
    <x-card class="m-5 max-w-lg p-10">


        <section class="vh-100" style="background-color: #eee;">
            <div class="h-100 container">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-12 col-xl-11">
                        <div class="card text-black" style="border-radius: 25px;">
                            <div class="card-body p-md-5">
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-6">
                                        <header class="text-center">
                                            <h2 class="mb-1 text-2xl font-bold uppercase">Create New Listing</h2>
                                            <p class="mb-4">Listing for finding new Developer</p>
                                        </header>
                                        <form action="/listings" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-md-12 mb-3">
                                                <label for="company" class="inline-block text-lg">Company Name
                                                    <span class="text-danger">*</span>
                                                </label><br>
                                                <input type="text"
                                                    class="col-md-12 rounded border border-gray-200 p-2" name="company"
                                                    value="{{ old('company') }}" placeholder="Example: ABC Ltd"
                                                    id="company">
                                                @error('company')
                                                    <p class="text-danger mt-1 text-xs">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="title" class="inline-block text-lg">Job Title
                                                    <span class="text-danger">*</span></label><br>
                                                <input type="text"
                                                    class="col-md-12 rounded border border-gray-200 p-2" name="title"
                                                    value="{{ old('title') }}"
                                                    placeholder="Example: Senior Laravel Debeloper" id="title">
                                                @error('title')
                                                    <p class="text-danger mt-1 text-xs">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="location" class="inline-block text-lg">Location
                                                    <span class="text-danger">*</span></label><br>
                                                <input type="text"
                                                    class="col-md-12 rounded border border-gray-200 p-2" name="location"
                                                    value="{{ old('location') }}"
                                                    placeholder="Example: Mithapukur, Rangpur, Dangladesh"
                                                    id="location">
                                                @error('location')
                                                    <p class="text-danger mt-1 text-xs">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="tags" class="inline-block text-lg">Tags (Comma
                                                    Separated)
                                                    <span class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="col-md-12 rounded border border-gray-200 p-2" name="tags"
                                                    value="{{ old('tags') }}"
                                                    placeholder="Example: Senior, Laravel, Debeloper" id="tags">
                                                @error('tags')
                                                    <p class="text-danger mt-1 text-xs">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="email" class="inline-block text-lg">Contact Email
                                                    <span class="text-danger">*</span></label>
                                                <input type="email"
                                                    class="col-md-12 rounded border border-gray-200 p-2" name="email"
                                                    value="{{ old('email') }}" placeholder="Example: tg***x@email.com"
                                                    id="email">
                                                @error('email')
                                                    <p class="text-danger mt-1 text-xs">{{ $message }}</p>
                                                @enderror
                                                email
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="website" class="inline-block text-lg">Website Url
                                                    <span class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="col-md-12 rounded border border-gray-200 p-2" name="website"
                                                    value="{{ old('website') }}"
                                                    placeholder="Example: http://example.com" id="website">
                                                @error('website')
                                                    <p class="text-danger mt-1 text-xs">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="logo" class="inline-block text-lg">Company Logo
                                                    <span class="text-danger">*</span></label>
                                                <input type="file"
                                                    class="col-md-12 rounded border border-gray-200 p-2" name="logo"
                                                    id="logo">
                                                @error('logo')
                                                    <p class="text-danger mt-1 text-xs">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="description" class="inline-block text-lg">Job Description
                                                    <span class="text-danger">*</span></label>
                                                <input type="textarea"
                                                    class="col-md-12 rounded border border-gray-200 p-2"
                                                    name="description" placeholder="Example: Senior, Laravel, Debeloper"
                                                    id="description">
                                                @error('description')
                                                    <p class="text-danger mt-1 text-xs">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <input type="submit" class="bg-primary pl-10 pr-10 text-white"
                                                value="Store">
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-card>
</x-layout>
