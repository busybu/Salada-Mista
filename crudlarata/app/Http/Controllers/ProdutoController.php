<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;

class ProdutoController extends Controller
{
   
    public function index()
    {
        $produtos = Produto::orderBy("id", "DESC")->paginate(10);
        return view('produtos.index', compact('produtos'));
    }

    
    public function create()
    {
        return view("produtos.create");
    }

    
    public function store(Request $request)
    {
        $storeData = $request->validate([
            "nome" => 'required|max:255',
            "marca" => 'required|max:255',
            "quantidade" => 'required|numeric',
            "preco" => 'required|numeric',
            "data_vencimento" => 'required|date',
        ]);
        $produto = Produto::create($storeData);
        return redirect()->route('produtos.index')->withSuccess(__('Produto criado com sucesso.'));
    }

   
    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.show', ['produto' => $produto]);
    }

    
     
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', ['produto' => $produto]);
    }

   
    public function update(Request $request, $id)
    {
        $storeData = $request->validate([
            'nome' => 'required|max:255',
            'marca' => 'required|max:255',
            'quantidade' => 'required|numeric',
            'preco' => 'required|numeric',
            'data_vencimento' => 'required|date',
        ]);
        
        Produto::whereId($id)->update($storeData);
        return redirect('/produtos')->with('completed', 'Produto atualizado com sucesso');
        
    }

  
    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return redirect('/produtos')->with('completed', 'Produto removido com sucesso');
    }
}
