<?php

namespace Amazingbits\ZipcodeFinder\UseCase\Search\Implementations;

use Amazingbits\ZipcodeFinder\UseCase\Search\SearchInterface;

class SearchApiCEP implements SearchInterface
{
    private static string $url = "https://cdn.apicep.com/file/apicep/";

    public function getAddressFromZipCode(string $zipCode): array|bool
    {
        $response = (array)json_decode(file_get_contents(self::$url . $zipCode . ".json"));
        if (isset($response["status"])) {
            if ((int)$response["status"] !== 200) {
                return false;
            }
        }
        return [
            "cep" => $response["code"],
            "street" => $response["address"],
            "district" => $response["district"],
            "city" => $response["city"],
            "state" => $response["state"]
        ];
    }
}