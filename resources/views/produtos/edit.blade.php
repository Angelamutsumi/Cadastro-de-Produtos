@extends('template')

@section('main')

<div class="container">
  <form action="{{ route('alterar_produto', ['id' => $produto -> id]) }}" method="POST">
    @csrf
    <label for="" class="mt-5">Nome</label> <br />
    <input type="text" name="nome" class="form-control" value="{{$produto-> nome}}"> <br />
    <label for="">Custo</label> <br />
    <input type="text" name="custo" class="form-control" value="{{$produto-> custo}}"> <br />
    <label for="">Preço</label> <br />
    <input type="text" name="preco" class="form-control" value="{{$produto-> preco}}"> <br />
    <label for="">Quantidade</label> <br />
    <input type="text" name="quantidade" class="form-control" value="{{$produto-> quantidade}}"> <br />
     <div class="col text-center">
        <button class="btn btn-primary">Salvar alterações</button>      
    </div>
  </form>
</div>
