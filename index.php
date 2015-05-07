<?php
require_once __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;

$firstDeployFile = __DIR__ . '/storage/first_deploy';
if (!file_exists($firstDeployFile)) {
    file_put_contents($firstDeployFile, Carbon::now());
}

$firstDeploy = new Carbon(file_get_contents($firstDeployFile));
$currentTime = Carbon::now();
?>  
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Deploy test application</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
    <div class="jumbotron">
      <h1>Hello, deployer!</h1>
      <p>The current time is: <strong><?=$currentTime->format('r')?></strong></p>
      <p>This application's first deploy was at: <strong><?=$firstDeploy->format('r')?></strong></p>
      <p>This application's life span: <strong><?=$firstDeploy->diffForHumans($currentTime, true);?></strong></p>
    </div>
    </div>
  </body>
</html>
