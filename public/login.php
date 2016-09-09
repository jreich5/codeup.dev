<!-- codeup.dev/login.php -->

<?php


session_start();
function pageController() 
{
    $data = [];
    $data['alert'] = '';
    if (!empty($_POST)) {
        if ($_POST['username'] == 'guest' && $_POST['password'] == 'password') {
            $_SESSION['logged_in_user'] = $_POST['username'];
            if (isset($_SESSION['logged_in_user'])) {
                var_dump($_SESSION['logged_in_user']);
                header("Location: /authorized.php");
            }
            die;
        } else {
            $data['alert'] =
            '<div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                Enter a valid username and password
            </div>'; 
        }
    }  
    return $data;
} 
extract(pageController());

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="===PATH HERE===">
    <style>
        main {
            margin-top: 50px;
        }
        h2 {
            color: darkred;
        }
    </style>

</head>

<body>

    <main class="container">
    <form method="POST">
    <div class="form-group">
        <label for="username">Username</label>
        <input id="username" class="form-control" type="text" name="username" placeholder="Enter User Name" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input id="password" class="form-control" type="password" name="password" placeholder="Enter Password" required>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <br>
    <?= $alert; ?>

    </main>
    
    <!-- jQuery Version 1.11.1 -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Custom JS -->
    <script src="===PATH HERE==="></script>

</body>

</html>
