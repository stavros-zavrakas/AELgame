<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);
	</style>
</head>
<body>
	<div class="welcome">
		@if(isset($user))
			{{ var_dump($user); }}
		@else
			<a href="{{ URL::action('AuthController@facebook') }}">Facebook</a> <br>
			<a href="{{ URL::action('AuthController@google') }}">Google</a>
		@endif
	</div>
</body>
</html>
