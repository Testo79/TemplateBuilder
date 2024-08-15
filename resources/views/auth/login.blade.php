<!DOCTYPE html>
<html lang="en">

</html>
@include("auth/login-partials/head")

<body>



    <div class="container" id="container">
        <div class="form-container sign-up">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1>Create Account</h1>

                <!-- Name -->
                <div class="input ">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                        required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <!-- Email Address -->
                <div class="mt-4 input">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4 input">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Sign In</h1>


                <!-- Email Address -->
                <div class="input">
                    <x-input-label for="email" :value="__('Email')" />
                    <input id="email" type="email" name="email" :value="old('email')" required autofocus
                        autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />


                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <input id="password" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                </div>
                <a href="#">Forget Your Password?</a>
                <button>Sign in</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('front-assets/js/login-script.js') }}"></script>

</body>

</html>