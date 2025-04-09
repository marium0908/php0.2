<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
</head>
<body>
<h1>1</h1>
<?php
echo " This is My first PHP script!";
?> 
<h1>2</h1>
<?php
$txt = "PHP";
echo "My love $txt!";
?>
<h1>3</h1>
<?php
echo "Hello World!";
?> 
<h1>4</h1>

<?php
echo "Welcome!"; // Outputs a welcome message
?>
<h1>5</h1>
<?php
echo "Welcome Home!"; // Outputs a welcome message
?>
<h1>6</h1>
<?php
$x = 6;
$y = "marium";

echo $x;
echo "<br>";
echo $y;
?>
<h1>7</h1>
<?php
echo "Hello";
//same as:
echo("Hello");
?>
<h1>8</h1>
<?php
$x = 10;
var_dump($x);
?>
<h1>9</h1>
<?php
echo "Hello";
print "world";
?>
<h1>10</h1>

<?php
$x = "i am marium!";
echo strtoupper($x);
?> 
<h1>11</h1>
<?php
$x = "marium's";
$y = "World";
$z = $x . " " . $y;
echo $z;
?>
<h1>12</h1>
<?php
$x = "hola hola!";
echo substr($x, 6, 5);
?> 
<h1>13</h1>
<?php
//PHP will raise an error when executing this statement:

$x = "We are "Vikings" group from south ";
echo $x;
?> 
<h1>14</h1>

<?php
echo(pi());
?>
<h1>15</h1>
<?php
echo(min(0, 150, 30, 20, -8, -200) . "<br>");
echo(max(0, 150, 30, 20, -8, -200));
?>
<h1>16</h1>

<?php
echo(abs(-6.7));
?>
<h1>17</h1>
<?php
// case-sensitive constant name
define("GREETING", "Welcome to Manim's khitchen!");
echo GREETING;
?> 
<h1>18</h1>
<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>
<h1>19</h1>
<?php
if (5 > 3) {
  echo "Have a great tour!";
}
?>
<h1>20</h1>
<?php
// define variables and set to empty values
$name = $email = $gender = $make a comment on = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["make a comment on"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation:</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
   Make a Comment on: <textarea name=" make a comment on" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</body>
</html>