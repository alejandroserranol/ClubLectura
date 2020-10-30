<html>
    <head>
        <title>Nombre de la app - @yield('titulo')</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/estiloplantilla.css') }}" rel="stylesheet" />
    </head>
    <body>
        <div class="container">
            <div class="row">
                <header class="col-md-12">
                    @yield('encabezamiento')
                </header>
            </div>
            
            <div class="row">
                <nav class="navbar navbar-dark bg-dark col-md-12">
                    @yield('navegador')
                </nav>
            </div> 

            @section('seccion')
                <section class="row">
                    <aside  class="col-md-2">
                        @yield('barralateral')
                    </aside>
                        
                    <article class="col-md-10">
                        @yield('articulo')
                    </article>
                </section>
            @show

            <div class="row">
                <footer class="col-md-12">
                    El placer de la lectura
                </footer>
            </div>
        </div>

        <script src="{{ asset('js/jquery-3.5.1.min.js') }}" defer></script>
    </body>
</html>