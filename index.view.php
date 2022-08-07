<!-- Index View (index.view.php file) for PHP web application -->

<!-- PHP script -->
<?php
    // include statement
    // - lets you insert the content from another relevant file into this file
    // - the data shared can be text, code or markup
    include 'shape.php';

    // PHP super global variables 
    // - collect form data after submission
    // 2 variables 
    // - initialised with value from each PHP super global variable
    $shapeName = $_POST['shape'];
    $length = $_POST['length'];

    // ShapeCalculationController class
    class ShapeCalculationController
    {
        /*
            store function
            - accessible outside scope of class within PHP script
            - uses a new shape object instance to call functions for implementation
            - length property used to perform calculations and return results
            - values returned are assigned to variables
            - these variables are added to an array which is returned to the calling method
        */
        public function store(Shape $shape) {
            global $length;
            $shapeMeasurements = [];

            $area = $shape->area($length);
            $boundaryLength = $shape->boundaryLength($length);
            array_push($shapeMeasurements, $area, $boundaryLength);
            return $shapeMeasurements;
        }
    }
    
    // create controller variable
    // and initialise it with new instance of preceding class as value
    $controller = new ShapeCalculationController();
    /*
        switch block
        - features a set of case statements
        - evaluates the condition (in this case a variable)
        - compares the result against one or more case statements within the block
        - to try and find a match
        - once a match is found, the code within that case is executed
        - break statement is used to exit the switch block
    */
    switch ($shapeName) { 
        case "square":
            $shapeMeasurements = $controller->store(new Square());
            $area = $shapeMeasurements[0];
            $boundaryLength = $shapeMeasurements[1];
            break;
        case "triangle":
            $shapeMeasurements = $controller->store(new Triangle());
            $area = $shapeMeasurements[0];
            $boundaryLength = $shapeMeasurements[1];
            break;
        case "circle":
            $shapeMeasurements = $controller->store(new Circle());
            $area = $shapeMeasurements[0];
            $boundaryLength = $shapeMeasurements[1];
            break;
    }
?>
<!-- HTML markup -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Shape Calculation Application</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>Shape Calculation Application</h1>
        </header>

        <main>
            <fieldset>
                <legend>Shape Measurement Results:</legend>
                <p>Shape:&nbsp;&nbsp;<?php echo ucfirst($shapeName); ?></p>
                <p>Area:&nbsp;&nbsp;
                <input type="text" value="<?php echo $area; ?>" readonly>&nbsp;&nbsp;cm<sup>2</sup></p>
                <p>Boundary length:&nbsp;&nbsp;
                <input type="text" value="<?php echo $boundaryLength; ?>" readonly>&nbsp;&nbsp;cm</p>
            </fieldset>

            <br><a href="http://php_shapecalculationapp.test/">Return</a> 
        </main>

        <footer>
            <p class="copyright-text">
                Copyright &copy; 2022 All Rights Reserved by James L Neville.
            </p>
        </footer>
    </body>
</html>