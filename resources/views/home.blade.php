@extends('layouts.app')

@section('content')


    <div class="container" style="background-color: #f2f8ff;">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card" style="border-color: #003366;">
                    <div class="card-header" style="background-color: #003366; color: #ffffff;">{{ __('Registrar Usuarios') }}</div>

                    <div class="card-body" style="background-color: #e6f2ff;">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h2 class="justify-content-center align-items-center" style="color: #003366;">{{ __('Bienvenido ' . Auth::user()->role) .' '. Auth::user()->name . ' '. Auth::user()->paternal_surname. ' '.   Auth::user()->maternal_surname}}</h2>
                        <br>
                            @if (Auth::user())
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5" style="background-color: #f2f8ff;">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card" style="border-color: #003366;">
                    <div class="card-header" style="background-color: #003366; color: #ffffff;">{{ __('Descargar Lista') }}</div>

                    <div class="card-body" style="background-color: #e6f2ff;">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h2 style="color: #003366;">{{ __('Bienvenido ' . Auth::user()->role) .' '. Auth::user()->name . ' '. Auth::user()->paternal_surname. ' '.   Auth::user()->maternal_surname}}</h2>
                        <br>

                        <a href="{{ route('download-pdf') }}" class="btn btn-primary" style="background-color: #003366; border-color: #003366;">
                            <i class="fas fa-download"></i> {{ __('Descargar PDF') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
