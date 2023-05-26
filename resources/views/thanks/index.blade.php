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
            <div class="card m-2 col">
                <div class="card-body text-center items-center">
                    <h4 class="card-title text-center mb-1">Sentido de Pertenencia</h4>
                    <h5 class="card-title">Puntaje promedio </h5>
                    <div class="mt-4 row">

                        <div class="col w-50">
                            <h2 class="card-text men">{{ app('App\Http\Controllers\ThanksController')->maleBelongingAvg() }}</h2>
                            <span class="card-text">Hombres</span>
                        </div>
                        <div class="col w-50">
                            <h2 class="card-text women">{{ app('App\Http\Controllers\ThanksController')->femaleBelongingAvg() }}</h2>
                            <span class="card-text">Mujeres</span>
                        </div>
                    </div>
                    <span class="card-text mt-2">Máximo: 105</span>

                </div>
            </div>
            <div class="card m-2 col">
                <div class="card-body text-center items-center">
                    <h4 class="card-title text-center mb-1">Sentido de Pertenencia</h4>
                    <h5 class="card-title">Puntaje máximo </h5>
                    <div class="mt-4 row">

                        <div class="col w-50">
                            <h2 class="card-text men">{{ app('App\Http\Controllers\ThanksController')->maleBelongingMax() }}</h2>
                            <span class="card-text">Hombres</span>
                        </div>
                        <div class="col w-50">
                            <h2 class="card-text women">{{ app('App\Http\Controllers\ThanksController')->femaleBelongingMax() }}</h2>
                            <span class="card-text">Mujeres</span>
                        </div>
                    </div>
                    <span class="card-text mt-2">Máximo: 105</span>

                </div>
            </div>
            <div class="card m-2 col">
                <div class="card-body text-center items-center">
                    <h4 class="card-title text-center mb-1">Sentido de Pertenencia</h4>
                    <h5 class="card-title">Puntaje mínimo </h5>
                    <div class="mt-4 row">
                        <div class="col w-50">
                            <h2 class="card-text men">{{ app('App\Http\Controllers\ThanksController')->maleBelongingMin() }}</h2>
                            <span class="card-text">Hombres</span>
                        </div>
                        <div class="col w-50">
                            <h2 class="card-text women">{{ app('App\Http\Controllers\ThanksController')->femaleBelongingMin() }}</h2>
                            <span class="card-text">Mujeres</span>
                        </div>
                    </div>
                    <span class="card-text mt-2">Mínimo: 15</span>

                </div>
            </div>

        </div>
        <div class="dynamic_row_col normal_dynamic_row_col">
            <div class="card m-2 col">
                <div class="card-body text-center items-center">
                    <h4 class="card-title text-center mb-1">Auto eficacia</h4>
                    <h5 class="card-title">Puntaje promedio </h5>
                    <div class="mt-4 row">

                        <div class="col w-50">
                            <h2 class="card-text men">{{ app('App\Http\Controllers\ThanksController')->maleEfficacyAvg() }}</h2>
                            <span class="card-text">Hombres</span>
                        </div>
                        <div class="col w-50">
                            <h2 class="card-text women">{{ app('App\Http\Controllers\ThanksController')->femaleEfficacyAvg() }}</h2>
                            <span class="card-text">Mujeres</span>
                        </div>
                    </div>
                    <span class="card-text mt-2">Máximo: 50</span>

                </div>
            </div>
            <div class="card m-2 col">
                <div class="card-body text-center items-center">
                    <h4 class="card-title text-center mb-1">Auto eficacia</h4>
                    <h5 class="card-title">Puntaje máximo </h5>
                    <div class="mt-4 row">

                        <div class="col w-50">
                            <h2 class="card-text men">{{ app('App\Http\Controllers\ThanksController')->maleEfficacyMax() }}</h2>
                            <span class="card-text">Hombres</span>
                        </div>
                        <div class="col w-50">
                            <h2 class="card-text women">{{ app('App\Http\Controllers\ThanksController')->femaleEfficacyMax() }}</h2>
                            <span class="card-text">Mujeres</span>
                        </div>
                    </div>
                    <span class="card-text mt-2">Máximo: 50</span>

                </div>
            </div>
            <div class="card m-2 col">
                <div class="card-body text-center items-center">
                    <h4 class="card-title text-center mb-1">Auto eficacia</h4>
                    <h5 class="card-title">Puntaje mínimo </h5>
                    <div class="mt-4 row">
                        <div class="col w-50">
                            <h2 class="card-text men">{{ app('App\Http\Controllers\ThanksController')->maleEfficacyMin() }}</h2>
                            <span class="card-text">Hombres</span>
                        </div>
                        <div class="col w-50">
                            <h2 class="card-text women">{{ app('App\Http\Controllers\ThanksController')->femaleEfficacyMin() }}</h2>
                            <span class="card-text">Mujeres</span>
                        </div>
                    </div>
                    <span class="card-text mt-2">Mínimo: 10</span>

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
            <div class="card m-2 col">
                <div class="card-body text-center items-center">
                    <h2 class="card-text {{ app('App\Http\Controllers\ThanksController')->applyCurrentKnowledge20() === 'hombres' ? 'men' : (app('App\Http\Controllers\ThanksController')->applyCurrentKnowledge20() === 'mujeres' ? 'women' : '') }}">{{ app('App\Http\Controllers\ThanksController')->applyCurrentKnowledge20() }}</h2>

                    <h5 class="card-title">son quienes tienen <b>tienen más seguridad</b> al aplicar sus conocimientos de la carrera</h5>
                </div>
            </div>

        </div>

        {{-- --------------------- TEC 21 ------------------------------ --}}

        <div class="alert alert-info mt-5" role="alert">
            <h2 class="text-center">TEC 21</h2>
        </div>
        <div class="dynamic_row_col normal_dynamic_row_col">
            <div class="card m-2 col">
                <div class="card-body text-center items-center">
                    <h4 class="card-title text-center mb-1">Sentido de Pertenencia</h4>
                    <h5 class="card-title">Puntaje promedio </h5>
                    <div class="mt-4 row">

                        <div class="col w-50">
                            <h2 class="card-text men">{{ app('App\Http\Controllers\ThanksController')->maleBelongingAvg21() }}</h2>
                            <span class="card-text">Hombres</span>
                        </div>
                        <div class="col w-50">
                            <h2 class="card-text women">{{ app('App\Http\Controllers\ThanksController')->femaleBelongingAvg21() }}</h2>
                            <span class="card-text">Mujeres</span>
                        </div>
                    </div>
                    <span class="card-text mt-2">Máximo: 105</span>

                </div>
            </div>
            <div class="card m-2 col">
                <div class="card-body text-center items-center">
                    <h4 class="card-title text-center mb-1">Sentido de Pertenencia</h4>
                    <h5 class="card-title">Puntaje máximo </h5>
                    <div class="mt-4 row">

                        <div class="col w-50">
                            <h2 class="card-text men">{{ app('App\Http\Controllers\ThanksController')->maleBelongingMax21() }}</h2>
                            <span class="card-text">Hombres</span>
                        </div>
                        <div class="col w-50">
                            <h2 class="card-text women">{{ app('App\Http\Controllers\ThanksController')->femaleBelongingMax21() }}</h2>
                            <span class="card-text">Mujeres</span>
                        </div>
                    </div>
                    <span class="card-text mt-2">Máximo: 105</span>

                </div>
            </div>
            <div class="card m-2 col">
                <div class="card-body text-center items-center">
                    <h4 class="card-title text-center mb-1">Sentido de Pertenencia</h4>
                    <h5 class="card-title">Puntaje mínimo </h5>
                    <div class="mt-4 row">
                        <div class="col w-50">
                            <h2 class="card-text men">{{ app('App\Http\Controllers\ThanksController')->maleBelongingMin21() }}</h2>
                            <span class="card-text">Hombres</span>
                        </div>
                        <div class="col w-50">
                            <h2 class="card-text women">{{ app('App\Http\Controllers\ThanksController')->femaleBelongingMin21() }}</h2>
                            <span class="card-text">Mujeres</span>
                        </div>
                    </div>
                    <span class="card-text mt-2">Mínimo: 15</span>

                </div>
            </div>

        </div>
        <div class="dynamic_row_col normal_dynamic_row_col">
            <div class="card m-2 col">
                <div class="card-body text-center items-center">
                    <h4 class="card-title text-center mb-1">Auto eficacia</h4>
                    <h5 class="card-title">Puntaje promedio </h5>
                    <div class="mt-4 row">

                        <div class="col w-50">
                            <h2 class="card-text men">{{ app('App\Http\Controllers\ThanksController')->maleEfficacyAvg21() }}</h2>
                            <span class="card-text">Hombres</span>
                        </div>
                        <div class="col w-50">
                            <h2 class="card-text women">{{ app('App\Http\Controllers\ThanksController')->femaleEfficacyAvg21() }}</h2>
                            <span class="card-text">Mujeres</span>
                        </div>
                    </div>
                    <span class="card-text mt-2">Máximo: 50</span>

                </div>
            </div>
            <div class="card m-2 col">
                <div class="card-body text-center items-center">
                    <h4 class="card-title text-center mb-1">Auto eficacia</h4>
                    <h5 class="card-title">Puntaje máximo </h5>
                    <div class="mt-4 row">

                        <div class="col w-50">
                            <h2 class="card-text men">{{ app('App\Http\Controllers\ThanksController')->maleEfficacyMax21() }}</h2>
                            <span class="card-text">Hombres</span>
                        </div>
                        <div class="col w-50">
                            <h2 class="card-text women">{{ app('App\Http\Controllers\ThanksController')->femaleEfficacyMax21() }}</h2>
                            <span class="card-text">Mujeres</span>
                        </div>
                    </div>
                    <span class="card-text mt-2">Máximo: 50</span>

                </div>
            </div>
            <div class="card m-2 col">
                <div class="card-body text-center items-center">
                    <h4 class="card-title text-center mb-1">Auto eficacia</h4>
                    <h5 class="card-title">Puntaje mínimo </h5>
                    <div class="mt-4 row">
                        <div class="col w-50">
                            <h2 class="card-text men">{{ app('App\Http\Controllers\ThanksController')->maleEfficacyMin21() }}</h2>
                            <span class="card-text">Hombres</span>
                        </div>
                        <div class="col w-50">
                            <h2 class="card-text women">{{ app('App\Http\Controllers\ThanksController')->femaleEfficacyMin21() }}</h2>
                            <span class="card-text">Mujeres</span>
                        </div>
                    </div>
                    <span class="card-text mt-2">Mínimo: 10</span>

                </div>
            </div>

        </div>
        <div class="dynamic_row_col normal_dynamic_row_col">
            <div class="card m-2 col">
                <div class="card-body text-center items-center">
                    <h2 class="card-text {{ app('App\Http\Controllers\ThanksController')->acceptancePossitiveEmotions21() === 'hombres' ? 'men' : (app('App\Http\Controllers\ThanksController')->acceptancePossitiveEmotions21() === 'mujeres' ? 'women' : '') }}">{{ app('App\Http\Controllers\ThanksController')->acceptancePossitiveEmotions21() }}</h2>

                    <h5 class="card-title">son quienes experimentan más <b>emociones positivas de aceptación</b></h5>
                </div>
            </div>
            <div class="card m-2 col">
                <div class="card-body text-center items-center">
                    <h2 class="card-text {{ app('App\Http\Controllers\ThanksController')->acceptanceNegativeEmotions21() === 'hombres' ? 'men' : (app('App\Http\Controllers\ThanksController')->acceptanceNegativeEmotions21() === 'mujeres' ? 'women' : '') }}">{{ app('App\Http\Controllers\ThanksController')->acceptanceNegativeEmotions21() }}</h2>

                    <h5 class="card-title">son quienes experimentan más <b>emociones negativas de aceptación</b></h5>
                </div>
            </div>
            <div class="card m-2 col">
                <div class="card-body text-center items-center">
                    <h2 class="card-text {{ app('App\Http\Controllers\ThanksController')->applyCurrentKnowledge21() === 'hombres' ? 'men' : (app('App\Http\Controllers\ThanksController')->applyCurrentKnowledge21() === 'mujeres' ? 'women' : '') }}">{{ app('App\Http\Controllers\ThanksController')->applyCurrentKnowledge21() }}</h2>

                    <h5 class="card-title">son quienes tienen <b>tienen más seguridad</b> al aplicar sus conocimientos de la carrera</h5>
                </div>
            </div>

        </div>

    </div>
    @endsection
