<!-- codeup.dev/ping.php -->
<?php

function displayCount() 
{
    if (isset($_GET['up'])) {
        $count = $_GET['up'];
        return $count;
    } else {
        $count = 0;
        return $count;
    }    
}

function increaseCount() 
{
    if (isset($_GET['up'])) {
        $count = $_GET['up'];
        $count += 1;
        return $count;
    } else if (isset($_GET['miss'])) {
        $count = $_GET['miss'];
        $count += 1;
        return $count;
    } else {
        $count = 0;
        $count += 1;
        return $count;
    }
}

function miss() 
{
    if (isset($_GET['miss'])) {
        $count = $_GET['miss'];
        $count = 0;
        return $count;
    }
}

function pageController()
{
    $data = [];
    $data['queryUp'] = '?up=';
    $data['querymiss'] = '?miss=';
    $data['url'] = '/pong.php';
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
    <title>GET Requests - Ping</title>
    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="===PATH HERE===">
    <style>
        body {
            margin-top: 50px;
        }
        button {
            font-size: 2em;
            width: 100px;
        }
        h1 {
            font-size: 3em;
        }
    </style>
</head>

<body>

    <main class="container">
        <h1>Count <?= displayCount(); ?></h1>
        <a href="<?= $url . '?up=' . increaseCount(); ?>"><button>HIT</button></a>
        <a href="<?= $url . '?miss=' . miss(); ?>"><button>MISS</button></a>
    </main>
    
    <!-- jQuery Version 1.11.1 -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Custom JS -->
    <script src="===PATH HERE==="></script>

</body>

</html>