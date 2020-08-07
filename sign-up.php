<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/fe065d4a78.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
	<div class="row">
	<div class="col-md-4 offset-md-4 form-div">
		<form action="sign-up.php" method="post">
			<h3 class="text-center"> Register </h3>
			<?php if(count($errors) > 0): ?>
				<div class="alert alert-danger">
					<?php foreach($errors as $error):  ?>
						<li><?php echo $error; ?></li>
					<?php endforeach;  ?>
				</div>
			<?php endif;  ?>
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" value="<?php echo $username; ?>" class="form-control form-control-lg">				
			</div>
		
			<div class="form-group">
				<label for="email">Email-id</label>
				<input type="email" name="email" value="<?php echo $email; ?>" class="form-control form-control-lg">				
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control form-control-lg">				
			</div>

			<div class="form-group">
				<label for="passwordConfirm">Confirm Password</label>
				<input type="password" name="passwordConf" class="form-control form-control-lg">				
			</div>

			<div class="form-group">
				<button type="submit" name="signup-btn" class="btn btn-block btn-lg">Sign Up</button>			
			</div>
			<p class="text-center">Already a member?&nbsp;&nbsp;<a href="login.php">Sign In</a></p>
		</form>
		
	</div>
</div>
</div>





<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>