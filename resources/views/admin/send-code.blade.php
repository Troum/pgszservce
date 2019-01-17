@extends('layouts.app')
@section('content')
    <div class="container h-100 animated fadeIn">
        <div class="row d-flex align-items-center h-100">
            <div class="col-8 mx-auto">
                <div class="card" id="video-card">
                    <div class="card-header text-uppercase text-center text-white bg-dark">Отправить код</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="email">Введите email, на который будет отправлен случайный код</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <button class="btn btn-dark" id="send">Отправить</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
