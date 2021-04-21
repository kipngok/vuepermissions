@extends('layouts.page')
@section('content')
<div class="container">
		<div class="col-sm-6">
		<form action="/customer" method="POST">
			@csrf
		
			<div class="form-group">
				<label>Name</label>
				<select name="user_id" class="form-select " required="required">
					@foreach($users as $user)
					<option value="{{$user->id}}">{{$user->name}}</option>
					@endforeach
				</select>
			</div>
				<div class="form-group">
				<label>ID No</label>
				<input type="text" name="id_no" class="form-control">
			</div>
		
			<div class="form-group">
				<button type="submit" class="btn btn-sm btn-success">Save</button>
			</div>
		</form>

	</div>
</div>
	
</div>
 @endsection