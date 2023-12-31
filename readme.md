<h1>Zip Code Finder</h1>

<p>This library generates an array with address informations by passing a zip code.</p>

<p>The zip code must be in this format: <b>00000-000</b> to work correctly.</p>

<p>The example file in root demonstrate how it works.</p>

<p>Thes library use the following APIs to search addresses by zipcode:</p>

<ul>
    <li><a href="https://viacep.com.br/">ViaCEP</a></li>
    <li><a href="https://apicep.com/api-de-consulta/">CDN API CEP</a></li>
    <li><a href="https://opencep.com/">OpenCEP</a></li>
</ul>

<p>To use this library, just init Search class from namespace <i>Amazingbits\ZipcodeFinder\UseCase\Search\Search</i> 
and call the method <i>getAddressFromZipCode()</i> passing a zip code 
with this format: <b>00000-000</b>. It returns an array with: cep, street,
district, city and state or false.</p>

<p>Click <a href="https://github.com/amazingbits/zipcode-finder">here</a> to repository.</p>