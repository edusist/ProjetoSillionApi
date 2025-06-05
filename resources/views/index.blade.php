@extends('layouts.app')

@section('content')
    <h1 class="text-center text-uppercase">Lista de Usuários</h1>

    <div class="table-responsive table-responsive-sm">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Genêro</th>
                    <th scope="col">Título</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Logradouro</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">UF</th>
                    <th scope="col">País</th>
                    <th scope="col">Caixa Postal</th>
                    <th scope="col">Latitude</th>
                    <th scope="col">Longitude</th>
                    <th scope="col">Timezone horário</th>
                    <th scope="col">Timezone país</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Login</th>
                </tr>
            </thead>

                @foreach ($data as $users)
                    <tr>
                        <td>
                            <p>{{ $users['gender'] }} </p>
                        </td>
                        <td>
                            <p>{{ $users['name']['title'] }}</p>
                        </td>
                        <td>
                            <p>{{ $users['name']['first'] }}</p>
                        </td>
                        <td>
                            <p>{{ $users['name']['last'] }}</p>
                        </td>
                        <td>
                            <p>{{ $users['location']['street']['name'] }} Nº {{ $users['location']['street']['number'] }}
                            </p>
                        </td>
                        <td>
                            <p>{{ $users['location']['city'] }}</p>
                        </td>
                        <td>
                            <p>{{ $users['location']['state'] }}</p>
                        </td>
                        <td>
                            <p>{{ $users['location']['country'] }}</p>
                        </td>
                        <td>
                            <p>{{ $users['location']['postcode'] }}</p>
                        </td>
                        <td>
                            <p>{{ $users['location']['coordinates']['latitude'] }}</p>
                        </td>
                        <td>
                            <p>{{ $users['location']['coordinates']['longitude'] }}</p>
                        </td>
                        <td>
                            <p>{{ $users['location']['timezone']['offset'] }}</p>
                        </td>
                        <td>
                            <p>{{ $users['location']['timezone']['description'] }}</p>
                        </td>
                        <td>
                            <p>{{ $users['email'] }}</p>
                        </td>
                        <td>
                            <p>{{ $users['login']['uuid'] }}</p>
                        </td>
                    </tr>

            @endforeach
           {{-- {{ $data->links() }} <!-- Exibe paginação --> --}}
        </table>
    @endsection
          <!-- Pagination -->
      <nav class="my-4" aria-label="...">
        <ul class="pagination pagination-circle justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active" aria-current="page">
            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Próximo</a>
          </li>
        </ul>
      </nav>
