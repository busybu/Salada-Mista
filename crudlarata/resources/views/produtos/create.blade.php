
@extends('layouts.app-master')
 
@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Criar novo produto</h1>
        <div class="lead">
            Dados do produto
        </div>
 
        <div class="container mt-4">
            <form method="POST" action="">
                @csrf
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input value="{{ old('nome') }}"
                        type="text"
                        class="form-control"
                        name="nome"
                        placeholder="Nome" required>
 
                    @if ($errors->has('nome'))
                        <span class="text-danger text-left">{{ $errors->first('nome') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="marca" class="form-label">Marca</label>
                    <input value="{{ old('marca') }}"
                        type="text"
                        class="form-control"
                        name="marca"
                        placeholder="Marca" required>
                    @if ($errors->has('marca'))
                        <span class="text-danger text-left">{{ $errors->first('marca') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="quantidade" class="form-label">Quantidade</label>
                    <input value="{{ old('quantidade') }}"
                        type="number"
                        class="form-control"
                        name="quantidade"
                        placeholder="Quantidade" required>
                    @if ($errors->has('quantidade'))
                        <span class="text-danger text-left">{{ $errors->first('quantidade') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="preco" class="form-label">Preço</label>
                    <input value="{{ old('preco') }}"
                        type="text"
                        class="form-control"
                        name="preco"
                        placeholder="Preço" required>
                    @if ($errors->has('preco'))
                        <span class="text-danger text-left">{{ $errors->first('preco') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="data_vencimento" class="form-label">Vencimento</label>
                    <input value="{{ old('data_vencimento') }}"
                        type="date"
                        class="form-control"
                        name="data_vencimento"
                        placeholder="Data de Vencimento" required>
                    @if ($errors->has('data_vencimento'))
                        <span class="text-danger text-left">{{ $errors->first('data_vencimento') }}</span>
                    @endif
                </div>
               
               
               
 
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{ route('produtos.index') }}" class="btn btn-default">Cancelar</a>
            </form>
        </div>
 
    </div>
@endsection

