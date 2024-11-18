<?php

use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PokemonController::class, 'index']); // rota de inicio / listagem de pokemons
Route::get('pokemons/create', [PokemonController::class, 'create']); // rota para abrir tela de cadastro de pokemon
Route::post('pokemons', [PokemonController::class, 'store']); //rota para salva e executa o pokemon
Route::get('pokemons/{id}/edit', [PokemonController::class, 'edit']); // abre a tela de edição de pokemon
Route::put('pokemons/{id}', [PokemonController::class, 'update']); // executa a ação de edição
Route::delete('pokemons/{id}', [PokemonController::class, 'destroy']); // executa a ação de exclusão
