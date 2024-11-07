<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemons = Pokemon::all();
        return view('pokemon.index', compact('pokemons'));
    }
    
    public function create()
    {
        return view('pokemon.create');
    }
    
    public function store(Request $request)
    {
        Pokemon::create($request->all());
        return redirect('pokemon')->with('success', 'Pokemon created successfully.');
    }
    
    public function edit($id)
    {
        $pokemons = Pokemon::findOrFail($id);
        return view('pokemon.edit', compact('pokemons'));
    }
    
    public function update(Request $request, $id)
    {
        $pokemons = Pokemon::findOrFail($id);
        $pokemons->update($request->all());
        return redirect('pokemon')->with('success', 'Pokemon updated successfully.');
    }
    
    public function destroy($id)
    {
        $pokemons = Pokemon::findOrFail($id);
        $pokemons->delete();
        return redirect('pokemon')->with('success', 'Pokemon deleted successfully.');
    }
}
