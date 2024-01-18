<?php

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $kindMusic = $_POST['music-kind'];
    $likeMusic = $_POST['music-like'];
    $bestMusic = $_POST['music-best'];
}

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formmusic';

$con = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($con->connect_errno) { echo "Erro";} else { echo "sucesso"; }

$sql = "INSERT INTO formsmusic(name, email, date, music_kind, music_like, music_best) VALUES ('$name', '$email', '$date', '$kindMusic', '$likeMusic', '$bestMusic') ";

$rs = mysqli_query($con, $sql);

if($rs){
    echo "cadastrado com sucesso";
}

?>