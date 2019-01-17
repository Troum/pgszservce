@extends('layouts.app')
@section('content')
    <div class="container h-100 animated fadeIn">
        <div class="row d-flex align-items-center h-100">
            <div class="col-8 mx-auto">
                <div class="card" id="video-card">
                    <div class="card-header text-uppercase text-center text-white bg-dark">Добавить видео</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="video-name">Введите название видео</label>
                                    <input id="video-name" name="video-name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="video-speciality">Выберите специализацию видео</label>
                                    <select class="form-control" name="video-speciality" id="video-speciality" data-placeholder="Выберите из списка">
                                        <option value="osp">ОСП</option>
                                        <option value="up">УП</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="form-group">
                                    <div class="row m-0 p-0">
                                        <div class="col-3 m-0 p-0 position-relative">
                                            <label for="video" class="btn btn-dark">Выберите файл</label>
                                            <input type="file" id="video">
                                        </div>
                                        <div class="col-9 m-0 p-0">
                                            <input type="text" class="form-control filename" id="filename" placeholder="Ваш файл" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <button class="btn btn-dark" id="upload">Загрузить</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
