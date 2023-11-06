<?php

namespace Collect;

require_once 'vendor_autoload.php';

$records = 
    [
        'id' => 2135;
        'name' => 'John',
		'surname' => 'Doe',
    ]
var_dump(collection($records)->toArray());
