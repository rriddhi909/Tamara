<?php
class OddNumbers
{
    public static function getOddNumbers(array $values)
    {
        $count = 0;
        $size = count($values);
        for (
            $i = 0;
            $i < $size;
            $i++
        ) {

            for (
                $j = 0;
                $j < $size;
                $j++
            ) {
                if ($values[$i] == $values[$j])
                    $count++;
            }
            if ($count % 2 != 0)
                return $values[$i];
        }
        return -1;
    }
}
$arr = array(5, 7, 2, 7, 5, 2, 5);

echo (OddNumbers::getOddNumbers($arr));
