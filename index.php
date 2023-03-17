<!DOCTYPE html>
<html>
<head>
	<title>Start</title>
	<link rel="stylesheet" type="text/css" href="login.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="regback.php" method="post" enctype="multipart/form-data">
					<label for="chk" aria-hidden="true">Sign up</label>

                    <input type="text" name="FirstName" placeholder="FirstName" required="">

                    <input type="text" name="LastName" placeholder="LastName" required="">

					<input type="text" name="username" placeholder="username" required="">

					<input type="email" name="Email" placeholder="Email" required="">

					<input type="password" name="password" placeholder="Password" required="">
                    
                    <button type="submit" name="submit" value="submit" class="button">Sign up</button>
				</form>
			</div>

			<div class="login">
				<form name="form" action="loginback.php" onsubmit="return isvalid()" method="POST">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="txt" name="username" placeholder="username" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button type="submit" name="submit" value="submit" class="button">Login</button>
				</form>
			</div>
	</div>
</body>
</html>