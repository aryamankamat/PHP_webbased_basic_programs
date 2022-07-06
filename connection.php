<?php

$db = new mysqli('localhost', 'root', '', 'beers');
if ($db->connect_error) {
    echo "$db->connect_error";
}
