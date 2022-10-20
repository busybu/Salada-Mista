
@extends('layouts.app-master')
 
@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Dados do produto</h1>
        <div class="lead">
           
        </div>
       
        <div class="container mt-4">
            <div>
                Nome: {{ $produto->nome }}
            </div>
            <div>
                Marca: {{ $produto->marca }}
            </div>
            <div>
                Quantidade: {{ $produto->quantidade }}
            </div>
            <div>
                Preço: {{ $produto->preco }}
            </div>
            <div>
                Data de vencimento: {{ date('d/m/Y', strtotime($produto->data_vencimento)) }}
            </div>
        </div>
 
    </div>
    <div class="mt-4">
        <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-primary">Editar</a>
        <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
@endsection

