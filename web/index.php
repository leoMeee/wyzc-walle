<?php
// Include local configuration first so we can set the YII_* constants there

require(__DIR__ . '/../vendor/autoload.php');
define('APP_DIR', realpath('../'));

if (file_exists(APP_DIR.'/.env')) {
    $dotenv = new Dotenv\Dotenv(APP_DIR);
    $dotenv->load();
    $dotenv->required(['WALLE_DB_DSN','WALLE_DB_USER','WALLE_DB_PASS']);
}

$local = require(__DIR__.'/../config/local.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__.'/../config/web.php');
$config = yii\helpers\ArrayHelper::merge($config, $local);

(new yii\web\Application($config))->run();
