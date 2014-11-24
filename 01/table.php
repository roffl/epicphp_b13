<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Таблица умножения</title>
    </head>
    <body>
        <table>

        <?php


        for ($i=0; $i <= 10; $i++){
            echo "<tr>";
            for ($b=0; $b <= 10; $b++){
                echo "<td>";
                if($i === 0 &&  $b === 0){
                    echo "";
                } else if($i === 0){
                    echo $b ;
                } else if ($b === 0){
                    echo $i ;
                } else {
                echo $i * $b ;
                }
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
        </table>
    </body>
</html>