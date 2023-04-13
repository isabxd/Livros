<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivrosController extends Controller
{
    
    public function index()
    {
       
        $livros = Livro::all();

        
        return view('livros.index', compact('livros'));
    }

    public function create()
    {
        return view('livros.create');
    }

    
    public function store(Request $requisicao)
    {
        
        $livro = new Livro();

        
        $livro->titulo = $requisicao->titulo;
        $livro->autor = $requisicao->autor;
        $livro->editora = $requisicao->editora;
        $livro->data = $requisicao->data;
    
        $livro->save();

        return redirect()->route('livros.show', $livro->id);
    }

    public function show(Livro $livro)
    {
        
        return view('livros.view', compact('livro'));
    }


    public function edit(Livro $livro)
    {

        return view('livros.edit', compact('livro'));
    }

   
    public function update(Request $requisicao, Livro $livro)
    {
        
        $livro->update($requisicao->all());

        return redirect()->route('livros.show', $livro->id);
    }

    public function destroy(Livro $livro)
    {
        $livro->delete();

        return redirect()->route('livros.index');
    }
}
