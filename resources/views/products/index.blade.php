@extends('products.layout')
 
@section('content')
    <div class="row">
<div class="col-lg-2">
    
</div>
        <div class="col-lg-10 m-0 p-0">
            <div class="pull-left m-0 p-2">
                <h2><b>Product Management Section</b> - <a href="https://innovationfull.herokuapp.com">innovationfull.heroku.app</a></h2>
            </div>
            <div class="pull-right m-1">
                <a class="btn btn-success bg-gradient bg-opacity-75" href="{{ route('products.create') }}"> เพิ่มสินค้า</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   <div class="row">
   <div class="col-lg-2">
           
</div>
<div class="col-lg-10">
    <table class="table table-striped table-bordered table-hover">
        <tbody class="table-group-divider">
        <tr>
            <th>ลำดับ</th>
            <th>สินค้า</th>
            <th>รายละเอียด</th>
            <th width="280px">ปฏิบัติการ</th>
        </tr>
</tbody>
        @foreach ($products as $product)
        <tr>
            <td><input type="checkbox"></td>
            <td><p>{{ $product->productname }}</p></td>
            <td>{{ $product->producttype }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info bg-gradient bg-opacity-75 m-0" href="{{ route('products.show',$product->id) }}">Show</a>
    
                    <a class="btn btn-primary bg-gradient bg-opacity-75" href="{{ route('products.edit',$product->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger bg-gradient bg-opacity-75">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $products->links() !!}
</div>
</div>   
@endsection