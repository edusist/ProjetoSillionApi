@extends('layouts.app')

@section('content')
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
        </li>
        {{-- <li class="nav-item">
    <a class="nav-link" href="{{ route('usuarios') }}">Lista de usuários</a></li>
  </li> --}}

    </ul>
    <h1 class="text-center">API - Lista de Usuários</h1>
    <div class="row text-center">
        <div class="col-sm-12 col-md-4 col-lg-12 col-xl-3 col-xxl-3">
            <form method="post" action="{{ route('usuarios') }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <button type="submit" class="btn btn-primary">Lista de usuários</button>
            </form>
        </div>
    </div>
@endsection
