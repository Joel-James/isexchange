<?php

// base currency that you want to convert from.
$from = 'USD';

// currency that you want to convert to.
$from = 'INR';

// Our currency converter API url.
$json_url = 'http://ocode.in/exchanger.php?from=' . $from . '&to=' . $to .'';

// Get the response data from API server
$json = file_get_contents($json_url);

// Out put the json response ( To do : Use this json for your requirement)
echo $json;