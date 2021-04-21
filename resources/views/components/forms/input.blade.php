<div class="form-group {{$errors->has($name) ? 'has-error' : ''}}">
	<input id="{{$name}}" 
	type="{{isset($type) ? $type:'text'}}" 
	class="form-control" 
	name="{{$name}}" 
	placeholder="{{isset($placeholder) ? $placeholder: ''}}"
	value="{{old($name) ? : (isset($object)? $object->{$name} : '')}}">
	@if($errors->has($name))
		<span class="help-block">
			<strong>{{$errors->first($name)}}</strong>
		</span>
	@endif
	
</div>