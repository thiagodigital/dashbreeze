<x-guest-layout>
    <div class="m-0 auth-inner row">
        <a class="brand-logo" href="/">
            <x-application-logo width="40" height="40" class="fill-current" />
            <h2 class="brand-text text-primary ms-1">{{ env('APP_NAME', 'digitalfront') }}</h2>
        </a>
        <!-- Left Text-->
        <div class="d-none d-lg-flex col-lg-8 align-items-center">
            <div class="px-5 w-100 d-lg-flex align-items-center justify-content-center">
                <img class="img-fluid"
                    src="{{ asset('app-assets/img/register.svg')}}"
                    alt="Registrar" />
            </div>
        </div>
        <!-- /Left Text-->
        <!-- Login-->
        <div class="px-2 d-flex col-lg-4 align-items-center auth-bg p-lg-5">
            <div class="mx-auto col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2">
                <h2 class="mb-1 card-title font-weight-bold">Criar Conta</h2>
                <p class="mb-2 card-text">Por favor entre com seu nome, email e senha para criar uma conta</p>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-1">
                <x-label for="name" :value="__('Nome')" />
                <x-input id="name" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mb-1">
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mb-1">
                <x-label for="password" :value="__('Senha')" />
                <x-input id="password"  type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-1">
                <x-label for="password_confirmation" :value="__('Confirmar Senha')" />
                <x-input id="password_confirmation" type="password" name="password_confirmation" required />
            </div>

            <div class="mb-1">
                <a href="{{ route('login') }}">
                    {{ __('Já tem uma conta?') }}
                </a>
            </div>
            <div class="mb-1">
                <x-button class="ml-4">
                    {{ __('Registrar') }}
                </x-button>
            </div>
        </form>
    </div>
</div>
</div>
</x-guest-layout>
