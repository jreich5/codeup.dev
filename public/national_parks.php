<!-- codeup.dev/national_parks.php -->

<?php  

DEFINE ('DB_HOST', '127.0.0.1');
DEFINE ('DB_NAME', 'parks_db');
DEFINE ('DB_USER', 'parks_user');
DEFINE ('DB_PASS', 'parkme');

require_once("../db_connect.php");
   
function getInfo($dbc, $page, $limit) 
{

    $offset = ($page > 1) ? $page * $limit : 0;
    $stm = $dbc->query("SELECT * FROM national_parks LIMIT " . $limit . " OFFSET " . $offset . ";");
    $rows = $stm->fetchALL(PDO::FETCH_ASSOC);
    return $rows;
}

function pageController($dbc)
{
    $data = [];
    $data['page'] = (isset($_GET['page'])) ? $_GET['page'] : 1;
    $data['limit'] = 4;
    $data['parks'] = getInfo($dbc, $data['page'], $data['limit']);
    $data['query'] = '?page=';
    return $data;
}

extract(pageController($dbc));


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>List of National Parks</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="===PATH HERE===">
</head>

<body>
    <main class="container"> 
        <?php  
            echo '<table class="table table-bordered"><tr><th>Name</th><th>Location</th><th>Date Established</th><th>Area</th></tr>';
            foreach($parks as $park) {
                echo '<tr><td>' . $park['name'] . '</td><td>' . $park['location'] . '</td><td>' . $park['date_established'] . '</td><td>' . $park['area_in_acres'] . '</td></tr>';
            }
            echo '</table>';
        ?>
        <!-- <?php 
            for($i = 0; $i < ;)
        ?> -->
        <div class="btn-group" role="group" aria-label="...">
            <a href="<?= $query . ($page = 1); ?>"><button class="btn btn-default">1</button></a>
            <a href="<?= $query . ($page = 2); ?>"><button class="btn btn-default">2</button></a>
            <a href="<?= $query . ($page = 3); ?>"><button class="btn btn-default">3</button></a>
            <a href="<?= $query . ($page = 4); ?>"><button class="btn btn-default">4</button></a>
            <a href="<?= $query . ($page = 5); ?>"><button class="btn btn-default">5</button></a>
            <a href="<?= $query . ($page = 6); ?>"><button class="btn btn-default">6</button></a>
            <a href="<?= $query . ($page = 7); ?>"><button class="btn btn-default">7</button></a>
            <a href="<?= $query . ($page = 8); ?>"><button class="btn btn-default">8</button></a>
            <a href="<?= $query . ($page = 9); ?>"><button class="btn btn-default">9</button></a>
            <a href="<?= $query . ($page = 10); ?>"><button class="btn btn-default">10</button></a>
            <a href="<?= $query . ($page = 11); ?>"><button class="btn btn-default">11</button></a>
            <a href="<?= $query . ($page = 12); ?>"><button class="btn btn-default">12</button></a>
            <a href="<?= $query . ($page = 13); ?>"><button class="btn btn-default">13</button></a>
            <a href="<?= $query . ($page = 14); ?>"><button class="btn btn-default">14</button></a>
        </div>

    </main>
    
    <!-- jQuery Version 1.11.1 -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>