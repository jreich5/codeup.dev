<!-- codeup.dev/authrorized.php -->
<?php
require_once "../Auth.php";
require_once "../Input.php";
session_start();
if (!Auth::check()) {
    $message = "''";
    Auth::redirect('/login.php');
} else {
    $message = Auth::user();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Authorized Page</title>
    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="===PATH HERE===">
</head>
<body>
    <main class="container">
        <h1>AUTHORIZED USER: <?= Input::escape($message); ?></h1> 
        <a href="/logout.php"><button class="btn btn-default">Logout</button></a>
    </main>
    <!-- jQuery Version 1.11.1 -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Custom JS -->
    <script src="===PATH HERE==="></script>
</body>
</html>
