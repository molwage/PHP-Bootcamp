#!/usr/bin/php
<?php

function ft_split($string)
{
    $temp = explode(" ", $string);

    sort($temp);
    $ret = array();

    foreach ($temp as $item)
    {
        if (!empty($item))
        {
            $ret[] = $item;
        }
    }
    
    unset($temp);
    
    return ($ret);
}

?>