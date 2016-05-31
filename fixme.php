<?php
$username = $_POST['username'];
$password = $_POST['password'];
?>

<h1>Login</h1>
<?php
if (! $username || ! $password) {
  echo 'empty';
  exit;
}
?>
<p>welcome</p>
