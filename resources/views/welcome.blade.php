<x-guest-layout>
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
        >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-7">
                        <img src="/images/login-page-img.png" alt="" />
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="login-box bg-white box-shadow border-radius-10">
                            <div class="login-title">
                                <h2 class="text-center text-primary">Login To DeskApp</h2>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="select-role">
                                    <x-auth-session-status class="mb-4" :status="session('status')" />
                                </div>
                                <div class="input-group custom">
                                    <x-text-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email"/>
                                    <div class="input-group-append custom">
                                        <span class="input-group-text"
                                            ><i class="icon-copy dw dw-user1"></i
                                        ></span>
                                    </div>
                                </div>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                <div class="input-group custom">
                                    <x-text-input id="password" class="form-control form-control-lg"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="current-password" 
                                                    placeholder="**********"/>
                                    <div class="input-group-append custom">
                                        <span class="input-group-text"
                                            ><i class="dw dw-padlock1"></i
                                        ></span>
                                    </div>
                                </div>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                <div class="row pb-30">
                                    <div class="col-6">
                                        <div class="custom-control custom-checkbox">
                                            <input
                                                type="checkbox"
                                                class="custom-control-input"
                                                id="remember_me"
                                                name="remember"
                                            />
                                            <label class="custom-control-label" for="remember_me"
                                                >Remember</label
                                            >
                                        </div>
                                    </div>
                                    @if ($errors->get('email') || $errors->get('password'))
                                        <div class="col-6">
                                            <div class="forgot-password">
                                                <a href="{{ route('password.request') }}">Forgot Password</a>
                                            </div>
                                        </div>
                                    @endif
                                    
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group mb-0">
                                            <!--
                                            use code for form submit
                                            <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
                                        -->
                                        <x-primary-button class="btn btn-primary btn-lg btn-block">
                                            {{ __('Sign In') }}
                                        </x-primary-button>

                                        </div>
                                        <div
                                            class="font-16 weight-600 pt-10 pb-10 text-center"
                                            data-color="#707373"
                                        >
                                            OR
                                        </div>
                                        <div class="input-group mb-0">
                                            <a
                                                class="btn btn-outline-primary btn-lg btn-block"
                                                href="{{ route('register') }}"
                                                >Register To Create Account</a
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

        
        
