@extends('layouts.plantillalayout')

@section('titulo', 'Ventana principal')
   
    @section('encabezamiento')

        <h1>Club de lectura</h1>
   
    @endsection

    @section('navegador')
            <a class="navbar-brand" href="#">Grupos de lectura</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
                </form>
            </div>
    @endsection

@section('seccion')
    @parent
    @section('barralateral')
        <h5> Géneros literarios: </h5>
        <ul>
            <li><a href="#" class="btn btn-xs btn-info pull-right">Dramático</a></li>
            <li><a href="#">Lírico</a></li>
            <li><a href="#">Narrativo</a></li>
        </ul>

    @endsection
    
    @section('articulo')
        <p>esto es el articulo</p>
    @endsection
@endsection