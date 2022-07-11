<x-layout>
    <x-card class="vh-120" style="background-color: #eee;">
        <div class="h-120 container">
            <div class="row d-flex justify-content-center align-items-center h-120">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-lg-1 order-2">

                                    <p class="h1 fw-bold mx-md-4 mx-1 mb-5 mt-4 text-center">Sign up</p>

                                    <form action="/users" method="POST" class="mx-md-4 mx-1">
                                        @csrf
                                        <div class="d-flex align-items-center mb-4 flex-row">
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="name">Your Name</label>
                                                <input type="text" value="{{ old('name') }}" id="name"
                                                    name="name" class="form-control" />
                                                @error('name')
                                                    <p class="text-danger mt-1 text-xs">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center mb-4 flex-row">
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="email">Your Email</label>
                                                <input type="email" value="{{ old('email') }}" id="email"
                                                    name="email" class="form-control" />
                                                @error('email')
                                                    <p class="text-danger mt-1 text-xs">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center mb-4 flex-row">
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="password">Password</label>
                                                <input type="password" id="password" name="password"
                                                    value="{{ old('password') }}" class="form-control" />
                                                @error('password')
                                                    <p class="text-danger mt-1 text-xs">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center mb-4 flex-row">
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="password_confirmation">Repeat your
                                                    password</label>
                                                <input type="password" name="password_confirmation"
                                                    id="password_confirmation"
                                                    value="{{ old('password_confirmation') }}" class="form-control" />
                                                @error('password_confirmation')
                                                    <p class="text-danger mt-1 text-xs">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <input class="form-check-input me-2" name="checkbox" type="checkbox"
                                                value="" id="form2Example3c" />
                                            <label class="form-check-label" for="form2Example3c">
                                                I agree all statements in <a href="#!">Terms of service</a>
                                            </label>
                                            @error('checkbox')
                                                <p class="text-danger mt-1 text-xs">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="d-flex justify-content-center mb-lg-4 mx-4 mb-3">
                                            <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                        </div>

                                        <p class="text-primary">Already Have an account.?</p>
                                        <div class="d-flex justify-content-center mb-lg-4 mx-4 mb-3">
                                            <a type="button" href="{{ '/login' }}"
                                                class="btn btn-primary btn-lg">Login</a>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-lg-2 order-1">

                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                        class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-card>
</x-layout>
