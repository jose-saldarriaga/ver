<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'parka'
) or die(mysqli_erro($mysqli));

?>