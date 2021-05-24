<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>



<body>
<?php
// define variables and set to empty values
$name = $username = $username = $password = $confirmpassword = $email = $phone =  $ssn = $birthday = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $username = test_input($_POST["username"]);
  $password = test_input($_POST["psw"]);
  $confirmpassword = test_input($_POST["psw-repeat"]);
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
  $birthday = test_input($_POST["birthday"]);
  $ssn = test_input($_POST["ssn"]);
 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class="all">

<div class="content">
    <h2>Register Form</h2>
<form class="register" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="container">
      <h1>Register</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="name"><b>Full Name</b></label>
      <input type="text" placeholder="Enter FullName" name="name" id="name" required>

      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" id="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

       <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required>

      <label for="phone"><b>Phone</b></label>
      <input type="tel" placeholder="Enter Phone" name="phone" id="phone" required>

        <label for="birthday">Date of Birth</label>
        <input type="date" id="birthday" name="birthday"> 

        <label for="input-form-field">Enter your social security number</label>
       <input id="input-form-field" name="ssn" type="number" pattern=""[0-9]" inputmode="numeric" required />
    
  </div>
        </label>
      <hr>
      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
  
      <button type="submit" class="registerbtn">Register</button>
      <div class="container signin">
      <p>Already have an account? <a href="#">Sign in</a>.</p>
    </div>
    </div>
     
   
  </form>

<div class="content2">
<h2>Login Form</h2>  
  <form  class="Login" action="/login/safe.php" method="post">
  
    <div class="imgcontainer">
        
      <img src="https://cvenligne.io/wp-content/uploads/2018/06/AVATAR-19-min.png" alt="Avatar" class="avatar">
    </div>
  
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
          
      <button type="submit">Login</button>
 
      
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
  
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

</div>

</div>
<div class="info">
     <?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo "<br>";
echo $username;
echo "<br>";
echo "<br>";
echo $password;
echo "<br>";
echo "<br>";
echo $confirmpassword;
echo "<br>";
echo "<br>";
echo $email;
echo "<br>";
echo "<br>";
echo $phone;
echo "<br>";
echo "<br>";
echo $birthday;
echo "<br>";
echo "<br>";
echo $ssn   ;
echo "<br>";
echo "<br>";

?>
</div>


</body>
</html>
