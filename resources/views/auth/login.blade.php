@extends('layouts.app')

@section('content')
    <div class="container h-100 animated fadeIn">
        <div class="row align-items-center h-100">
            <div class="col-12 col-xl-6 mx-auto">
                <div class="card">
                    <div class="card-header text-center text-uppercase bg-dark text-white">Войти</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                @if(\Jenssegers\Agent\Facades\Agent::isMobile())
                                @else
                                    <label for="email" class="col-xl-4 col-form-label text-right">Ваш e-mail</label>
                                @endif
                                <div class="col-12 col-xl-6">
                                    @if(\Jenssegers\Agent\Facades\Agent::isMobile())
                                        <label for="email">Ваш e-mail</label>
                                    @endif
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus autocomplete="off">

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                @if(\Jenssegers\Agent\Facades\Agent::isMobile())
                                @else
                                    <label for="password" class="col-xl-4 col-form-label text-right">Ваш пароль</label>
                                @endif

                                <div class="col-12 col-xl-6">
                                    @if(\Jenssegers\Agent\Facades\Agent::isMobile())
                                        <label for="password">Ваш пароль</label>
                                    @endif
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                @if (session('error'))
                                    <div class="col-8 mx-auto col-xl-8 text-center p-3">
                                        <span class="text-danger text-uppercase">
                                            <strong><small>{{ session('error') }}</small></strong>
                                        </span>
                                    </div>
                                @endif
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-12 col-xl-8 offset-xl-4">
                                    <button type="submit" class="btn btn-dark">
                                        Войти
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
