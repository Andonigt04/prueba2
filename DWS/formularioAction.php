<?php

$name = $_POST["name"];
$password = $_POST["password"];

if (empty($name) || empty($password)) {
    echo "Erabiltzailea eta pasahitza jarri behar dituzu!";
} else {
    echo "Kaixo $name! Ongi etorri!";
}
