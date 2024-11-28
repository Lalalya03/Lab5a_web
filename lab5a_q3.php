<!DOCTYPE html>
<html>
    <head>
        <title>Lab 5a Q2</title>
        <style>
            body {
                background-color: #FADADD;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <?php
            // calculate the area of a rectangle
            function calculateArea($width, $height) {
                return $width * $height;
            }

            // Rectangle measurement
            $width = 4;
            $height = 2;

            // Call the function
            $area = calculateArea($width, $height);

            // Display
            echo "<p>The area of a rectangle with a width of $width and height of $height is $area.</p>";
        ?>
    </body>
</html>
