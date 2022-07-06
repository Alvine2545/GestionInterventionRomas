@extends('home/index')

@section('content')


    <!--section contacts-->
    <section id="models" class="py-5" style="margin-top: 5.5em">
        <div class="container">

            <div class="text-center">
                <h2 class="position-relative d-inline-block">Contacts</h2>
            </div>

            <div class="w-100 text-center">
                <hr class="w-70">
            </div>

            <div class="d-flex  justify-content-center mt-4" style="flex-direction: column">

                <div class="text-center mt-5">

                    <p class="">Vous êtes <span style="font-weight: bold"> particulier </span> et vous avez des questions sur <span style="font-weight: bold; color:goldenrod;"> E-Couture </span> ou sur un autre de nos produits :</p>
                    <a href="#" class="text-dark" style="text-decoration: underline">infos-par@gmail.com</a>
                    <p class="">ou par Watsapp :</p>
                    <a href="#" class="text-dark text-decoration-underline">+229 66 53 40 45</a>
                    <p>( du lundi au vendredi de 07h à 17h )</p>


                </div>


                <div class="text-center mt-5">

                    <p class="">Vous êtes <span style="font-weight: bold"> professionelle </span> et vous souhaitez en savoir plus sur nos divers conception ou bien souhaitez-vous des informations particulières sur <span style="font-weight: bold; color:goldenrod;"> E-Couture </span> :</p>
                    <a href="#" class="text-dark" style="text-decoration: underline">infos-pro@gmail.com</a>

                </div>


                <div class="container mt-5 d-flex w-100 justify-content-center">
                    
                    {!! Form::open(['method' => 'mail', 'class' => 'w-50' ]) !!}

                        {!! Form::text('nom', 'Nom', array('class' => 'w-100 h-2')) !!}

                        {!! Form::text('prenom', 'Prenoms', array('class' => 'w-100 h-2 mt-3')) !!}

                        {!! Form::text('mail', 'exemple@gmail.com', array('class' => 'w-100 h-2 mt-3')) !!}

                        {!! Form::textarea('contenue', null, array('class' => 'w-100 h-ta mt-3')) !!}

                        {!! Form::submit('Envoyer', array('class' => 'w-100 h-2 bg-warning text-white rounded')) !!}

                    {!! Form::close() !!}

                </div>

            </div>

            
        </div>
    </section>
    <!--section contacts-->

@endsection