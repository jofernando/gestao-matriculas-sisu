<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="{{asset('bootstrap/css/bootstrap.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="icon" type="imagem/png" href="{{asset('img/logo-icon.png')}}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://unpkg.com/@popperjs/core@2" defer></script>
        <script src="{{asset('bootstrap/js/bootstrap.js')}}" defer></script>        
        <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('js/jquery.mask.min.js')}}"></script>
    </head>
    <body>
        @component('layouts.nav_bar')@endcomponent
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        @component('layouts.footer')@endcomponent

        <script>
            $(document).ready(function () {
                var btn = document.getElementsByClassName("submeterFormBotao");
                if(btn.length > 0){
                    $(document).on('submit', 'form', function() {
                        $('button').attr('disabled', 'disabled');
                        for (var i = 0; i < btn.length; i++) {
                        btn[i].textContent = 'Aguarde...';
                        btn[i].style.backgroundColor = btn[i].style.backgroundColor + 'd8';
                    }
                    });
                }
            })
        </script>
    </body>
</html>
