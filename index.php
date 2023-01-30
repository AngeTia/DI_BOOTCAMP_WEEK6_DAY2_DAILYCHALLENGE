<!DOCTYPE html>
<html> 
  <head> 
    <title>DailyChallenge</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body> 
    <table  width="400px"  height="250px" cellspacing="0px" cellpadding="0px"  border ="3px">
      <?php
        // initialiser le nombre de ligne et l'incrementer  et affiche aussi le nombre de ligne avec tr
        for($ligne=1;$ligne<=8;$ligne++)
        { 
          echo "<tr>";
          // initialiser le nombre de colonne et l'incrementer 
          for($col=1;$col<=8;$col++)
          {
            $total=$ligne+$col;
            //$total%2==0 permet de diviser les cases en deux deux en fonction des couleur
            if($total%2==0)
            {
              // cellule en couleur blanc definir avec <td>
              echo "<td height=30px width=30px bgcolor=white></td>";
            }
            else
            {
              // cellule en couleur noir definir avec <td>
              echo "<td height=30px width=30px bgcolor=black></td>";
            }
          }
          echo "</tr>";
        }
      ?>
    </table>
  </body>
</html>
