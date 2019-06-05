<?php
$arr= array(array(1, 2, 3),array(4, 5, 89, 96),array( 66, 89, 96));
$b = 0;
foreach ($arr as $val)
{
    foreach($val as $key=>$val1)
    {
        if ($val1 > $b)
        {
            $b = $val1;
        }
    }
}
echo "Max:".$b;
?>
