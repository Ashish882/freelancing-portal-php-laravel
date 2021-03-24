<!DOCTYPE html>
<html>
<head>
<title> Edit</title>
</head>
<body>
<form method="POST" action="" >
@csrf
<table>
<tr>
<td>Project Name</td>
<td>
<input type = 'text' name = 'pname'
value = '<?php echo $update_project[0]->pname; ?>'/> </td>
</tr>
<tr>
<td>Project Categorey</td>
<td>
<input type = 'text' name = 'pcat'
value = '<?php echo $update_project[0]->pcat; ?>'/>
</td>
</tr>
<tr>
<td>Project Description<</td>
<td>
<input type = 'text' name = 'dis'
value = '<?php echo $update_project[0]->dis; ?>'/>
</td>
</tr>
<tr>
<td>Project price</td>
<td>
<input type = 'text' name = 'price'
value = '<?php echo$update_project[0]->price; ?>'/>
</td>
</tr>
<tr>
<td colspan = '2'>
<input type = 'submit' value = "Update" />
</td>
</tr>
</table>
</form>
</body>
</html>