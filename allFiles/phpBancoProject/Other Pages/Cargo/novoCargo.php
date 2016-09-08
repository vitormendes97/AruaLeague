<?php
 $action = $_POST["acao"];
 $entity = $_POST["one"];

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../../design.css">
    </head>
    <body>
        <h1>Criar novo Cargo</h1>
        <section>
            <form action="../../Controller/FrontController/Controller.php" method="POST">
                <input type="text" name="cargo">
                <input type="submit" id="createbutton" value="Criar Cargo">
                <input type="hidden" value="<?=$entity ?>">
                <input type="hidden" value="<?= $action ?>">
                
            </form>
            
            
        </section>
        
        
    </body>
</html>
