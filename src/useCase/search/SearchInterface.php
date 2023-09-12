<?php

namespace Amazingbits\ZipcodeFinder\UseCase\Search;

interface SearchInterface
{
    public function getAddressFromZipCode(string $zipCode): array|bool;
}