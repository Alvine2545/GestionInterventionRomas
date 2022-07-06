@extends('layout')
@section('content')

    <div class="j-wrapper j-wrapper-450" style="width: 40%">
        
        <form method="POST" action="{{ route('register') }}" class="j-pro" id="j-pro" novalidate="">
            <h5 class="text-center" style="margin-top: 5%">Inscription</h5>
            @csrf
            <div class="j-content">
                <div class="j-unit">
                    <x-jet-label for="name" value="{{ __('Nom') }}" />
                    <div class="j-input">
                        <label class="j-icon-right" for="name" for="name" value="{{ __('Name') }}">
                            <i class="icofont icofont-ui-user"></i>
                        </label>
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>
                </div>
                <div class="j-unit">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <div class="j-input">
                        <label class="j-icon-right" for="login" for="email" value="{{ __('Email') }}">
                            <i class="icofont icofont-ui-user"></i>
                        </label>
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                    </div>
                </div>
                <div class="j-unit">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <div class="j-input">
                        <label class="j-icon-right" for="password" for="password" value="{{ __('Password') }}">
                            <i class="icofont icofont-lock"></i>
                        </label>
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    </div>
                </div>
                <div class="j-unit">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <div class="j-input">
                        <label class="j-icon-right" for="password_confirmation" for="password_confirmation" value="{{ __('Comfirmer le mot de passe') }}">
                            <i class="icofont icofont-lock"></i>
                        </label>
                        <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>
                </div>
                <div class="j-footer flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Vous avez dejà un compte?') }}
                    </a>
                    <button type="submit" class="btn btn-primary ml-4">{{ __('Enregistrer') }}</button>

                </div>
            </div>
        </form>
    </div>
@endsection