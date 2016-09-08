<?php
include_once 'C:/xampp/htdocs/Cartola/Pages/menu.php';
include_once 'C:/xampp/htdocs/Cartola/DAO/RodadaDAO.php';
$dao = new RodadaDAO();


?>

<!DOCYTYPE html>
<html>
    <head>
        <link href="../css/rodada.css" rel="stylesheet" type="text/css"/>
        <title></title>
        <meta charset="UTF-8">
        <script src="../js/rodada.js" type="text/javascript"></script>
    </head>
    <body>
        <h1>Selecione a rodada</h1>
        <form action="../Controller/controller.php" method="POST"> 
            <div class="center-on-page">

               
                <div class="select">



                    <select name="slct" id="slct">
                        <option>Choose an option</option>
                        <?php
                        foreach ($dao->getRodadas() as $rodada) {
                            echo "<option value=$rodada>$rodada </option>";
                        }
                        ?>

                    </select>



                </div>

            </div>
            <div id="rodadabuttom">
                <input type="hidden" value="rodada.pontuacao" name="command">
            <input class="buttom"type="submit" value="GO!">
            </div>
        </form>



    </body>
</html>
