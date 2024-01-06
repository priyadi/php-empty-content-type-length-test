<?php

header('Content-type: text/plain');

printf("SAPI: %s\n", php_sapi_name());
printf("PHP Version: %s\n", phpversion());

if (!isset($_SERVER['CONTENT_TYPE'])) {
    echo "CONTENT_TYPE is not set\n";
} else {
    echo "CONTENT_TYPE is '{$_SERVER['CONTENT_TYPE']}'\n";
}

if (!isset($_SERVER['CONTENT_LENGTH'])) {
    echo "CONTENT_LENGTH is not set\n";
} else {
    echo "CONTENT_LENGTH is '{$_SERVER['CONTENT_LENGTH']}'\n";
}
