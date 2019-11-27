@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-background shadow-sm">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group row d-flex align-items-center">
                            <div class="col-md-3">
                                <img src="{{ asset('images/password.svg') }}" alt="forgot password" class="img-fluid">
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input id="email" type="email" class="form-control border-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Ingresa el correo electrónico">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 form-group mb-0">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            Enviar correo de recuperación
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
