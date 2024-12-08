<!DOCTYPE html> 
<html lang="en"> 
<head>
    <title>Lab 5a q2</title>
</head>
<body>

<!-- To make a table, need to make a header outside of PHP-->
<table border ="1">
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        
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
        
        //to make the row fill with data
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
</html>