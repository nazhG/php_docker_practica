<?php

include '../write.php';
include '../read.php';

$stack = readJson();
array_push($stack, "{'text': 'Nuevo elemento'}");
writeJson($stack);
