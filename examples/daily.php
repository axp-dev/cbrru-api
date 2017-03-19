<?php

include_once '../vendor/autoload.php';

use AXP\CBRRU\CBR;

$daily = CBR::getDaily(['date_req' => date('d/m/Y')]);

print_r($daily);