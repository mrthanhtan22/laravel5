<!DOCTYPE html>
<html>
<head>
	<title>Laravel 5.3</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Ma so bai viet: {!! $article->id !!}</h1>
	{!!Form::model($article,['method'=> 'PATCH', 'action'=>['ArticlesController@update',$article->id] ])!!}

		{!! Form::label('name','Name:') !!}
		{!! Form::text('name') !!} 
 
		{!! Form::label('author','Author:') !!}
		{!! Form::text('author') !!} 

		{!! Form::submit('Cap Nhat')!!}

	{!! Form::close() !!}

	
		

</body>
</html>