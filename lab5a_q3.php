<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Lab 5a Q3</title> 
</head> 
<body> 
    <table border ="1">
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>

    <?php
        //array
        function multiplication($number) {
            for ($i = 1; $i <= 12; $i++) {
                $result = $number * $i;
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>$number</td>";
                echo "<td>$result</td>";
                echo "</tr>";
        }
    }
        //single parameter (the multiplier)
        multiplication(2);
        ?>
    </table>
</body>
</html>