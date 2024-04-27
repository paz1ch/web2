<?php
$conn = new mysqli('localhost', 'root', '', 'web_php');
if ($conn->connect_error) {
    echo "Error connecting to";
}
