@extends('layouts.app')

@section('content')
    <h1 class="text-center text-uppercase"><strong>Posts</strong></h1>
    <ul class="list-group list-group-flush">

        @foreach ($data as $dado)
            <li class="list-group-item list-group-item-primary">
                <h2>{{ $dado}}</h2>
            </li>
            {{-- <li class="list-group-item list-group-item-secondary">
                <p>{{ $users['body'] }}</p>
            </li> --}}
        @endforeach
    </ul>
@endsection
