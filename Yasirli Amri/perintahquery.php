<?php
include('connect.php');

$user = mysqli_query($conn, "SELECT * FROM users");

$finansialform = mysqli_query($conn, "SELECT * FROM finansialform");

$hrform = mysqli_query($conn, "SELECT * FROM hrform");

$marketingform = mysqli_query($conn, "SELECT * FROM marketingform");

$operasionalform = mysqli_query($conn, "SELECT * FROM operasionalform");

