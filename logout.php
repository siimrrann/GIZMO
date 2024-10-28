<?php 
session_start();
if(isset($_SESSION['email'])){
session_destroy();}
$ref= @$_GET['q'];
// header("location:$ref");
// MAKING CHANGES SO THAT AFTER LOGGING OUT AT THE ADMIN LOGIN IT REDIRECTS TO THE QUIZ PAGE INSTEAD OF THE INDEX PAGE 
header("Location: quiz.php");
?>