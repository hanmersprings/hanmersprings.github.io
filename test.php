<?php

require_once 'meekrodb.2.3.class.php';
DB::$user = 'hanmersprings';
DB::$password = 'l^b2C28c';
DB::$dbName = 'hanmersprings';
DB::$port = '3306';
DB::$host = '127.0.0.1';

$results = DB::query("SELECT * FROM listings WHERE listing_directory = 1");

foreach ($results as $row){
    echo "<pre>".print_r($row,true)."</pre>";
}