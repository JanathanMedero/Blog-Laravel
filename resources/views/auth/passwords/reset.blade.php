@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-background shadow-sm">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('images/confirmed.svg') }}" alt="confirmed email" class="img-fluid">
                        </div>
                        <div class="col-md-9">

                            <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input id="email" type="email" class="form-control border-0 @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" readonly>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-12 form-group">
                                    <input id="password" type="password" class="form-control border-0 @error('password') is-invalid @enderror" name="password" required placeholder="Nueva contraseña">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-12 form-group">
                                    <input id="password-confirm" type="password" class="form-control border-0" name="password_confirmation" required placeholder="Repite la nueva contraseña">
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Restablecer contraseña
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
