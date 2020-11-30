<!DOCTYPE html>
<html>
<head>
	<title>Task 8</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

</head>
<body>
	<div class="container">
		<form action="{{ route('storecategory') }}" method="POST">
			@csrf
			<input type="text" class="form-control" name="title" placeholder="Category Title">
			<button class="btn btn-primary">Submit</button>
		</form>
	</div>

</body>
</html>