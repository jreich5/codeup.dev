<!-- codeup.dev/logout.php -->
<?php 
require_once "../Auth.php";
require_once "../Input.php";
session_start();
Auth::logout();
Auth::redirect('/login.php');
