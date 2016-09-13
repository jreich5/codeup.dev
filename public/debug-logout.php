<?php
require_once 'debug-functions.php';

function pageController() {
    clearSession();
    redirect("debug-login.php");
}
session_start();
pageController();