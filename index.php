<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Основы языка PHP</title>
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>
    <?php

    $filename = './file.csv';
    $data = [];
    
    $f = fopen($filename, 'r');
    
    if ($f === false) {
        die('Cannot open the file ' . $filename);
    }
    
    while (($row = fgetcsv($f)) !== false) {
        $data[] = $row;
    }
    
    fclose($f);
    
    echo "<table border='1'>";
    for ($i = 0; $i < count($data[0]); $i++) {
        echo "<th>" . $data[0][$i] . "</th>";
    }
    
    for ($i = 1; $i < count($data); $i++) {
      echo "<tr>";
        for ($j = 0; $j < count($data[0]); $j++) {
            echo "<td>" . $data[$i][$j] . "</td>";
        }
      	echo "</tr>";
    }
    echo "</ table>";
    ?>
  </body>
</html>

