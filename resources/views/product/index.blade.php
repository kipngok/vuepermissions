@extends('layouts.page')
@section('content')
<div class="container">
<div class="header">
	
</div>
<table class="table table-striped">
  <thead>
    <tr>
   
      <th scope="col">Name</th>
       <th scope="col">Category</th>
       <th scope="col">Price</th>
      <th scope="col">Action</th>
    
    </tr>
  </thead>
  <tbody>
  	@foreach($products as $product)
    <tr>
      <td>{{$product->name}}</td>
      <td>{{$product->category->name}}</td>
      <td>{{$product->price}}</td>
      <td><a href="/product/{{$product->id}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> view</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
 @endsection