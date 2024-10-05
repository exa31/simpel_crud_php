<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=testphp", "root", "root");
} catch (Exception $e) {
    echo $e->getMessage();
}

