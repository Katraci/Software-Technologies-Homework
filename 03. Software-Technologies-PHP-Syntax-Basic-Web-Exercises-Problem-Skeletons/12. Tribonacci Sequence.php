<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
    <form>
        N: <input type="text" name="num" />
        <input type="submit" />
    </form>
    <?php
    if(isset($_GET['num'])){
        $num=intval($_GET['num']);
        $f1=1;
        $f2=1;
        $f3=2;
        for ($i=1;$i<=$num;$i++){
            if($i==1){
                echo "$f1 ";
            }
            if($i==2){
                echo "$f2 ";
            }
            if($i==3){
                echo "$f3 ";
            }
            if($i>3){
                $f=$f1+$f2+$f3;
                echo "$f ";
                $f1=$f2;
                $f2=$f3;
                $f3=$f;
            }
        }
    }
    ?>
</body>
</html>