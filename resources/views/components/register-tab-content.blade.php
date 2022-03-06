<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />

<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-floating mb-3">
        <input type="text" class="form-control rounded-4" id="floatingInputName"
        placeholder="Seu Nome" required>
        <label for="floatingInputName">Seu Nome</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control rounded-4" id="floatingInputEmail"
        placeholder="name@example.com" required>
        <label for="floatingInputEmail">Endereço de e-mail</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control rounded-4" id="floatingPasswordRegister"
        placeholder="Senha" required>
        <label for="floatingPasswordRegister">Senha</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control rounded-4" id="floatingPasswordConfirmation"
        placeholder="Senha" required>
        <label for="floatingPasswordConfirmation">Confirmação de Senha</label>
    </div>
    <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Registre-se</button>
    <small class="text-muted">Ao se registrar, você concorda com os Termos de Uso</small>
</form>