<?php
$number = 2 ;
while ($number < 100 )
{
    $count=0;
    for ( $i=2;$i<=$number;$i++)
    {
        if (($number%$i)==0)
        {
            $count++;
        }
    }
    if ($count<2)
    {
        echo $number."<br>";
    }
    $number++;
}





