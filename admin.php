<!DOCTYPE html>
<html>
<head>
    <title> Admin </title>
</head>
<body>
    <?php
        error_reporting(0);
        include "delete.php"; 
        $files = glob("formfiles/*.txt");
    ?>
    <form method = "POST">
        <table border = '1'>
            <thead>
                <tr>
                    <th> № </th>
                    <th> Имя файла</th>
                    <th> Удалить </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $table = '';
                    $i = 1;
                    
                    foreach ($files as $filename){
                        $filename = substr($filename, 10);
                        $table .= "<tr><td>" . $i . "</td><td>". $filename . "</td><td> <input type = 'checkbox' name = 'deletes[]' value='" . $filename . "'></td></tr>";
                        $i++;
                    }
            
                    echo $table;                      
                
                ?>
            </tbody>


        </table>
        <p><button type="submit">Отправить</button></p>
     </form>
</body>
</html>
