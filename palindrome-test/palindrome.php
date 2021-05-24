
<html>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"   >
    <label>Input</label>
    <input type="text" name="test">
</form><br>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["test"]);
 
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
// PHP code to check for Palindrome number in PHP
// Function to check for Palindrome
function Palindrome($number){
	$temp = $number;
	$new = 0;
	while (floor($temp)) {
		$d = $temp % 10;
		$new = $new * 10 + $d;
		$temp = $temp/10;
	}
	if ($new == $number){
		return 1;
	}
	else{
		return 0;
	}
}

// Driver Code

if (Palindrome($name)){
	echo "Palindrome";
}
else {
echo "Not a Palindrome";
}

?>

</body>
</html>