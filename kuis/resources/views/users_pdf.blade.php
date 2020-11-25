<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan User PDF Dengan DOMPDF Laravel</title>
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
			padding-left:50px;

		}
	</style>
	<center>
		<h5>Laporan Users</h4><br><br><br><br>
	</center>
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Create At</th>
				<th>Roles</th>
                <th>Profile</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $a)
			<tr>
				<td>{{$a->id}}</td>
				<td>{{$a->name}}</td>
				<td>{{$a->email}}</td>
				<td>{{$a->created_at}}</td>
				<td>{{$a->roles}}</td>
				<td><img src="{{public_path('storage/'.$a->profile)}}" style="height:70px, width:140px"></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>