<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Choose Subjects</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://kit.fontawesome.com/55ffce7a75.js" crossorigin="anonymous"></script>
</head>
<body>

	<header class="prepare">
		<div class="container">
			<div class="row p-2">
				<div class="col-md-6">
					<div class="info d-flex">
						<img src="img/logo.png" width="70" height="70" class="img-fluid" alt="">
						<h4>Early spring montessori school</h4>
					</div>
				</div>
			</div>
		</div>
	</header>

	<section class="bread">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb m-0 p-2">
					    <li class="breadcrumb-item active" aria-current="page">Set Question</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</section>

	<section class="question">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="set shadow-sm">
						<h3 class="text-center">Add Question</h3><hr>

						<form class="pt-3" action="">
							<div class="mb-4">
								<label for="">Question</label>
								<textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Type your question here..."></textarea>
							</div>

							<div class="mb-4">
								<label for="">Enter Mark</label>
								<input type="text" class="form-control" name="" placeholder="Enter Mark">
							</div>

							<div class="mb-4">
								<label for="">Multiple Choice Answer</label><br>
								<div class="mb-4">
									<span>A:</span>
									<input type="text" name="" class="form-control" placeholder="Type your answer">
									<input type="radio" name=""> Correct Answer
								</div>

								<div class="mb-4">
									<span>B:</span>
									<input type="text" name="" class="form-control" placeholder="Type your answer">
									<input type="radio" name=""> Correct Answer
								</div>

								<div class="mb-4">
									<span>C:</span>
									<input type="text" name="" class="form-control" placeholder="Type your answer">
									<input type="radio" name=""> Correct Answer
								</div>

								<div class="mb-4">
									<span>D:</span>
									<input type="text" name="" class="form-control" placeholder="Type your answer">
									<input type="radio" name=""> Correct Answer
								</div><hr>

								<div class="mb-3">
									<button class="btn btn-success">Add Question</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>	



	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>