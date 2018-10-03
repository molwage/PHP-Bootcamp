#!/usr/bin/php
<?php
echo "Enter a number: ";
while ($input = fgets(STDIN))
{
    $input = trim($input);
    if (is_numeric($input))
    {   
        if ($input % 2 == 0)
            echo "The number $input is even";
        else if ($input % 2 != 0)
            echo "The number $input is odd";
    }
    else
        echo "'$input' is not a number";
    echo "\nEnter a number: ";
}
?>