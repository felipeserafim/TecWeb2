<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
      
       
 <?php
      
            echo "<table width='0' border='1'> 
                <tr>
                    <td><b>ID</td>   
                    <td><b>NOME</td> 
                    <td><b>DESC</td>
                </tr>";
                    
            for($i = 1; $i<7; $i = $i + 1){ 
                if ($i % 2 == 0){
                    echo "<tr > 
                            <td bgcolor=grey><b>id</td>   
                            <td bgcolor=grey><b>nome</td> 
                            <td bgcolor=grey><b>desc</td> 
                        </tr>";
                }            
                else {    
                    echo "<tr> 
                        <td>id</td>   
                        <td>nome</td> 
                        <td>desc</td> 
                    </tr>";
                }
                
              
                } 
            echo "</table>";
            
            
            
            echo '
        <h3>Calculando números primos</h3>
        <p>Insira o número máximo para o cálculo: <br>
            (Máximo pode ser até 10 000)</p>
        <form method="POST" action="">
            <p><input type="text" name="valor" /></p>
            <p><input type="submit" value="Calcular" name="calcular" /></p>
        </form>';

        if (@$_POST['calcular']) {
            if (@$_POST['valor'] >= '10000') {
                echo "<script type='text/javascript'>
                alert('Insira um valor menor que 10 000 (dez mil)')</script> ";
            } else {
                for ($n = 2; $n <= @$_POST['valor']; $n++) {
                    $primo = true;
                    for ($x = 2; $x < $n; $x++) {
                        if ($n % $x == 0) {
                            $primo = false;
                            break;
                        }
                    }
                    if ($primo) {
                        echo ' ' . $n;
                    }
                }
            }
        }
        
        $x = 1;
        $y = 2;
       $z = $x + $y;
        
while($z < 10000) {

     
    echo($z."<br />"); 
    $x = $y;
    $y = $z;
}
        ?>
 
        
    </body>
</html>