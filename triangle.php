<!-- PHP script -->
<?php
    // Triangle class
    // - implements functions found in Shape interface
    class Triangle implements Shape
    {
        // calculates area of triangle
        // returns value to calling method
        function area(int $length) {
            return round(($length / 2) * $length, 1);
        }
        
        // calculates boundary length of triangle
        // returns value to calling method
        function boundaryLength(int $length) {
            return 3 * $length;
        }
    }
?>