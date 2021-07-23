<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Edit Information</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<h2 class="text-center">Edit data</h2>
			@foreach ($dataToEdit as $item)
			<form action="../handleEdit/{{$item->id}}" method="post" enctype="multipart/form-data">			
					@csrf
					<div class="mb-3">
					  <label for="img" class="form-label">Image</label>		
					  <input type="hidden" name="oldImage" value="{{$item->img}}">		
					  <img src="{{$item->img}}" alt="img" width="40%">
					  <br><br>
					  <input name="img" type="file" >
					</div>
					<div class="mb-3">
					  	<div class="form-floating">
						  <textarea name="title" class="form-control" placeholder="Leave a comment here" id="floatingTextarea">{{$item->title}}</textarea>
						  <label for="floatingTextarea">Title</label>
						</div>
					</div>
					<div class="mb-3">
					  	<select name="typename" class="form-select" aria-label="Default select example">
						  <option selected>Open this select menu</option>
						  <option value="BUSINESS/NATURE">BUSINESS/NATURE</option>
						  <option value="CREATIVE">CREATIVE</option>
						  <option value="CREATIVE/DESIGN">CREATIVE/DESIGN</option>
						  <option value="CREATIVE/NATURE">CREATIVE/NATURE</option>
						  <option value="INSPIRATION">INSPIRATION</option>
						</select>
					</div>		
					<div class="mb-3">
					  	<div class="form-floating">
						  <textarea name="quote" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{$item->quote}}</textarea>
						  <label for="floatingTextarea2">Quote</label>
						</div>
					</div>
				@endforeach			
				<button type="submit" class="btn btn-outline-info">Edit</button>
			</form>	
		</div>
	</div>	
</body>
</html>