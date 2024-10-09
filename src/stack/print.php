<?php
require_once '../class/stack.php'; 
include '../read.php';
// var_dump(readJson());
echo json_encode(readJson(), JSON_PRETTY_PRINT);

new Stack(readJson());
