<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{asset('css/app.css')}}" rel="stylesheet"/>
        <link href="{{asset('css/styles.css')}}" rel="stylesheet"/>
        <script src="https://kit.fontawesome.com/4d8d9d6354.js" crossorigin="anonymus"></script>

        <title>Axies | NFT Marketplace Vuejs Template</title>

    </head>
    <body class="antialiased">
        <div id="app">
            <app-component>

            </app-component>
        </div>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
