@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="paternal_surname"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Apellido Paterno') }}</label>

                                <div class="col-md-6">
                                    <input id="paternal_surname" type="text"
                                           class="form-control @error('paternal_surname') is-invalid @enderror"
                                           name="paternal_surname" value="{{ old('paternal_surname') }}" required
                                           autocomplete="paternal_surname" autofocus>

                                    @error('paternal_surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="maternal_surname"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Apellido Materno') }}</label>

                                <div class="col-md-6">
                                    <input id="maternal_surname" type="text"
                                           class="form-control @error('maternal_surname') is-invalid @enderror"
                                           name="maternal_surname" value="{{ old('maternal_surname') }}" required
                                           autocomplete="maternal_surname" autofocus>

                                    @error('maternal_surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>




                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="worker_number" name="worker_number" placeholder="90" value="90">
                                        <label for="worker_number">Numero del trabajador</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <select name="role" class="form-select" id="role">

                                            <option selected value="Supervisor de Ingeniería Electromecánica">Supervisor de Ingeniería Electromecánica</option>
                                            <option value="Coordinador de Ingeniería Electromecánica">Coordinador de Ingeniería Electromecánica</option>

                                        </select>
                                        <label for="role">Puesto</label>
                                    </div>
                                </div>
                            </div>




                            <div class="row mb-0 mt-3">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Registrar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
