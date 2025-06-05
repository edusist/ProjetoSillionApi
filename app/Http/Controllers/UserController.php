<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;


class UserController extends Controller
{
    public function getRandomUsers()
    {

        $response = Http::get('https://randomuser.me/api/?results=10', [

            'page' => 10,
            'results' => 10

        ]);


        if ($response->successful()) {

            $data =  collect($response->json()['results']);

            // dd($data->all());

            // Armazena os dados em um array
            $allData = [];

            if (is_object($data)) {

                // Se a resposta não for um array (por exemplo, um objeto)
                // $allData[] = $data; // ou qualquer tratamento que você deseje


                // $allData[] = $data; // ou qualquer tratamento que você deseje
                $data->each(function ($users) {
                    echo "Genêro: {$users['gender']}<br>";


                        collect($users['name']['title'])->each(function ($name){
                            echo "Título: {$name}\t";


                        });
                             collect($users['name']['first'])->each(function ($name){
                            echo "Nome: {$name}\t";


                        });

                               collect($users['name']['last'])->each(function ($name){
                            echo "Sobrenome: {$name}\t";
                             echo "<br><br>";

                        });


                });

            }
            // Retorna os dados (você pode usar para retornar uma view, etc.)
            // return view('index', ['data' => $allData]);
        } else {
            // Trata o erro
            return response()->json(['error' => 'Não foi possível buscar os posts'], $response->status());
        }
    }
}
