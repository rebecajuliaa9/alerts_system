<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <div class="col-md-12" style="font-size:30px;">Login</div>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Senha') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Lembrar-me') }}</span>
                </label>
            </div>
            @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Já possui uma senha?') }}
                    </a>
                @endif

            <div class="flex items-center mt-4">
            <x-jet-button class="ml-4">
                   <a href="/register" > {{ __('Cadastrar') }} </a>
                </x-jet-button>    
            
                <x-jet-button class="ml-4" style="margin-left:160px">
                    {{ __('Log in') }}
                </x-jet-button>
                
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
