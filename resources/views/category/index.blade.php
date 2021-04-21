@extends('layouts.page')
@section('content')
<div class="container">
<div class="header">
	
</div>
<table class="table table-striped">
  <thead>
    <tr>
     
      <th scope="col">Category name</th>
    
      <th scope="col">Action</th>
    
    </tr>
  </thead>
  <tbody>
  	@foreach($categories as $category)
    <tr>
      <td>{{$category->name}}</td>
      <td><a href="/category/{{$category->id}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> view</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
 @endsection