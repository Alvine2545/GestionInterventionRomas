@extends('layout')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="{{asset('files\bower_components\jquery\js\jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

<script>
        $(document).ready(function() {
            alert("gfvc");
  $("#j-pro").validate({
    rules: {
      name : {
        required: true,
        minlength: 3
      },
      password: {
        required: true,
        min: 8
      },
      email: {
        required: true,
        email: true
      },
      password_confirmation: {
        required: true,
        min: 8,
        min: 0
      }
    },
    messages : {
      name: {
        minlength: "Minimum 3 caractères",
        required: "Veuillez renseignez votre nom",
      },
      password: {
        required: "Please enter your age",
        min: "You must be at least 8 years old",
      },
      email: {
        email: "The email should be in the format: abc@domain.tld",
      },
      password_confirmation: {
        required: "People with age over 50 have to enter their weight",
      }
    }
  });
});
</script>
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