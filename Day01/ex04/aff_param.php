#!/usr/bin/php
<?php

array_shift($argv);
foreach ($argv as $item)
{
    printf("%s\n", $item);
}

?>