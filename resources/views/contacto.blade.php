@extends('templates.base')

@section('title', 'Contacto')

@section('content')
    <div class="spacer-sm"></div>

    <div class="container">       
        <div class="row">
            <div class="col text-center h4">
                <p>Podés contactarte a través de:</p>
                <br>
            </div>
        </div>
        
        <div class="row row-cols-2 row-cols-sm-1">
            <div class="col-4 text-right col-sm-4 mx-auto">
                <?php $text = "Hola%2C+quisiera+saber+m%C3%A1s+sobre+las+clases+en+PowerFit"; ?>
                <a class="btn btn-success text-nowrap" href="https://wa.me/5491132533349?text={{$text}}" target="_blank">
                    <div class="bi bi-whatsapp" style="color:white;font-size:1rem;">
                        <span class="mx-1">Whatsapp</span>
                    </div>
                </a>  
            </div>
            <div class="col-4 text-left col-sm-4 mx-auto">
                <a href="mailto:natycode@gmail.com" class="btn btn-info text-nowrap">
                    <div class="bi bi-envelope" style="color:white;font-size:1rem;">
                        <span class="mx-1">Email</span>
                    </div>
                </a>   
            </div>
        </div>                
    </div>

    <div class="spacer-lg"></div>
    <div class="spacer-lg"></div>
                
@endsection    


@include('templates.footer-fixed')
