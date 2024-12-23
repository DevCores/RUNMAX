<x-guest-layout>
    <div
            class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
        >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="vendors/images/forgot-password.png" alt="" />
                    </div>
                    <div class="col-md-6">
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <div class="login-box bg-white box-shadow border-radius-10">
                            <div class="login-title">
                                <h2 class="text-center text-primary">Forgot Password</h2>
                            </div>
                            <h6 class="mb-20">
                                Enter your email address to reset your password
                            </h6>
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="input-group custom">
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="Email"/>
                                    
                                    <div class="input-group-append custom">
                                        <span class="input-group-text"
                                            ><i class="fa fa-envelope-o" aria-hidden="true"></i
                                        ></span>
                                    </div>
                                </div>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <div class="input-group mb-0">
                                            <!--
                                            use code for form submit
                                            <input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit">
                                        -->
                                            <x-primary-button>
                                                Submit
                                            </x-primary-button>
                                            
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div
                                            class="font-16 weight-600 text-center"
                                            data-color="#707373"
                                        >
                                            OR
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="input-group mb-0">
                                            <a
                                                class="btn btn-outline-primary btn-lg btn-block"
                                                href="{{route('login')}}"
                                                >Login</a
                                            >
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</x-guest-layout>
