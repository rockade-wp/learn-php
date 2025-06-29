<?php
require_once "data/Person.php";

// cara lama
define("APPLICATION", "Learn OOPHP");
// cara baru
const APP_VERSION = "2.7.4";

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;

// mengakses constant yang ada di dalam class Person
echo Person::AUTHOR . PHP_EOL;
// mengakses constant tidak perlu membuat object, karena constant hidupnya di class, bukan di object.
