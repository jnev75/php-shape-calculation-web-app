<!-- PHP script -->
<?php
    // include statements
    // let you insert the content from other relevant files into this file
    // the data shared can be text, code or markup
    include 'square.php';
    include 'triangle.php';
    include 'circle.php';

    // Shape interface
    // - acts as a blueprint for all shape classes defined
    // - it specifies a contract that each class must fulfill
    interface Shape 
    {
        public function area(int $length);
        public function boundaryLength(int $length);
    }    
?>