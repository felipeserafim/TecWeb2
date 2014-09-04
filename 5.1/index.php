<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Exercicio 5.1</title>
    </head>
    <body>
        
       <?php
//criando os arrays da tabela
    $turmas[0]="02K01";
    $turmas[1]="02J01";
    $turmas[2]="02K01";
    
    $disciplina[0]="Tecnologi Web 2";
    $disciplina[1]="Linguagem de Programação 1";
    $disciplina[2]="Linguagem de Programação 1";
    
    $semanas [0] = "Segunda";
    $semanas [1] = "Terça";
    $semanas [2] = "Quarta";
  
    $profs [0] = "Charles";
    $profs [1] = "João"; 
    $profs [2] = "Charles"; 
   
// comecando a tabela
        echo "<table width='0' border='1'> 
                    <tr>
                        <td><b>Turma</td>   
                        <td><b>Disciplina</td> 
                        <td><b>Semana</td>
                        <td><b>Professor</td>
                     </tr>";
                //numero de linhas da tabela
        
                for($i = 0; $i<3; $i = $i + 1){ 
                 echo "
                        <tr> 
                            <td>$turmas[$i]</td>   
                            <td>$disciplina[$i]</td> 
                            <td>$semanas[$i]</td> 
                          <td>$profs[$i]</td> 
                      </tr> 
                   "; 
                } 
               echo "</table>";

?>

    </body>
</html>