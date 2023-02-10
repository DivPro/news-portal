<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>News - @yield('title')</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{ asset('css/foundation.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @stack('styles')
    </head>
    <body>
        <div>
            <div class="grid-x grid-padding-x align-center">
                <img class="cell small-2" src="https://laravel.com/img/logotype.min.svg"/>
            </div>
            <div class="grid-x grid-padding-x align-center">
                <div class="cell small-2"> @include('templates.partials.sidebar')</div>
                <div class="cell small-6">@yield('content')</div>
            </div>
        </div>
        @stack('scripts')
        <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            // toastr.options.closeButton = true;
            @if(Session::has('message'))
                var type = "{{ Session::get('alert-type', 'success') }}";
                switch(type){
                    case 'info':
                        toastr.info("{{ Session::get('message') }}");
                        break;
                    
                    case 'warning':
                        toastr.warning("{{ Session::get('message') }}");
                        break;
            
                    case 'success':
                        toastr.success("{{ Session::get('message') }}","SUCCESS",{progressBar:true});
                        break;
            
                    case 'error':
                        toastr.error("{{ Session::get('message') }}","ERROR",{progressBar:true});
                        break;
                }
            @endif
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    toastr.error('{{ $error }}','ERROR!',{ progressBar: true });
                @endforeach
            @endif
        </script>
        
    </body>

</html>