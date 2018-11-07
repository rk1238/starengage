<?php

$raw = file_get_contents('https://www.instagram.com/ram_krishna92'); //replace with user
preg_match('/\"edge_followed_by\"\:\s?\{\"count\"\:\s?([0-9]+)/',$raw,$m);
print intval($m[1]);

?>
