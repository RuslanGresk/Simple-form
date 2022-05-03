<?php

session_start();
require('C:/Programs/OpenServer/domains/php.loc/incs/date.php');
require('C:/Programs/OpenServer/domains/php.loc/incs/functions.php');

if(!empty($_POST)){
	debug($_POST);
	$fiels = load($fiels);
	debug($fiels);
	if($er = validate($fiels)){	
		debug($er);
	}else{
		echo 'OK';
	}
}

?>


<!DOCTYPE html>

<html lang="ru">
	
	<head>
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

		<title>My first form</title>

		<link rel="stylesheet" href="css/style.css" />

		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	</head>

	<body>
		<div class='container'>
			<div class="row">
				<div class="col-md-6 offset-md-3">

					<form method="post"> 


						<div class="mb-3">
							<label for='name'>Name</label>
							<input name='name' type="text" class="form-control" id="name">
  						</div>


						<div class="mb-3">  
							<label for="email"  class="form-label id='email'">Email address</label>
							<input type="email" name='email' class="form-control" id="email" aria-describedby="emailHelp">
							<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
						</div>

    					<div class="mb-3">
							<label for='address'>Address</label>
							<input name='adress' type="text" class="form-control" id="address">
  						</div>


    					<div class="mb-3">
							<label for='phone'>Phone</label>
							<input name='phone' type="text" class="form-control" id="phone">
  						</div>


  						<div class="mb-3">
							<label for='comment'>Comment</label>
							<textarea name='comment' type="text" class="form-control" id="comment" rows='3'></textarea>
  						</div>

  						<div class="mb-3">
							<label for='captcha'><?= set_caprcha()?></label>
							<input name='captcha' type="text" class="form-control" id="captcha" ></input>
  						</div>
  
						<button type="submit" class="btn btn-primary">Submit</button>
						</form>
				</div>
			</div>
		</div>



		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html>