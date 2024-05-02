<?php
session_start();

if(isset($_POST['submit']))
{
    $title=$_POST['title'];
    $Description=$_POST['Description'];
    $rollno=$_SESSION['username'];

$sql1="insert into LMS1.recommendations (Book_Name,Description,username) values ('$title','$Description','$rollno')"; 

echo $rollno;
}
?> 
