<!DOCTYPE html>
<html>
    <head>
        <title>Lab 5a Q2</title>
        <style>
            body {
                background-color: #FADADD;
            }
            table, th, td {
                border: 1px solid black;
            }
        </style>
    </head>
<body>
    <?php
        $students = [
            [
                'name' => 'Alice',
                'program' => 'BIP',
                'age' => 21
            ],
            [
                'name' => 'Bob',
                'program' => 'BIS',
                'age' => 20    
            ],
            [
                'name' => 'Raju',
                'program' => 'BIT',
                'age' => 22
            ]
        ];
    ?>

    <!-- HTML Table to Display Students -->
    <table>
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>

        <?php
            // Loop through the students array
            foreach ($students as $student) {
                echo "<tr>";
                echo "<td>{$student['name']}</td>";
                echo "<td>{$student['program']}</td>";
                echo "<td>{$student['age']}</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
    
