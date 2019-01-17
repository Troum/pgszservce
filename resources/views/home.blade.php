@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row m-0 p-0">
            @if(\Jenssegers\Agent\Facades\Agent::isMobile())
            @else
            <div class="col-12 col-xl-12">
                <a class="nav-item" href="#menu-toggle" id="menu-toggle"><i class="material-icons md-24 md-dark">menu</i></a>
            </div>
            @endif
            <div class="col-12 col-xl-12">
                <div class="row">
                    @if(Auth::user()->speciality === 'admin')
                        <div class="col-12 col-xl-5">
                            <div class="card">
                                <div class="card-header bg-dark text-center text-uppercase text-white">
                                    Зарегистрированные пользователи
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-xl-12">
                                            @include('page-parts.registered')
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-4">
                                <div class="card-header bg-dark text-center text-uppercase text-white">
                                    Активные коды
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-xl-12">
                                            @include('page-parts.codes')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div @if(Auth::user()->speciality === 'admin') class="col-12 col-xl-7" @else class="col-12 col-xl-10 mx-auto" @endif>
                        <div class="card">
                            <div class="card-header bg-dark text-white text-uppercase text-center">Доступные видео</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-xl-8">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <video controls controlsList="nodownload" id="video-player" class="embed-responsive-item" poster preload="auto">
                                                <source src="{{asset('videos/videoplayback.mp4')}}">
                                            </video>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 h-75">
                                        @if(count($videos) === 0)
                                            <h4 class="text-center">Видео не загружены</h4>
                                        @else
                                            <ul id="video-list" class="list-group">
                                                @foreach($videos as $video)
                                                    <li class="list-group-item list-group-item-action p-1 rounded-0">
                                                        <a data-video class="nav-link text-dark" href="{{'videos/'.$video->speciality.'/'.$video->filename}}">{{$video->video_name}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
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
