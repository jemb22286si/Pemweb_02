<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" && $password == "123") {
    echo "Selamat, Kamu berhasil Login !";
} else {
    echo "Maaf, kamu gagal Login, coba lagi !";
}