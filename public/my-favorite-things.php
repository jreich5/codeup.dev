<?php 

function pageController() 
{
    $data = [];
    $data['fav'] = ['girlfriend', 'piano', 'macbook', 'music', 'friends', 'gaming', 'TV', 'star wars'];
    shuffle($data['fav']);
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
    <title>Favorite Things</title>
    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity=sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="===PATH HERE===">
    <style>
        body {
            background-color: papayawhip;
        }
        h1 {
            text-align: center;
            font-size: 3em;
            padding-bottom: 20px;
        }
        .gray {
            background-color: lightgray;
            display: block;
        }
        tr {
            width: 90vw;
            font-size: 2em;
            border: 1px solid black;
        }
        td {
            width: 90vw;
        }

     </style>
</head>
<body>
    <main class="container">
        <h1>My Favorite Things</h1>
        <table>
            <?php for ($i = 0; $i <= 7; $i++): ?>
                <?php if ($i % 2 == 0): ?>
                    <tr><td><?= ucwords(array_pop($fav));?></td></tr>
                <?php else: ?>
                    <tr><td class="gray"><?= ucwords(array_pop($fav)); ?></td></tr>
                <?php endif; ?>
            <?php endfor; ?>
        </table>
    </main>
    
    <!-- jQuery Version 1.11.1 -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
 
    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity=sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Custom JS -->

    <script src="===PATH HERE==="></script>
 
</body>
 
</html>
 