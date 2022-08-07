<!-- PHP script -->
<?php
    // Square class
    // - implements functions found in Shape interface
    class Square implements Shape
    {
        // calculates area of square
        // returns value to calling method
        function area(int $length) {
            return pow($length, 2);
        }
             
        // calculates boundary length of square 
        // returns value to calling method
        function boundaryLength(int $length) {   
            return 4 * $length;
        }
    }
?>