<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ПГС</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container-fluid m-0 p-0 h-100">
    <div class="row h-100 m-0 p-0 d-flex align-items-center">
        @if(\Jenssegers\Agent\Facades\Agent::isMobile())
            <div class="col-10 mx-auto p-0">
                <h1 class="text-center text-uppercase">
                    Привет, посетитель
                </h1>
                <h3 class="text-center text-uppercase">
                    сейчас ты находишься на сайте
                </h3>
                <h6 class="text-center text-uppercase"><strong>ПГС</strong> - помощь гражданам страждущим</h6>
                <a class="text-black-50 nav-link text-center text-uppercase d-block" href="/register">зарегистрироваться</a>
                <a class="text-black-50 nav-link text-center text-uppercase d-block" href="/login">войти</a>
            </div>
        @else
            <div class="col-4 col-xl-5 mx-auto p-0">
                <h1 class="display-2 text-center text-uppercase">
                    Привет
                </h1>
                <h2 class="text-center text-uppercase">
                    посетитель,
                </h2>
                <h3 class="text-center text-uppercase">
                    сейчас ты находишься на сайте
                </h3>
                <h4 class="text-center text-uppercase"><strong>ПГС</strong> - помощь гражданам страждущим</h4>
                <a class="text-black-50 nav-link text-center text-uppercase d-block" href="/register">зарегистрироваться</a>
                <a class="text-black-50 nav-link text-center text-uppercase d-block" href="/login">войти</a>
            </div>
        @endif
    </div>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
