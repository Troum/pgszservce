@component('mail::layout')
    @slot('header')
        @component('mail::header', ['url' => ''])
            ПГС: помощь гражданам страждущим
        @endcomponent
    @endslot
    @component('mail::panel')
        Ваш код для регистрации: <strong>{{$code}}</strong><br>
        <br>
        Во время регистрации в поле "Код для регистрации" введите присланный Вам выше код.
        <br>
        <br>
        <br>
        @component('mail::button', ['url' => 'http://pgszservice.by/register'])
            ПЕРЕЙТИ К РЕГИСТРАЦИИ
        @endcomponent
    @endcomponent
    @slot('footer')
        @component('mail::footer')
            {{date('Y')}}&nbsp;&copy;&nbsp;Все права защищены
        @endcomponent
    @endslot
@endcomponent
