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
                    src="{{ asset('app-assets/img/not-authorized.svg')}}"
                    alt="Registrar" />
            </div>
        </div>
        <!-- /Left Text-->
        <!-- Login-->
        <div class="px-2 d-flex col-lg-4 align-items-center auth-bg p-lg-5">
            <div class="mx-auto col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2">
                <h2 class="mb-1 card-title font-weight-bold">Obrigado por inscrever-se!</h2>
                @if (session('status') == 'verification-link-sent')
                    <div class="mb-1 text-success">
                        {{ __('Um novo link de verificação foi enviado para o e-mail que você cadastrou.') }}
                    </div>
                @endif
                <p class="mb-1">Antes de começar, você precisa confirmar seu endereço de e-mail clicando no link que acabamos de enviar para você?</p>
                <p class="mb-1">Se você não recebeu o e-mail, teremos o prazer de enviar outro.</p>


        <div class="mb-1 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('Reenviar confirmação') }}
                    </x-button>
                </div>
            </form>
        </div>
        <div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="link">
                    {{ __('Sair') }}
                </button>
            </form>
        </div>
</x-guest-layout>
