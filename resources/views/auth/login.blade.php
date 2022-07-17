@extends('layout')
<script type="text/javascript" src="{{asset('files\bower_components\jquery\js\jquery.min.js')}}"></script>

<script>
function validerCode() {
if (!$('#password').val()) {
    $('#message').text("Vous devez entrer un mot de passe valide");
    return false;
}
else {
    $('#message').text("");
    return true;
}
}
function validerEmail() {
    var regex = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
if (!$('#email').val()) {
    $('#messages').text("Vous devez entrer un email valide.");
    return false;
}
else {
    $('#messages').text("");
    return true;
}
}

$(function() {

// validation du code aussitôt qu'on quitte le contrôle de saisie

//$('#email').blur(validerCode);
// validation lors de la soumission

$('#soumettre').click(function (event) {
    if (!validerCode() || !validerEmail()) {
        event.preventDefault();
    }
});

});
</script>
@section('content')

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <div class="j-wrapper j-wrapper-400" style="width: 50%">
        
        <form method="POST" action="{{ route('login') }}" class="j-pro" id="j-pro" name="j-pro" novalidate="">
            <h4 class="text-center" style="margin-top: 5%">Authentification</h4>
            @csrf
            <div class="j-content">
                <div class="j-unit">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <div class="j-input">
                        <label class="j-icon-right" for="login" for="email" value="{{ __('Email') }}">
                            <i class="icofont icofont-ui-user"></i>
                        </label>
                        <x-jet-input id="email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        <span class="messages" id="messages" style="color: red"></span>
                    </div>
                </div>
                <div class="j-unit">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <div class="j-input">
                        <label class="j-icon-right" for="password" for="password" value="{{ __('Password') }}">
                            <i class="icofont icofont-lock"></i>
                        </label>
                        <x-jet-input id="password" class="form-control block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                        <span class="message" id="message" style="color: red"></span>
                    </div>
                </div>
    
                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Se souvenir de moi') }}</span>
                    </label>
                    
                </div>
                <div class="text-right">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                    {{ __('Créer un compte') }}</a>
                </div>
                <div class="j-footer flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Mot de passe oublié ?') }}
                        </a>
                    @endif
                    <button id="soumettre" type="submit" class="btn btn-primary">{{ __('Se connecter') }}</button>

                </div>
            </div>
        </form>
    </div>
@endsection