<?php
    require_once 'vendor/autoload.php';

    use \IoJaegers\OceanCms\OceanCMS;


    $engine = new OceanCMS();

    $engine->initialise();
    $engine->execute();
    $engine->clean();
?>