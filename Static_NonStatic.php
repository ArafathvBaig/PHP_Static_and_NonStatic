<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class for Both Static and Non-Static Functions
 */
class Static_NonStatic
{
    public static $num = 3;
    public $num1 = 3;

    /**
     * Static Function to check the length of the name
     * Passing the 'name' as parameter and Accessing Static variable
     * Returns a string
     */
    public static function sizeCheck($name)
    {
        if (strlen($name) >= self::$num) {
            return "True";
        } else {
            return "False";
        }
    }

    /**
     * Non-Static Function to check the length of the name
     * Passing the 'name' as parameter and Accessing Static variable
     * Returns a string
     */
    public function sizeCheck1($name)
    {
        if (strlen($name) >= self::$num) {
            return "True";
        } else {
            return "False";
        }
    }
}
$name = readline('Enter the Name: ');
$check = Static_NonStatic::sizeCheck($name);
echo "Static: " . $check;

$obj = new Static_NonStatic();
$check = $obj->sizeCheck($name);
echo "\nNon Static: " . $check;
