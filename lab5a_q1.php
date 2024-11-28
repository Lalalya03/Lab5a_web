<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 5a Q1</title>
        <style>
            body {
                background-color: #FADADD;
            }
            table, tr, td {
                border: 1px solid black;
            }
        </style>
    </head>
    
    <body>
        <?php 
            $name = "Alya Farisah Binti Mohamad Hassan";
            $matric_number = "AI220139";
            $course = "Bachelor of Computer Science (Information Security) with Honours";
            $study_year = "Year 3";
            $address = "34, jalan 8/27D Seksyen 8, 43650 Bandar Baru Bangi, Selangor"; 
        ?>

        <table>
            <tr>
                <td>Name</td>
                <td><?php echo "$name"; ?></td> 
            </tr>
            <tr>
                <td>Matric Number</td>
                <td><?php echo "$matric_number"; ?></td> 
            </tr>
            <tr>
                <td>Course</td>
                <td><?php echo "$course"; ?></td> 
            </tr>
            <tr>
                <td>Year of study</td>
                <td><?php echo "$study_year"; ?></td> 
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo "$address"; ?></td> 
            </tr>
        </table>
    
    </body>
</html>
