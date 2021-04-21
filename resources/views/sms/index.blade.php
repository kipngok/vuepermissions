@extends('layouts.page')
@section('content')
	
<div class="container">
<div class="row">
  <div class="col-sm-12">
    <table class="table table-condensed table-striped">
      <thead>
        <tr>
         
          <th>Contact</th>
          <th>Message</th>
        </tr>
      </thead>
     <tbody>
    @foreach($smses as $sms)
    <tr>
      <td>{{$sms->contact}}</td>
      <td>{{$sms->sms}}</td>
      <td><a href="/sms/{{$sms->id}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> view</a></td>
    </tr>
    @endforeach
  </tbody>
    </table>
  
  </div>
</div>
</div>
 @endsection