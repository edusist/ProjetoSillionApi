<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;


class UserController extends Controller
{

    public function index()
    {

        return view('index');
    }

    public function getRandomUsers(Request $request)
    {
        // dd($request->url());
        // dd($request->query());
        $response = Http::get('https://randomuser.me/api/?results=100', [

            'page' => 1,
            'results' => 100,
            'size' => 100

        ]);


        if ($response->successful()) {

            $data =  collect($response->json()['results']);
            // echo count( $data );

            if (is_object($data)) {


                $perPage = 100;
                $currentPage = LengthAwarePaginator::resolveCurrentPage();
                $currentItems = $data->slice(($currentPage - 1) * $perPage, $perPage)->values();

                $data = new LengthAwarePaginator(
                    $currentItems,
                    $data->count(),
                    $perPage,
                    $currentPage,
                    ['path' => $request->url(), 'query' => $request->query()]
                );


                // Retorna os dados (você pode usar para retornar uma view, etc.)
                return view('usuarios.lista-usuarios', ['data' => $data]);
            }
        } else {
            // Trata o erro
            return response()->json(['error' => 'Não foi possível buscar os posts'], $response->status());
        }
    }
}
