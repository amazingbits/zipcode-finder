<?php

use Amazingbits\ZipcodeFinder\UseCase\Search\Search;

require_once "vendor/autoload.php";

$search = new Search();

print_r($search->getAddressFromZipCode("15050-305"));