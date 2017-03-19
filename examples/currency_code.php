<?php

include_once '../vendor/autoload.php';

use AXP\CBRRU\CBR;

$currency_code = CBR::getCurrencyCode(['d' => 0]);

print_r($currency_code);