@extends('layouts.page')
@section('content')
<div class="container">
		<div class="col-sm-6">
		<form action="/category" method="POST">
			@csrf
			<div class="form-group">
				<label>Category name</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-sm btn-success">Save</button>
			</div>
		</form>

	</div>
</div>
	
</div>
 @endsection