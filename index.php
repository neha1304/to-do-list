<?php
echo "hello world, Neha here";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Wish list</title>
	<script type="text/javascript" src="assets/js/lib/jquery 3.5.1.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">	
	<link rel="stylesheet" type="text/css" href="assets/css/todo.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div draggable="true" id='container'>
		<div>
			<h1>To-do List <span id='op'><i class="fa fa-plus" aria-hidden="true"></i></span></h1>
		</div>
		
		
		<input type="text" name="" placeholder="Add a new Todo" maxlength="54">
		
		<ul>
			<li><span><i class="fa fa-trash" aria-hidden="true"></i></span>apply for permanent driving license</li>
			<li><span><i class="fa fa-trash" aria-hidden="true"></i></span>web development</li>
			<li><span><i class="fa fa-trash" aria-hidden="true"></i></span>finalize gd topic</li>
			<li><span><i class="fa fa-trash" aria-hidden="true"></i></span>flutter installation</li>
			<li><span><i class="fa fa-trash" aria-hidden="true"></i></span>academic revision</li>
			<li><span><i class="fa fa-trash" aria-hidden="true"></i></span>college verification code</li>
		</ul>
	</div>

     <script type="text/javascript" src="assets/js/todo.js"></script>
</body>
</html>