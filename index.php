<?php
require_once __DIR__ . '/vendor/autoload.php';

echo vsprintf("Hello world @ %s", Carbon\Carbon::now()->format('r'));
?>