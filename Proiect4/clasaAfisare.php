<?php
class clasaAfisare {

    function __construct() 
    {    
    }
    
    function afisare()
    {
        require 'database.php';
        $data = new database();
        $con = $data->connection();
        $sql='SELECT * FROM images;';
        $query= mysqli_query($con, $sql) or die(mysqli_error($con));
        echo '<table style="margin:0 auto;">';
        while($row= mysqli_fetch_array($query))
        {
            echo '<tr align="center"><td rowspan="2">';
            echo '<img src="'.$row['path'].'" style="">';
            echo '</td>';
            echo '<td><textarea style="background:transparent;" '; 
            if (!isset($_SESSION['user_name'])){
                echo 'readonly';
            }
            echo '>'.$row['description'].'</textarea></td>';
            echo '</tr>';
            echo '<tr><td>';
            if (isset($_SESSION['user_name'])){
                echo '<a href="\edit_description\?id='.$row['id'].'& description=">Edit description</a>';
            }
            echo '</td></tr>';
        }
        echo '</table>';
    }
}

