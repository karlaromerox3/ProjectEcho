@extends('theme.app')

@section('title', '¡Gracias!')

@section('content')

    <div class="jumbotron ty-hero d-flex flex-column bg-dark">
        <div class="ty-text text-center container d-flex flex-column align-items-center">
            <h1 class="display-1">¡Gracias por participar!</h1>
            <hr>
            <p class="fs-5 text-light mt-4 lh-1 text-center">Además de ayudarme a completar mi tesina, espero que hayas
                disfrutado
                reflexionar
                sobre tu experiencia en la carrera.
            </p>
            <p class="fs-5 text-light mt-4 lh-1 text-center">Scrollea abajo si quieres conocer algunos resultados
                preliminares de
                esta investigación.</p>

        </div>
    </div>
    <div class="container py-5">
        <div class="alert alert-info" role="alert">
            <h2 class="text-center">TEC 20</h2>
        </div>
        <div class="dynamic_row_col normal_dynamic_row_col">
            <div class="card m-2 col" >
                <div class="card-body">
                    <h3 class="card-text">23%</h3>
                    <h5 class="card-title">Puntaje más alto global (M)</h5>
                </div>
            </div>
            <div class="card m-2 col" >
                <div class="card-body">
                    <h3 class="card-text">23%</h3>
                    <h5 class="card-title">Puntaje más alto global (M)</h5>
                </div>
            </div>
            <div class="card m-2 col">
                <div class="card-body text-center items-center">
                    <h4 class="card-title text-center mb-1">Auto-eficacia</h4>
                    <h5 class="card-title">Puntaje más alto</h5>
                    <div class="mt-4 row">

                        <div class="col w-50">
                            <h2 class="card-text men">23%</h2>
                            <span class="card-text">Hombres</span>
                        </div>
                        <div class="col w-50">
                            <h2 class="card-text women">23%</h2>
                            <span class="card-text">Mujeres</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="dynamic_row_col normal_dynamic_row_col">
            <div class="card m-2 col">
                <div class="card-body text-center items-center">
                    <h4 class="card-title text-center mb-1">Auto eficacia</h4>
                    <h2 class="card-text">23%</h2>

                    <h5 class="card-title">Puntaje más alto global (H)</h5>
                </div>
            </div>
            <div class="card m-2 col" >
                <div class="card-body">
                    <h3 class="card-text">23%</h3>
                    <h5 class="card-title">Puntaje más alto global (M)</h5>
                </div>
            </div>
            <div class="card m-2 col" >
                <div class="card-body">
                    <h3 class="card-text">23%</h3>
                    <h5 class="card-title">Puntaje más alto global (M)</h5>
                </div>
            </div>

        </div>
        <div class="dynamic_row_col normal_dynamic_row_col">
            <div class="card m-2 col">
                <div class="card-body text-center items-center">
                    <h2 class="card-text {{ app('App\Http\Controllers\ThanksController')->acceptancePossitiveEmotions20() === 'hombres' ? 'men' : (app('App\Http\Controllers\ThanksController')->acceptancePossitiveEmotions20() === 'mujeres' ? 'women' : '') }}">{{ app('App\Http\Controllers\ThanksController')->acceptancePossitiveEmotions20() }}</h2>

                    <h5 class="card-title">son quienes experimentan más <b>emociones positivas de aceptación</b></h5>
                </div>
            </div>
            <div class="card m-2 col">
                <div class="card-body text-center items-center">
                    <h2 class="card-text {{ app('App\Http\Controllers\ThanksController')->acceptanceNegativeEmotions20() === 'hombres' ? 'men' : (app('App\Http\Controllers\ThanksController')->acceptanceNegativeEmotions20() === 'mujeres' ? 'women' : '') }}">{{ app('App\Http\Controllers\ThanksController')->acceptanceNegativeEmotions20() }}</h2>

                    <h5 class="card-title">son quienes experimentan más <b>emociones negativas de aceptación</b></h5>
                </div>
            </div>
            <div class="card m-2 col" >
                <div class="card-body">
                    <h3 class="card-text">23%</h3>
                    <h5 class="card-title">Puntaje más alto global (M)</h5>
                </div>
            </div>

        </div>

    </div>
    @endsection
