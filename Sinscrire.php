<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once 'conxDB.php'?>
    <form action="" method="get">

    <label for="villed">ville départ:</label>
    <select name="villed" >
        <?php
        $result = $conn->query("SELECT villeD FROM Descroption";);
        $row = $result->fetch_assoc();
        
        while($row = $result->fetch_assoc()) {
            echo '<option value="' . $row["codeDesc"] . '">' . $row["villeD"] . '</option>';
        }
        
        ?>
    </select>
    <select name="villea" >
        <?php
        $result = $conn->query("SELECT villeA FROM Descroption";);
        $row = $result->fetch_assoc();
        
        while($row = $result->fetch_assoc()) {
            echo '<option value="' . $row["codeDesc"] . '">' . $row["villeA"] . '</option>';
        }
        
        ?>
    </select>
    <label for="datev">date de voyage:</label>
    <input type="date" name="datev" >
    <label for="nbrp">nombre de personne :</label>
    <input type="number" name="nbrp">
    <button type="submit" name='enregistrer'>ENREGITER</button>
    </form>
    <?php
    $_GET['datev']=$datev;
    $_GET['nbrp']=$nbrp;

    $_GET['villea']=$va;
    $_GET['villed']=$vd;
    if (isset($_GET['enregister'])){
        $res =$conn->prepare("INSERT INTO DescriptionVoyage values(null,null,?,?)");
        $var = $res->execute($va , $vd);

        $res2 =$conn->prepare("INSERT INTO Inscription values(null,null,null,?,?)");
        $var2 = $res2->execute($datev , $nbrp);

    }?>


</body>
</html>
