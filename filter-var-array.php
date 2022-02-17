<?php
$arr = Array (
    "stname" => "Ram Kumar",
    "stmarks" => "98",
    "stemail" => "ramkumar@example.com",
);

$filters = array(
    "stname" => array(
        "filter" =>  FILTER_SANITIZE_STRING,
        "flags" => FILTER_FLAG_STRIP_HIGH
    ),
    "stmarks" => array (
        "filter" => FILTER_VALIDATE_INT,
        "options" => array (
            "min_range" => 1,
            "max_range" => 100
        )
    ),
    "stemail" => FILTER_SANITIZE_EMAIL
);

echo" <pre>";
//print_r($arr);
print_r(filter_var_array($arr, $filters));

echo "</pre>"; 