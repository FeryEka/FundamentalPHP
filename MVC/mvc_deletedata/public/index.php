<?php
if ( !session_id() ) session_start();

// teknik ini disebut dengan "Scaffolding" atau "Bootstraping"
require_once '../app/init.php';

$app = new App;