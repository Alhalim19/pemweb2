<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "abdul" && $password == "halim"){
    echo "Login berhasil";
} else {
    echo "Login gagal";
}