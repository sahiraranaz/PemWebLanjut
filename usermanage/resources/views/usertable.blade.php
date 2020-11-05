<html>
<body>
<tbody>          
    @foreach($films as $a)          
        <tr>               
            <td>{{$a->id}}</td>               
            <td>{{$a->name}}</td>               
            <td>{{$a->email}}</td> 
            <td>{{$a->roles}}</td> 
            <td><a href="user/edit/{{ $a->id }}" class="badge badge-warning">Edit</a></td>   
            <td><a href="user/delete/{{ $a->id }}" class="badge badge-danger">Delete</a></td>
            </tr>
    @endforeach
</tbody> 
</body>
</html>