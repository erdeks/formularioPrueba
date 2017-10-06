<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/tablas.css" />
  <title>Formulario </title>
</head>
<body>
  <?php
    $filas=$_POST["filas"];
    $columns=$_POST["columns"];

   ?>
   <table>
     <?php
        echo "<tr>";
        for($x=0; $x<=$columns; $x++){
          echo "<td class='cabecera'>".($x)."</td>";
        }
        for($x=1; $x<=$filas; $x++){
          echo "<tr>";
          for($y=0; $y<=$columns; $y++){

            if($x==0 && $y == 0){
              echo "<td>".$x."</td>";
            }elseif($y==0){
              echo "<td class='cabecera'>".(chr($x+64))."</td>";
            }else{
              if(($x+$y)%2==1){
                echo "<td class='par'></td>";
              }else{
                echo "<td></td>";
              }
            }

          }
        }
     ?>

   </table>
</body>
</html>
