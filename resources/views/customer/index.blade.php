@extends('layouts.page')
@section('content')
<div class="container">
<div class="header">
	
</div>
<table class="table table-striped">
  <thead>
    <tr>
     
      <th scope="col">Name</th>
       <th scope="col">ID No</th>
      <th scope="col">Action</th>
    
    </tr>
  </thead>
  <tbody>
  	@foreach($customers as $customer)
    <tr>
      <td>{{$customer->user->name}}</td>
      <td>{{$customer->id_no}}</td>
      <td><a href="/customer/{{$customer->id}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> view</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
 @endsection