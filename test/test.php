<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require './Pdo.php';
require './methode.php';

function one()
{
    if(isset($_GET["cherche"]))
    return true;

    return false;
   
}


try {
    $pd = new MaClassePDO('root', '', 'mysql:host=localhost;dbname=chan2023');
    $res = $pd->dbh->query("SELECT * FROM teams");
    $resultal=$res->fetchALL(PDO::FETCH_ASSOC);
    $mt=new CHERCH();
    ?>
    <form action="" method="GET" >
    <input type="text" name='cherche'   value=<?php echo one() ? $_GET["cherche"] :""   ?> >
    <button>
        Click
    </button>
    <?php
    if(isset($_GET["cherche"]))
    {
        echo "<h1>" .$mt->groupe($_GET["cherche"], $resultal) . "</h1>";
    }
    
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
</body>
</html>

