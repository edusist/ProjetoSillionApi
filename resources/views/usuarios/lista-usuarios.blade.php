@extends('layouts.app')

@section('content')
    <!-- {{-- /fim da Páginação --}} -->
    <h1 class="text-center text-uppercase">Lista de Usuários</h1>

    <div class="table-responsive table-responsive-sm">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Foto</th>
                    <th scope="col">ID</th>
                    <th scope="col">Genêro</th>
                    <th scope="col">Título</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Login</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Data nascimento</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Registrado</th>
                    <th scope="col">Data</th>
                    <th scope="col">Telefone Fixo</th>
                    <th scope="col">Telefone Celular</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Natural</th>
                    <th scope="col">Logradouro</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">UF</th>
                    <th scope="col">País</th>
                    <th scope="col">Caixa Postal</th>
                    <th scope="col">Latitude</th>
                    <th scope="col">Longitude</th>
                    <th scope="col">Timezone horário</th>
                    <th scope="col">Timezone país</th>



                </tr>
            </thead>

            @foreach ($data as $users)
                <tr>
                    <td> <img width="" height="" src="{{ $users['picture']['medium'] }}" alt=""
                            width="100%">
                        <p></p>
                    </td>
                    <td>
                        <p>{{ $users['id']['value'] }}</p>
                    </td>
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
                        <p>{{ $users['email'] }}</p>
                    </td>
                    <td>
                        <p>{{ $users['login']['username'] }}</p>
                    </td>
                    <td>
                        <p>{{ $users['login']['password'] }}</p>
                    </td>
                    <td>
                        <p>{{ $users['dob']['date'] }}</p>
                    </td>
                    </td>
                    <td>
                        <p>{{ $users['dob']['age'] }}</p>
                    </td>
                    <td>
                        <p>{{ $users['registered']['date'] }}</p>
                    </td>
                    <td>
                        <p>{{ $users['registered']['age'] }}</p>
                    </td>

                    <td>
                        <p>{{ $users['phone'] }}</p>
                    </td>
                    <td>
                        <p>{{ $users['cell'] }}</p>
                    </td>

                    <td>
                        <p>{{ $users['id']['name'] }}</p>
                    </td>
                    <td>
                        <p>{{ $users['nat'] }}</p>
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

                </tr>
            @endforeach
            {{-- {{ $data->links() }} <!-- Exibe paginação --> --}}
        </table>
    @endsection


    {{-- {{ $data->links()}} --}}
    <!--Páginação-->
    @push('scripts')
        <script src="{{ asset('js/pagination.js') }}"></script>
    @endpush
