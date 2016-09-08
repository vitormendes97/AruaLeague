<!DOCTYPE html>
<html>
    <head>
        <title>Index</title>
        <meta charset="UTF-8">
    </head>
    <body>
        
        <?php
        
       
     include("/JavaBean/Departamento.php");
     include("/JavaBean/Cargo.php");
     include("/JavaBean/Funcionario.php");   
 
  $teste = new javabean\Cargo();
  $teste->setNome("CGI");
  $teste->setCodigo(1);
  
  $departamento = new javabean\Departamento();
  $departamento->setCodigo(1);
  $departamento->setNome("Marketing");
  
  $vitor = new javabean\Funcionario();
  
  $vitor->setCargo($teste);
  $vitor->setDepartamento($departamento);
  $vitor->setCodigo(1);
  $vitor->setNome("Vitor Mendes");
  
  $vitor->toString();
  
  
  
     
        ?>
        
    </body>
</html>
