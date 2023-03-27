<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
<h3>
 <?php 
//echo $_POST["username"]; 

$username = $_POST['username'];
$password = $_POST['password'];

if (($username == 'kofi' ) && ($password == '1234')) {
    echo "Welcome $username";
    
}
else {
    echo 'Incorrect username or password';
}


?><br>
</h3>

</body>
</html>