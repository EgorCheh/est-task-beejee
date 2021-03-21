<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/style.css">
	<script src="js/script.js"></script>
</head>

<body>

	<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
		<a class="h5 my-0 me-md-auto fw-normal text-dark" href="/">Home</a>
		<a class="btn btn-outline-primary" href="/admin">Admin</a>
	</header>
	<div class="container">
		<?php include 'application/views/' . $content_view; ?>
	</div>
</body>

</html>