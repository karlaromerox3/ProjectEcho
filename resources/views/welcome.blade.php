@extends('theme.app')

@section('title', 'Proyecto Throwback')

@section('content')

    <div class="jumbotron hero d-flex flex-column bg-dark">
        <div class="container d-flex flex-column align-items-start">
            <h1 class="display-1">Estás por graduarte,</h1>
            <h1 class="display-1">¿cómo la pasaste?</h1>
            <hr>
            <p class="fs-5 text-light mt-4 lh-1">¡Gracias por tomar el tiempo de participar en este estudio!
            </p>
            <p class="fs-5 text-light lh-3 lg-long-p d-none d-lg-block">Evaluarás 3 secciones de manera anónima mientras
                reflexionas sobre
                tu
                experiencia estudiantil a lo largo de tu carrera.</p>
            <p class="fs-5 text-light lh-3 d-lg-none">Evaluarás 3 secciones de manera anónima mientras reflexionas sobre
                tu
                experiencia estudiantil a lo largo de tu carrera.</p>
            <a href="{{ route('student.create') }}" class="d-none d-md-block btn btn-light position-relative">Comenzar</a>
        </div>
        <div class="d-md-none container d-flex flex-column align-items-center">
            <a href="{{ route('student.create') }}" class="btn btn-light position-relative">Comenzar</a>
        </div>
    </div>
@endsection
