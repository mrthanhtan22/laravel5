<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<ul>
		@foreach ($articles as $row)
			<li>Name:  {{$row->name}} || Author: {{$row->author}} || Create_at: {{$row->created_at}}</li>
		@endforeach
	</ul>
</body>
</html>