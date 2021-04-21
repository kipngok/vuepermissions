@extends('layouts.page')
@section('content')

  
  </div>
<div class="container">
<div class="row">
	<div class="form-group"><h3>Sms</h3></div>
<!-- 	<div class="col-sm-6">
	<form action="/sms" method="POST">
		 {{csrf_field()}}
		  <div class="form-group">
		   <label>Enter phone </label>
		  @component('components.forms.input', [
		 'name'=> 'contact',
		 'palceholder' => 'contact',
		 'type'=>'text'
		 ])
		@endcomponent
		 </div>

		  <div class="form-group">
		  	<label>Enter SMS </label>
		  @component('components.forms.input', [
		 'name'=> 'sms',
		 'palceholder' => 'Sms',
		 'type'=>'text'
		 ])
		@endcomponent
		 </div>
		

		
		</form>
	</div> -->


 
  <div class="col-sm-6">
    <form action="/sms" method="POST">
      {{csrf_field()}}

    <div class="form-group">
      <label>Enter phone </label>
     <input class="form-control" type="text" name="contact">
    </div>
      <div class="form-group">
        <label>Message</label>
        <textarea class="form-control" rows="5" name="sms"></textarea>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-sm btn-success">Send message</button>
      </div>
    </form>

  </div>
</div>
</div>
 @endsection