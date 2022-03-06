<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />

<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-floating mb-3">
        <input type="email" class="form-control rounded-4" id="floatingInput"
        placeholder="name@example.com" required>
        <label for="floatingInput">Endereço de e-mail</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control rounded-4" id="floatingPassword"
        placeholder="Password" required>
        <label for="floatingPassword">Senha</label>
    </div>
    <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Entrar</button>
    <!--<small class="text-muted">Ao , you agree to the terms of use.</small>-->
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
</form>