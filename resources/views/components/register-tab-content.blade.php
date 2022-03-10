<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />

<div id="registerAsDiv" class="list-group">
  <a href="#registerForm" onclick="show_more('admin');"
  data-bs-toggle="collapse" class="list-group-item list-group-item-action d-flex gap-3 py-3"
  aria-current="true">
    <img src="{{asset('assets/img/gerente.png')}}" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
    <div class="d-flex gap-2 w-100 justify-content-between">
      <div>
        <h6 class="mb-0">Admin</h6>
        <p class="mb-0 opacity-75">Seja um admin do nosso app.</p>
      </div>
    </div>
  </a>
  <a href="#registerForm" onclick="show_more('corretor');"
  data-bs-toggle="collapse" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    <img src="{{asset('assets/img/corretor-de-imoveis.png')}}" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
    <div class="d-flex gap-2 w-100 justify-content-between">
      <div>
        <h6 class="mb-0">Corretor</h6>
        <p class="mb-0 opacity-75">Seja um dos nossos corretores.</p>
      </div>
    </div>
  </a>
  <a href="#registerForm" onclick="show_more('user');"
  data-bs-toggle="collapse" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    <img src="{{asset('assets/img/user.png')}}" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
    <div class="d-flex gap-2 w-100 justify-content-between">
      <div>
        <h6 class="mb-0">Usuário comum</h6>
        <p class="mb-0 opacity-75">Venha fazer parte da nossa comunidade.</p>
      </div>
    </div>
  </a>
</div>

<form id="registerForm" class="collapse" method="POST" action="{{ route('register') }}">
    @csrf

    <div class="dropdown container pb-3">
        <a name="a-title" class="text-decoration-none text-gray-600 hover:text-gray-900"
        href="javascript:;" onclick="show_less();">
            <i class="fa fa-angle-left fa-lg"></i>
            <small id="registerAsTitle" class="display-6 ps-3 "></small>
        </a>
        <hr>
    </div>

    <!-- Name -->
    <div>
        <x-label for="name" :value="__('Name')" />

        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-label for="email" :value="__('Email')" />

        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-label for="password" :value="__('Password')" />

        <x-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="new-password" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <x-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-input id="password_confirmation" class="block mt-1 w-full"
                        type="password"
                        name="password_confirmation" required />
    </div>

    <div class="flex items-center justify-end mt-4">
        <x-button class="ml-4">
            {{ __('Register') }}
        </x-button>
    </div>
</form>