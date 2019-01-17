@extends('layouts.app')

@section('content')
    <div class="container h-100 animated fadeIn">
        <div class="row d-flex align-items-center h-100">
            <div class="col-12 col-xl-8 mx-auto">
                <div class="card">
                    <div class="card-header text-uppercase text-center text-white bg-dark">Регистрация</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                @if(\Jenssegers\Agent\Facades\Agent::isMobile())
                                @else
                                    <label for="name" class="col-xl-4 col-form-label text-left">Ваше имя</label>
                                @endif
                                <div class="col-12 col-xl-6">
                                    @if(\Jenssegers\Agent\Facades\Agent::isMobile())
                                        <label for="name">Ваше имя</label>
                                    @endif
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                @if(\Jenssegers\Agent\Facades\Agent::isMobile())
                                @else
                                    <label for="email" class="col-12 col-xl-4 col-form-label text-left">E-mail адрес в качестве логина</label>
                                @endif
                                <div class="col-12 col-xl-6">
                                    @if(\Jenssegers\Agent\Facades\Agent::isMobile())
                                        <label for="email">E-mail адрес в качестве логина</label>
                                    @endif
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="off">

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
                                    <label for="password" class="col-12 col-xl-4 col-form-label text-left">Придумайте пароль</label>
                                @endif
                                <div class="col-12 col-xl-6">
                                    @if(\Jenssegers\Agent\Facades\Agent::isMobile())
                                        <label for="password">Придумайте пароль</label>
                                    @endif
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                @if(\Jenssegers\Agent\Facades\Agent::isMobile())
                                @else
                                    <label for="password-confirm" class="col-12 col-xl-4 col-form-label text-left">Подтвердите пароль</label>
                                @endif
                                <div class="col-12 col-xl-6">
                                    @if(\Jenssegers\Agent\Facades\Agent::isMobile())
                                        <label for="password-confirm">Подтвердите пароль</label>
                                    @endif
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                @if(\Jenssegers\Agent\Facades\Agent::isMobile())
                                @else
                                    <label for="speciality" class="col-12 col-xl-4 col-form-label text-left">Ваш предмет</label>
                                @endif

                                <div class="col-12 col-xl-6">
                                    @if(\Jenssegers\Agent\Facades\Agent::isMobile())
                                        <label for="speciality_mobile">Ваш предмет</label>
                                        <select id="speciality_mobile" class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}" name="speciality" required>
                                            <option value="osp">ОСП</option>
                                            <option value="up">УП</option>
                                        </select>
                                    @else
                                    <select id="speciality" class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}" name="speciality" data-placeholder="Выберите предмет" required>
                                        <option value="osp">ОСП</option>
                                        <option value="up">УП</option>
                                    </select>
                                    @endif
                                    @if ($errors->has('code'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                @if(\Jenssegers\Agent\Facades\Agent::isMobile())
                                @else
                                    <label for="code" class="col-12 col-xl-4 col-form-label text-left">Код для регистрации</label>
                                @endif
                                <div class="col-12 col-xl-6">
                                    @if(\Jenssegers\Agent\Facades\Agent::isMobile())
                                        <label for="code">Код для регистрации</label>
                                    @endif
                                    <input id="code" type="text" class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}" name="code" required autocomplete="off">

                                    @if ($errors->has('code'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                @if (session('error'))
                                    <div class="col-12 col-xl-6 mx-auto text-center p-3">
                                        <span class="text-danger text-uppercase">
                                            <strong>{{ session('error') }}</strong>
                                        </span>
                                    </div>
                                @endif

                            </div>

                            <div class="form-group row">
                                <div class="col-10 col-xl-8 mx-auto @if(\Jenssegers\Agent\Facades\Agent::isMobile()) text-center @else text-left @endif">
                                    <button type="submit" class="btn btn-dark text-white text-uppercase">
                                        зарегистрироваться
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
