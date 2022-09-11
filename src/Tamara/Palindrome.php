<?php
class Palindrome
{

    public static function isPalindrome(string $word)
    {
        $l = 0;
        $r = strlen($word) - 1;
        $flag = 0;

        while ($r > $l) {
            if (strtolower($word[$l]) != strtolower($word[$r])) {
                $flag = 1;
                break;
            }
            $l++;
            $r--;
        }

        if ($flag == 0) {
            echo $word . " is a Palindrome string.\n";
        } else {
            echo $word . " is not a Palindrome string.\n";
        }
    }
}

echo "<pre>";print_r(Palindrome::isPalindrome("Test"));

echo "<pre>";print_r(Palindrome::isPalindrome("Radar"));

