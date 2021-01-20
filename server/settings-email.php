<?php
include "header.php";

if(!isset($_SESSION["username"]))
{
    die(header("Location: /login"));
}

echo "<h1>" . $_SESSION["username"] . " - Email Settings</h1>";

$servername = $_ENV['MYSQL_SERVER'];
$username = $_ENV["MYSQL_USERNAME"];
$password = $_ENV["MYSQL_PASSWORD"];
$dbname = $_ENV["MYSQL_DATABASE"];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<h2>I want emails about...</h2>
  <div class="form-group">
    <div class="custom-switch">
      <input type="checkbox" id="remember-my-information">
      <label for="remember-my-information">Announcements</label>
    </div>
  </div>  
  <div class="form-group">
    <div class="custom-switch">
      <input type="checkbox" id="remember-my-information">
      <label for="remember-my-information">Comments</label>
    </div>
  </div>
  <br><p>Please note that you will always get emails about moderation action on your account.</p>

<?php
if($_POST)
{
    print_r($_POST);
}