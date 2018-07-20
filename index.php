<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
		<title>Calculator</title>
	</head>
	<body>
		<div id="calculator">
		<div class="container">
		<div class="col-md-4">
		<form>
			<input class="form-control" type="text" name="num1" placeholder="Number 1">
			<input class="form-control" type="text" name="num2" placeholder="Number 2">

			<button class="btn btn-primary btn-sm" type="submit" name="add">Add</button>
			<button class="btn btn-primary btn-sm" type="submit" name="subtract">Subtract</button>
			<button class="btn btn-primary btn-sm" type="submit" name= "multiply">Multiply</button>
			<button class="btn btn-primary btn-sm" type="submit" name="divide">Divide</button>

			<h1>Answer: </h1>

			<?php

			if (isset($_GET['add'])) {
				$result1 = $_GET['num1'];
				$result2 = $_GET['num2'];

				echo $result1 + $result2;

			};
			if (isset($_GET['subtract'])) {
				$result1 = $_GET['num1'];
				$result2 = $_GET['num2'];

				echo $result1 - $result2;

			}
			if (isset($_GET['multiply'])) {
				$result1 = $_GET['num1'];
				$result2 = $_GET['num2'];

				echo $result1 * $result2;

			}
			if (isset($_GET['divide'])) {
				$result1 = $_GET['num1'];
				$result2 = $_GET['num2'];

				echo $result1 / $result2;

			}
			 ?>
			</form>
		</div>
	</div>
</div>


	</body>
</html>
