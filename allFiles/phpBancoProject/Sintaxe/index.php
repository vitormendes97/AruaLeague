<!DOCYTYPE html>

<head>
    
    <meta charset="UTF-8">
    <title>Index-PHP</title>
</head>
<body>
    
    <?php
    require '../JavaBean/Cargo.php';
    
      $designer = new Cargo("Designer",1);
      $devJava = new Cargo ("Desenvolvedor Java",2);
      $devPhp = new Cargo ("Desenvolvedor php",3);
      
      $cargos = array($designer,$devJava,$devPhp);
    echo "<h1> Exemplo de for indexado </h1>";
     for ($index = 0;
     $index < count($cargos);
     $index++) {
         
         
         echo $cargos[$index]->getCodigo() ,"-", $cargos[$index]->getNome() ."<br>";
         
     }
       echo "<br>";
     echo '==================================================='."<br>";
     echo "<br>";
     echo "<h1> Exemplo de Foreach </h1>";
    foreach ($cargos as $key => $value) {
         
        echo $value->getCodigo(),"-",$value->getNome()."<br>";
       
     }
     
    ?>
    
</body>