@extends('template')

@section('main')


  <form action="{{ route('registrar_produto')}}" method="POST">
    @csrf
    <div class="container">
   
    <div class="col-sm-8 offset-sm-2">
      <h1 class="display-3">Cadastro de Produtos</h1>
    <div>
      <label for="" class='mt-4'>Nome</label> <br />
      <input type="text" name="nome" class="form-control"> <br />
      <label for="">Custo</label> <br />
      <input type="text" name="custo" class="form-control"> <br />
      <label for="">Preço</label> <br />
      <input type="text" name="preco" class="form-control"> <br />
      <label for="">Quantidade</label> <br />
      <input type="text" name="quantidade" class="form-control"> <br />
      <div class="col text-center">
        <button class="btn btn-primary">Salvar</button>      
      </div>
      
    </div>
  </form>
@endsection