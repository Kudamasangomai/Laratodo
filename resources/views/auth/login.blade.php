<x-guest-layout>
    <x-auth-card>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" />

        <x-splade-form action="{{ route('login') }}" class="space-y-4">
            <!-- Email Address -->
            <x-splade-input id="email" type="email" name="email" :label="__('Email')" required autofocus />
            <x-splade-input id="password" type="password" name="password" :label="__('Password')" required autocomplete="current-password" />
           

            <div class="flex items-center justify-end">
                @if (Route::has('password.request'))
            
                    <Link class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('register') }}">
                    {{ __('Sign Up?') }}
                    </Link>
                @endif

                <x-splade-submit class="ml-3 bg-blue-500" :label="__('Log in')" />
            </div>
        </x-splade-form>
    </x-auth-card>
</x-guest-layout>
