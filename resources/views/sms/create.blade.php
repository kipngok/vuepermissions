@extends('layouts.page')
@section('content')


  
  </div>
<div class="container">
<div class="row">
	<div class="form-group"><h3>Sms</h3></div>
	<div class="col-sm-6">
	<form action="/sms" method="POST">
		 {{csrf_field()}}
		 

      <div class="form-group">
		 <x-input
    		name="contact"
    		type="text"
    		placeholder="Contacts"
    		required
    		:label="[
        'text' => 'Enter Contacts',
    		]"
  		/>
		 </div>
   <div class="form-group">
     <x-input
        name="sms"
        type="text"
        rows="5"
        placeholder="Enter sms"
        required
        :label="[
        'text' => 'Enter Sms',
        ]"
      />
     </div>



		 

		
		</form>
	</div>


 
 
  </div>
</div>
</div>
 @endsection