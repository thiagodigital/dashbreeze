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
                    src="{{ asset('app-assets/img/forgot-password.svg')}}"
                    alt="Registrar" />
            </div>
        </div>
        <!-- /Left Text-->
        <!-- Login-->
        <div class="px-2 d-flex col-lg-4 align-items-center auth-bg p-lg-5">
            <div class="mx-auto col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2">
                <h2 class="mb-1 card-title font-weight-bold">Esqueceu sua senha?</h2>
                <p class="mb-2 card-text">Sem problemas. Basta nos informar seu endereço de e-mail e nós enviaremos um link de redefinição de senha que permitirá que você escolha uma nova.</p>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Enviar link por email') }}
                </x-button>
            </div>
        </form>
            </div>
        </div>
    </div>

</x-guest-layout>
