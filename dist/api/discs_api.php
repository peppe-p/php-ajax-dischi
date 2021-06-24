<?php
require __DIR__ . './db/disc.php';

header('Content-Type: application/json');
echo json_encode($discs);