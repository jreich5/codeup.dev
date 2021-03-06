<?php 

function randomPicker($array) 
{
    return $array[mt_rand(0, count($array) -1)];
}

function nameGenerator ($adjct, $nouns)
{
    $firstValue = ucwords(randomPicker($adjct));
    $secondValue = ucwords(randomPicker($nouns));
    return "$firstValue" . " " . "$secondValue";
}

function pageController() 
{
    $data = [];
    $data['adjct'] = ['tasty', 'gooey', 'poop green', 'fried', 'shrunkin', 'krunked', 'enraged', 'worst', 'other', 'old'];
    $data['nouns'] = ['people', 'biscuit', 'bellybutton', 'afro', 'pam', 'amelie', 'justin', 'bubbles', 'max', 'government'];
    
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
 
     <title>Random Server</title>
 
     <!-- Bootstrap Core CSS -->
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 
     <!-- Custom CSS -->
     <link rel="stylesheet" type="text/css" href="===PATH HERE===">
     <style>
         body {
            background-color: papayawhip;
         }

         h1 {
            text-align: center;
         }

     </style>
 
 </head>
 
 <body>
 
     <main class="container">
         <h1><?= nameGenerator($adjct, $nouns); ?></h1>
 
     </main>
     
     <!-- jQuery Version 1.11.1 -->
     <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
 
     <!-- Bootstrap Core JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 
     <!-- Custom JS -->
 
     <script src="===PATH HERE==="></script>
 
 </body>
 
 </html>
 