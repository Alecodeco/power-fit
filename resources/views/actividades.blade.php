@extends('templates.base')

@section('title', 'Actividades')


@section('content')

<div class="container carousel-wrapper py-5">    
    
    <div id="carouselExercises" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/pf_functional.png')}}" class="exercise-carousel-img d-block w-100" alt="functional">
                <div class="carousel-caption d-none d-md-block">
                    <h5>FUNCTIONAL</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/pf_pilates.png')}}" class="exercise-carousel-img d-block w-100" alt="pilates">
                <div class="carousel-caption d-none d-md-block">
                    <h5>PILATES</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/pf_stretching.png')}}" class="exercise-carousel-img d-block w-100" alt="stretching">
                <div class="carousel-caption d-none d-md-block">
                    <h5>STRETCHING</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/pf_hiit.png')}}" class="exercise-carousel-img d-block w-100" alt="hiit">
                <div class="carousel-caption d-none d-md-block">
                    <h5>HIIT</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/pf_fitness.png')}}" class="exercise-carousel-img d-block w-100" alt="fitness">
                <div class="carousel-caption d-none d-md-block">
                    <h5>FITNESS</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/pf_gap.png')}}" class="exercise-carousel-img d-block w-100" alt="gap">
                <div class="carousel-caption d-none d-md-block">
                    <h5>GAP</h5>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExercises" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExercises" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <script>
        $('.carousel').carousel({
            interval: 3000
        })
    </script>

</div>

@endsection


@include('templates.footer-fixed')
