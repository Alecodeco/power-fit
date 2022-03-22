@extends('templates.base')

@section('title', 'Profe')


@section('content')

<div class="spacer"></div>

<div class="container">

    <div class="row justify-content-center mb-2">
        <div class="col-4 offset-md-2">            
            <button id="btn_naty" type="button" class="btn btn-lg btn-warning border border-secondary">Naty Code</button>
        </div>
        <div class="col-4">            
            <button id="btn_pf" type="button" class="btn btn-lg btn-success border border-secondary">Power Fit</button>
        </div>
    </div>

    
    <div class="jumbotron" id="jumbo_naty" style="display:none;background:none;">
        
        <div class="spacer-sm"></div>
        
        {{-- <h1 class="display-5">Acerca de mí</h1>      --}}
        
        
        <div class="row">
            <div class="py-2">
                <img class="col container-fluid" id="bio-img" src="{{ asset('images/pf_profe_2.png') }}" alt="bio-img">            
            </div>
                
            <div class="col lead">
                <img class="container-fluid mt-2" src="{{ asset('images/pf_stripes.png') }}" alt="stripe" style="height:45px;">
                
                <div class="text-wrap">
                    <br>
                    <p>Soy Natalia Codeseira. Soy profe de Educación Física recibida en el ISEF N°1 "Romero Brest" en el 2017.</p>
                    <p>Doy clases desde los 17 años a adultos, adolescentes, niñxs y bebés. Pase por el dictado de todo tipo de clases no formales como Taekwondo (ITF), natación, matronatación, iniciación deportiva, clases de fitness, entrenamientos personalizados, entre otros, así como clases formales, cubriendo horas en colegios privados de bs as. </p>
                    <p>Me capacité epecíficamente en distintas técnicas del fitness, bienestar y actividad física desde el 2015. Dando clases de pilates (Mat y Reformer), stretching, indoor cycling, GAP, entrenamiento funcional, Zumba y Radical Fitness: x55, Top Ride, Power y Fight Do.</p>
                </div>
            </div>
        </div>


    </div>



    <div class="jumbotron" id="jumbo_pf" style="display:none; background:none;">    

        {{-- <h1 class="display-5">PowerFit</h1> --}}
        <img class="col-6" src="{{asset('images/pf_que_es.png')}}" alt="what_is">
        
        <p class="lead">
            <ul>
                <br>
                <li>
                    <p>"Power Fit" empezó a gestarse hace un tiempo como una forma de entrenar sin una estructura rígida sino, más bien, flexible, con pautas determinadas. </p>
                </li>
                <li>
                    <p>El entrenamiento puede ser para 1 persona, 2 o 50, para todos los géneros y todas las edades.</p>
                </li>
                <li>
                    <p>Soy muy detallista, te voy a guiar y corregir tanto en la postura como en las técnicas.  <br>
                       Sé paciente! el aprender es progresivo, con muchos pasos metodológicos y variables según las necesidades del momento.
                    </p>
                </li>
                <li>
                    <p>Lo más importante, dar todo de sí en cada clase, porque todo ejercicio tiene una adaptación para que cualquiera pueda realizarla! <br>
                       Así que te aseguro, no hay excusas!
                    </p>
                </li>
            </ul>
        </p>
    </div>

    {{--<div class="spacer-lg"></div>    
    <div class="spacer-lg"></div> --}}
    
</div>

 <script>
     $('#btn_pf').click(function() {                    
         $('#jumbo_pf').toggle(400);
         $('#jumbo_naty').hide(400);
     });
     $('#btn_naty').click(function() {                    
         $('#jumbo_naty').toggle(400);
         $('#jumbo_pf').hide(400);
     });    
</script>
        
@endsection