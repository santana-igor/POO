<?php
require __DIR__."/../vendor/autoload.php";

use Source\Related\Address;
use Source\Related\Company;

$address = new Address(
    '37 E. Victoria St', 
    'Santa Barbara'
);
$company = new Company(
    'Development School', 
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a velit tempus, pellentesque metus id, volutpat diam. Nulla pretium est nec eros iaculis consequat. Integer elementum ipsum at eleifend volutpat. Ut aliquam nec elit in dapibus. Duis at metus id nunc mollis sodales a vitae odio. Aenean lobortis eget ante vel dignissim. Nunc sagittis ultrices dolor, eu lacinia nibh tempor quis. Ut efficitur ultrices gravida. Duis eleifend accumsan lectus sed rhoncus.', 
    $address
);

$company->addTeam(
    'John', 
    'FullStack PHP Developer'
);
$company->addTeam(
    'Ashley', 
    'FullStack JavaScript Developer'
);

$company->addProduct('HTML, CSS, JS', 1500, ['Tags < />', 'Divs', 'Include CSS', 'Include JS', 'Videos']);
$company->addProduct('DevOps', 2000, ['Infra', 'Servers', 'AWS']);
$company->addProduct('PHP', 4000, ['POO', 'Functions', 'Variables', 'Arrays', 'Objects', 'Classes']);

?>