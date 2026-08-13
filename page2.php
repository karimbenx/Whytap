<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Important Cities</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
    <table id="tables">
        <caption>Important Cities and its Capitals</caption>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (file_exists("data.txt"))
                {
                    $lines=file("data.txt");
                    foreach($lines as $line)
                    {
                        $data=explode("|",$line);
                        echo "<tr>";
                        echo "<td>".$data[0]."</td>";
                        echo "<td>".$data[1]."</td>";
                        echo "<td>".$data[2]."</td>";
                        echo "</tr>";
                    }
                }
            ?>
        </tbody>
</body>