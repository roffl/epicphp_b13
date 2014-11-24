<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <style>
    body{
        font-family: "Fira Sans", "Source Sans Pro", Helvetica, Arial, sans-serif;
        text-align:center;
    }
    table{
        border-collapse: collapse;
        border: 1px solid #CCCCCC;
    }
    tr{border-bottom:1px solid #CCCCCC;}
    tr:nth-child(2n){background-color: #E6E6E6;}
    tr:nth-child(2n+1){background-color: #fff;}
    tr:first-child{
        background-color: #C4C9DF;
        border: 1px solid #8892BF;
    }
    td{
        padding: 5px 10px;
    }
    caption{
        font-weight:bold;
        padding: 5px 0;
    }
    </style>
    <table>
        <caption>Strict comparisons with ===</caption>
        <?php
        
            $type = array (1 => true, false, 1, 0, -1, "1", "0", "-1", null, array(), "php", "");
            for ($x = 0; $x <= 12; $x++) {
                echo "<tr>";
                for ($y = 0; $y <= 12; $y++){


                    echo "<td>";

                    if ($x ===0 && $y === 0){
                        echo "";
                    }
                    else if ($x === 0){
                        echo var_export($type[$y], TRUE);
                    }
                    else if ($y === 0){
                        echo var_export($type[$x], TRUE);
                    }
                    else {
                        echo var_export($type[$x] === $type[$y], TRUE);
                    }
                    echo "</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>

        <table>
        <caption>Loose comparisons with ==</caption>
        <?php
            for ($x = 0; $x <= 12; $x++) {
                echo "<tr>";
                for ($y = 0; $y <= 12; $y++){

                    $type = array (1 => true, false, 1, 0, -1, "1", "0", "-1", null, array(), "php", "");

                    echo "<td>";

                    if ($x ===0 && $y === 0){
                        echo "";
                    }
                    else if ($x === 0){
                        echo var_export($type[$y], TRUE);
                    }
                    else if ($y === 0){
                        echo var_export($type[$x], TRUE);
                    }
                    else if($type[$x] == $type[$y]){
                        echo "true";
                    }
                    else{
                        echo "false";
                    }
                    echo "</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>