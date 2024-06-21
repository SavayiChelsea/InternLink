<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/signin.css') }}" />
    <title>Sign in & Sign up Form</title>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <!-- Sign In Form -->
                <form method="POST" action="{{ route('login') }}" class="sign-in-form ">
                    @csrf
                    <h2 class="title">Sign in</h2>
                    <x-validation-errors class="mb-4" />

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus autocomplete="username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Password" required autocomplete="current-password" />
                    </div>
                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-checkbox id="remember_me" name="remember" />
                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <input type="submit" value="Login" class="btn solid" />
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                </form>

                <!-- Sign Up Form -->
                <form method="POST" action="{{ route('register') }}" class="sign-up-form active ">
                    @csrf
                    <h2 class="title">Student Sign up</h2>
                    <x-validation-errors class="mb-4" />

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder="Name" required autofocus autocomplete="name" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Email" required autocomplete="username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Password" required autocomplete="new-password" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password" />
                    </div>

                    <!-- Password Guidelines -->
                    <div class="mt-4">
                        <p class="text-sm text-red-600">
                            {{ __('Password Guidelines!') }}
                        </p>
                        <ul class="text-sm text-white-600 list-disc pl-5 mt-1">
                            <li>{{ __('At least 8 characters long') }}</li>
                            <li>{{ __('At least one uppercase letter') }}</li>
                            <li>{{ __('At least one lowercase letter') }}</li>
                            <li>{{ __('At least one number') }}</li>
                            <li>{{ __('At least one special character') }}</li>
                        </ul>
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />

                                    <div class="ms-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif

                    <input type="submit" class="btn" value="Sign up" />
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"id="already-registered-link" >
                            {{ __('Already registered?') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                        ex ratione. Aliquid!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>
                <img src="{{ URL('images/log.svg') }}" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                        laboriosam ad deleniti.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="{{ URL('images/register.svg') }}" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="{{ asset('js/signup.js') }}"></script>
</body>
</html>
