@extends('layout')
@section('content')

    <div class="j-wrapper j-wrapper-450" style="width: 40%">

        <form method="POST" action="{{ route('register') }}" class="j-pro" id="j-pro" novalidate="">
            <h4 class="text-center" style="margin-top: 5%">Inscription</h4>
            @csrf
            <div class="j-content">
                <div class="j-unit">
                    <x-jet-label for="name" value="{{ __('Nom') }}" />
                    <div class="j-input">
                        <label class="j-icon-right" for="name" for="name" value="{{ __('Name') }}">
                            <i class="icofont icofont-ui-user"></i>
                        </label>
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <span class="messages"></span>
                    </div>
                </div>
                <div class="j-unit">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <div class="j-input">
                        <label class="j-icon-right" for="login" for="email" value="{{ __('Email') }}">
                            <i class="icofont icofont-envelope"></i>
                        </label>
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                            <span class="messages"></span>
                    </div>
                </div>
                <div class="j-unit">
                    <x-jet-label for="password" value="{{ __('Mot de passe') }}" />
                    <div class="j-input">
                        <label class="j-icon-right" for="password" for="password" value="{{ __('Password') }}">
                            <i class="icofont icofont-lock"></i>
                        </label>
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    </div>
                </div>
                <div class="j-unit">
                    <x-jet-label for="password" value="{{ __('Confirmer le mot de passe') }}" />
                    <div class="j-input">
                        <label class="j-icon-right" for="password_confirmation" for="password_confirmation" value="{{ __('Comfirmer le mot de passe') }}">
                            <i class="icofont icofont-lock"></i>
                        </label>
                        <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                        <span class="messages"></span>
                    </div>
                </div>
                <div class="j-footer flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Vous avez dejà un compte?') }}
                    </a>
                    <button type="submit" id="submit" class="btn btn-primary ml-4">{{ __('Enregistrer') }}</button>
                </div>
            </div>
        </form>
    </div>
@endsection
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>


<script>
        $(document).ready(function() 
        {
          $("#j-pro").validate({
            rules: 
            {
                name : 
                {
                    required: true,
                    minlength: 3
                },
                password: 
                {
                    required: true,
                    min: 9
                },
                email: 
                {
                    required: true,
                    email: true
                },
                password_confirmation: 
                {
                    required: true,
                    equalTo: "#password",
                    min: 9
                }
            },
            messages : {
                name: {
                    minlength: "Minimum 3 caractères",
                    required: "Veuillez renseignez votre nom",
                },
                password: {
                    required: "Veuillez entrer un mot de passe",
                    min: "Minimum 9 caractères",
                },
                email: {
                    email: "Veuillez renseigner un mot de passe valide",
                },
                password_confirmation: {
                    required: "Veuillez comfirmer le mot de passe",
                    equalTo: "Le mot de passe doit être conforme",
                    min: "Minimum 9 caractères",
                }
            }
   });
});
</script>