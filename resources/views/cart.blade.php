@extends('layouts.app')

@section('content')

  @if ($carts->count() > 0)
  <table class="table">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Preço</th>
      </tr>
    </thead>
    <tbody>
      @foreach($carts as $cart)
        <tr>
          <td>{{$cart->product->name}}</td>
          <td>nao importa agora</td>
        </tr>
      @endforeach
    </tbody>
  </table>
  @else
      <p class="text-center">Não há itens no carrinho</p>
  @endif

@endsection