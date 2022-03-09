<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class for Static Program
 */
class Static_Program
{
    public static $num = 3;

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
}
$name = readline('Enter the Name: ');
// Accessing Static Function using Scope Resolution 
$check = Static_Program::sizeCheck($name);
echo $check;
