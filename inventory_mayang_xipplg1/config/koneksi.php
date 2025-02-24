<?php

$conn = mysqli_connect('localhost','root','','db_inventory_mayang');

if(!$conn){
    die('koneksi gagal'.mysqli_connect_error());
}