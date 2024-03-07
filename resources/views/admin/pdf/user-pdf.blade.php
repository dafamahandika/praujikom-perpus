<!DOCTYPE html>
<html>
<head>
	<title>Data User</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Data User WIKBOOK</h4>
	</center>
 
	<table class='table table-bordered text-center'>
		<thead>
			<tr>
				<th>No</th>
				<th>Username</th>
				<th>Email</th>
				<th>Phone</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($users as $user)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->phone}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>