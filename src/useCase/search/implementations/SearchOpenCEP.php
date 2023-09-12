<?php

namespace Amazingbits\ZipcodeFinder\UseCase\Search\Implementations;

use Amazingbits\ZipcodeFinder\Helper\StringHelper;
use Amazingbits\ZipcodeFinder\UseCase\Search\SearchInterface;

class SearchOpenCEP implements SearchInterface
{
    private static string $url = "https://opencep.com/v1/";

    public function getAddressFromZipCode(string $zipCode): array|bool
    {
        $zipCode = StringHelper::sanitizeZipCode($zipCode);
        $response = (array)json_decode(file_get_contents(self::$url . $zipCode . ".json"));
        if (isset($response["error"])) {
            return false;
        }
        return [
            "cep" => $response["cep"],
            "street" => $response["logradouro"],
            "district" => $response["bairro"],
            "city" => $response["localidade"],
            "state" => $response["uf"]
        ];
    }
}