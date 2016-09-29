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
    $stm = $dbc->prepare('SELECT * FROM national_parks LIMIT ' . ':limit' . ' OFFSET ' . ':offset' . ';');
    $stm->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stm->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stm->execute();
    $rows = $stm->fetchALL(PDO::FETCH_ASSOC);
    return $rows;
}

// function insertInfo($dbc, $dateError, $areaError)
// {
//     if (!strtotime($_POST['date_established'])) {
//         $dateError = 'Invalid date input.';
//         return $dateError;
//     } 
//     if (!is_numeric($_POST['area_in_acres'])) {
//         $areaError = 'Invalid area input.';
//         return $areaError;
//     } 

//     $queryInsert = 'INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)';

//     $stmt = $dbc->prepare($queryInsert);
//     $stmt->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
//     $stmt->bindValue(':location', $_POST['location'], PDO::PARAM_STR);
//     $stmt->bindValue(':date_established', $_POST['date_established'], PDO::PARAM_STR);
//     $stmt->bindValue(':area_in_acres', $_POST['area_in_acres'], PDO::PARAM_STR);
//     $stmt->bindValue(':description', $_POST['description'], PDO::PARAM_STR);
//     $stmt->execute();
    
// }

function insertInfo($dbc)
{
    // if (!strtotime($_POST['date_established'])) {
    //     $dateError = 'Invalid date input.';
    //     return $dateError;
    // } 
    // if (!is_numeric($_POST['area_in_acres'])) {
    //     $areaError = 'Invalid area input.';
    //     return $areaError;
    // } 

    $queryInsert = 'INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)';

    $stmt = $dbc->prepare($queryInsert);
    $stmt->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
    $stmt->bindValue(':location', $_POST['location'], PDO::PARAM_STR);
    $stmt->bindValue(':date_established', $_POST['date_established'], PDO::PARAM_STR);
    $stmt->bindValue(':area_in_acres', $_POST['area_in_acres'], PDO::PARAM_STR);
    $stmt->bindValue(':description', $_POST['description'], PDO::PARAM_STR);
    $stmt->execute();
    
}

// Refactor using get() method
(!empty($_POST['name']) && !empty($_POST['location']) && !empty($_POST['date_established']) && !empty($_POST['area_in_acres']) && !empty($_POST['description'])) ? insertInfo($dbc, $dateError, $areaError) : false; 

function deleteRow($dbc)
{
    $row = $_POST['deleteRow'];
    $queryDelete = 'SELECT * FROM national_parks WHERE id = $row;';
    $stmt = $dbc->prepare($queryDelete);
    $stmt->execute();
}

(!empty($_POST['deleteRow'])) ? deleteRow($dbc) : false;


function pageController($dbc)
{
    $data = [];
    $data['stmt'] = $dbc->query('SELECT * FROM national_parks');
    $data['page'] = (isset($_GET['page'])) ? $_GET['page'] : 1;
    $data['limit'] = 4;
    $data['dateError'] = 'test';
    $data['areaError'] = 'test2';
    $data['pageDisplay'] = (isset($_GET['page'])) ? $_GET['page'] : 1;
    $data['new'] = (isset($_POST['page'])) ? $_POST['page'] : 1;
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

</head>

<body>
    <main class="container"> 
        <h1>National Parks List</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Date Established</th>
                    <th>Area</th>
                    <th>Description</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($parks as $park) : ?>
                <tr>
                    <td><?= $park['name'] ?></td>
                    <td><?= $park['location'] ?></td>
                    <td><?= $park['date_established'] ?></td>
                    <td><?= number_format($park['area_in_acres']) . ' acres' ?></td>
                    <td><?= $park['description'] ?></td>
                    <td>
                        <form method="POST" action="/national_parks.php">
                            <input type="hidden" name="deleteRow" value="<?= $park['id']; ?>">
                            <button type="submit" class="btn btn-danger">Delete Row</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <ul class="pagination">
            <?php 
                for ($i = 1; $i < $stmt->rowCount() / $limit; $i++) {
                    echo '<li><a href="' . $query . ($pageDisplay = $i) . '">' . $i . '</a></li>';
                }
            ?>
        </ul>
        <br>
        <?php
            if ($page > 1) {
                echo '<a href="' . $query . ($page - 1) . '"><button class="btn btn-default"><- BACK</button></a>';
            }
            if ($page < $stmt->rowCount() / $limit -1) {
                echo '<a href="' . $query . ($page + 1) . '"><button class="btn btn-default">NEXT -></button></a>';
            }
        ?>
        <h2>New Entries</h2>
        <h5>All fields must be filled out before submission.</h5>
        <form method="POST" action="/national_parks.php">
            <label id="name">Name</label><br>
            <input type="text" name="name" id="name"><br>
            <label id="location">Location</label><br>
            <input type="text" name="location" id="location"><br>
            <label id="date_established">Date Established</label><br>
            <input type="text" name="date_established" id="date_established"><br>
            <label id="area_in_acres">Area in Acres</label><br>
            <input type="text" name="area_in_acres" id="area_in_acres"><br>
            <label id="description">Description</label><br>
            <input type="text" name="description" id="description"><br><br>
            <button type="submit" class="btn btn-success">Submit New Row</button>
        </form>
        <br>
        <form method="POST" action="/national_parks.php">
            <input type="hidden" name="deleteRow" value="true">
            <button type="submit" class="btn btn-danger">Delete Last Row</button>
        </form>
    </main>
    
    <!-- jQuery Version 1.11.1 -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>
