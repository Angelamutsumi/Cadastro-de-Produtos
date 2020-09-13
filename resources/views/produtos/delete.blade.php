@extends('template')

@section('main')

<div class="container">
  <form action="{{ route('excluir_produto', ['id' => $produto -> id]) }}" method="POST">
    @csrf
    <div class="col text-center">
    <label for="" class="mt-5">Tem certeza que deseja excluir este produto?</label> <br />
    <input type="text" name="nome" class="form-control mt-3" value="{{$produto->nome}}"> <br />
        <button class="btn btn-primary mt-3">Confirma</button>      
    </div>
  </form>
</div>

@endsection