<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Artikel</h4><br><br>
	</center>
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Title</th>
				<th>Content</th>
                <th>Picture</th>
			</tr>
		</thead>
		<tbody>
			@foreach($films as $a)
			<tr>
				<td>{{$a->id}}</td>
				<td>{{$a->title}}</td>
				<td>{{$a->content}}</td>
				<td><img src="{{public_path('storage/'.$a->featured_image)}}" style="height:70px, width:140px"></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>