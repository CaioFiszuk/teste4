@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">

              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#window">Registrar produto</button>

            <div class="border border-dark p-4 mt-3">
                <form action="{{route('search')}}" method="get">
                    <input type="search" name="q" class="form-control" placeholder="Busca">
            
                    <input type="submit" value="Buscar" class="btn btn-success mt-3">
                </form>
            </div>

               @include('includes.modals')

                @if ($products->count()==0)
                    <p>Não há produtos registrados</p>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Preço</th>
                                <th>Quantidade</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>R$ {{$item->price}}</td>
                                    <td>{{$item->quantity}}</td>
                                    <td><a href="{{route('update.page', ['id'=>$item->id])}}" class="btn btn-success">Editar</a></td>
                                    <td><a href="{{route('delete.product', ['id'=>$item->id])}}" class="btn btn-danger">Excluir</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif

                @if($products->count()>=20)
                {{$products->links()}}
                @endif
            </div>
        </div>
    </div>
@endsection