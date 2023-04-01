<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Email Verification') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Your account is currently unverified, please verify your email first') }}
        </p>
    </header>

    <form id="send-verification" method="get" action="{{ route('verification.notice') }}" class="mt-2 space-y-2">
        <x-primary-button>{{ __('Verification')}}</x-primary-button>
    </form>

</section>