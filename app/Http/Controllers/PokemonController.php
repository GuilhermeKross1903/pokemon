<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemons = Pokemon::all();
        return view('pokemons.index', compact('pokemons'));
    } // função para listar

    public function create() // abrir view de cadastro
    {
        return view('pokemons.create');
    }
    
    public function store(Request $request) //Função para salvar no banco o pokemon - Request = Variavel do Laravel para pegar os dados que vem do formulário
    {
        Pokemon::create($request->all());
        return redirect('/')->with('success', 'Seu Pokemon foi capturado com sucesso');
    } 

    public function edit($id)
    {
        $pokemons = Pokemon::findOrFail($id);
        return view('pokemons.edit', compact('pokemons'));
    }

    public function update(Request $request, $id)
    {
        $pokemons = Pokemon::findOrFail($id);
        $pokemons->update($request->all());
        return redirect('/')->with('success', 'Seu Pokemon Evoluiu');
    }

    public function destroy($id)
    {
        $pokemons = Pokemon::findOrFail($id);
        $pokemons->delete();
        return redirect('/')->with('success', 'Pokemon deletado');
    }
}
