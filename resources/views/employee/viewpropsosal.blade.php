<!DOCTPE html>
<html>
<head>
<title>View proposal</title>
</head>
<body>
<table>
<tr>
<td>Id</td>
<td>free_id</td>
<td>resumea</td>
<td>desc</td>
<td>price</td>
</tr>
@foreach ($proposal as $pro)
<tr>
<td>{{ $pro->apply_id }}</td>
<td>{{ $pro->free_id }}</td>
<td>{{ $pro->resume_path }}</td>
<td>{{ $pro->ctext}}</td>
<td>{{ $pro->price }}</td>
<td><a href = 'edit/{{ $pro->apply_id }}'>Hire</a></td>
<td><a href = 'delete/{{ $pro->apply_id }}'>Reject</a></td>
</tr>
@endforeach
</table>
</body>
</html>