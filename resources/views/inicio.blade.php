@extends('templates.base')

@section('title', 'Inicio')

@section('content')
<div class="container">

    <div class="jumbo-logo-wrapper my-auto" align="center">
        <div class="container container-md row row-cols-1 row-cols-md-3 justify-content-md-center">
            
            <div class="col col-sm-1 col-md-2">
                <span>&nbsp;</span>
            </div>
            
            <div class="col col-md-8 order-first order-md-2">
                <img id="jumbo-logo-img" src="{{ asset('images/pf_0003s_0004_home.png') }}" alt="jumbo-logo">
            </div>

            <div class="col col-md-2 order-last">
                <div class="row row-cols-3 row-cols-md-1">
                    <div class="col offset-md-6">&nbsp;</div>
                    <div class="col offset-md-6">&nbsp;</div>
                    <div class="col offset-md-6">&nbsp;</div>
                    <div class="col icons-wrapper py-2 offset-md-6">
                        <a href="https://instagram.com/powerfit.nc/" target="_blank">
                            <i class="bi bi-instagram media-icon"></i>                            
                        </a>
                    </div> 
                    <div class="col icons-wrapper py-2 offset-md-6">
                        <a href="http://youtube.com" target="_blank">
                            <i class="bi bi-youtube media-icon"></i>                            
                        </a>
                    </div>
                    <div class="col icons-wrapper py-2 offset-md-6">
                        <?php $text = "Hola%2C+quisiera+saber+m%C3%A1s+sobre+las+clases+en+PowerFit"; ?>
                        <a href="https://wa.me/5491132533349?text={{$text}}" target="_blank">
                            <i class="bi bi-whatsapp media-icon"></i>                            
                        </a>                    
                    </div>                  
                </div>
            </div>

        </div>
    </div>  


    {{-- <div class="row">
        <div class="spacer"></div>
    </div> --}}

    
    {{-- <div class="info-instructor">       
        <div class="row">
            <img class="col offset-md-5" src="{{ asset('images/pf_stripes.png') }}" alt="stripe" style="height:35px;">
        </div>       
        <div class="container row row-cols-1 row-cols-md-2">
                <div class="col col-md-6 col-xs-6">
                    <img id="bio-img" src="{{ asset('images/pf_profe_2.png') }}" alt="bio-img">
                </div>       
                <div class="col col-md-6 col-xs-2" id="profe-text">
                    <div class="spacer"></div>                    
                    <h3 id="profe-subtitle">PROFE</h3>
                    <h2 id="profe-title">NATY CODESEIRA</h2>
                    <p  id="profe-bio">
                        Profesora Nacional de Ed. Física recibida en I.S.E.F N°1 Dr. E. R. Brest. <br>
                        Instructora del método Pilates (mat y reformer), Entrenamiento Funcional, <br>
                        Stretching, GAP y de las técnicas de Radical Fitness (Power, Fight Do, Top Ride, X55).
                    </p>                    
                </div>
            </div>                
        </div>       
    </div> --}}

    {{-- <div class="row">
        <div class="spacer">     
        </div>
    </div>



    {{-- <div class="info-powerfit">                
                <div class="container row">
                    <div class="col col-md-5">
                        <img style="width:100%" src="{{asset('images/pf_que_es.png')}}" alt="what_is">
                    </div>
                </div>

                <div class="row">
                    <div class="spacer-sm"></div>
                </div> 

                <div class="info-parts-powerfit row p-4 mb-4 ml-3">
                    <div class="container-fluid row row-cols-1 row-cols-md-5">
                        <div class="col py-3 mb-4">
                            <img id="parts-img" src="{{ asset('images/pf_que_es_01.png') }}" alt="part-1-img">                        
                        </div>
                        <div class="col py-3 offset-md-2">
                            <img id="parts-img" src="{{ asset('images/pf_que_es_03.png') }}" alt="part-3-img">
                        </div>
                        <div class="col py-3 offset-md-2">
                            <img id="parts-img" src="{{ asset('images/pf_que_es_05.png') }}" alt="part-5-img">
                        </div>
                        <div class="col py-3 offset-md-2">
                            <img id="parts-img" src="{{ asset('images/pf_que_es_02.png') }}" alt="part-2-img"> 
                        </div>
                        <div class="col py-3 offset-md-2">
                            <img id="parts-img" src="{{ asset('images/pf_que_es_04.png') }}" alt="part-4-img">
                        </div>
                    </div>                    
                </div>    
                        
            </div> --}}
            

    {{-- <div class="info-exercises mt-3">
        <div class="container">            
            <img class="exercises-title" src="{{ asset('images/pf_0003s_0001_activities_title.png') }}" alt="act_title">
        </div>
        <div class="row">
            <div class="spacer"></div>
        </div>
        <div class="container mx-auto row row-cols-1 row-cols-sm-2 row-cols-md-3 ">
            <div class="col p-4 exercise-wrapper functional">
                <span class="functional-title">FUNCTIONAL</span>                
            </div>
            <div class="col p-4 exercise-wrapper pilates">
                <span class="pilates-title">PILATES</span>
            </div>
            <div class="col p-4 exercise-wrapper stretching">
                <span class="stretching-title">STRETCHING</span>
            </div>
            <div class="col p-4 exercise-wrapper hiit">
                <span class="hiit-title">HIIT</span>
            </div>
            <div class="col p-4 exercise-wrapper fitness">
                <span class="fitness-title">FITNESS</span>
            </div>
            <div class="col p-4 exercise-wrapper gap">
                <span class="gap-title">GAP</span>
            </div>
        </div>
    </div>      
    
    <div class="row">
        <div class="spacer"></div>
    </div>  --}}
    
    
    {{-- <div class="info-contact pl-2">
        <div class="contact-banner container">                
            <img class="stripes col-md-8 offset-md-2 mb-3" src="{{ asset('images/pf_stripes.png') }}" alt="stripes">               
            <div class="row">
                <div class="spacer-sm"></div>
            </div>
            <a href="{{ route('contacto') }}">
                <img class="contact-img" src="{{ asset('images/pf_0003s_0000_contact_banner.png') }}" alt="contact">                    
            </a>
        </div>
    </div> --}}
    
    {{-- <div class="row">
        <div class="spacer">     
        </div>
    </div> --}}

</div> 
@endsection


@include('templates.footer-fixed')
