<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />

<form method="POST" action="{{ route('login') }}">
    @csrf
    <!-- Email Address -->
    <div>
        <x-label for="email" :value="__('Email')" />

        <x-input id="email" class="block mt-1 w-full" type="email"
        name="email" :value="old('email')" placeholder="exemplo@gmail.com" required autofocus />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-label for="password" :value="__('Password')" />
        <x-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="current-password" />
    </div>

    <!-- Remember Me -->
    <div class="block mt-4">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
    </div>
    <hr class="my-4">
    <h2 class="fs-5 fw-bold mb-3">Ou entre com suas redes sociais</h2>
    <a href="#" role="button"
    class="w-100 py-2 mb-2 btn btn-outline-dark rounded-4">
        <i class="fab fa-twitter fa-fw"></i>
        Entrar com Twitter
    </a>
    <a href="{{ route('login.facebook.auth') }}" role="button"
    class="w-100 py-2 mb-2 btn btn-outline-primary rounded-4">
            <i class="fab fa-facebook-f fa-fw"></i>
            Entrar com Facebook
    </a>
    <a href="{{ route('login.github.auth') }}" role="button"
    class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-4">
        <i class="fab fa-github fa-fw"></i>
        Entrar com Github
    </a>
    <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
            <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif

        <x-button class="ml-3">
            {{ __('Log in') }}
        </x-button>
    </div>
</form>

