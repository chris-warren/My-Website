<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/MyWebsite.css">
</head>
<body style="background-color:#EBEBEB;">

	<!---------------------------->
	<!--						-->
	<!--		navbar			-->
	<!--						-->
	<!---------------------------->
	<nav class="navbar navbar-light" style="background-color: #c73737;">
		<a class="navbar-brand" href="html/HomePage.php" target="iframe_a">home</a>
		
		<div class="nav-login">
		    	<!--	login form		-->
			<form>
				<input type="text" name="uid" placeholder="Username/e-mail">
				<input type="password" name="pwd" placeholder="Password">
				<button type="submit" name="submit">Login</button>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 				 Sign up
				</button>
			</form>
			
			
		</div>


	</nav>

	<div class="row" >
	<!---------------------------->
	<!--						-->
	<!--		sidebar			-->
	<!--						-->
	<!---------------------------->
		<div class="col-2" style="background-color: #7a7a7a;">
	      <a href="html/Projects.html" target="iframe_a">projects</a>

	    </div>
	<!---------------------------->
	<!--						-->
	<!--	display page		-->
	<!--						-->
	<!---------------------------->
		<div class="col-10">
	    	<iframe height="70%" width="100%" src="html/HomePage.php" name="iframe_a">
	      	

	    	</iframe>
	    </div>
	</div>
	<!---------------------------->
	<!--						-->
	<!--	sign up modal		-->
	<!--						-->
	<!---------------------------->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
	    	<div class="modal-content">
	    		<div class="modal-header">
	    			<h5 class="modal-title" id="exampleModalLabel">Create an account</h5>
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          			<span aria-hidden="true">&times;</span>
	        		</button>
	      		</div>
	      		<div class="modal-body">
	      		    
	      		    <?php
                        $servername = "internal-db.s225173.gridserver.com";
                        $username = "db225173";
                        $password = "Bugisacat_1";
                        $dbname = "db225173_MyDatabase";
                        
                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        } 
                        echo "Connected successfully";
                        //create mysql querry
                        if(isset($_POST['save']))
                        {
                            $sql = "INSERT INTO users1 (first, last, email, uid, pwd)
                            VALUES ('".$_POST["first"]."','".$_POST["last"]."','".$_POST["email"]."','".$_POST["uid"]."','".$_POST["pwd"]."')";
                            $result = mysqli_query($conn,$sql);
                        }
                        ?>
                <!--	sign up form	-->
	        	<form action="index.php" method="post">
	        		<input type="text" name="first" placeholder="First Name">
	        		<input type="text" name="last" placeholder="Last Name">
	        		<input type="text" name="email" placeholder="E-mail">
	        		<input type="text" name="uid" placeholder="Username">
	        		<input type="text" name="pwd" placeholder="Password">
	        		<button type="submit" name="save">Sign up</button>
	        	</form>
	   			</div>
	    		<div class="modal-footer">
	        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        		

	    		</div>
	    	</div>
		</div>
	</div>

</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</html>
