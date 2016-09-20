<!DOCTYPE html>
<html>
<head>
	<title>test Form</title>
</head>
<body>
	<h1>Them moi thanh vien</h1>
	{!! Form::open(['url'=>'articles']) !!}
		{!! Form::label('name', 'Name: ') !!}
		{!! Form::text('name') !!}

		{!!Form::label('author', 'Author: ')!!}
		{!!Form::text('author')!!}

	
		{!! Form::label('created_at','Created Date:') !!}
		{!! Form::input('date', 'created_at') !!}
		

		{!!Form::submit()!!}

	{!! Form::close() !!}

	@if ( $errors->any() )
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>	
	@endif

</body>
</html>