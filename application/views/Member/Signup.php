<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>  
<html>
<head>
    <style>
     body{
    
    background-color: rgb(93, 93, 109);
    text-align: center;
    
}
    form {
    width: 20px;
    height: 30px;
    color: aquamarine;
    opacity: 1;
   padding: 20px;;
   text-align: center;
}  
.myform {
    text-align: center;
    width: 20px;
    height: 30px;
    filter: none;
    width: 35vw;
    border-radius: 7%;
    position: relative;
    opacity: 1;
    height:99vh;
    margin: auto;
}
label {
    display: inline-block;
    padding: 0.5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: 0.3rem; 
    margin-bottom: 1rem;
}
.form-control {
display: block;
width: 70%;
height: 15px;
padding: 0.375rem 0.75rem;
font-size: 1rem;
font-weight: 400;
line-height: 1.5;
color: #495057;
background-clip: padding-box;
border: 1px solid #ced4da;
border-radius: 0.25rem;
-webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
-o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
@media (prefers-reduced-motion: reduce) {
.form-control {
  -webkit-transition: none;
  -o-transition: none;
  transition: none; } }


button {
    align-self: center;
    position: relative;
    padding: 19px 36px;
    display: block;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    border-radius: 20px;
    border: none;
    }

button span {
   position: relative;
    color: #fff;
    font-family: Arial;
    letter-spacing: 5px;
    z-index: 1;
    }

button .liquid {
    position: absolute;
    top: -80px;
    left: 0;
    width: 100%;
    height: 200px;
    background: #4973ff;
    box-shadow: inset 0 0 50px rgba(0, 0, 0, .5);
    transition: .5s;
    }

button .liquid::after,
button .liquid::before {
    content: '';
    width: 200%;
    height: 200%;
    position: absolute;
    top: 0;
    left: 50%;
    transform: translate(-50%, -75%);
    background: #fff;
    }

button .liquid::before {
    border-radius: 45%;
    background: rgba(20, 20, 20, 1);
    animation: animate 5s linear infinite;
    }

button .liquid::after {
    border-radius: 40%;
    background: rgba(20, 20, 20, .5);
    animation: animate 10s linear infinite;
    }

button:hover .liquid {
    top: -120px;
    }
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
    </style>
</head>
<body>  

<?php
// define variables and set to empty values
$FnameErr = $LnameErr = $emailErr = $phonenumberErr =  $genderErr = $websiteErr = "";
$Fname = $Lname = $email = $phonenumber  = $gender = $comment = $website = "";
//$FnameErr = $LnameErr = $phonenumberErr = 
//$Fname = $Lname = $phonenumber =

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //$name = test_input($_POST["name"]);
  //$email = test_input($_POST["email"]);
  //$website = test_input($_POST["website"]);
  //$comment = test_input($_POST["comment"]);
  //$gender = test_input($_POST["gender"]);
 
    if (empty($_POST["name"])) {
      $FnameErr = "Name is required";
    } else {
      $Fname = test_input($_POST["name"]);
      
      if (!preg_match("/^[a-zA-Z-' ]*$/",$Fname)) {
        $FnameErr = "Only letters and white space allowed";
      }
    }
   if (empty($_POST["name"])) {
      $LnameErr = "Name is required";
   } else {
      $Lname = test_input($_POST["name"]);
        
        if (!preg_match("/^[a-zA-Z-' ]*$/",$Lname)) {
          $LnameErr = "Only letters and white space allowed";
        }
      }
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    }
     if (empty($_POST["phonenumber"])) {
         $phonenumberErr = "Number is required";
     } else {
        $phonenumber = test_input($_POST["number"]);
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $phonenumberErr = "Invalid number format";
      }
      }
      
    if (empty($_POST["website"])) {
      $website = "";
    } else {
      $website = test_input($_POST["website"]);
  
      if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
        $websiteErr = "Invalid URL";
      }
    }
  
    if (empty($_POST["comment"])) {
      $comment = "";
    } else {
      $comment = test_input($_POST["comment"]);
    }
  
    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = test_input($_POST["gender"]);
    }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Register Now!</h2>

<!--form class="myform" method="post" action="<!?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br-->
<form class="myform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  FirstName: <input type="text" name="name" value="<?php echo $Fname;?>">
  <span class="error">* <?php echo $FnameErr;?></span>
  <br><br>
  LastName: <input type="text" LastName="LastName" value="<?php echo $Lname;?>">
  <span class="error">* <?php echo $LnameErr;?></span>
  <br><br> 
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  PhoneNumber: <input type="text" number="number" value="<?php echo $phonenumber;?>">
  <span class="error">* <?php echo $phonenumberErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  <!-- Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br> -->
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>  
        <button>
            <span>Login</span>
            <div class="liquid"></div>
        </button>
  <!--input type="submit" name="submit" value="Submit"--> 
  <label class="checkbox-wrap checkbox-primary">Remember Me
        <input type="checkbox" checked>
            <span class="checkmark"></span>
        </label>
        <div class="w-50 text-md-right">
            <a href="#" style="color: #fff">Forgot Password</a>
        </div>
        <p class="w-100 text-center">&mdash; Or Sign Up  With &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div>  
        <h3 class="w-100 text-center">&mdash;Already have an account? 
        <a href="<?php echo site_url('Member/Login') ?>" class="btn btn-primary navbar-btn" title=""> <i class="fa fa-fw fa-user"></i> Login</a> &mdash;</h3>
    
        <!--a href="index.html" class="btn btn-primary navbar-btn" title="">Join</a--> 
</form>



<?php

echo $Fname;
echo "<br>";
echo $Lname;
echo "<br>";
echo $email;
echo "<br>";
echo $phonenumber;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>