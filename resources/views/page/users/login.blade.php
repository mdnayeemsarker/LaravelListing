<x-layout>
    <x-card class="vh-90" style="background-color: #eee;">
        <div class="h-90 container">
            <div class="row d-flex justify-content-center align-items-center h-90">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-lg-1 order-2">

                                    <p class="h1 fw-bold mx-md-4 mx-1 mb-5 mt-4 text-center">Sign in</p>

                                    <form action="/users/login" method="POST" class="mx-md-4 mx-1">
                                        @csrf
                                        <div class="d-flex align-items-center mb-4 flex-row">
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="email">Your Email</label>
                                                <input type="email" id="email" name="email"
                                                    class="form-control" />
                                                @error('email')
                                                    <p class="text-danger mt-1 text-xs">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center mb-4 flex-row">
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="password">Password</label>
                                                <input type="password" id="password" name="password"
                                                    class="form-control" />
                                                @error('password')
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
                                            <button type="submit" class="btn btn-primary btn-lg">Login</button>
                                        </div>

                                        <p class="text-primary">Not Have an account.?</p>
                                        <div class="d-flex justify-content-center mb-lg-4 mx-4 mb-3">
                                            <a type="button" href="{{ '/register' }}"
                                                class="btn btn-primary btn-lg">Register</a>
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
