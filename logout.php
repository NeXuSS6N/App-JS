<?php 
// logout.php
session_start();

unset($_SESSION['identity']);
header('Location: deco.php');
exit;
