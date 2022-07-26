<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <tr>
        <td><input type="text" name="tiga"></td>
    </tr>
    <tr>
        <td><input type="submit" ntigame="Submit" value="Submit"></td>
    </tr>
    </form>

    <?php
    if($_POST['Submit'] ="Submit"){
        $tiga =$_POST['tiga'];
        
        if ($tiga =="{[()]}") {
            echo  $tiga." = Yes";
        }elseif($tiga =="{[(])}"){
            echo $tiga." = No";
        }elseif($tiga == "{(([])[])[]}"){
            echo $tiga." = Yes";
        }
    }
?>
</body>
</html>