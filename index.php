<?php
$number = 2 ;
while ($number < 100 )
{
    $count = 0;
    for ( $i = 2;$i <= $number/2;$i++ )
    {
        if (($number%$i) == 0)
        {
            $count++;
        }
    }
    if ($count < 1)
    {
        echo $number, "<br>";
    }
    $number++;
}