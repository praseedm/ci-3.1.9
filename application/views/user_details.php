<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
</head>
<body>
    <table>
        <tr>
            <th>SerialNO</th>
            <th>UserName</th>
            <th>Mark</th>
        </tr>
            <?php
            foreach ($users as $kry => $value) {
                echo
                "<tr> 
                    <td>". $value['id'] ." </td>
                    <td>". $value['name'] ." </td>
                    <td>". $value['mark'] ." </td>
                </tr>";
            }
            ?>
    </table>
</body>
</html>

<?php
//    echo '<pre>';
//    print_r($users);
//    echo '</pre>';
//?>
