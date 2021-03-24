<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>
<table>
<tr>
<td>Id</td>
<td>>pname</td>
<td>pcat</td>
<td>desc</td>
<td>price</td>
</tr>
@foreach ($emp_project as $project)
<tr>
<td>{{ $project->id }}</td>
<td>{{ $project->pname}}</td>
<td>{{ $project->pcat }}</td>
<td>{{ $project->dis }}</td>
<td>{{ $project->price }}</td>
<td><a href = 'edit/{{ $project->id }}'>Edit</a></td>
<td><a href = 'delete/{{ $project->id }}'>delete</a></td>
</tr>
@endforeach
</table>
</body>
</html>