@extends('layouts.page')
@section('content')
<div class="container">
		<div class="col-sm-6">
		<form action="/product" method="POST">
			@csrf
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label>Discription</label>
				<input type="textarea" name="discription" class="form-control">
			</div>
			<div class="form-group">
				<label>Price</label>
				<input type="text" name="price" class="form-control">
			</div>
			<div class="form-group">
				<label>Category</label>
				<select name="category_id" class="form-select " required="required">
					@foreach($categories as $category)
					<option value="{{$category->id}}">{{$category->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-sm btn-success">Save</button>
			</div>
		</form>

	</div>
</div>
	
</div>
 @endsection