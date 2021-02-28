<?php

use Hashids\Hashids;

require_once 'vendor/autoload.php';

$hashids = new Hashids('T)8Yf}sd7Mg2TQ+LN6*dNkVZK', 10);

echo $hashids->encode(7);



