@extends('layouts.app')

@section('content')


<div class="border border-dark p-4 m-3">
    <form action="{{route('search.products')}}" method="get">
        <input type="search" name="q" class="form-control" placeholder="Busca">

        <input type="submit" value="Buscar" class="btn btn-success mt-3">
    </form>
</div>

    <div class="container">
        <div class="row">
                @foreach ($products as $product)
                <div class="col-4 border border-dark p-3 d-flex flex-column align-items-center">
                    <img src="{{asset('assets/img/pens.png')}}" width="100" height="80">
                     <h4>{{$product->name}}</h4>
                     <p>{{$product->description}}</p>
                     <span class="pb-1">R$ {{number_format($product->price, 2)}}</span>
                     <a href="{{route('add.to.cart', ['id'=>$product->id])}}" class="btn btn-success">Adicionar ao Carrinho</a>
                     
                </div>
               @endforeach

               @if($products->count()>=20)
               {{$products->links()}}
               @endif
        </div>
    </div>

@endsection