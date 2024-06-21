<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <li>s'inscrire</li>
        <li>liste de voyage</li>
        <li name="deco">Déconnecter</li>
        <?php echo $_SESSION['info']?>
        <?php if (isset($_GET['deco'])){
            session_destroy();
        }?>
    </nav>
</body>
</html>