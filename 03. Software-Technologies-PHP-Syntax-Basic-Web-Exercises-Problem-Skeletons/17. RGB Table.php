<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
	<style>
		table * {
			border: 1px solid black;
			width: 50px;
			height: 50px;
		}
    </style>
</head>
<body>
<table>
    <tr>
        <td>
            Red
        </td>
        <td>
            Green
        </td>
        <td>
            Blue
        </td>
    </tr>
    <?php
    for ($color=51;$color<=255;$color+=51){
        $red="rgb($color, 0, 0)";
        $green="rgb(0, $color, 0)";
        $blue="rgb(0, 0, $color)";
        ?>
        <tr>
        <td style="background-color: <?=$red?>">
        </td>
        <td style="background-color: <?=$green?>">
        </td>
        <td style="background-color: <?=$blue?>">
        </td>
    </tr><?php
    }
    ?>
</table>
</body>
</html>