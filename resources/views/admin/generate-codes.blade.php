@extends('layouts.app')
@section('content')
    <div class="container h-100 animated fadeIn">
        <div class="row d-flex align-items-center h-100">
            <div class="col-8 mx-auto">
                <div class="card" id="video-card">
                    <div class="card-header text-uppercase text-center text-white bg-dark">Генерировать коды</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="codes">Выберите количество кодов</label>
                                    <select class="form-control" name="codes" id="codes" data-placeholder="Выберите из списка">
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="50">50</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <button class="btn btn-dark" id="generate">Сгенерировать</button>
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
