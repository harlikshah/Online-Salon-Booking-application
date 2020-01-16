<?php
session_start();
?>
<html>

<head>
<link rel="stylesheet" type="text/css" href="form__valid.css">
<h1><center>PLEASE ENTER YOUR DETAILS</center></h1>
<title> Form Validation </title>
</head>

<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">
</script>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js">
</script>

<script>
(function($,W,D)
{
    var JQUERY4U = {};
 
    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#register-form").validate({
                rules: {
                    fname: "required",
                    lname: "required",
                    email: {
                        required: true,
                        email: true
                    },
            mcontact: {
            minlength: 10,
            maxlength: 10,
            required: true,
            digits: true
            },
            uname: {
            //minlength: 5,
            required: true
            },
                    pwd: {
                        required: true,
                        //minlength: 5
                    },
                    agree: "required"
                },
                messages: {
                    fname: "Please enter your firstname",
                    lname: "Please enter your lastname",
                    pwd: {
                        required: "Please provide a password",
                      //  minlength: "Your password must be at least 5 characters long"
                    },
                    email: "Please enter a valid email address",
            mcontact: {
            minlength: "Please enter your Mobile No.",
            maxlength: "Please enter your Mobile No.",
            required: "Please enter your Mobile No. ",
            digits: "This field can only contain numbers."
            },
            uname: {
            //minlength: "Your USERNAME must be at least 5 characters long",
            required: "Please enter Username"
            },
                    agree: "Please accept our policy"
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }
 
    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
 
})(jQuery, window, document);
</script>

<center>
<form  method="post" id="register-form" novalidate="novalidate">
 
    <h4>User Registration</h4>
 
    <div id="form-content">
        <fieldset>
 
            <div class="fieldgroup">
                <label for="fname">First Name</label>
                <input type="text" name="fname" required >
            </div>
 
            <div class="fieldgroup">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" required >
            </div>
 
            <div class="fieldgroup">
                <label for="email">Email</label>
                <input type="text" name="email"required >
            </div>

            <div class="fieldgroup">
                <label for="contact">Contact No.</label>
                <input type="text" name="mcontact" required >
            </div>

            <div class="fieldgroup">
                <label for="address">Address.</label>
                <input type="text" name="maddr" required >
            </div>		
 
	     <div class="fieldgroup">
                <label for="username">Username</label>
                <input type="text" name="uname" required >
            </div>

            <div class="fieldgroup">
                <label for="password">Password</label>
                <input type="password" name="pwd" required >
            </div>


            <div class="fieldgroup">
                <p class="right">By clicking register you agree to our policy.</p>
                <input type="submit" name="btnsignup" value="Register" class="submit" >
            </div>
 
        </fieldset>
    </div>
 
        <div class="fieldgroup">
            <p>Already registered? <a href="flogin.php">Sign in</a>.</p>
        </div>

   
	

</form>
</center>
</body>
</html>	


<?php




// header("Location: home.php");
if(isset($_SESSION['user'])!="")
{
// header("Location: home.php");
}
mysql_connect("localhost", "root", "");

  mysql_select_db("members");
        
  if(isset($_POST['btnsignup']))
  {
    $un = $_POST['uname'];
   // $_SESSION["co"] = $_POST['mcontact'];

$check= "SELECT * from mem where uname = '$un'";
    $run=mysql_query($check);
        if(mysql_num_rows($run)>0)
            {
                echo "<script> alert('Username $un already Exist. Try another one .')</script>";
                
                exit();
            }
        }

if(isset($_POST['btnsignup']))
{
    
    
    if(mysql_query("INSERT INTO mem(mid,fname,lname,email,mcontact,maddr,uname,pwd) VALUES('','".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["email"]."','".$_POST["mcontact"]."','".$_POST["maddr"]."','".$_POST["uname"]."','".$_POST["pwd"]."')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}

?>