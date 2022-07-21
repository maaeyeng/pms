@extends('products.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-8 margin-tb">
            <div class="pull-left">
                <h2> แสดงสินค้า</h2>
            </div>

        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>สินค้า:</strong>
                {{ $products->productname }}
            </div>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>รายละเอียด:</strong>
                {{ $products->detail }}
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> กลับ</a>
            </div>
        </div>
    </div>
@endsection