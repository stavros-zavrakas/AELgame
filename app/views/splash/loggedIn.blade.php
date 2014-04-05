@extends('index')

@section('body')
	{{ var_dump($user); }}
@stop

@section('jshook')
<script>
	var splash_logged_in = true;
</script>
@stop
