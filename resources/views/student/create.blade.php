@extends('theme.app')

@section('title', 'Datos Generales')

@section('content')
    <div class="container">

        <x-section-description-header sectionName="1. Datos Generales"
            sectionDescription="Tus datos demográficos nos ayudan al propósito de la investigación. Tus respuestas son anónimas y solo serán usadas para el análisis del estudio." />
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('student.store') }}" method="POST">
            <x-general-data-from-body />
        </form>

    </div>

@endsection
