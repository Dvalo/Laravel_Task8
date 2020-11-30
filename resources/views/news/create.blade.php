<!DOCTYPE html>
<html>
<head>
	<title>Task 8</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

</head>
<body>
	<div class="container">
		<form action="{{ route('storenews') }}" method="POST">
			@csrf
			<input type="text" class="form-control" name="title" placeholder="News Title">
			<input type="text" class="form-control" name="description" placeholder="News Description">
			<input type="text" class="form-control" name="short_description" placeholder="News Short Description">

			<input type="file" class="form-control" name="image">

			<label for="rel_date">News Date:</label>
  			<input type="date" id="add_date" name="add_date">


			<select name="categories" id="categories">
				@foreach (App\Category::get() as $category)
			    	<option value="{{ $category->id }}">{{ $category->title }}</option>
	        	@endforeach
        	</select></br>
        	<input type="text" class="form-control" name="tags[]" placeholder="First Tag">
        	<input type="text" class="form-control" name="tags[]" placeholder="Second Tag">
        	<input type="text" class="form-control" name="tags[]" placeholder="Third Tag">
        	<input type="text" class="form-control" name="tags[]" placeholder="Fourth Tag">
            <br>
			<button class="btn btn-primary">Submit</button>
		</form>
	</div>

</body>
</html>