<!DOCTYPE html>
<html>
<head>
	<title>Add Employee</title>
	<link rel="stylesheet" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">
</head>

<body>
	<h1>Add Product</h1>
	<a href="{{route(('home.index'))}}">Back</a> | 
	
	
	<form method="post"  enctype="multipart/form-data">
		{{csrf_field()}}
	<table border="1">
		<tr>
			<td>Product Name</td>
			<td><input type="text" name="pname"></td>
		</tr>

		<tr>
			<td>Product Description</td>
			<td><input type="text" name="description"></td>
		</tr>
		<tr>
			<td>Price</td>
			<td><input type="text" name="price"></td>
		</tr>

		<tr>
			<td>Quantity</td>
			<td><input type="text" name="quantity"></td>
		</tr>
		<tr>
			<td>Ptype</td>
			<td>
			<select name="ptype">
					<option value="male">Male</option>
					<option value="female">Female</option>
			</select>
			</td>
		</tr>
		
		<tr>
			<td>Image</td>
			<td><input type="file" name="image"></td>
		</tr>


		<tr>
			<td><input type="submit" name="submit" value="Add"></td>
			<td></td>
		</tr>
	</table>
</form>


</body>
</html>