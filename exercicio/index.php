<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $P1=3;
        $M1=1;
        $M2=1;
        $Proj1=0.5;
        $Proj2=0.5;
        $Proj3=0.5;
        $Proj4=0.5;
        $TrabF=1;
        $Proc=2;
        $PF=10;
        $MF;
       $MI = (P1 + M1 + M2 + Proj1 + Proj2 + Proj3 +Proj4 +TrabF + Proc)/100;
       
               if ($MI >= 7.5){
                   $MF=MI;
                   echo "Aprovado sem Prova Final,Parabéns!!! Boas férias"
               }
       else{
           $MF=MI+PF/100;
       }
        
       if ($MF >= 5.0){
      echo “Aprovado com Prova Final, Agora já pode descansar tranquilo.”
       }
       else {
           echo "Reprovado, Não foi dessa vez. Ano que vem tem mais TWII."
       }
       echo $MI;
       echo $MF;
       
       
        ?>
    </body>
</html>
