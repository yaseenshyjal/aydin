<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Travelz HTML5 Multipurpose Travel Template</title>
    <meta name="author" content="Nile-Theme">
    <meta name="robots" content="index follow">
    <meta name="googlebot" content="index follow">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="keywords" content="Travel, HTML5, CSS3, Hotel , Multipurpose, Template, Create a Travel website fast">
    <meta name="description" content="HTML5 Multipurpose Template, Create a website fast">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800|Poppins:300i,400,300,700,400i,500|Ubuntu:300i,400,300,700,400i,500|Raleway:400,500,600,700" rel="stylesheet">
    <!-- CSS Files -->


    <!-- Owl Carousel Assets -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/travlez-jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">


    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

    <!-- REVOLUTION JS FILES -->
  	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    

</head>

<body>

    <section class="background-light-grey padding-tb-130px">
        <div class="container">
            <div class="row justify-content-md-center">
                <?php
		
		
					
			$con = mysql_connect("sql211.0fees.us","0fe_21430296","shyjal@2801");
			mysql_select_db("0fe_21430296_db",$con);
			$username=$_POST['email'];
			$password=$_POST['password'];
				
				echo "email: ".$username;

					if ($con->connect_error) {
				die("Connection failed: " . $con->connect_error);
			} 
			echo "Connected successfully";
			//First lets get the username and password from the user
		$result= "SELECT * FROM table"; 
echo $result; 
$num=mysql_num_rows($result);
echo $num;
			while($row=mysql_fetch_array($result))
			{
				echo "reached";
			$user=$row['email']; 
			$pass=$row['password'];
			}
			echo $user;	
				
			$num=mysql_num_rows($result);
			echo $num; 
			for($i=1;$i<=$num; $i++){

			if($username == $user && $password==$pass)
			{
				echo "successful";
			header("Location: login.html");
			}
			else if($password != $pass ||$username != $user )
			{
			echo("Please Enter Correct Username and Password ...");

			}
			}
		?>

                <div class="col-lg-4">

                    <div class="text-center margin-bottom-30px">
                        <a href="page-login-2.html#"><img src="images/logo-aydin.png" alt=""></a>
                    </div>
					
               		
                   
                    <div class="padding-30px background-white border-1 border-grey-1">
                        <form name="login" id="login" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                            <div class="form-group">
                                <label for="email" class="col-form-label"><strong>Username or Email</strong></label>
                                <input type="email" class="form-control rounded-0" id="email" placeholder="Email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-form-label"><strong>Password</strong></label>
                                <input type="password" class="form-control rounded-0" id="password" placeholder="Password" name="password">
                            </div>
                            <div class="form-group ">
                                <div class="form-check">
                                    <label class="form-check-label">
                                      <input class="form-check-input" type="checkbox" > Remember me
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-block rounded-0 background-main-color" />
                            </div>
                        </form>
                    </div>
                </div>


            </div>
            <!-- // row -->
        </div>
        <!-- // container -->
    </section>

    <!-- // Footer -->
    
    
    <script type="text/javascript">
		
		$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("#login").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: false
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    // Specify validation error messages
    messages: {
      
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
		
/*		
function validate()
{
    if(   document.getElementById("inputEmail").value == "workshop"
       && document.getElementById("password").value == "workshop" )
    {
        $(".alert-success").show(5000);
        location.href="login.html";
    }
    else
    {
        
		$(".alert-danger").show(5000);
        location.href="page-login-2.html";
    }
}
*/
		
</script>
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>


</body>

</html>
