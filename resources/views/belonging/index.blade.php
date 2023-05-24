@extends('theme.app')

@section('title', 'Datos Generales')

@section('content')
    <div class="container">

        <x-section-description-header sectionName="2. Sentido de Pertenencia" sectionDescription="" />
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @foreach ($membershipQuestions as $q)
            <x-question-component :answerType="$q->options_type" :questionItem="$q" />
        @endforeach
        <hr class="border border-light border-1 opacity-50">
        <h5 class="form-label">Durante la carrera y en la mayoría de mis clases...</h5>
        @foreach ($acceptanceQuestions as $q)
            <x-question-component :answerType="$q->options_type" :questionItem="$q" />
        @endforeach
        <hr class="border border-light border-1 opacity-50">

        @foreach ($trustQuestions as $q)
            <x-question-component :answerType="$q->options_type" :questionItem="$q" />
        @endforeach

    </div>

@endsection