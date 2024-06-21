<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="user">user:</label>
        <input type="text" name="user">
        <label for="ps">password :</label>
        <input type="password" name="ps">
    </form>
    <?
    require_once 'conxDB.php';
    session_start();
    $_SESSION['info']=$_GET['user'];
    $_SESSION['passw']=$_GET['ps'];
    $sql = $conn ->query('SELECT * from Employe where user = $_SESSION['info'] AND passw= $_SESSION['ps']');
    if ($sql->num_rows>0){
        header ('location :');
    }else{
        header('location :connEmp.php');
    }

    ?>
</body>
</html>