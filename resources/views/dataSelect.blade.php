<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table border="1">
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Class</th>
				<th>Roll</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				@foreach($datakey as $value)
				<td>{{ $value->id}}</td>
				<td>{{ $value->name}}</td>
				<td>{{ $value->class}}</td>
				<td>{{ $value->roll}}</td>
			</tr>
				@endforeach
			
		</tbody>
	</table>

</body>
</html>