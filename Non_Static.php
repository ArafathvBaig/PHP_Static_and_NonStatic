<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class for Non Static Program
 */
class Non_Static_Program
{
    public $nonStaticArray = array();
    /**
     * Function for Displaying the Elements of the array
     * Passing 'n' length of array and 'array' as parameters
     */
    function show($n, $nonStaticArray)
    {
        echo "Array elements are:: ";
        for ($i = 0; $i < $n; $i++) {
            echo $nonStaticArray[$i] . " ";
        }
        echo "\n";
    }

    /**
     * Function For user input of NonStatic array and
     * calling the show function and search function init.
     */
    function input()
    {
        $n = readline('Enter the Size of Array: ');
        for ($i = 0; $i < $n; $i++) {
            $this->nonStaticArray[$i] = readline('Enter the Value: ');
        }
        $this->show($n, $this->nonStaticArray);
        $this->search($n, $this->nonStaticArray);
    }

    /**
     * Function to search the element from an array
     * Passing size 'n' and array as parameters
     * Prints position if element found,
     * else, prints not found
     */
    function search($n, $nonStaticArray)
    {
        $flag = 0;
        $searchElement = readline('Enter Element to Search: ');
        for ($i = 0; $i < $n; $i++) {
            if ($nonStaticArray[$i] == $searchElement) {
                $flag++;
                break;
            }
        }
        if ($flag == 0) {
            echo "Element " . $searchElement . " is not found";
        } else {
            echo "Element " . $searchElement . " is found at position " . $i;
        }
    }
}
$nonStaticProgram = new Non_Static_Program();
$nonStaticProgram->input();
