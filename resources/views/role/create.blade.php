@extends('layouts.page')
@section('content')
 
<div class="container">
	<div class="row">
		<div class="col-sm-10">
		<form action="/role" method="POST">
		@csrf
		<div class="form-group">
		<label>Role</label>
		<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
		<strong>Permission</strong>
		@foreach($permissions->chunk(3) as $chunk)
    	<div class="row">
    	@foreach($chunk as $permission)
    	<div class="col-sm-3">
		<div class="custom-control custom-switch">
		  <input type="checkbox" class="custom-control-input" id="{{implode('-',explode(' ',$permission->name))}}" name="permissions[]" value="{{$permission->name}}">
		  <label class="custom-control-label" for="{{implode('-',explode(' ',$permission->name))}}">{{ ucfirst($permission->name) }}</label>

		  <!-- ucfirst-> converts the first character of a string to uppercase -->
		</div>
		</div>
		@endforeach
		</div>
		@endforeach
		</div>		
		<div class="form-group">
		<button type="submit" class="btn btn-sm btn-success">Save</button>
		</div>
		</form>
		</div>
	</div>
</div>
@endsection
