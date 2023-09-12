<?php

namespace Amazingbits\ZipcodeFinder\UseCase\Search;

use Amazingbits\ZipcodeFinder\UseCase\Search\Implementations\SearchApiCEP;
use Amazingbits\ZipcodeFinder\UseCase\Search\Implementations\SearchOpenCEP;
use Amazingbits\ZipcodeFinder\UseCase\Search\Implementations\SearchViaCEP;

class Search
{
    public function getAddressFromZipCode(string $zipCode): array|bool
    {
        $viaCEP = new SearchViaCEP();
        $openCEP = new SearchOpenCEP();
        $apiCEP = new SearchApiCEP();

        $response = $viaCEP->getAddressFromZipCode($zipCode);
        if (!$response) {
            $response = $openCEP->getAddressFromZipCode($zipCode);
            if (!$response) {
                $response = $apiCEP->getAddressFromZipCode($zipCode);
            }
        }

        if (!$response) {
            return false;
        }

        return $response;
    }
}