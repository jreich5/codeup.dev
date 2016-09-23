<!-- codeup.dev/national_parks.php -->

<?php  

DEFINE ('DB_HOST', '127.0.0.1');
DEFINE ('DB_NAME', 'parks_db');
DEFINE ('DB_USER', 'parks_user');
DEFINE ('DB_PASS', 'parkme');

require_once("../db_connect.php");

$count = (isset($_GET['count'])) ? $_GET['count'] : 0;
$parks = getInfo($dbc, $count);
$query = '?count=';
   
function getInfo($dbc, $count) 
{
    $stm = $dbc->query("SELECT * FROM national_parks LIMIT 4 OFFSET " . $count . ";");
    // $stm = $dbc->query("SELECT * FROM national_parks LIMIT 4, " . $count . ";");
    $rows = $stm->fetchALL(PDO::FETCH_ASSOC);
    return $rows;
}

// function pageController()
// {
//     $data = [];
//     $data['parks'] = getInfo($dbc);
//     $data['count'] = (isset($_GET['count'])) ? $_GET['count'] : 1;
//     $data['query'] = '?count=';
//     return $data;
// }

// extract(pageController());


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

    <style type="text/css">


    </style>

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
        <a href="<?= $query . ($count = 0); ?>"><button>1</button></a>
        <a href="<?= $query . ($count = 4); ?>"><button>2</button></a>
        <a href="<?= $query . ($count = 8); ?>"><button>4</button></a>
        <a href="<?= $query . ($count = 12); ?>"><button>5</button></a>
        <a href="<?= $query . ($count = 16); ?>"><button>6</button></a>
        <a href="<?= $query . ($count = 20); ?>"><button>7</button></a>
        <a href="<?= $query . ($count = 24); ?>"><button>8</button></a>
        <a href="<?= $query . ($count = 28); ?>"><button>9</button></a>
        <a href="<?= $query . ($count = 32); ?>"><button>10</button></a>
        <a href="<?= $query . ($count = 36); ?>"><button>11</button></a>
        <a href="<?= $query . ($count = 40); ?>"><button>12</button></a>
        <a href="<?= $query . ($count = 44); ?>"><button>13</button></a>
        <a href="<?= $query . ($count = 48); ?>"><button>14</button></a>
        <a href="<?= $query . ($count = 52); ?>"><button>15</button></a>
        <a href="<?= $query . ($count = 56); ?>"><button>16</button></a>
    
    </main>
    
    <!-- jQuery Version 1.11.1 -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Custom JS -->

    <script src="===PATH HERE==="></script>

</body>

</html>
