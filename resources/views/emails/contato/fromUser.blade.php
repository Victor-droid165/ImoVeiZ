@component('mail::layout')
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            Mensagem de {{$nome}} {{$sobrenome}}
        @endcomponent
    @endslot

    @component('mail::panel')
        {{$mensagem}}
    @endcomponent

    @slot('footer')
        @component('mail::footer')
            Obrigado,<br>
            {{$nome}} {{$sobrenome}} <br>
            {{$numero}}<br>
            {{$email}}
        @endcomponent
    @endslot
@endcomponent