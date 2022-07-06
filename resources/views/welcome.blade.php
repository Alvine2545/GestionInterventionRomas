@extends('layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <!-- Authentication card start -->
            
                <form class="md-float-material form-material">
                    <div class="text-center">
                        
                        <!--img src="..\files\assets\images\logo.png" alt="Gest Interventions"-->
                    </div>
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center">Welcome</h3>
                                </div>
                            </div>
                            @if (Route::has('login'))
                                <div class="py-4 sm:block">
                                @auth
                                <div class="col-md-12">
                                    <a href="{{ url('/dashboard') }}" class="text-sm">
                                        <button type="button" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">
                                        Dashboard
                                        </button>
                                    </a>
                                </div>
                            @else
                            <div class="py-4 sm:block">
                            <div class="col-md-12">
                                <a href="{{ route('login') }}">   
                                <button type="button" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">
                                    Se connecter
                                </button></a>
                            </div>
                        </div>
                            @if (Route::has('register'))
                            <div class="py-4 sm:block">
                                <div class="col-md-12">
                                    <a href="{{ route('register') }}">   
                                    <button type="button" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">
                                        S'inscrire
                                    </button></a>
                                </div>
                            </div>
                            @endif
                            @endauth
                        </div>
                        @endif
                           
                            <hr>
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="text-inverse text-left m-b-0">Thank you.</p>
                                </div>
                                <div class="col-md-2">
                                    <img src="{{asset('files\assets\images\auth\logo.jpg')}}" alt="small-logo.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- end of form -->
        </div>
        <!-- end of col-sm-12 -->
    </div>
    <!-- end of row -->
</div>
@endsection

