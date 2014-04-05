@extends('index')

@section('body')
	<a href="{{ URL::action('AuthController@facebook') }}">Facebook</a> <br>
	<a href="{{ URL::action('AuthController@google') }}">Google</a>
@stop

@section('jshook')
<script>
	var splash_logged_out = true;
</script>
@stop
