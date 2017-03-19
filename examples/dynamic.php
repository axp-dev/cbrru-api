<?php

include_once '../vendor/autoload.php';

use AXP\CBRRU\CBR;

$dynamic = CBR::getDynamic([
    'date_req1' => '02/03/2001',
    'date_req2' => '14/03/2001',
    'VAL_NM_RQ' => 'R01235',
]);

print_r($dynamic);