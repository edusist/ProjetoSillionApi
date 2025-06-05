<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Http\Client\Request;


class UserController extends Controller
{
    public function getRandomUsers()
    {
        // $request = new $request();
        $response = Http::get('https://randomuser.me/api/?results=100', [

            'page' => 20,
            'results' => 20

        ]);


        if ($response->successful()) {

            $data =  collect($response->json()['results'])->forPage(1, 10);

            // $currentPage = LengthAwarePaginator::resolveCurrentPage(); // página atual
            // $perPage = 10; // itens por página

            //  $currentItems = $data->slice(($currentPage - 1) * $perPage, $perPage)->values();

            // $data = new LengthAwarePaginator(
            // $data->total(),
            // $data->perPage(),
            // $data->currentPage(),
            // [
            //     'path' => ,
            //     'query' => [
            //         'page' => $data->currentPage()
            //     ]
            // ]
            // );

            // dd($data->all());

            // Armazena os dados em um array
            // $allData = [];

            if (is_object($data)) {

                // Se a resposta não for um array (por exemplo, um objeto)
                $allData[] = $data; // ou qualquer tratamento que você deseje

                // $data->each(function ($users) {
                //     echo "Genêro: {$users['gender']}\t\t";

                //     collect($users['name']['title'])->each(function ($titulo) {
                //         echo "Título: {$titulo}\t\t";

                //     });

                //     collect($users['name']['first'])->each(function ($name) {
                //         echo "Nome: {$name}\t\t";
                //     });

                //     collect($users['name']['last'])->each(function ($name) {
                //         echo "Sobrenome: {$name}\t\t";
                //         echo "<br><br>";
                //     });

                //       collect($users['location']['street']['name'])->each(function ($nome_rua) {
                //         echo "Logradouro: {$nome_rua}\t\t";
                //         echo "<br><br>";
                //     });

                //       collect($users['location']['street']['number'])->each(function ($numero) {
                //         echo "Nº: {$numero}\t\t";
                //         echo "<br><br>";
                //     });
                //        collect($users['email'])->each(function ($email) {
                //         echo "Email: {$email}\t\t";
                //         echo "<br><br>";
                //     });
                // });


            }
            // Retorna os dados (você pode usar para retornar uma view, etc.)
            return view('index', ['data' => $data]);
        } else {
            // Trata o erro
            return response()->json(['error' => 'Não foi possível buscar os posts'], $response->status());
        }
    }
}
