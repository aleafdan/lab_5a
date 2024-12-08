<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Lab 5a Q1</title> 
</head> 
<body> 
    <?php  
        $name = "Muhammad Alif Danial Bin Zakaria"; 
        $matric = "AI220081";
        $course = "BIP";
        $year = 3;
        $address = "Kolej Kediaman Tun Dr. Ismail"
    ?> 

    <table border="1"> 
        <tr>
            <th>Name</th>
            <th>Matric Number</th>
            <th>Course</th>
            <th>Year Of Study</th>
            <th>Address</th>
        </tr>
        <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo $matric; ?></td>  
            <td><?php echo $course; ?></td>  
            <td><?php echo $year; ?></td>  
            <td><?php echo $address; ?></td>    
        </tr>
    </table> 
</body> 
</html> 