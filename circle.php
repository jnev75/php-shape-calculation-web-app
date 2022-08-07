<!-- PHP script -->
<?php
    // Circle class
    // - implements functions found in Shape interface
    class Circle implements Shape
    {
        // calculates area of circle
        // returns value to calling method
        function area(int $length) {
            return round(pi() * pow($length, 2), 2);
        }
        
        // calculates boundary length of circle 
        // returns value to calling method
        function boundaryLength(int $length) {
            return round(2 * pi() * $length, 2);
        }
    }
?>