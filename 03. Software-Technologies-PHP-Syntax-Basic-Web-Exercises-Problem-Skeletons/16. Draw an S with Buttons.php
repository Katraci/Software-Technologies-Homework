<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body>
<?php
for ($i=1; $i<=9; $i++){
    for ($j=1; $j<=5; $j++){
        if($i==1||$i==9||$i==5){
            echo "<button style='background-color:blue'>1</button>";
        }
        if($i>1&&$i<5){
            if ($j==1){
                echo "<button style='background-color:blue'>1</button>";
            }else{
                echo "<button>0</button>";
            }
        }
        if($i>5&&$i<9){
            if ($j==5){
                echo "<button style='background-color:blue'>1</button>";
            }else{
                echo "<button>0</button>";
            }
        }
        if ($j==5){
            echo "<br>";
        }
    }

}
?>
</body>
</html>