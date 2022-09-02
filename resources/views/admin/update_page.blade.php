@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h5 class="text-center">Editar Produto</h5>
            <form action="{{route('update.product')}}" method="post" class="border border-dark p-4">
                @csrf
                <input type="hidden" name="the_id" value="{{$product->id}}">

                <label>Nome do produto</label>
                <input type="text" name="name" class="form-control m-2" value="{{$product->name}}">

                <label>Descrição</label>
                <input type="text" name="description" class="form-control" value="{{$product->description}}">

                <label>Preço</label>
                <input type="text" name="price" class="form-control m-2" value="{{$product->price}}">

                <label>Quantidade</label>
                <input type="text" name="quantity" class="form-control m-2" value="{{$product->quantity}}">

                <label>Categoria:</label>
                <select name="category" class="form-select m-2">
                      <option value="1">Agulhas</option>
                      <option value="2">Apontadores</option>
                      <option value="3">Borrachas</option>
                      <option value="4">Cadernos</option>
                      <option value="5">Canetas</option>
                      <option value="6">Carimbos</option>
                      <option value="7">Colas</option>
                      <option value="8">Envelopes</option>
                      <option value="9">Estiletes</option>
                      <option value="10">Estojos</option>
                      <option value="11">Ficharios</option>
                      <option value="12">Fitas Adesivas</option>
                      <option value="13">Gizes</option>
                      <option value="14">Marcadores de Texto</option>
                      <option value="15">Pastas</option>
                      <option value="16">Papel Carvão</option>
                      <option value="17">Papel Couche</option>
                      <option value="18">Papel Jornal</option>
                      <option value="19">Pilhas</option>
                      <option value="20">Post Its</option>
                      <option value="21">Pranchetas</option>
                      <option value="22">Sulfites</option>
                      <option value="23">Tesouras</option>
                </select>

                <input type="submit" value="Registrar" class="btn btn-success m-2">
            </form>
        </div>
    </div>
</div>

@endsection