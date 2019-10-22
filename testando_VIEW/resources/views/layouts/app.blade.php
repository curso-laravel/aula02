<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>

    <script> 
      alert('Boa tarde');
    </script>
    
    <body>
        @section('topo')
            Prefeitura de Belo Horizonte
        @show

        <div class="container">
            @yield('content')
        </div>

        @section('rodape')
            Belo Horizonte, 22 de outubro de 2019.
        @show
    </body>
</html>