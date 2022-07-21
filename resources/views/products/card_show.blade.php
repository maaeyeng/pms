@extends('products.layout')
  
@section('content')
    <div class="card">
        <h2 class="card-title">{{ $product->productname }}</h2>
        <div class="card-body">   {{ $product->detail }}</div>
        <div class="card-image"></div>
    </div>
@endsection