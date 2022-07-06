@extends('layout')
@section('content')
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <div class="j-wrapper j-wrapper-400" style="width: 50%">
        
        <form method="POST" action="{{ route('password.email') }}" class="j-pro" id="j-pro" novalidate="">
            <h5 class="text-center" style="margin-top: 5%">Lien de réinitialisation</h5>
            
            @csrf
            <div class="j-content">
                <div class="mb-4 text-sm text-white-600">
                    {{ __('Mot de passe oublié? Pas de problème. Entrez votre adresse email pour réinitialiser le mot de passe.') }}
                </div>
                <div class="j-unit">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <div class="j-input">
                        <label class="j-icon-right" for="login" for="email" value="{{ __('Email') }}">
                            <i class="icofont icofont-ui-user"></i>
                        </label>
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
                </div>
                <div class="j-footer flex items-center justify-end mt-4">
                   
                    <button type="submit" class="btn btn-primary">{{ __('Envoyer le lien') }}</button>

                </div>
            </div>
        </form>
    </div>
@endsection