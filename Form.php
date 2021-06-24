<!DOCTYPE HTML>
<html>
    <head>
		<title>sign up </title>
		<meta charset="utf-8" />
		<meta name="description" content=" sign up form" />
		<meta name="keywords" content="sign up" />
		
    <!-- Bootstrap Css link -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" 
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
         
    <!-- JQuery JS-->
       <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>       
	</head>
	<body>
		<header>
			<nav class="navbar navbar-default">
                 <h2 class="navbar-text">Register</h2>
		    </nav>
		</header>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                                <h1>Sign up</h1>
                        </div>
                        <div class="panel-body">
                            <form action="signup.php" method="post">
                                
                                <label for="password">Enter your User name:</label>
                                <input type="text" name="name" placeholder="Username" class="form-control" placeholder="User name" required autofocus>

                                <br>
                                <label for="email">Enter your Email:</label>
                                <input type="text" name="email" class="form-control" placeholder="Email Address" required autofocus>

                                <br>
                                <label for="password">Enter your password:</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required autofocus>

                                <br>
                                <input type="submit" name="submit" class="btn btn-primary btn-block" value="Register !">
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</body>
</html>