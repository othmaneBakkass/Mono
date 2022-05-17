<?php

require_once '../../config/config.php';
require_once APPROOT . '/app/models/classes/classtest.php';

use  models\classes\Iamclass;

$init = new Iamclass('hellloooooo');

echo $init->getAlert();
