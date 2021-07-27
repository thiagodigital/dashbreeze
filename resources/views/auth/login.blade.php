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
                    src="{{ asset('app-assets/img/login.svg')}}"
                    alt="Login" />
            </div>
        </div>
        <!-- /Left Text-->
        <!-- Login-->
        <div class="px-2 d-flex col-lg-4 align-items-center auth-bg p-lg-5">
            <div class="mx-auto col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2">
                <h2 class="mb-1 card-title font-weight-bold">Bem Vindo</h2>
                <p class="mb-2 card-text">Por favor entre com seus dados de email e senha para entrar</p>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="mb-1">
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="mb-1">
                        <x-label for="password" :value="__('Senha')" />

                        <div class="input-group input-group-merge form-password-toggle">
                            <input class="form-control form-control-merge" id="password"
                            type="password"
                            name="password"
                            autocomplete="current-password"
                            placeholder="············"
                            aria-describedby="login-password"
                            required
                            tabindex="2"/>
                            <span class="input-group-text cursor-pointer">
                                <x-feathericon-eye />
                            </span>
                          </div>
                    </div>

                    <!-- Remember Me -->
                    <div class="mb-1">
                        <label for="remember_me" class="form-check">
                            <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                            <span class="form-check-label">{{ __('Lembrar') }}</span>
                        </label>
                    </div>

                    @if (Route::has('password.request'))
                        <div class="mb-1">
                            <a href="{{ route('password.request') }}">
                                {{ __('Recuperar senha') }}
                            </a>
                        </div>
                    @endif
                    <div class="mb-1">
                        <x-button>
                            {{ __('Entrar') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
